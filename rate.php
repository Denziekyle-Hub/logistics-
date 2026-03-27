<?php

include('connection.php');
date_default_timezone_set('UTC');
$from = mysqli_real_escape_string($link, $_POST['from']);
$to = mysqli_real_escape_string($link, $_POST['to']);
$weight =  mysqli_real_escape_string($link, $_POST['weight']);

$v_weight = ($_POST['length'] * $_POST['width'] * $_POST['height'])/6000;

$quantity= mysqli_real_escape_string($link, $_POST['quantity']);
$v_weight *= $quantity;
$send = "SELECT * FROM charges_send LIMIT 1";
$s_process = mysqli_query($link,$send);
if($s_process){
$s_row = mysqli_fetch_assoc($s_process);

$recieve = "SELECT * FROM charges_recieve LIMIT 1";
$r_process = mysqli_query($link,$recieve);
if($r_process){
$r_row = mysqli_fetch_assoc($r_process);

$s_zim_rate = $s_row['zim_rate'];
$s_commission = $s_row['commission'];
$s_indian_rate = $s_row["indian_rate"];

$r_zim_rate = $r_row['zim_rate'];
$r_commission = $r_row['commission'];
$r_indian_rate = $r_row["indian_rate"];
}
}

$weight *= $quantity;
if ($weight < $v_weight)
{
    $weight = $v_weight;
}
if (!isset($_POST['customs']))
{
 $unit = 14.5;
}else {
    $unit = 18;
}
 if ($weight == 1)
 {
 $calculated = $unit;
  $forUSA =  $unit;
 }else 
 {
     $unit -= 0.5;
 $calculated = $unit * $weight;
 $forUSA =  $unit * weight; 
 }

if(strpos(strtolower($from), "zimbabwe") !== false)
{
$rate = $s_zim_rate;
 $price = 'USD$ '.number_format($calculated,2);
}  else if (strpos(strtolower($from), "india") !== false)
{
   $rate = $s_indian_rate;
    $price ='USD$ '.number_format($calculated,2);
} else {
    $price = 'USD$ '.number_format($forUSA,2);
}
$days = 10;
 $date = strtotime("+".$days." days", strtotime(date('D, j M ')));
$data = array(
    "prize" => $price,
    "date1" => date('D, j M ',$date)
    );

echo json_encode($data);
