<?php
$page = 'Login';
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
     
        <form action="login.php" method="post" autocomplete="off">
        <h1>Login</h1>
            <div class="textfield">
            <label for="username"><i class='bx bxs-user' ></i></label>
                <input type="text" name="username" id="username" placeholder="Username">
            </div>
            <div class="textfield">
            <label for="password"><i class='bx bxs-lock-alt' ></i></label>
                <input type="password" name="password" id="password" placeholder="Password">

            </div>
            <div class="login-btn">
                <input type="submit" value="Login">
            </div>
            <div class="textfield">
                <p>Don't have an account? <a href="sign_up.php">Sign up</a></p>
            </div>
            </div>
        </form>
    </div>
</body>
</html>