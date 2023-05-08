<?php
$page = 'Home';
include "../../includes/head.php";
 ?><!DOCTYPE html>
 <html lang="en">
 <head>
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
 <div class="nav">
 <nav class="w3-sidebar w3-bar-block w3-white w3-animate-left w3-text-grey w3-collapse w3-top w3-center" style="z-index:3;width:300px;" id="mySidebar"><br>
  <img src="../../assets/images/logo.png" alt="">
    <ul class="nav__list">
      <li> <a href="../home/" onclick="w3_close()" class="nav__link nav__active w3-bar-item w3-button">Home</a> </li>
      <?php  if($_SESSION['username'] === 'admin'){
        ?>
      <li><a href="../user/" onclick="w3_close()" class="nav__link  w3-bar-item w3-button">Users</a>  </li>
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

<!-- First Photo Grid-->
<div class="w3-row-padding">
  <div class="w3-third w3-container w3-margin-bottom">
    <img src="../../assets/images/college-day/1.jpg" onclick="onClick(this)" style="width:100%; height:500px;" class="w3-hover-opacity">
  </div>
  <div class="w3-third w3-container w3-margin-bottom">
    <img src="../../assets/images/college-day/2.jpg" onclick="onClick(this)" style="width:100%; height:500px;" class="w3-hover-opacity">
  </div>
  <div class="w3-third w3-container w3-margin-bottom">
    <img src="../../assets/images/college-day/3.jpg" onclick="onClick(this)" style="width:100%;" class="w3-hover-opacity">
  </div>
  <div class="w3-third w3-container w3-margin-bottom">
    <img src="../../assets/images/college-day/4.jpg" onclick="onClick(this)" style="width:100%;" class="w3-hover-opacity">
  </div>
  <div class="w3-third w3-container w3-margin-bottom">
    <img src="../../assets/images/college-day/5.jpg" onclick="onClick(this)" style="width:100%;" class="w3-hover-opacity">
  </div>
  <div class="w3-third w3-container w3-margin-bottom">
    <img src="../../assets/images/college-day/6.jpg" onclick="onClick(this)" style="width:100%;" class="w3-hover-opacity">
  </div>
  <div class="w3-third w3-container w3-margin-bottom">
    <img src="../../assets/images/college-day/7.jpg" onclick="onClick(this)" style="width:100%;" class="w3-hover-opacity">
  </div>
  <div class="w3-third w3-container w3-margin-bottom">
    <img src="../../assets/images/college-day/8.jpg" onclick="onClick(this)" style="width:100%;" class="w3-hover-opacity">
  </div>
  <div class="w3-third w3-container w3-margin-bottom">
    <img src="../../assets/images/college-day/9.jpg" onclick="onClick(this)" style="width:100%;" class="w3-hover-opacity">
  </div>
  <div class="w3-third w3-container w3-margin-bottom">
    <img src="../../assets/images/college-day/10.jpg" onclick="onClick(this)" style="width:100%;" class="w3-hover-opacity">
  </div>
  <div class="w3-third w3-container w3-margin-bottom">
    <img src="../../assets/images/college-day/11.jpg" onclick="onClick(this)" style="width:100%;" class="w3-hover-opacity">
  </div>
  <div class="w3-third w3-container w3-margin-bottom">
    <img src="../../assets/images/college-day/12.jpg" onclick="onClick(this)" style="width:100%;" class="w3-hover-opacity">
  </div>
  <div class="w3-third w3-container w3-margin-bottom">
    <img src="../../assets/images/college-day/13.jpg" onclick="onClick(this)" style="width:100%;" class="w3-hover-opacity">
  </div>
  <div class="w3-third w3-container w3-margin-bottom">
    <img src="../../assets/images/college-day/14.jpg" onclick="onClick(this)" style="width:100%;" class="w3-hover-opacity">
  </div>
  <div class="w3-third w3-container w3-margin-bottom">
    <img src="../../assets/images/college-day/15.jpg" onclick="onClick(this)" style="width:100%;" class="w3-hover-opacity">
  </div>
</div>
  <!-- Modal for full size images on click-->
  <div id="modal01" class="w3-modal w3-black" style="padding-top:0" onclick="this.style.display='none'">
    <span class="w3-button w3-black w3-xlarge w3-display-topright">×</span>
    <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
      <img id="img01" class="w3-image">
      <p id="caption"></p>
    </div>
  </div>

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
 