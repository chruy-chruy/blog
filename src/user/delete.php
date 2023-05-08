
<?php
include "../../db.php";

$id= $_GET['id'];
$squery = mysqli_query($conn,"DELETE FROM `user` Where id = '$id'");


header("location:index.php?message=Deleted");
?>