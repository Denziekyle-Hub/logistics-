<?php 
session_start();
$link = mysqli_connect("localhost", "root", "", "ekhaya-logistics-313731c212");
function db() {
   
    // $link = mysqli_connect("shareddb-r.hosting.stackcp.net","transactions-313233bef0","R.2DS;cW5D5[" ,"transactions-313233bef0");
    $link = mysqli_connect("localhost", "root", "", "ekhaya-logistics-313731c212");
    return $link;
  }

  
function escape($variable)
{  
    $link = db();
    return mysqli_real_escape_string($link, $variable);
}
//Handle file uploads
function upload($name, $type,$file)
{
    if (empty($file))
    {
        $path = "";
    }else
    {
            $file_name  = strtolower(basename($file));
            $file_ext = substr($file_name, strrpos($file_name, '.'));
            $file_name_new = str_replace(' ','-',str_replace('\'','',$name)) .'-'.$type.$file_ext;

            $path = 'img/'.$file_name_new;
            /* check if the file uploaded successfully */
            move_uploaded_file($file, $path);
    }
return $path;
}
function insert( $table, $columns,$values)
{
    $link = db();
    $insertTo = implode(",", $columns);
    $valuesTo = "'".implode("','", $values)."'";
    $sql = "INSERT INTO {$table} ({$insertTo}) VALUES({$valuesTo})";
    
    $query = mysqli_query($link, $sql);
   if ($query)
   {
        $id = mysqli_insert_id($link);
        return $id;
   }else 
   {
   return mysqli_error($link);
   }
}

