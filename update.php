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
		        <h2 class="card-header">Update Book</h2>
		        <div class="card-body">
	<form class="needs-validation" novalidate method="post" action="updatedb.php"> 
		
		<div class="form-group col-md-6">
			<h2 style="color: white">Update</h2>
		</div>

		<div class="form-group col-md-6">
			<input type="text" class="form-control" placeholder="Roll NO" name="rollno" required>
		</div>

		<div class="form-group col-md-6">
			<input type="text" class="form-control" placeholder="ISBN" name="ISBN" required>
		</div>

		<div class="form-group col-md-6">
			<input type="date" class="form-control" placeholder="Renew Date" name="r_date" required>
		</div>

		<div class="form-group col-md-6">
			<input type="submit" value="Update" class="btn btn-primary"></input>
		</div>

	</form>
</div>
</div>
</div>
</div>
</div>
<?php include 'footer.php'; ?>