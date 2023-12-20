<?php

date_default_timezone_set('Asia/Kolkata');
$date = date('d/m/y');
////////////////////////////////////////////////////////////////

$id= $_GET['id'];
$who = isset($_POST['who']) ? $_POST['who'] :"test";
// $conn = mysqli_connect("localhost",'root','','selecter');
$conn = mysqli_connect("sql202.infinityfree.com",'if0_35034863','egPoAy7wynZ','if0_35034863_selecter');

$sql = "UPDATE `data` SET `removed`=0 WHERE id=$id";
if (mysqli_query($conn,$sql)){
    echo "<script> location.replace('./removedlist.php'); </script>";
}
?>