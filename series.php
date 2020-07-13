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
<style type="text/css">
	body{
		background-color: black;
	}
  html {
    scroll-behavior: smooth;
}
	.colors{
		margin-top: 100px;
	}

 .col-sm-4, .col-lg-2, .col-md-3{
  display: inline-block;
  height: auto;
}
 .col-lg-2{
  margin-left: 6%;
   font-size: 20px;
 }
.carousel-fade{
width:100%;
margin:0px auto;
}
.carousel-control-next, .carousel-control-prev{
	width:2%
}
h2,p{
  color:lightgrey;
}
p{
  font-size: 20px;
}
@media (max-width: 768px) {
.col-sm-4,.col-md-3,.col-lg-2{
  width:35%;
}
.nomobile{
  display:none;
}
}
@media (min-width: 769px) {
.mobile{
  display:none;
}
}
</style>
</head>
<body>


<?php 
require "navbar.html";
?>

<div class="container my-2"> 
<div id="carouselExampleIndicators" class="carousel slide mySlide mx-auto" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
     <img class="d-block mx-auto w-100" src="image/witcher.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block mx-auto w-100" src="image/casa.jpg" alt="Third slide">
    </div>
    <div class="carousel-item">
      <img class="d-block mx-auto w-100" src="image/elite.jpg" alt="Fourth slide">
    </div>
    <div class="carousel-item">
      <img class="d-block mx-auto w-100" src="image/riverdale.jpg" alt="Fourth slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators"  role="button" data-slide="prev">
    <span class="carousel-control-prev-icon " aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<?php
include 'genres_mobile.php';
?>

<?php
include 'genres.php';
?>
</div>
<hr class="bg-white">
<?php
require "footer.html";
?>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>