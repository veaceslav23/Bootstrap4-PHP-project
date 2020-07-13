<?php
include('session.php');
include('logout.php');
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
<script src="https://kit.fontawesome.com/70a4d83286.js" crossorigin="anonymous"></script>
<style>
	body{
		background-color: black;
	}
	.card-img-overlay{
		z-index: 1;
		color:white;
		text-align: center;
		height: auto;
	}
	.card{
		border: none;
	}
	.row{
		color:lightgrey;
	}
	hr{
		  border: 2px solid #b3b3b3;
	}
	@media (max-width: 568px){
	#row1 .col-sm-6:nth-child(1),#row2 .col-sm-6:nth-child(1){
		order:2;
	}
	#row1 .col-sm-6:nth-child(2),#row2 .col-sm-6:nth-child(1){
		order:1;
	}
	.card-text{
			font-size: 10px;
		}
		.card-title{
			font-size: 16px
		}
	}
	@media (min-width: 900px){
		.card-text{
			font-size: 25px;
		}
		.card-title{
			font-size: 60px
		}
		.card-text{
			padding: 5px;
		}
			.card-body {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}
		.btn-danger{
			font-size: 30px;
		}
}
@media (max-width: 899px) and (min-width: 650px) {
		.card-text{
			font-size: 20px;
		}
		.card-title{
			font-size: 50px
		}
		.card-text{
			padding: 2px;
		}
			
		.btn-danger{
			font-size: 30px;
		}
}

</style>
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="50">
<?php 
require "navbar.html";
?>
<div class="container-fluid w-100">
	<div class="card">
	<img src="image/image1.png" class="img-fluid w-100 h-100 d-block card-img-top ">
	 <div class="container">
	 		<div class="card-img-overlay d-block mx-auto">
	 			<div class="card-body">
    				<h5 class="card-title">Unlimited movies, series, and more.</h5>
    				<p class="card-text">Watch anywhere. Ready? Sign Up for the Best Experience.</p>
    				<button class="btn btn-danger" onclick="location.href='signup.php';" >Sign Up</button>
  				</div>
  			</div>
	</div>
	</div>
<hr>
<section class="row align-items-center .text-secondary p-5">
    <div class="col-md-6 col-sm-6 text-center">
      <h1>Movies</h1>
      <h3>Best Movies all over the world</h3>
    </div>
    <div class="col-md-6 col-sm-6">
      <img class="img-fluid rounded mx-auto d-block" src="image/movies.jpg">
    </div>	
</section>
<hr>
<section class="row align-items-center .text-secondary p-5" id="row1">
      <div class="col-md-6 col-sm-6">
      <img class="img-fluid rounded mx-auto d-block" src="image/series2.jpg">
    </div>	
     <div class="col-md-6 col-sm-6 text-center">
      <h1>Series</h1>
      <h3>Best Series all over the world</h3>
    </div>
</section>
<hr>
<section class="row align-items-center .text-secondary p-5">
    <div class="col-md-6 col-sm-6 text-center">
      <h1>Anime</h1>
      <h3>Best Anime series all over the world</h3>
    </div>
    <div class="col-md-6 col-sm-6">
      <img class="img-fluid rounded mx-auto d-block" src="image/anime.jpg">
    </div>	
</section>
</div>
<hr>
<?php
require "footer.html";
?>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>