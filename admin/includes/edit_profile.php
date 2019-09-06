<?php include "header.php";?>
<?php include "../includes/db.php";?>

<?php
if(isset($_POST['submit'])){
 $about_id = $_POST['about_id'];  
 $first_name= $_POST['first_name'];
 $abt1= $_POST['abt1'];
 $abt2= $_POST['abt2'];
 $email= $_POST['email'];
 $address= $_POST['address'];
 $image= $_FILES['image']['name'];
 $tmp_image= $_FILES['image']['tmp_name'];

 move_uploaded_file($tmp_image,"../images/$image");


$query = "UPDATE about SET first_name='$first_name',abt1='$abt1',abt2='$abt2',email='$email',addres='$address',img='$image' WHERE id=$about_id";
$result = mysqli_query($conn,$query);
if($result){
   
    echo "<h5 class='text-success'>update successfully.</h5>";
    header("Location:../profile.php");
}else{
    echo "failed to update "; 
}


}


?>
<?php

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $query = "SELECT * FROM about WHERE id =$id";
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
<h4 class="text-center text-primary">Edit Details</h4>
<form method="POST" action="<?php $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data">
<div class="form-group">
<label for="name">Name</label>
<input type="text" name="first_name" class="form-control" value="<?php echo $post['first_name'] ;?>">
</div>
<div class="form-group">
<label for="name">about 1</label>
<input type="text" name="abt1" class="form-control" value="<?php echo $post['abt1'] ;?>">
</div>
<div class="form-group">
<label for="name">about 2</label>
<input type="text" name="abt2" class="form-control" value="<?php echo $post['abt2'] ;?>">
</div>
<div class="form-group">
<label for="name">email</label>
<input type="email" name="email" class="form-control" value="<?php echo $post['email'] ;?>">
</div>
<div class="form-group">
<label for="name">address</label>
<input type="text" name="address" class="form-control" value="<?php echo $post['addres'] ;?>">
</div>
<div class="form-group">

<label for="name">Image</label>
<input type="file" name="image" class="form-control" value=""><p class="text-success">previous image <span><img src="../images/<?php echo $post['img'] ;?>" alt="" width="100px" height="100px"></span></p>
</div>

<input type="hidden" name="about_id" value="<?php echo $post['id']; ?>">
<input type="submit" name="submit" class="btn btn-primary">

</form>

</div>

</div>

</div>
<?php include "footer.php";?>