<?php
session_start();
include('Member.class.php');

$auth = new Member();

if ($_POST["login"] == 0)
{
    $auth->sign_up($conn1, "clients", $_POST["name"], $_POST["email"], $_POST["password"], $_POST["phone"], 
    "company_name", $_POST["company_name"],$_POST["user_type"], "client_email","email"
);
}else if ($_POST["login"] == 1) 
{
    $auth->login($conn1,'clients',$_POST['email'], $_POST['password'], "client_email", "email");
    setcookie("client_email", $seller_email, time()+ (60*60*24*30*12));
}