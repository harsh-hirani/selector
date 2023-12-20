<?php

setcookie("who",$_GET['who'], time() + (84600 * 60),"/");
echo "<script> location.replace('./')</script>";
?>