

<?php include "../config/db.php";?>
<?php include "function.php";?> 
<?php include "includes/header.php";?>

<?php confirm_login();?>
<body>
<?php include "includes/navbar.php";?>
<br>
    <div class="col-sm-12">
    <div class="row">
    <div class="col-sm-2">
    
    <?php include "navigations/skill_nav.php";?>
    
    </div>

    <div class="col-sm-10">
   <div class="bg"> <h5 class="text-primary text-center"><i class="fa fas fa-cogs"></i> SKILL</h5>
   </div><br><hr>
  <div>
  
  <?php add_skill(); ?>
  <form method="POST" action="<?php $_SERVER['PHP_SELF']; ?>">
<div class="row">
<div class="form-group col">
<!-- <label for="skill_name">Skill</label> -->
<input type="text" name="skill" class="form-control" placeholder="skill name">
</div>
<div class="form-group col">
<!-- <label for="skill_per">percentage</label> -->
<input type="text" name="per" class="form-control" placeholder="Skill percentage 0-100">
</div>


</div>
<input type="submit" name="add_skill" class="btn btn-outline-primary" value="Add Skill">

</form>
  
  <!-- <a href="includes/add_skill.php" class="btn btn-primary">Add Skill</a> -->
  
  </div>

   <br>
   <br>
   
    <?php 
    $query = "SELECT * FROM skill";
    $result = mysqli_query($conn,$query);
    if(!$result){
        echo "query failed".mysqli_error($conn);
    }
    while($row=mysqli_fetch_array($result)){
    $skill_id = $row['id'];
    $title = $row['title'];
    $per = $row['per'];
    
?>
<!-- get id -->
<?php




?>


<?php echo $title ; ?>

 <div class="container">
 <div class="row">
 <div class="col-sm-7">
 <div class="progress" style="height: 8px;">
    <div class="progress-bar progress-bar-striped progress-bar-animated bg-primary" role="progressbar" style="width: <?php echo $per; ?>%" aria-valuenow="<?php echo $per; ?>" aria-valuemin="0" aria-valuemax="100">
    
    </div>
  </div>
 
 
 </div>
 <div class="col-sm-5">
 
 <a href="includes/edit.php?id=<?php echo $skill_id;?>" class="btn btn-outline-dark">EDIT</a>
 
 <a href="skill.php?delete=<?php echo $skill_id;?>" class="btn btn-outline-danger">
 DELETE</a>
 
 </div>
 
 </div>
 
 
 </div>

    <?php   } ?>

    <?php
    $msg = '';
    
    if(isset($_GET['delete'])){
        $the_skill_id = $_GET['delete'];
        
        $query = "DELETE FROM skill WHERE id=$the_skill_id";
        $delete_query = mysqli_query($conn,$query);
       
        if(!$delete_query){
         
          echo "failed".mysqli_error($conn);
        }
      else{
        
header("Location: skill.php");

        
      } 
        
    }
    
    
    ?>
   
    </div>

    
    </div>
    
    </div>
   
    <?php include "includes/footer.php";?>

  