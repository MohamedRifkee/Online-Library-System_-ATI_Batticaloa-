<?php
require_once('connect.php');

$_SESSION['var']=0;
$ISBN="";
if($_SERVER["REQUEST_METHOD"]=="POST")
{
	$ISBN=$_POST["ISBN"];
	$sql="DELETE FROM book WHERE ISBN = '$ISBN'";
	$result=mysqli_query($conn, $sql);
	mysqli_close($conn);
header('Location:removeBook.php');
}
?>
