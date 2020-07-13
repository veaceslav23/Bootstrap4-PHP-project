<?php

if(isset($_GET['search'])){
	require_once("connect.php");
	$pattern = $_GET['search'];
	$select = "SELECT * FROM movies where name like '$pattern%';";
	$query = mysqli_query($conn,$select)
	?>
	<h1>Results for "<?php echo $pattern;?>"</h1>
	 <div class="row">
	<?php
	while ($rows=mysqli_fetch_array($query,MYSQLI_ASSOC)) {
		?>
		 <div class="col-sm-3 col-lg-2 col-md-3">
        <a href="description.php?category=movies&id=<?php echo $rows["id"];?>&object=<?php echo $rows["name"];?>">
        <img src="image/<?php echo 'movies';?>/<?php echo $rows["name"];?>.jpg" class="img-thumbnail img-fluid" alt="Third slide"></a>
        <p><?php echo $rows["name"]; ?></p>
      </div> 
<?php
	}
	?>
</div>
	<?php
	$select = "SELECT * FROM anime where name like '$pattern%';";
	$query = mysqli_query($conn,$select)
	?>
	 <div class="row">
	<?php
	while ($rows=mysqli_fetch_array($query,MYSQLI_ASSOC)) {
		?>
		 <div class="col-sm-3 col-lg-2 col-md-3">
        <a href="description.php?category=anime&id=<?php echo $rows["id"];?>&object=<?php echo $rows["name"];?>">
        <img src="image/<?php echo 'anime';?>/<?php echo $rows["name"];?>.jpg" class="img-thumbnail img-fluid" alt="Third slide"></a>
        <p><?php echo $rows["name"]; ?></p>
      </div> 
<?php
	}
	?>
</div>
<?php
	$select = "SELECT * FROM series where name like '$pattern%';";
	$query = mysqli_query($conn,$select)
	?>
	 <div class="row">
	<?php
	while ($rows=mysqli_fetch_array($query,MYSQLI_ASSOC)) {
		?>
		 <div class="col-sm-3 col-lg-2 col-md-3">
        <a href="description.php?category=series&id=<?php echo $rows["id"];?>&object=<?php echo $rows["name"];?>">
        <img src="image/<?php echo 'series';?>/<?php echo $rows["name"];?>.jpg" class="img-thumbnail img-fluid" alt="Third slide"></a>
        <p><?php echo $rows["name"]; ?></p>
      </div> 
<?php
	}
	?>
</div>
<?php
}
?>