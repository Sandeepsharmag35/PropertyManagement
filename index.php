<?php
include_once('templates/header.php');


?>
<div class="loginback">
    <div class=" logindiv">
        <form class="login-form" action="templates/login.php" method="post">
            <h1>
                <center>Login</center>
            </h1>
            <?php if (isset($_GET['error'])) { ?>
                <p class="error"><?php echo $_GET['error']; ?></p>
            <?php } ?>
            <div class="form-input">
                <label class="form-label" for="username">Username:</label>
                <input class="form-control" name="uname" type="text" id="username" placeholder="Enter Username">
            </div>
            <div class="form-input">


                <label class="form-label" for="password">Password:</label>
                <input class="form-control" name="password" type="Password" id="password" placeholder="Enter Password">

            </div>
            <div class="form-input">
                <center><button type="submit">Login</button></center>
            </div>
            <div class="form-input">
                <center>Forgot Password?</center>
        </form>



    </div>

</div>