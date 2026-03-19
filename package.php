<?php

include('connection.php');
 include('admin/phpqrcode/qrlib.php');
$receiver_name = mysqli_real_escape_string($link, $_POST['receiver_name']);
$sender_name = mysqli_real_escape_string($link, $_POST['sender_name']);
$sender_email = mysqli_real_escape_string($link, $_POST['sender_email']);
$sender_phone = mysqli_real_escape_string($link, $_POST['sender_phone']);
$receiver_email = mysqli_real_escape_string($link, $_POST['receiver_name']);
$receiver_phone = mysqli_real_escape_string($link, $_POST['receiver_phone']);
$shipped_to = mysqli_real_escape_string($link, $_POST['receiver_address']);
$shipped_from= mysqli_real_escape_string($link, $_POST['sender_address']);

$description = mysqli_real_escape_string($link, $_POST['description']);

$date_requested = date('Y-m-d H:i:s');
$weight = mysqli_real_escape_string($link, $_POST['weight']);
$quantity = mysqli_real_escape_string($link, $_POST['quantity']);
$track_id = "EKL".str_pad(mt_rand(0,999999),6, "0", STR_PAD_LEFT);
$processed = 'active';
$shipped = '';
$sql = "INSERT INTO packages(sender_name,description,sender_email,sender_phone,receiver_name,receiver_email,receiver_phone,shipped_to,shipped_from,weight1,quantity,date_requested, tracking_id,processed,shipped) VALUES('$sender_name','$description','$sender_email','$sender_phone','$receiver_name','$receiver_email','$receiver_phone','$shipped_to','$shipped_from','$weight','$quantity','$date_requested','$track_id','$processed','$shipped')";
$res = mysqli_query($link, $sql);
if ($res)
{
    $id = mysqli_insert_id($link);
    $qry = "SELECT * FROM packages WHERE package_id ='$id' LIMIT 1";
    $rslt = mysqli_query($link,$qry);
    if ($rslt)
    {
        while($row = mysqli_fetch_assoc($rslt))
      {
        $tracking_id = $row['tracking_id'];
      }
      $to = $sender_email;
     
      $subject ="Your Package Request Have been received waiting to see you, In our offices";
      $Message ="Hie Thank You for Your Request"."\n\n\n\n\n". "Here is Your tracking id ".$tracking_id;
      $headers = "From: no-reply@limitlesslogistics.com" . "\r\n" .
"CC: kakumuradenzel@gmail.com";

mail($to,$subject,$Message,$headers);

$text = "https://admin.limitlesslogistics.com/view.php?ssh=xhagtDb_ushgsggshjahjhakjakjETTPOMNVCEWTHAHGAMnumassfbnahghhg&id=".$id."&track=".$tracking_id; 

// // $path variable store the location where to 
// // store image and $file creates directory name 
// // of the QR code file by using 'uniqid' 
// // uniqid creates unique id based on microtime 
$path = 'admin/images/'; 
$file = $path.$tracking_id.".png"; 

// $ecc stores error correction capability('L') 
$ecc = 'L'; 
$pixel_Size = 10; 
$frame_Size = 10; 

// Generates QR Code and Stores it in directory given 
QRcode::png($text, $file, $ecc, $pixel_Size, $frame_Size);
$file = 'images/'.$tracking_id.'.png';
$sql1 = "UPDATE packages SET qrcode='$file' WHERE package_id='$id'";
$res1= mysqli_query($link,$sql1);

}

    
}  else{
    echo mysqli_error($link);
}
//echo json_encode($track_id);


echo json_encode($tracking_id);
