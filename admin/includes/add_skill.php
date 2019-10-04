<?php include "../../config/db.php";?>
<?php include "../function.php";?>

<?php include "header.php";?>

<?php confirm_login_addskill();?>
<?php
if(isset($_POST['add_skill'])){
$skill = $_POST['skill'];
$per = $_POST['per'];

$skill = mysqli_real_escape_string($conn,$skill);
$per = mysqli_real_escape_string($conn,$per);

$query = "INSERT INTO skill(title,per) VALUES('$skill','$per')";
$result = mysqli_query($conn,$query);
if($result){
    header("Location:../skill.php");
    echo "skill add successfully.";
}else{
    echo "failed to add skill"; 
}


}


?>


<div class="container">
<div class="row">
<div class="col-sm-8">
<h4 class="text-center text-primary">Add skill</h4>
<form method="POST" action="<?php $_SERVER['PHP_SELF']; ?>">
<div class="form-group">
<label for="skill_name">Skill</label>
<input type="text" name="skill" class="form-control">
</div>
<div class="form-group">
<label for="skill_per">percentage</label>
<input type="text" name="per" class="form-control">
</div>
<input type="submit" name="add_skill" class="btn btn-outline-primary">

</form>

</div>

</div>

</div>
<?php include "footer.php";?>