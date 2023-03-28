<?php
require_once('connect.php');
session_start();
if(isset($_SESSION['key'])==1){
	
	header('Location:home.php');
}
$_SESSION['var']=0;

$roll = mysqli_real_escape_string($conn, $_POST['rollno']);
$pass = mysqli_real_escape_string($conn, $_POST['pass']);

$sql="SELECT * FROM student_login WHERE student_rollno=$roll AND student_password='$pass'";
$result=$conn->query($sql);
if ($result->num_rows > 0) 
{    while($row = $result->fetch_assoc()) 
	{
		$_SESSION['var']=0;
		$_SESSION['key']=$roll;	
    }
    header('Location:home.php');
} else {
   
$_SESSION['var']=1;
header('Location:index.php');
}
$conn->close();
?>
