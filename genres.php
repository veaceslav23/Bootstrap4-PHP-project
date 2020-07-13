<div class="nomobile">

  <h2 class="mt-3">Genres</h2>
<?php
require_once("connect.php");
$extract = "SELECT * from genres;";
$result = mysqli_query($conn,$extract);
?>
<div id="carousel" class="carousel slide my-5" data-interval="false" data-ride="carousel">
  <div class="carousel-inner">
     <div class="carousel-item active ">
      <div class="row">
        <?php while($arr = mysqli_fetch_array($result,MYSQLI_ASSOC)){ ?>
        <div class="col-md-2 mx-auto">
       <a class="btn btn-lg btn-outline-danger" href="#<?php echo $arr['genre'];?>"><?php echo $arr['genre'];?></a>
        </div>
      <?php } ?>
      </div>
    </div>
    <div class="carousel-item">
    </div>
</div>
<a class="carousel-control-prev d-none" href="#carousel" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next d-none" href="#carousel" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<?php
$category=$_GET["category"];
$extract = "SELECT * from genres;";
$result = mysqli_query($conn,$extract);
$count = mysqli_num_rows($result);
$i=1;
while(($row=mysqli_fetch_array($result,MYSQLI_ASSOC))&& ($i<=$count)){
   $id = $row["id_genres"];
        $extracts = "SELECT * from genres 
            inner join $category on genres.id_genres = $category.id_genres 
            where $category.id_genres='$id' limit 4;";
        $result1 = mysqli_query($conn,$extracts);
        $boolean = mysqli_num_rows($result1);
        if($boolean){
?>
<div class="genre" id="<?php echo $row["genre"];?>">
<hr>	
 
<div id="carouselExampleFade<?php echo $i;?>" class="carousel slide " data-interval="false" data-ride="carousel">
   <h2><?php echo $row["genre"];?></h2>
  <div class="carousel-inner">
  	 <div class="carousel-item active ">
      <div class="row">
      <?php
     
while($rows=mysqli_fetch_array($result1,MYSQLI_ASSOC)){
?>
      <div class="col-sm-4 col-lg-2 col-md-3">
       <a href="description.php?category=<?php echo $category;?>&id=<?php echo $rows["id"];?>&object=<?php echo $rows["name"];?>"><img src="image/<?php echo $category;?>/<?php echo $rows["name"];?>.jpg" class="img-thumbnail img-fluid" alt="Third slide" ></a>
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
          inner join $category on genres.id_genres = $category.id_genres where $category.id_genres='$id' LIMIT 4,4;";
$result2 = mysqli_query($conn,$extract2);
while($rows1=mysqli_fetch_array($result2,MYSQLI_ASSOC)){
?>
      <div class="col-sm-4 col-lg-2 col-md-3">
        <a href="description.php?category=<?php echo $category;?>&id=<?php echo $rows1["id"];?>&object=<?php echo $rows1["name"];?>"><img src="image/<?php echo $category;?>/<?php echo $rows1["name"];?>.jpg" class="img-thumbnail img-fluid" alt="Third slide"></a>
        <p><?php echo $rows1["name"]; ?></p>
      </div>   
    <?php
     }
     ?>
   </div>
    </div>
</div>

  <a class="carousel-control-prev" href="#carouselExampleFade<?php echo $i;?>" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleFade<?php echo $i;?>" role="button" data-slide="next">
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