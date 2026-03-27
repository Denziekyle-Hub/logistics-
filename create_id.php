<?php
include('connection.php');
include('admin/phpqrcode/qrlib.php');
$to_unlinked = array();
if (!isset($_POST['num_of_ids']))
{
    header("Location:https://admin.ekhayalogistics.com");
}else
{
 $num = intval($_POST['num_of_ids']);
$folder_name = 'qrcodes-'.date('Y-m-d');
 if (!is_dir('admin/images'.$folder_name))
 {
     mkdir('admin/images/'.$folder_name);
 }
 if (file_exists($folder_name.'.zip'))
 {
     header("Location:https://admin.ekhayalogistics.com?folder_problem=1");
     die("We have encountered A technical problem please contact your developer.\n According to our records the developer contact is +918791543970");
     
 }
 for ($i = 0; $i < $num; $i++){
$track_id = "EKL".str_pad(mt_rand(0,999999),6, "0", STR_PAD_LEFT);
$date_requested = date('Y-m-d H:i:s');
$sql = mysqli_query($link,"INSERT INTO packages(tracking_id,date_requested,processed) VALUES('$track_id','$date_requested','active')");

    $id = mysqli_insert_id($link);
   $qry = "SELECT * FROM packages WHERE package_id ='$id' LIMIT 1";
    $rslt = mysqli_query($link,$qry);
        while($row = mysqli_fetch_assoc($rslt))
      {
        $tracking_id = $row['tracking_id'];
      }
    $text = "https://ekhayalogistics.com/admin/view.php?ssh=xhagtDb_ushgsggshjahjhakjakjETTPOMNVCEWTHAHGAMnumassfbnahghhg&id=".$id."&track=".$tracking_id; 
// // $path variable store the location where to 
// // store image and $file creates directory name 
// // of the QR code file by using 'uniqid' 
// // uniqid creates unique id based on microtime 
$path = 'admin/images/'.$folder_name."/"; 
$file = $path.$tracking_id.".png"; 
$usr_img = 'admin/images/'.$tracking_id.'.png';
// $ecc stores error correction capability('L') 
$ecc = 'L'; 
$pixel_Size = 10; 
$frame_Size = 10; 


// Generates QR Code and Stores it in directory given 
QRcode::png($text, $file, $ecc, $pixel_Size, $frame_Size);
//for customer viewing.
QRcode::png($text, $usr_img, $ecc, $pixel_Size, $frame_Size);
$file3 = imagecreatefrompng($file);
 $font = '/Roboto-Bold.ttf';
    $red = imagecolorallocate($file3, 0, 0, 0);
    // Add some shadow to the text
 imagettftext($file3, 16, 0, 50, 50, $red, $font, $tracking_id);
 unlink($file);
 imagepng($file3,$file);
 
 imagedestroy($file3);
$file = 'images/'.$tracking_id.'.png';
$sql1 = "UPDATE packages SET qrcode='$file' WHERE package_id='$id'";
$res1= mysqli_query($link,$sql1);
}

// Get real path for our folder
$rootPath = realpath('admin/images/'.$folder_name);

// Initialize archive object
$zip = new ZipArchive();
$zip->open($folder_name.'.zip', ZipArchive::CREATE | ZipArchive::OVERWRITE);

// Create recursive directory iterator
/** @var SplFileInfo[] $files */
$files = new RecursiveIteratorIterator(
    new RecursiveDirectoryIterator($rootPath),
    RecursiveIteratorIterator::LEAVES_ONLY
);

foreach ($files as $name => $file)
{
    // Skip directories (they would be added automatically)
    if (!$file->isDir())
    {
        // Get real and relative path for current file
        $filePath = $file->getRealPath();
        $relativePath = substr($filePath, strlen($rootPath) + 1);
        
        // Add current file to archive
        $zip->addFile($filePath, $relativePath);
        array_push($to_unlinked, $file);
    }
}

// Zip archive will be created only after closing object
$zip->close();
foreach ($to_unlinked as $file2)
{
    unlink($file2);
}
rmdir('admin/images/'.$folder_name);
$filename = $folder_name.'.zip';
$update = "UPDATE current_qr_link SET qr_link='$filename' WHERE id=1";
mysqli_query($link,$update);
header("Location:https://admin.ekhayalogistics.com?track_id_generated=1");

}