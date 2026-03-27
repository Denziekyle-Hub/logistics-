<?php
session_start();
include('Member.class.php');

$auth = new Member();

if ($_POST['login']  == 1)
{
    $auth->login($conn1,'suppliers',$_POST['email'], $_POST['password'], "seller_email", "email");
    setcookie("seller_email", $seller_email, time()+ (60*60*24*30*12));
    //Supplier  sign up
}else if ($_POST['login'] == 0)
{
    $auth->sign_up($conn1, 'suppliers',$_POST['name'], $_POST['email'], $_POST['password'],$_POST["phone"],"company_name",$_POST["company_name"],$_POST["business_type"],"seller_email","email");
//Creating profile for suppliers 
}else if($_POST["login"] == 2)
{
    $pan = $auth->escape($_POST["company_pan"]);
    $gst = $auth->escape($_POST["company_gst"]);
    $cat_id = $auth->escape($_POST["category"]);
    $pin = $auth->escape($_POST["company_pin"]);
    $city = $auth->escape($_POST["company_city"]);
    $state = $auth->escape($_POST["company_state"]);
    $address = $auth->escape($_POST["company_address"]);
    $path = $auth->upload("uploads", "company_profile");
    if ($path !="")
    {
        $profile = $base."classes/".$path;

    }else 
    $profile = $path;
    
    $description = $auth->escape($_POST["company_description"]);
    if (!isset($_POST["company_website"]) || $_POST["company_website"] =="")
    {
        $website = "";
    }else{
        $website = $auth->escape($_POST["company_website"]);
    }
$seller_email = $_SESSION["seller_email"];
$status = "Pending";
$country = "India";
$joining_date = date("Y-m-d H:i:s");
$query = $conn1->query("UPDATE suppliers SET
pan_card='$pan', category_id='$cat_id', description='$description', profile='$profile', 
status='$status', address='$address', pin_code='$pin', city='$city', state='$state', country='$country', joining_date='$joining_date' WHERE email='$seller_email' LIMIT 1");
if ($query){
    setcookie("seller_email", $seller_email, time()+ (60*60*24*30*12));
    header("Location: ../supplier-dashboard/add_product.php");
}else 
{
    echo $conn1->connect_error();
}

}


else
{
    echo "<script>
    window.location = 'login.html'

    </script>
    ";
}
//  echo $auth->upload('images', 'file');
