<?php
include('functions.inc.php');

$table ="runners";

$insertInto = ['name','phone','address','student','bonafide','fro','passport_photo','date','paid','payee'];
$name = strtolower(escape($_POST['name']));
$values = [escape($_POST['name']), escape($_POST['phone']), escape($_POST['address']), escape($_POST['student']),upload($name,"bonafide",$_FILES['bonafide']['name']),upload($name,"fro",$_FILES['fro']['name']),upload($name,"passport_photo",$_FILES['passport_photo']['name']), date('Y-m-d'), escape($_POST['paid']), escape($_POST['payee'])];

if (insert($table,$insertInto, $values))
{
?>
<script>
    alert("Thank!!,You were sucessfully registered. We will contact you soon.");
    window.location = "https://ekhayalogistics.com";
</script>
<?php
}else 
{
    echo "Problem in insertion";
    die();
}
