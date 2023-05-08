<?php 

include "db.php";
$name = ucwords($_POST['name']);
$username = $_POST['username'];
$password = $_POST['password'];

//check if username is already exist
$squery =  mysqli_query($conn, "SELECT * from user Where username = '$username'");
while ($row = mysqli_fetch_array($squery)) {
        $check =  $row['username'] ;
};

if (empty($check)){
     $sql2 = "INSERT INTO `user`(`name`, `username`, `password`) VALUES ('$name','$username','$password')";
    
    mysqli_query($conn, $sql2);
    header("location:/blog?message=Create Succes");
}
else{
    header("location:./sign_up.php?error= " . $check . " is already taken.&name=".$name."&password=".$password);
    }
 ?>