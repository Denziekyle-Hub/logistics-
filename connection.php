<?php




// date_default_timezone_set("Asia/kolkata");
// $link = mysqli_connect("sdb-c.hosting.stackcp.net","Limitless-Energy-logistics-313731c212","ekhaya-logistics" ,"ekhaya-logistics-313731c212");


// if(mysqli_error($link)){
// die("Unable to connect to database");

//}
$host = "localhost";
$db = "LimitEnergyLogistics";
$user = "root";
$pwd = "";

$conn1 = mysqli_connect($host, $user, $pwd, $db);

$sql = 'INSERT INTO users(name, email, password) VALUES("John Doe", "mas@gmail.com", "PWd1413525shs")';
mysqli_query($conn1, $sql);