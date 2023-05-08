<?php 

include "../../db.php";
$name = $_POST['name'];
$username = $_POST['username'];
$password = $_POST['password'];
$id = $_GET['id'];

$squery =  mysqli_query($conn, "SELECT * from user Where username = '$username'");
while ($row = mysqli_fetch_array($squery)) {
        $check =  $row['username'] ;
};
if (empty($check)){
$sql = "UPDATE `user` SET 
`name`='$name',
`username`='$username',
`password`='$password'
Where id = '$id'";
mysqli_query($conn, $sql);

header("location:index.php?message=updated");
}
else{
    header("location:edit.php?error= Username '" . $check . "' is already taken.&name=".$name."&password=".$password."&id=".$id);
}
?>
