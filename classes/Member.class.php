<?php
include("Db.class.php");
class Member extends Db
{
    public function login($conn,$table, $user, $password,$session_value,$session_column)
    {
        $message = " There was an errror from our side, please try again later";
        $email = $this->escape(trim($user));
        if ($email == "")
        {
            $message = "The email or username field is required";
        }
        else if ($password == "")
        {
            $message =  "Password is required";
        }else
        {
            $result = $conn->query("SELECT * FROM $table WHERE email='$email'");
            if ($result->num_rows < 1 )
            {
                $message = "This email address does not exist, please try again or signup!.";

            }else 
            {
                $row = mysqli_fetch_assoc($result);
                if (password_verify($this->escape($password), $row['password']))
                {
                    while ($row = $result->fetch_assoc())
                   {
                    $_SESSION[$session_value] = $row[$session_column];
                    if ($session_value == "client_email")
                    {
                        $_SESSION["client_id"] = $row["id"];
                    }else{
                        $_SESSION["supplier_id"] = $row["id"];
                    }
                   }
                   
                    $message = "OK";

                }else 
                {
                    $message = "Your password is incorect check your password or email address and try again.";
                }
            }
        }
        
        echo $message;
    }

    public function sign_up($conn,$table,$name, $email, $password,$phone, $additional_column, $additional_value,$type, $session_value, $session_column)
    {
        $message = "There was a technical fault from our side. Please try again later";
        $valid = false;
        if (trim($email) == "")
        {
            $message = "Email is required";
        }
        else if ($password == "" OR strlen($password)  < 6)
        {
            $message = " Password should be atleast 6 characters long";
        }else 
        {
            //Escape special characters
            $email = $this->escape(trim($email));
            $name = $this->escape($name);
            $password = password_hash($this->escape($password), PASSWORD_DEFAULT);

            //check if email already exists.
            $stmt = $conn->query("SELECT * FROM $table WHERE email = '$email'");
    
            if ($stmt->num_rows > 0)
            {
                $message ="This email address already exists please try to login or check your email";
            }else
            {
                $query = mysqli_query($conn,"INSERT INTO $table (name, email, `password`,phone, $additional_column, type) VALUES('$name', '$email', '$password','$phone','$additional_value','$type')" );
                $id = mysqli_insert_id($conn);
                if ($query)
                {
                   
                    $query = mysqli_query($conn,"SELECT * FROM $table WHERE id ='$id'");
                   while ($row = mysqli_fetch_assoc($query))
                   {
                    $_SESSION[$session_value] = $row[$session_column];
                    if ($session_value == "client_email")
                    {
                        $_SESSION["client_id"] = $id;
                    }else{
                        $_SESSION["supplier_id"] = $id;
                    }
                   }
                   
                    $message = "You have been succesfully Registered! Thanks!";
                    $valid = true;
                }else 
                {
                    $valid = false;
                }
            }
        }
        
        echo  $message;
        return $valid;

    }
}
