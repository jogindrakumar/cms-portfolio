<?php include "../../config/db.php";?>
<?php include "../function.php";?>
<?php include "header.php";?>

<?php confirm_login_addskill();?>
<?php
if(isset($_POST['submit'])){
 $service_id = $_POST['service_id'];  
 $title= $_POST['title'];
$details = $_POST['details'];
$image = $_FILES['image']['name'];
$temp_image = $_FILES['image']['tmp_name'];

move_uploaded_file($temp_image,"../../images/$image");
$title = mysqli_real_escape_string($conn,$title);
$details = mysqli_real_escape_string($conn,$details);

$query = "UPDATE services SET title='$title',
                            details='$details',
                            img='$image' WHERE id=$service_id";
$result = mysqli_query($conn,$query);
if($result){
    header("Location:../services.php");
    echo "services  update successfully.";
}else{
    echo "failed to update services"; 
}


}


?>
<?php
$service_id = $_GET['id'];
 $query = "SELECT * FROM services WHERE id =$service_id";
 $result = mysqli_query($conn,$query);
 $post = mysqli_fetch_assoc($result);
 if(!$result){
     echo "failed".mysqli_error($conn);
 }



?>

<div class="container">
<div class="row">
<div class="col-sm-8">
<h4 class="text-center text-primary">Edit SERVICES</h4>
<form method="POST" action="<?php $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data">
<div class="form-group">
<label for="title_name">Title Name</label>
<input type="text" name="title" class="form-control" value="<?php echo $post['title'] ;?>">
</div>
<div class="form-group">
<label for="details">Details</label>
<input type="text" name="details" class="form-control" value="<?php echo $post['details'] ;?>">
</div>
<div class="form-group">
<label for="images">Image</label>
<input type="file" name="image" class="form-control" value="">
</div>
<div class="form-group">
<p>previous image</p>
<img src="../../images/<?php echo $post['img'] ;?>" alt="" width="150px" height="150px">

</div>




<input type="hidden" name="service_id" value="<?php echo $post['id']; ?>">
<input type="submit" name="submit" class="btn btn-outline-primary">

</form>

</div>

</div>

</div>

<?php include "footer.php";?>