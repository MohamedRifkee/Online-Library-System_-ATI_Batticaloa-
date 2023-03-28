<?php
include('header.php');
include('navbar.php');
?>

    <!-- login area start -->
    <div class="login-area">
        <div class="container">
            <div class="login-box ptb--100">
                <form method="post" action="loginauthenticate.php">
                    <div class="login-form-head">
                        <h4>Admin Login</h4>
                    </div>
                    <div class="login-form-body">
                        <div class="form-gp">
                            <label for="exampleInputEmail1">Admin User</label>
                            <i class="ti-email"></i>
                            <input type="text" class="form-control" name="empid" maxlength=6 required>
                           
                            <div class="text-danger"></div>
                        </div>
                        <div class="form-gp">
                            <label for="exampleInputPassword1">Password</label>
                            <i class="ti-lock"></i>
                            <input type="password" class="form-control" name="pass" required>
                            
                            <div class="text-danger"></div>
                        </div>
                        <div class="submit-btn-area">
                            <button id="form_submit" type="submit">Log In <i class="ti-arrow-right"></i></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- login area end -->

   <?php include 'footer.php'; ?>