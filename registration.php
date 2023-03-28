<?php
include 'header.php';
include('navbar.php');
?>
    <!-- login area start -->
    <div class="login-area">
        <div class="container">
            <div class="login-box ptb--100">
                <form action="registration_authenticate.php" method="post">

        <div class="form-group col-md-12">
            <h2 style="color: white">Register</h2>
        </div>

        <div class="form-group col-md-12 <?php echo (!empty($rollno_err)) ? 'has-error' : ''; ?>">
            <input type="text" class="form-control" name="rollno" placeholder="Roll Number">
            <span class="help-block"><?php //echo $rollno_err; ?></span>
        </div>

        <div class="form-group col-md-12 <?php echo (!empty($fname_err)) ? 'has-error' : ''; ?>">
            <input type="text" class="form-control" name="fname" placeholder="First Name">
            <span class="help-block"><?php //echo $fname_err; ?></span>
        </div>

        <div class="form-group col-md-12 <?php echo (!empty($mname_err)) ? 'has-error' : ''; ?>">
            <input type="text" class="form-control" name="mname" placeholder="Middle Name">
            <span class="help-block"><?php //echo $mname_err; ?></span>
        </div>

        <div class="form-group col-md-12">
            <input type="text" class="form-control" name="lname" placeholder="Last Name">
        </div>

        <div class="form-group col-md-12 <?php echo (!empty($branch_err)) ? 'has-error' : ''; ?>">
            <input type="text" class="form-control" name="branch" placeholder="Branch">
            <span class="help-block"><?php //echo $branch_err; ?></span>
        </div>

        <div class="form-group col-md-12 <?php echo (!empty($sem_err)) ? 'has-error' : ''; ?>">
            <input type="text" class="form-control" name="sem" placeholder="Semester">
            <span class="help-block"><?php //echo $sem_err; ?></span>
        </div>

        <div class="form-group col-md-12 <?php echo (!empty($dob_err)) ? 'has-error' : ''; ?>">
            <input type="date" class="form-control" name="dob">
            <span class="help-block"><?php //echo $dob_err; ?></span>
        </div>

        <div class="form-group col-md-12 <?php echo (!empty($semail_err)) ? 'has-error' : ''; ?>">
            <input type="email" class="form-control" name="semail" placeholder="Email">
            <span class="help-block"><?php //echo $semail_err; ?></span>
        </div>

        <div class="form-group col-md-12 <?php echo (!empty($gender_err)) ? 'has-error' : ''; ?>">
            <input type="text" class="form-control" name="gender" placeholder="Gender">
            <span class="help-block"><?php //echo $gender_err; ?></span>
        </div>

        <div class="form-group col-md-12 <?php echo (!empty($bg_err)) ? 'has-error' : ''; ?>">
            <input type="text" class="form-control" name="bg" placeholder="Blood Group">
            <span class="help-block"><?php //echo $bg_err; ?></span>
        </div>

        <div class="form-group col-md-12 <?php echo (!empty($contact_err)) ? 'has-error' : ''; ?>">
            <input type="text" class="form-control" name="contact" placeholder="Contact NO">
            <span class="help-block"><?php //echo $contact_err; ?></span>
        </div>

        <div class="form-group col-md-12 <?php echo (!empty($address_err)) ? 'has-error' : ''; ?>">
            <input type="text" class="form-control" name="address" placeholder="Address">
            <span class="help-block"><?php //echo $address_err; ?></span>
        </div>

        <div class="form-group col-md-12 <?php echo (!empty($pass_err)) ? 'has-error' : ''; ?>">
            <input type="password" class="form-control" name="pass" placeholder="Password">
            <span class="help-block"><?php //echo $pass_err; ?></span>
        </div>

        <div class="form-group col-md-12 <?php echo (!empty($cpass_err)) ? 'has-error' : ''; ?>">
            <input type="password" class="form-control" name="cpass" placeholder="Confirm Password">
            <span class="help-block"><?php //echo $cpass_err; ?></span>
        </div>

        <div class="form-group col-md-12">
        <input type="submit" class="btn btn-primary" value="Register"></input>

        <input type="reset" class="btn btn-secondary" value="Reset"></input>
    </div>
    </form>
            </div>
        </div>
    </div>
    <!-- login area end -->

    <?php include('footer.php');?>