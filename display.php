<?php
require_once("connect.php");
$table = $_GET["category"];
$id = $_GET["id"];
$extract = "SELECT * from $table inner join genres on $table.id_genres = genres.id_genres where $table.id=$id;";
$query = mysqli_query($conn,$extract);
$row = mysqli_fetch_array($query,MYSQLI_ASSOC);

?>
<?php if($table=="movies"){?>
			<input type="hidden" name="id" value="<?php echo "$id";?>" />
			<input type="hidden" name="category" value="<?php echo "$table";?>" />
			<h1><?php echo $row["name"];?> <button class="btn btn-outline-warning" name="favorite">Add to favorites</button></h1>
			<p class="text-monospace"><?php echo $row["year"]; ?>, 
			<?php echo $row["country"]; ?>, 
			<?php echo $row["genre"]; ?>, 
			<i class="far fa-clock"></i> <?php echo $row["duration"]; ?></p>
		<?php 
		if(isset($_GET['favorite']))
{
$boolean="SELECT * from user_favorites where id_user = $iduser and id_movie = $id;";
$query = mysqli_query($conn,$boolean);
$count = mysqli_num_rows($query);
if($count==0){
$insert="INSERT into user_favorites(id_user,id_movie) values($iduser,$id);";
mysqli_query($conn,$insert);
echo '<script language="javascript">';
echo 'alert("Added successfully")';
echo '</script>';
}
}
			}else if($table=="series"){?>
				<input type="hidden" name="id" value="<?php echo "$id";?>" />
			<input type="hidden" name="category" value="<?php echo "$table";?>" />
			<h1><?php echo $row["name"];?> <button class="btn btn-outline-warning" name="favorite">Add to favorites</button></h1>
			<p class="text-monospace"><?php echo $row["year"]; ?>, 
			<?php echo $row["country"]; ?>, 
			<?php echo $row["genre"]; ?>, 
			<?php echo $row["episodes"]; ?> episodes</p>
		<?php if(isset($_GET['favorite']))
{
$boolean="SELECT * from user_favorites where id_user = $iduser and id_series = $id;";
$query = mysqli_query($conn,$boolean);
$count = mysqli_num_rows($query);	
if($count==0){
$insert="INSERT into user_favorites(id_user,id_series) values($iduser,$id);";
mysqli_query($conn,$insert);	
echo '<script language="javascript">';
echo 'alert("Added successfully")';
echo '</script>';
}
} }else if($table=="anime"){?>
			<input type="hidden" name="id" value="<?php echo "$id";?>" />
			<input type="hidden" name="category" value="<?php echo "$table";?>" />
			<h1><?php echo $row["name"];?> <button class="btn btn-outline-warning" name="favorite">Add to favorites</button></h1>
			<p class="text-monospace"><?php echo $row["year"]; ?>,
			<?php echo $row["genre"]; ?>, 
			<?php echo $row["episodes"]; ?> episodes</p>
		<?php if(isset($_GET['favorite']))
{
	$boolean="SELECT * from user_favorites where id_user = $iduser and id_anime = $id;";
$query = mysqli_query($conn,$boolean);
$count = mysqli_num_rows($query);
if($count==0){
$insert="INSERT into user_favorites(id_user,id_anime) values($iduser,$id);";
mysqli_query($conn,$insert);
echo '<script language="javascript">';
echo 'alert("Added successfully")';
echo '</script>';	
}
}}?>

