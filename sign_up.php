<?php
$page = 'Sign Up';
include "includes/head.php";
 ?>

<body>
    <div class="card">
    <div  class="left">
        <div class="logo">
          <!-- <img src="assets/images/bfi.png" alt=""> -->
          <h3>Title Page</h3>
    </div>
    <img src="https://images.pexels.com/photos/114979/pexels-photo-114979.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="Image">
</div>
        <div class="form">
     
        <form action="" method="post" autocomplete="off">
        <h1>Sign Up</h1>
        <div class="textfield">
            <label for="name"><i class='bx bxs-user-detail'></i></label>
                <input type="text" name="name" id="name" placeholder="Full Name">
            </div>
            <div class="textfield">
            <label for="username"><i class='bx bxs-user' ></i></label>
                <input type="text" name="username" id="username" placeholder="Username">
            </div>
            <div class="textfield">
            <label for="password"><i class='bx bxs-lock-alt' ></i></label>
                <input type="password" name="password" id="password" placeholder="Password">
            </div>
            <div class="login-btn">
                <input type="submit" value="Register">
            </div>
            <div class="textfield">
                <p>Already have an account? <a href="index.php">Log in</a></p>
            </div>
            </div>
        </form>
    </div>
</body>
</html>