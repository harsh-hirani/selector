<?php

date_default_timezone_set('Asia/Kolkata');
$date = date('d/m/y');
////////////////////////////////////////////////////////////////
$name = $_POST['name'];
$info = $_POST['info'];
$skils = $_POST['skils'];
$phone = $_POST['phone'];
$rate = $_POST['rate'];
$who = isset($_COOKIE['who']) ? $_COOKIE['who'] :"test";
$allsetsqlpermision = true;
print_r($_FILES);
if (count($_FILES)==0){
$url = '';
}else{

    $url = basename($_FILES['fileToUpload0']["name"]);
    $target_dir = "uploads/";

  $filerr = 'fileToUpload0';
  echo "<br />";
  $target_file = $target_dir . basename($_FILES[$filerr]["name"]);
  $uploadOk = 1;
  
  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

  // Check if file already exists
  if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
   
    $uploadOk = 0;
    $allsetsqlpermision = false;
  }
  // Check if $uploadOk is set to 0 by an error
  if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
  // if everything is ok, try to upload file
  } else {
        if (move_uploaded_file($_FILES[$filerr]["tmp_name"], $target_file)) {
            echo "The file ". htmlspecialchars( basename( $_FILES[$filerr]["name"])). " has been uploaded.";

        } else {
            echo "Sorry, there was an error uploading your file.";
            $allsetsqlpermision = false;
        }
  }
}
///////////////////////////

$sqlfire = "INSERT INTO `data`(`who`, `name`, `info`, `skils`, `phone`, `rate`, `date`, `url`, `removed`) VALUES('$who','$name','$info','$skils','$phone','$rate','$date','$url',0)";



// $conn = mysqli_connect("localhost",'root','','selecter');
$conn = mysqli_connect("sql202.infinityfree.com",'if0_35034863','egPoAy7wynZ','if0_35034863_selecter');

echo $sqlfire;
if($allsetsqlpermision){

        if (mysqli_query($conn,$sqlfire)){
            echo "SQL Server data shared";
        }
        else{
            echo "SQL Server: ".mysqli_error($con);
        }
}
echo "<br /> <br /> <a href='./'>home</a><script>location.replace('./')</script>";
?>