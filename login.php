<?php
session_start();
require "valid_login.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta charset="utf8">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<link rel="stylesheet" href="css/footer.css">
<link rel="stylesheet" href="css/navbar.css">
<link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;700&display=swap" rel="stylesheet">
<script src="https://kit.fontawesome.com/70a4d83286.js" crossorigin="anonymous"></script>
<style>
	body{
		height: 100%;
		background-color: black;
		background-image: url("image/image1.png");
		background-repeat: no-repeat;
		background-size: 100%, 100%;
	}
	form {
   				position: relative;
				background: #ffffff; /* Old browsers */
background: -moz-linear-gradient(left,  #ffffff 0%, #e1e1e1 0%, #e1e1e1 0%, #e1e1e1 7%, #e1e1e1 14%, #e1e1e1 24%, #f1f1f1 69%, #f6f6f6 100%); /* FF3.6-15 */
background: -webkit-linear-gradient(left,  #ffffff 0%,#e1e1e1 0%,#e1e1e1 0%,#e1e1e1 7%,#e1e1e1 14%,#e1e1e1 24%,#f1f1f1 69%,#f6f6f6 100%); /* Chrome10-25,Safari5.1-6 */
background: linear-gradient(to right,  #ffffff 0%,#e1e1e1 0%,#e1e1e1 0%,#e1e1e1 7%,#e1e1e1 14%,#e1e1e1 24%,#f1f1f1 69%,#f6f6f6 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ffffff', endColorstr='#f6f6f6',GradientType=1 ); /* IE6-9 */
				font-family: 'Cinzel', serif;
  				border-radius: 15px;
  				width: 40%;
			}
		.btn-danger{
			font-size: 30px;
		}
	.btn{
		-webkit-box-shadow: 0px 2px 27px 2px rgba(166,161,166,1);
		-moz-box-shadow: 0px 2px 27px 2px rgba(166,161,166,1);
		box-shadow: 0px 2px 27px 2px rgba(166,161,166,1);
		background:linear-gradient(to bottom, #79bbff 5%, #378de5 100%);
	background-color:#79bbff;
	border-radius:6px;
		width: 25%
	}
	.btn:hover{
		background:linear-gradient(to bottom, #378de5 5%, #79bbff 100%);
	background-color:#378de5;
	}
	@media (max-width: 568px){
		body{
		background-image: none;
		}
		form {
   				position: relative;
  				background-color: white;
  				border-radius: 15px;
				width: 100%;
			}
			.btn{
				width: 75%;
			}
	}
	@media (min-width: 900px){
		form{
			font-size: 20px;
			font-weight: bold;
		}	

}

</style>
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="50">
<div class="container-fluid">
	<form class="my-5 d-block mx-auto p-5" method="post">
		<h1 class="text-center">Sign in</h1>
		<h5 class="text-center text-danger"><?php echo $message?></h5>
		<hr class="d-block mx-auto">
  <div class="form-row p-2">
    <label for="login">Username</label>
    <input type="text" name="login" class="form-control form-control-lg">
  </div>
  <div class="form-row p-2">
    <label for="password">Password</label>
    <input type="password" name="password" class="form-control form-control-lg">
  </div>
  <div class="form-row-last pt-4">
  <input type="submit" class="btn btn-primary d-block mx-auto rounded p-3 w-100" value="Sign in">
</div>
<div class="form-row-last pt-4">
  <h6 class="text-center">New to IMUVI? <a href="signup.php" class="d-inline-block mx-auto">Sign Up</a></h6>
</div>
</form>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>