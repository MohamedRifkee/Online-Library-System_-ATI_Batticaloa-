<?php
require_once('connect.php');
session_start();
if(!isset($_SESSION['key'])){
	
	header('Location:index.php');
}
include('header.php');
include('navbar.php');
?>
<div class="main-content-inner">
                <div class="row">
                    <div class="col-lg-6 col-ml-12">
                        <div class="row">
                            <!-- Server side start -->
                            <div class="col-12">
                                <div class="card mt-5">
                                    <div class="card-body">
                                        
                                    </div>
                                </div>
                            </div>
                            <!-- Server side end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- main content area end -->
        
    <?php include('footer.php');?>