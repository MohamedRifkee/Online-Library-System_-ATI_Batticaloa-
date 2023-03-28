<?php
if(isset($_SESSION['key'])==1){
	include('navbarin.php');
}
else{
    include('navbarout.php');
}
?>