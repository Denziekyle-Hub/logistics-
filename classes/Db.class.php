<?php


$conn1 = new mysqli("localhost", "root", "", "ekhaya-logistics-313731c212");

$base = "http://localhost/admin/admin/";
if ($_SERVER["HTTP_HOST"] =="localhost")
{
    $Protocol = "http://";
}else 
{
    $Protocol = "https://";
}

date_default_timezone_set("UTC");
class Db
{
    private $host = "localhost";
    private $user = "root";
    private $pwd = "";
    private $db = "ekhaya-logistics-313731c212";
    protected function connect()
    {
        $conn = new mysqli($this->host, $this->user, $this->pwd, $this->db);
        return $conn;
    }
    public function escape($var)
    {
        $conn1 = new mysqli("localhost", "root", "", "ekhaya-logistics-313731c212");
        return $conn1->real_escape_string($var);
    }
    public function encript($password)
    {
        return password_hash($this->escape($password), PASSWORD_DEFAULT);
    }
    public function upload($folder, $file)
    {
        //Create the directory  if it doesent exists.
        if (!is_dir($folder)) {
            mkdir($folder);
        }
        if (empty($_FILES[$file]['name'])) {
            $path = "";
        } else {
            if (file_exists($folder . '/' . $_FILES[$file]['name'])) {
                $file2 = $_FILES[$file]['name'];
                $ext = pathinfo($file2, PATHINFO_EXTENSION);
                $name = pathinfo($file2, PATHINFO_FILENAME);
                $prefix =  substr(md5(time(), false), 0, 5);
                $file_name = $name . '-' . $prefix . '.' . $ext;
                $path = $folder . '/' . $file_name;
            } else {
                $path = $folder . '/' . $_FILES[$file]['name'];
            }
            move_uploaded_file($_FILES[$file]['tmp_name'], $path);
            return $path;
        }
    }
    //Custom uploads to be edited

    public function uploads($folder, $file, $i)
    {
        //Create the directory  if it doesent exists.
        if (!is_dir($folder)) {
            mkdir($folder);
        }
        if (empty($_FILES[$file]['name'][$i])) {
            $path = "";
        } else {
            if (file_exists($folder . '/' . $_FILES[$file]['name'][$i])) {
                $file2 = $_FILES[$file]['name'][$i];
                $ext = pathinfo($file2, PATHINFO_EXTENSION);
                $name = pathinfo($file2, PATHINFO_FILENAME);
                $prefix =  substr(md5(time(), false), 0, 5);
                $file_name = $name . '-' . $prefix . '.' . $ext;
                $path = $folder . '/' . $file_name;
            } else {
                $path = $folder . '/' . $_FILES[$file]['name'][$i];
            }
            move_uploaded_file($_FILES[$file]['tmp_name'][$i], $path);
            return $path;
        }
    }
    public function select_all($conn1, $table)
    {
        $result = $conn1->query("SELECT * FROM $table");

        return $result;
    }
    public function select_where($conn, $table, $column, $value)
    {
         

        $value = $this->escape($value);
        $result = $conn->query("SELECT * FROM $table WHERE $column='$value'");
        return $result;

    }

    public function insert($conn, $table, $columns, $values)
    {
        $clean_values = array();
        //Escape special characters.
        foreach ($values as $value) {
            $value = $this->escape($value);
            array_push($clean_values, $value);
        }
        // Convert array to string for columns and the values.
        $columns = implode(",", $columns);
        $values = implode("','", $clean_values);
        //Insert into the database
        $query = $conn->query("INSERT INTO $table($columns) VALUES('$values')");
       
        if ($query) {
            return true;
        } else {
            return false;
        }
    }
    public function update($conn, $table, $columns, $values, $conditions)
    {
        $clean_values = array();
        //Escape special characters.
        foreach ($values as $value) {
            $value = $this->escape($value);
            array_push($clean_values, $value);
        }
        // Convert array to string for columns and the values.
        $columns = implode(",", $columns);
        $values = implode("','", $clean_values);
        $sql = "UPDATE $table SET";
    }
    public function check_availability($table, $column, $value)
    {
        /**
         * This function checks if the this particular entry is already available in the database.
         * Returns true if the value is in the database.
         */
        $email = $this->escape($value);

        $query = $this->conn1->query("SELECT * FROM $table WHERE $column='$email'");

        if ($query->num_rows > 0) {
            return true;
        } else {
            return false;
        }
    }
    public function get_tracking_id($conn1, $table, $column)
    {
        $query = $conn1->query("SELECT $column FROM $table ORDER BY id DESC LIMIT 1");
        if ($query->num_rows == 0) {
            $quotation_request = 1;
        } else {
            while ($row = $query->fetch_assoc()) {
                $quotation_request = $row[$column] + 1;
            }
        }
        return $quotation_request;
    }
    public function generate_track($increment)
    {
        $prefix = "EKLQ030000";
        if ($increment < 10 )
        {
            $prefix = "EKLQ030000";
        }
        else if ($increment >= 10)
        {
            $prefix = "EKLQ03000";
        }else if($increment >= 100)
        {
            $prefix = "EKLQ0300";
        }else if ($increment >= 1000)
        {
            $prefix = "EKLQ030";
        }else if ($increment >= 10000)
        {
            $prefix = "EKLQ03";
        }else if ($increment >= 100000)
        {
            $prefix = "EKLQ04";
        }else 
        {
            $prefix = "EKLQ05";
        }
        $tracking_id = $prefix.$increment;
        return $tracking_id;
    }

    public function get_totals($query, $as)
    {
        $conn = $this->connect();
        $sql = $conn->query($query);
        $row = $sql->fetch_assoc();
        return $row[$as];
    }
    public function get_current_file_url($Protocol='http://') {
        return str_replace('\\', "/",$Protocol.$_SERVER['HTTP_HOST'].str_replace($_SERVER['DOCUMENT_ROOT'], '', realpath(__DIR__))); 
     }
}
//Additional db connectivity
