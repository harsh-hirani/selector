<?php
if (!isset($_COOKIE['who'])) {
    echo 'not allowed';
}else{


?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Selector</title>
</head>

<body>
    <?php include 'nav.php'; 
    $conn = mysqli_connect("sql202.infinityfree.com",'if0_35034863','egPoAy7wynZ','if0_35034863_selecter');
    // $conn = mysqli_connect("localhost",'root','','selecter');
    $sql = "SELECT * FROM `data` where removed=0";
    $result = mysqli_query($conn,$sql);
$rows = mysqli_num_rows($result);


    ?>
    <div class="container-fluid px-lg-5 py-3">
        <h1 class="display-1 h1 bolder">
            Work<small class="text-muted">Place</small>
          </h1>

        <div class="list-group container-fluid">
            <div class="row">
         <?php
        include 'lister.php';
        for ($i=0; $i < $rows; $i++) { 
            $d = mysqli_fetch_array($result);
            load("remove",$d['who'],$d["name"],$d["info"],$d["skils"],$d["phone"],$d["rate"],$d["id"],$d["date"]);
        }
        // load("name","info","skils","phone","rating","id","time","https://picsum.photos/200");
        
        //<!-- for($i = 0; $i < 5;$i++) {
        //    load($i);
        //} -->
        ?>
    </div>

    </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>
<?php
}
?>