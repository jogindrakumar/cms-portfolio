<?php include "../../config/db.php";?>

<?php include "../function.php";?>
<?php include "header.php";?>

<?php confirm_login_addskill();?>
<?php
if(isset($_POST['add_work'])){
$title = $_POST['title'];
$details = $_POST['details'];
$image = $_FILES['image']['name'];
$temp_image = $_FILES['image']['tmp_name'];
move_uploaded_file($temp_image,"../../images/$image");


$title = mysqli_real_escape_string($conn,$title);
$details = mysqli_real_escape_string($conn,$details);

if($skill == "" || empty($per)){
   

    echo "<script>
    swal('check all field!', '', 'error')</script>";
}

$query = "INSERT INTO work(title,details,img) VALUES('$title','$details','$image')";
$result = mysqli_query($conn,$query);
if($result){
    header("Location:../work.php");
    echo "work add successfully.";
}else{
    echo "failed to add work"; 
}


}


?>


<div class="container">
<div class="row">
<div class="col-sm-8">
<h4 class="text-center text-primary">Add work</h4>
<form method="POST" action="<?php $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data">
<div class="form-group">
<label for="work_name">Title</label>
<input type="text" name="title" class="form-control">
</div>
<div class="form-group">
<label for="details">Details</label>
<input type="text" name="details" class="form-control">
</div>
<div class="form-group">
<label for="image">Image</label>
<input type="file" name="image" class="form-control">
</div>
<input type="submit" name="add_work" class="btn btn-outline-primary">

</form>

</div>

</div>

</div>
<?php include "footer.php";?>