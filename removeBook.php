<?php
require_once('connect.php');
session_start();
include 'header.php';
include('navbar.php');
?>
<div class="main-content-inner">
	<div class="row">
		<div class="col-12">
    		<div class="card mt-5">
    			<h2 class="card-header">Remove Book</h2>
		        <div class="card-body">
	<form  class="needs-validation" novalidate method="post" action="delFromdb.php"> 
		
		<div class="form-group col-md-6">
			<h2 style="color: white">REMOVE BOOKS</h2>
		</div>

		<div class="form-group col-md-6">
			<input type="text" class="form-control" placeholder="ISBN" name="ISBN" required>
		</div>

		<div class="form-group col-md-6">
			<input type="submit" value="Remove" class="btn btn-primary"></input>
		</div>
	</form>
</div>
</div>
</div>
</div>
</div>
<?php include 'footer.php'; ?>