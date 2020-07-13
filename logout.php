<?php
if(isset($_GET['logout']))
{
	$path = 'http://localhost/teza/landing.php';
	 session_destroy();
     header('Location:landing.php');
}
?>