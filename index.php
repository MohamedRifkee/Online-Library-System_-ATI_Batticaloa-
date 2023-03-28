<?php
include 'header.php';
include('navbar.php');?>
    <!-- login area start -->
    <div class="login-area">
        <div class="container">
            <div class="login-box ptb--100">
                <form name="login_form" method="post" action="loginauthenticate.php" > 
        
        <div class="form-group col-md-12">
            <h2 style="color: white">Log In</h2>
        </div>

        <div class="form-group col-md-12">
            <input type="text" class="form-control" name="rollno" maxlength=6 placeholder="Roll No" required>
            </br><p id="error" class="error1"></p></br>
        </div>

        <div class="form-group col-md-12">
            <input type="password" class="form-control" name="pass" placeholder="Password" required><span id="pass"></span></br></center>
        <p id="demo" class="error1"></p>
        </div>

        <div class="form-group col-md-12">
            <input type="submit" value="Login" class="btn btn-primary">
        </div>

    </form>
            </div>
        </div>
    </div>
    <!-- login area end -->
    <?php include('footer.php');?>