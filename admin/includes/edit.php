<?php include "../../config/db.php";?>

<?php include "../function.php";?>
<?php include "header.php";?>
<?php confirm_login_addskill();?>

<?php
if(isset($_POST['submit'])){
 $skill_id = $_POST['skill_id'];  
 $skill= $_POST['title'];
$per = $_POST['per'];

$query = "UPDATE skill SET title='$skill',
                            per='$per' WHERE id=$skill_id";
$result = mysqli_query($conn,$query);
if($result){
    header("Location:../skill.php");
    echo "skill update successfully.";
}else{
    echo "failed to update skill"; 
}


}


?>
<?php
$skill_id = $_GET['id'];
 $query = "SELECT * FROM skill WHERE id =$skill_id";
 $result = mysqli_query($conn,$query);
 $post = mysqli_fetch_assoc($result);
 if(!$result){
     echo "failed".mysqli_error($conn);
 }



?>

<div class="container">
<div class="row">
<div class="col-sm-8">
<h4 class="text-center text-primary">Edit skill</h4>
<form method="POST" action="<?php $_SERVER['PHP_SELF']; ?>">
<div class="form-group">
<label for="skill_name">Skill</label>
<input type="text" name="title" class="form-control" value="<?php echo $post['title'] ;?>">
</div>
<div class="form-group">
<label for="skill_per">percentage</label>
<input type="text" name="per" class="form-control" value="<?php echo $post['per'] ;?>">
</div>
<input type="hidden" name="skill_id" value="<?php echo $post['id']; ?>">
<input type="submit" name="submit" class="btn btn-outline-primary">

</form>

</div>

</div>

</div>
<?php include "footer.php";?>