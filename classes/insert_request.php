<?php
session_start();
require_once("Db.class.php");
$db = new Db();

if (isset($_POST["request"]))
{
    $file_names = array();
    for($i = 0; $i < count($_FILES["files"]["name"]); $i++)
    {
        $curr_name = $db->uploads("request_upload", "files", $i);
        array_push($file_names,$Protocol.$_SERVER['HTTP_HOST'] . substr($_SERVER['REQUEST_URI'], 0, strrpos($_SERVER['REQUEST_URI'], "/"))."/".$curr_name);
    }

    $paths = implode(",",$file_names);
    $request_no = $db->get_tracking_id($conn1, "quotation_request", "request_no");
    $track_number = $db->generate_track($request_no);
    $date_due = date("Y-m-d", strtotime($_POST["date"]."+5 days"));
    $db->insert($conn1, "quotation_requests", ["name","description",
    "date_requested",
    "date_due","request_no",
    "track_number",
    "status",
    "files",
    "phone","currency"], [$_POST["name"], $_POST["add_info"], $_POST["date"],
    $date_due,
     $request_no, $track_number, "pending", $paths, 
     $_POST["phone"], $_POST["currency"]]);
     
     $request_id = $conn1->insert_id;
     
     if (isset($_SESSION["items"]))
     {
         $items = count($_SESSION["items"]);
         for ($i = 0; $i < $items; $i++)
         {
             $db->insert($conn1, "request_items", ["name", "unit","quantity","request_id"], [$_SESSION["items"][$i]["description"], 
             $_SESSION["items"][$i]["units"], $_SESSION["items"][$i]["quantity"],
             $request_id]);
         }
        unset($_SESSION["items"]);
     }
     header("Location:../admin/pages/create-request.php?request_added=1");
}else 
{
    die("Access Denied!");
}