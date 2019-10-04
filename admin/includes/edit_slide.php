
<?php include "../function.php";?>
<?php include "../../config/db.php";?>

<?php include "header.php";?>
<?php confirm_login_addskill();?>
<?php
if(isset($_POST['submit'])){
$id = $_GET['id'];  
 $images= $_FILES['image']['name'];
 $image_temp = $_FILES['image']['tmp_name'];

 move_uploaded_file($image_temp, "../../images/$images");


$query = "UPDATE slider SET images='$images' WHERE id='$id'";
$result = mysqli_query($conn,$query);
if($result){
    header("Location:../slider.php");
    echo "image update successfully.";
}else{
    echo "failed to update skill".mysqli_error($conn); 
}


}


?>
<?php
if(isset($_GET['id'])){
    $slider_id = $_GET['id'];
    $query = "SELECT * FROM slider WHERE id =$slider_id";
    $result = mysqli_query($conn,$query);
    $post = mysqli_fetch_assoc($result);
    if(!$result){
        echo "failed".mysqli_error($conn);
    }


}




?>

<div class="container">
<div class="row">
<div class="col-sm-8">
<h4 class="text-center text-primary">Edit slide images</h4>
<form method="POST" action="<?php $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data">
<div class="form-group">
<label for="file">image</label>
<input type="file" name="image" class="form-control" value="">
</div>


<input type="hidden" name="id" value="<?php echo $post['id']; ?>"><br>
<input type="submit" name="submit" class="btn btn-outline-primary">

</form>

</div>

<br><br>
<div class="col-sm-4">

<div class="container">
<div class="row">
<div class="card bg-dark text-white">
  <img src="../../images/<?php echo $post['images']; ?>" alt="" width="200px" height="200px" class="card-img" alt="...">
  <div class="card-img-overlay">
    <h5 class="card-title text-center">previous Images</h5>
    
  </div>
</div>


</div>

</div>


</div>

</div>

</div>
<?php include "footer.php";?>