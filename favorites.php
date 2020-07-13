<div class="nomobile">
<?php
require_once("connect.php");
        $extracts = "SELECT * from user_favorites 
                    inner join movies on movies.id = user_favorites.id_movie
                    where id_user ='$iduser';";
        $result1 = mysqli_query($conn,$extracts);
        $extract2 = "SELECT * from user_favorites 
                    inner join series on series.id = user_favorites.id_series
                    where id_user ='$iduser';";
        $result2 = mysqli_query($conn,$extract2);
        $extract3 = "SELECT * from user_favorites 
                    inner join anime on anime.id = user_favorites.id_anime
                    where id_user ='$iduser';";
        $result3 = mysqli_query($conn,$extract3);
?>
<div class="genre" id="<?php echo $row["genre"];?>">
      <div class="row">
      <?php
while($rows=mysqli_fetch_array($result1,MYSQLI_ASSOC)){
?>
      <div class="col-sm-4 col-lg-2 col-md-3">
       <img src="image/<?php echo 'movies';?>/<?php echo $rows["name"];?>.jpg" class="img-thumbnail img-fluid" width="142" height="200">
        <p><?php echo $rows["name"]; ?></p>
        <p><button class="btn btn-outline-warning" name="remove">Remove</button></p>
      </div> 
<?php
}
?>
       <?php
while($rows=mysqli_fetch_array($result2,MYSQLI_ASSOC)){
?>
     <div class="col-sm-4 col-lg-2 col-md-3">
       <img src="image/<?php echo 'series';?>/<?php echo $rows["name"];?>.jpg" class="img-thumbnail img-fluid" width="142" height="200">
        <p><?php echo $rows["name"]; ?></p>
        <p><button class="btn btn-outline-warning" name="remove">Remove</button></p>
      </div> 
<?php
}
?>
      <?php
while($rows=mysqli_fetch_array($result3,MYSQLI_ASSOC)){
?>
     <div class="col-sm-4 col-lg-2 col-md-3">
       <img src="image/<?php echo 'anime';?>/<?php echo $rows["name"];?>.jpg" class="img-thumbnail img-fluid">
        <p><?php echo $rows["name"]; ?></p>
        <p><button class="btn btn-outline-warning" name="remove">Remove</button></p>
      </div> 
<?php
}
?>  
</div>
</div>
<hr>
</div>