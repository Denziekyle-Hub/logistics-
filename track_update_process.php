<?php
require("classes/Db.class.php");

$db = new Db();

if(isset($_POST["update_tracking"]))
{
    $db->insert($conn1, "shipping_updates",["master_id", "date", 
    "city","country_code","status","remark","add_info"],
    [$_POST["master_id"], $_POST["date"], $_POST["city"],
    $_POST["country_code"],$_POST["status"], $_POST["remark"], 
    $_POST["add_info"]]);

    header("Location:track_update.php?updated=1");
}