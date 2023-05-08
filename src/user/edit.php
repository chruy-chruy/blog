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
 <body class="w3-light-grey w3-content body">
 
 <!-- Sidebar/menu -->
 <nav class="w3-sidebar w3-bar-block w3-white w3-animate-left w3-text-grey w3-collapse w3-top w3-center" style="z-index:3;width:300px;" id="mySidebar"><br>
  <img src="../../assets/images/logo.png" alt="">
    <ul class="nav__list">
      <li> <a href="../home/" onclick="w3_close()" class="nav__link  w3-bar-item w3-button">Home</a> </li>
      <li><a href="../user/" onclick="w3_close()" class="nav__link nav__active w3-bar-item w3-button">Users</a>  </li>
      <li><a href="../../logout.php" onclick="w3_close()" class="nav__link w3-bar-item w3-button">Log Out</a> </li>
    </ul>
 </nav>
 
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
        <h5 class="m-0">ADD USERS</h5>
<a class="btn btn-add" href="index.php">Back</a>
</div>

<div class="cards edit">
<form action="update.php?id=<?php echo $_GET['id']?>" method="post" autocomplete="off">
        <img src="assets/images/logo.png" alt="">
        <?php $id = $_GET['id'];
$squery =  mysqli_query($conn, "SELECT * from user Where id = '$id'");
      while ($row = mysqli_fetch_array($squery)) {
        ?>
        <!-- <h1>Login</h1> -->
        <div class="textfield">
            <label for="name"><i class='bx bxs-user-detail'></i></label>
                <input required type="text" name="name" id="name" placeholder="Full Name" value="<?php echo $row['name'] ?>">
            </div>
            <div class="textfield">
            <label for="username"><i class='bx bxs-user' ></i></label>
                <input required type="text" name="username" id="username" placeholder="Username" value="<?php echo $row['username'] ?>">
            </div>
            <div class="textfield">
            <label for="password"><i class='bx bxs-lock-alt' ></i></label>
                <input required type="text" name="password" id="password" placeholder="Password" value="<?php echo $row['password'] ?>">
            </div>
            <?php if (isset($_GET['error'])) { ?>
            <p class="error-message" style=" color :red ;">
                <?php echo $_GET['error']; ?>
            </p>
            <?php } ?>
            <div class="edit-btn">
                <button type="submit">Update</button>
                <a href="delete.php?id=<?php echo $_GET['id']?>">Delete</a>
            </div>
            </div>
            <?php }?>
</form>
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
 <script src="../assets/js/table.js"></script>