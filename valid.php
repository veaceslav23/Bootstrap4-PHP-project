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
		if (!empty($_POST["name"])) {
			$name = validation($_POST["name"]);
			if (!preg_match("/^[A-Z][A-z ]{2,20}$/",$name)) {
				$nameErr = "Error!"; 
			}
		}
		if (!empty($_POST["login"])) {
			$login = validation($_POST["login"]);
			if (!preg_match("/^[A-Za-z0-9 ]{5,20}$/",$login)) {
				$loginErr = "Error!"; 
		} 
		}	
           
     if (!empty($_POST["email"])) {
			$email = validation($_POST["email"]);
			if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
				$mailErr = "Adresa de e-mail nevalida!"; 
			}
		} 
       if (!empty($_POST["password"])) {
			$pass = validation($_POST["password"]);
			if (!preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.{8,})/",$pass)) {
				$passwordErr = "Error!"; 
			}
		}		
	}
//Inseram date in tabelul student 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
		if ($nameErr.$loginErr.$mailErr.$passwordErr == ""){
			require_once("connect.php");
			$select = "SELECT * FROM user WHERE email = '$email' or user_name = '$login';";
			$result = mysqli_query($conn, $select);
			$count = mysqli_num_rows($result);
			if($count){
				$message = "User with this email or username exists";
			}
			else{
			$insert = "INSERT INTO user (full_name,user_name,email,password) VALUES('$name','$login','$email','$pass')";
			mysqli_query($conn, $insert);
			$message = "";
			header('Location: http://'.$_SERVER['SERVER_NAME'].'/teza/login.php');
		}
			}
				}
?>