<?php
require("functions.inc.php");

if(isset($_POST["country"]))
{
    $country = escape($_POST["country"]);
    $weight = intval(escape($_POST["weight"]));

    $rates = mysqli_query($link, "SELECT * FROM fedex_rate_card WHERE weight='$weight'");
    $rate = mysqli_fetch_assoc($rates);
    $base  = $rate[$country];
    $surchages =  mysqli_query($link,"SELECT * FROM fedex_surchage WHERE id=1");

    $surchage = mysqli_fetch_assoc($surchages);

    $base+= $base * $surchage["charge"];
    $base+=  $surchage["freight_charge"] *  $weight;
    $base += $base * $surchage["fuel_surchage"];
    $base += $base * $surchage["gst"];



    echo $base;

}
?>