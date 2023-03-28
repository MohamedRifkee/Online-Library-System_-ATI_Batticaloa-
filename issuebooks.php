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
		        <div class="card-body">
	<form class="needs-validation" novalidate method="post" action="issuedb.php"> 
		
		<div class="form-group col-md-6">
			<h2 style="color: white">ISSUE</h2>
		</div>

		<div class="form-group col-md-6">
			<input type="text" class="form-control" placeholder="Roll NO" name="rollno" required>
		</div>

		<div class="form-group col-md-6">
			<input type="text" class="form-control" placeholder="ISBN" name="ISBN" required>
		</div>

		<div class="form-group col-md-6">
			<input type="date" class="form-control" placeholder="Issue Date" name="issue_date" required>
		</div>
	
		<div class="form-group col-md-6">
			<input type="submit" value="Issue" class="btn btn-primary"></input>
		</div>
	</form>
</div>
</div>
</div>
</div>
</div>
<?php include 'footer.php'; ?>