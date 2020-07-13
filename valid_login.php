<?php 
	$nameErr = $loginErr = $mailErr = $passwordErr = "";
	$name = $login = $email = $pass =$message= "";

	function validation($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
	return $data;
	}
	//Validarea datelor impreuna cu expresiile regulate
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		if (!empty($_POST["login"])) {
			$login = validation($_POST["login"]);
			if (!preg_match("/^[A-Za-z0-9 ]{5,20}$/",$login)) {
				$loginErr = "Error!";
				$message = "User doesn't exist"; 
		} 
		}	
       if (!empty($_POST["password"])) {
			$pass = validation($_POST["password"]);
			if (!preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.{8,})/",$pass)) {
				$passwordErr = "Error!"; 
				$message = "User doesn't exist";
			}
		}		
	}
//Inseram date in tabelul student 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
		if ($loginErr.$passwordErr == ""){
			require_once("connect.php");
			$select = "SELECT * FROM user WHERE password = '$pass' and user_name = '$login';";
			$result = mysqli_query($conn, $select);
			$count = mysqli_num_rows($result);
			if(!$count){
				$message = "User doesn't exist";
			}
			else{
			$_SESSION['user'] = $login;
			$message = "";
			header('Location: http://'.$_SERVER['SERVER_NAME'].'/teza/profile.php');
		}
			}
				}
?>