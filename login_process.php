<?php
session_start();
include('connection.php');
$error ="";
$email = mysqli_real_escape_string($link,$_POST['email']);
$pswd = mysqli_real_escape_string($link,$_POST['password']);
$form = mysqli_real_escape_string($link,$_POST['signUP']);

if ($form ==1){

$name = mysqli_real_escape_string($link,$_POST['name']);
$phone = mysqli_real_escape_string($link,$_POST['phone']);
$country= mysqli_real_escape_string($link,$_POST['country']);
$confirm_pswd = mysqli_real_escape_string($link,$_POST['confirm_password']);
$name_error ='';
$email_error ='';
$pswd_error ='';
$phone_error ='';
$country_error = '';
$confirm_pswd_error = '';
if ($name==''){
$error .= "name";
$name_error = "Please enter Your Name";
}
if ($email =='')
{
$error.= "email";
$email_error ="Email Address is required";
}
if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
$error.="invalid_email";
$email_error .=" Please enter a valid email address";
}
if ($phone ==''){
$error .= "phone";
$phone_error = "Please enter Your Phone Number";
}
if ($country ==''){
$error .= "country";
$country_error = "Please enter Your Country";
}
if ($pswd ==''){
$error.="passsword";
$pswd_error =" Password field cannot be empty";
}

if ($confirm_pswd != $pswd){
$error .="Confirm_password";
$confirm_pswd_error = "Confirm password should match with password";
}
if ($email_error =='')
{
$check = "SELECT * FROM users1 WHERE email='$email'";
$check_run = mysqli_query($link,$check);

if (mysqli_num_rows($check_run) >0)
{
$error .="taken_email";
$email_error ="This Email Address is already taken, If its yours please login";
}
}
if ($error !='') {
$data = array(
'error' =>true,
'email_error' =>$email_error,
'pswd_error' => $pswd_error,
'confirm_pswd_error' => $confirm_pswd_error,
'name_error' => $name_error,
'phone_error' => $phone_error,
'country_error' => $country_error

);
echo json_encode($data);
die();
} else {
$password = password_hash($pswd,PASSWORD_DEFAULT);
$sql_insert ="INSERT INTO users1 (name,email,phone,user_password,country)
VALUES('$name','$email','$phone','$password','$country')";
$sql_run = mysqli_query($link,$sql_insert);
if ($sql_run) {
$id = mysqli_insert_id($link);
$retrieve = "SELECT * FROM users1 WHERE user_id = '$id'";
$retrieve_run = mysqli_query($link,$retrieve);
if ($retrieve_run){
while($row = mysqli_fetch_assoc($retrieve_run)) {
$_SESSION['user_id'] = $row['user_id'];
$_SESSION['email'] = $row['email'];
setcookie('email', $row['email'], time() + (86400 * 180));
}
$data = array(
'error' =>false,
'success' => 'You have been successfully registered'
);
echo json_encode($data);
}
}
}
} else {
$remember = "1";

$email_error ='';
$pswd_error ='';
if ($email =='')
{
$error.= "email";
$email_error ="Email Address is required";
}
if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
$error.="invalid_email";
$email_error .=" Please enter a valid email address";
}
if ($pswd ==''){
$error.="passsword";
$pswd_error =" Password field cannot be empty";
}
if ($pswd_error =='' && $email_error==''){
$getEmail = "SELECT * FROM users1 WHERE email ='$email'";
$get_run = mysqli_query($link,$getEmail);
if (mysqli_num_rows($get_run)==0) {
$error .="email not found";
$email_error .="The email address you entered was not found,Please check the email";
} else {
while ($rw = mysqli_fetch_assoc($get_run)) {
$db_pass1 = $rw['user_password'];
$user_id = $rw['user_id'];
}
if (!password_verify($pswd,$db_pass1)){
$error .="Wrong password";
$pswd_error .="The password you entered is incorrect";
} else {
$_SESSION['email'] = $email;
$_SESSION['user_id'] = $user_id;
if ($remember =='1') {
setcookie('email', $email, time() + (86400 * 180));
}
}
}
}
if ($error !='')
{
$data = array(
'error' => true,
'email_error' => $email_error,
'pswd_error' => $pswd_error
);
echo json_encode($data);
} else {
$data= array(
'error' =>false,
'success' => 'You are sucessfully logged In'
);
echo json_encode($data);
}
}