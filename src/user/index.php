<?php
$page = 'Home';
include "../../includes/head.php";
include "../../db.php";
if(isset($_GET['message'])){
    $message = $_GET['message'];
    echo "<script type='text/javascript'>alert('$message');</script>";
  
  }
 ?><!DOCTYPE html>
 <html lang="en">
 <head>
 <title>W3.CSS Template</title>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
 <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway"> -->
 <style>
 body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
 .w3-third img{margin-bottom: -6px; opacity: 0.8; cursor: pointer}
 .w3-third img:hover{opacity: 1}
 </style>
 </head>
 <body class="">
 
 <!-- Sidebar/menu -->
 <div class="nav">
 <nav class="w3-sidebar w3-bar-block w3-white w3-animate-left w3-text-grey w3-collapse w3-top w3-center" style="z-index:3;width:300px;" id="mySidebar"><br>
  <img src="../../assets/images/logo.png" alt="">
    <ul class="nav__list">
      <li> <a href="../home/" onclick="w3_close()" class="nav__link  w3-bar-item w3-button">Home</a> </li>
      <?php  if($_SESSION['username'] === 'admin'){
        ?>
      <li><a href="../user/" onclick="w3_close()" class="nav__link nav__active w3-bar-item w3-button">Users</a>  </li>
      <?php }?>
      <li><a href="../../logout.php" onclick="w3_close()" class="nav__link w3-bar-item w3-button">Log Out</a> </li>
    </ul>
 </nav>
 </div>
 
 <!-- Top menu on small screens -->
 <header class="w3-container w3-top w3-hide-large w3-white w3-xlarge w3-padding-16">
   <span class="w3-left w3-padding">College Day</span>
   <a href="javascript:void(0)" class="w3-right w3-button w3-white" onclick="w3_open()">☰</a>
 </header>
 
 <!-- Overlay effect when opening sidebar on small screens -->
 <div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>
 
 <!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px">

<!-- Header -->
<header id="portfolio">
  <div class="w3-container">
  <h1><b>College Day</b></h1>
  <div class="w3-section w3-bottombar w3-padding-16">
  </div>
  </div>
</header>


<main>
<div class="card-table">
<div class="card-header">
        <h5 class="m-0">USERS</h5>
<a class="btn btn-add" href="add.php">ADD</a>
</div>

<div class="cards">
<table id="myTable" class="display">
    <thead>
        <tr>
            <th>ID</th>
            <th>Full Nam</th>
            <th>Username</th>
            <th>Password</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
    <?php
    $squery =  mysqli_query($conn, "SELECT * from user order by id desc");
     while ($row = mysqli_fetch_array($squery)) {
    ?>
        <tr>
        <td><?php echo $row['id'] ?></td>
        <td><?php echo $row['name'] ?></td>
        <td><?php echo $row['username'] ?></td>
        <td><?php echo $row['password'] ?></td>
        <td>
            <a  class="btn-view" href="edit.php?id=<?php echo $row['id'] ?>">
                View
            </a>
        </td>
        </tr> <?php }?>
        </tbody>
      
</table>
</div>
</div>
</main>
 <!-- End page content -->
 
 </div>

 
 <script>
 // Script to open and close sidebar
 function w3_open() {
   document.getElementById("mySidebar").style.display = "block";
   document.getElementById("myOverlay").style.display = "block";
 }
  
 function w3_close() {
   document.getElementById("mySidebar").style.display = "none";
   document.getElementById("myOverlay").style.display = "none";
 }
 
// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}
 
 </script>
 
 
 </body>
 </html>