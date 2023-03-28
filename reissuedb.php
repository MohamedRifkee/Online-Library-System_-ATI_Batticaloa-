<?php
require_once('connect.php');

$_SESSION['var']=0;
$ISBN="";
if($_SERVER["REQUEST_METHOD"]=="POST")
{
	$rollno=$_POST["rollno"];
	$ISBN=$_POST["ISBN"];
	$issue_date=$_POST["issue_date"];


	$query="UPDATE book SET QUANTITY=QUANTITY-1 WHERE ISBN='$ISBN' AND QUANTITY!=0";
	$res=mysqli_query($conn, $query);

	if($res){

		$sql="UPDATE issued_books SET ISSUED_DATE='$issue_date',RENEWED_DATE='',FINE=0 WHERE student_rollno=$rollno AND ISBN='$ISBN'";
		$result=mysqli_query($conn, $sql);

	}
	mysqli_close($conn);
header('Location:reissue.php');
}