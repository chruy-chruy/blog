<?php
$page = 'Login';
if(isset($_GET['message'])){
    $message = $_GET['message'];
    echo "<script type='text/javascript'>alert('$message');</script>";
  
  }
 ?>
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php if($page == 'Home'){ ?>
    <link rel="stylesheet" href="../../assets/css/style.css">
    <?php }else{ ?>
    <link rel="stylesheet" href="assets/css/style.css">
    <?php } ?>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Test</title>
</head>
<body>
    <div class="container">
    <div class="card">
    <div  class="left">
        <div class="logo">
        <!-- <img src="assets/images/logo.png" alt=""> -->
        <!-- <h3>Title Page</h3> -->
    </div>
<!-- <img src="https://images.pexels.com/photos/114979/pexels-photo-114979.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="Image"> -->
<img src="assets/images/college-day/15.jpg" alt="Image">
</div>
        <div class="form">
        <form action="login.php" method="post" autocomplete="off">
        <img src="assets/images/logo.png" alt="">
        <!-- <h1>Login</h1> -->
            <div class="textfield">
            <label for="username"><i class='bx bxs-user' ></i></label>
                <input type="text" name="username" id="username" placeholder="Username">
            </div>
            <div class="textfield">
            <label for="password"><i class='bx bxs-lock-alt' ></i></label>
                <input type="password" name="password" id="password" placeholder="Password">
            </div>
            <?php if (isset($_GET['error'])) { ?>
            <p class="error-message" style=" color :red ;">
                <?php echo $_GET['error']; ?>
            </p>
            <?php } ?>
            <div class="login-btn">
                <input type="submit" value="Login">
            </div>
            <div class="textfield">
                <p>Don't have an account? <a href="sign_up.php">Sign up</a></p>
            </div>
            </div>
        </form>
    </div>
            </div>
</body>
</html>