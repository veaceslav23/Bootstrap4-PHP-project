<div class="mobile">
<?php
require_once("connect.php");
$extract = "SELECT * from genres;";
$result = mysqli_query($conn,$extract);
?>
<section class="my-3">
  <button class="btn btn-outline-danger w-100" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
   Genres
  </button>
</section>
<div class="collapse" id="collapseExample">
  <div class="card card-body bg-dark">
    <ul class="list-group list-group-flush bg-dark">
      <?php while($arr = mysqli_fetch_array($result,MYSQLI_ASSOC)){ ?>
      <li class="list-group-item bg-dark">
        <a class="text-light" href="#<?php echo $arr['genre']."1";?>"><?php echo $arr['genre'];?></a>
      </li>
    <?php } ?>
    </ul>
  </div>
</div>
<?php
$category=$_GET["category"];
require_once("connect.php");
$extract = "SELECT * from genres;";
$result = mysqli_query($conn,$extract);
$count = mysqli_num_rows($result);
$i=1;
while(($row=mysqli_fetch_array($result,MYSQLI_ASSOC))&& ($i<=$count)){
$id = $row["id_genres"];
        $extracts = "SELECT * from genres 
            inner join $category on genres.id_genres = $category.id_genres 
            where $category.id_genres='$id' limit 2;";
$result1 = mysqli_query($conn,$extracts);
$boolean1 = mysqli_num_rows($result1);
if($boolean1){
?>
<div class="genre" id="<?php echo $row["genre"]."1";?>">
<hr>	
  <h2><?php echo $row["genre"];?></h2>
<div id="carouselExampleFade<?php echo $i+100;?>" class="carousel slide " data-interval="false" data-ride="carousel">
  <div class="carousel-inner">
  	 <div class="carousel-item active ">
      <div class="row">
      <?php
while($rows=mysqli_fetch_array($result1,MYSQLI_ASSOC)){
?>
      <div class="col-sm-4 col-lg-2 col-md-3">
        <a href="description.php?category=<?php echo $category;?>&id=<?php echo $rows["id"];?>&object=<?php echo $rows["name"];?>">
          <img src="image/<?php echo $category;?>/<?php echo $rows["name"];?>.jpg" class="img-thumbnail img-fluid" alt="Third slide"></a>
        <p><?php echo $rows["name"]; ?></p>
      </div> 
<?php
}
?>   
</div>
</div>   
         <div class="carousel-item">
          <div class="row">
          <?php
          $extract2 = "SELECT * from genres 
          inner join $category on genres.id_genres = $category.id_genres where $category.id_genres='$id' LIMIT 2,2;";
$result2 = mysqli_query($conn,$extract2);
while($rows1=mysqli_fetch_array($result2,MYSQLI_ASSOC)){
?>
      <div class="col-sm-4 col-lg-2 col-md-3">
        <a href="description.php?category=<?php echo $category;?>&id=<?php echo $rows1["id"];?>&object=<?php echo $rows1["name"];?>">
          <img src="image/<?php echo $category;?>/<?php echo $rows1["name"];?>.jpg" class="img-thumbnail img-fluid" alt="Third slide"></a>
        <p><?php echo $rows1["name"]; ?></p>
      </div>   
    <?php
     }
     ?>
   </div>
    </div>
     <div class="carousel-item">
          <div class="row">
          <?php
          $extract2 = "SELECT * from genres 
          inner join $category on genres.id_genres = $category.id_genres where $category.id_genres='$id' LIMIT 4,2;";
$result2 = mysqli_query($conn,$extract2);
while($rows1=mysqli_fetch_array($result2,MYSQLI_ASSOC)){
?>
      <div class="col-sm-4 col-lg-2 col-md-3">
        <a href="description.php?category=<?php echo $category;?>&id=<?php echo $rows1["id"];?>&object=<?php echo $rows1["name"];?>">
          <img src="image/<?php echo $category;?>/<?php echo $rows1["name"];?>.jpg" class="img-thumbnail img-fluid" alt="Third slide"></a>
        <p><?php echo $rows1["name"]; ?></p>
      </div>   
    <?php
     }
     ?>
   </div>
    </div>
     <div class="carousel-item">
          <div class="row">
          <?php
          $extract2 = "SELECT * from genres 
          inner join $category on genres.id_genres = $category.id_genres where $category.id_genres='$id' LIMIT 6,2;";
$result2 = mysqli_query($conn,$extract2);
while($rows1=mysqli_fetch_array($result2,MYSQLI_ASSOC)){
?>
      <div class="col-sm-4 col-lg-2 col-md-3">
        <a href="description.php?category=<?php echo $category;?>&id=<?php echo $rows1["id"];?>&object=<?php echo $rows1["name"];?>">
          <img src="image/<?php echo $category;?>/<?php echo $rows1["name"];?>.jpg" class="img-thumbnail img-fluid" alt="Third slide"></a>
        <p><?php echo $rows1["name"]; ?></p>
      </div>   
    <?php
     }
     ?>
   </div>
    </div>
</div>

  <a class="carousel-control-prev" href="#carouselExampleFade<?php echo $i+100;?>" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleFade<?php echo $i+100;?>" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>

</div>
</div>
<hr>
<?php
}
$i++;
}
?>
</div>