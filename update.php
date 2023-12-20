<?php
if (!isset($_COOKIE['who'])) {
    echo 'not allowed';
}else{
$id = $_GET['id'];
// $conn = mysqli_connect("localhost",'root','','selecter');
$conn = mysqli_connect("sql202.infinityfree.com",'if0_35034863','egPoAy7wynZ','if0_35034863_selecter');

$sql = "SELECT * FROM `data` where id=$id";
$result = mysqli_query($conn,$sql);

$d = mysqli_fetch_array($result);
?><!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>update</title>
</head>

<body>
    <?php include 'nav.php'; ?>
    <div class="container-fluid px-lg-5 py-3">
        <h1 class="display-1 h1 bolder">
            WorkPlace<small class="text-muted"> - Update</small>
        </h1>

        <div class="list-group container-fluid">
            <div class="row">
                <div class="col-lg-6 col-12">
                    <div class="card mb-3">
                        <div class="row g-0">
                            <div class="col-md-7 offset-lg-1">
                                <div class="card-body">
                                    <form action="upper.php?id=<?php echo $d['id'];?>" method="post">

                                        <h5 class="card-title">
                                            <input type="text" class="form-control" name="name" value="<?php echo $d["name"];?>" placeholder="Name">
                                            <!-- <input type="text" class="form-control"  name="id" value="<?php echo $d["id"];?>" placeholder="id"> -->
                                            <!-- Photo 1: <input type="file" name="fileToUpload0" class="btn btn-outline-dark" id="fileToUpload"> -->
                                        </h5>
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item">
                                                <input type="text" class="form-control" name="info" value="<?php echo $d["info"];?>" placeholder="info">
                                            </li>
                                            <li class="list-group-item">
                                                <input type="text" class="form-control" name="skils" value="<?php echo $d["skils"];?>" placeholder="skils">
                                            </li>
                                            <li class="list-group-item">
                                                <input type="text" class="form-control" name="phone" value="<?php echo $d["phone"];?>" placeholder="phone">
                                            </li>
                                            <li class="list-group-item">
                                                <input type="text" class="form-control" name="rate" value="<?php echo $d["rate"];?>" placeholder="rate">
                                            </li>
                                        </ul>
                                        <button  class="card-link my-2 btn btn-outline-primary">update</button>
                                        
                                        
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


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
}?>