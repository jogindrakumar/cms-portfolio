
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
    
    <?php include "navigations/work_nav.php"; ?>
   
    
    </div>

    <div class="col-sm-10">
   <div class="">
   <h5 class="text-center text-primary"><i class="fa fas fa-briefcase"></i> WORK
    
    
    </h5>
    
   </div>
   
   <a href="includes/add_work.php" class="btn btn-primary">Add Work</a>
   <br>
   <hr>
<!-- get id -->

<div class="row">
<?php 
  $query = "SELECT * FROM work";
  $result = mysqli_query($conn,$query);
  if(!$result){
      echo "query failed".mysqli_error($conn);
  }
  
  $works = mysqli_fetch_all($result,MYSQLI_ASSOC);
  foreach($works as $work):
  $work_id = $work['id']; 
  
?> 
                  <div class="col-sm-4">
                    <div class="card" style="width: 18rem;">
  <img src="../images/<?php echo $work['img']; ?>" class="card-img-top" alt="...">
  <div class="card-body">
  <h5 class="card-title"><?php echo $work['title']; ?></h5>
    <p class="card-text"><?php echo $work['details'] ; ?></p>
    

    <a href="#" class="btn btn-outline-primary">View</a>
  
 
<a class="btn btn-outline-dark" href="includes/edit_work.php?id=<?php echo $work_id;?>">Edit</a>
<a class="btn btn-outline-danger" href="work.php?delete=<?php echo $work_id;?>">Delete</a>




  </div>
</div>

                  <br>    
                  </div>
    <?php endforeach;   ?>
                </div>
              
                <?php
   if(isset($_GET['delete'])){
    $work_id = $_GET['delete'];
    
    $query = "DELETE FROM work WHERE id=$work_id";
    $delete_query = mysqli_query($conn,$query);
    
    if(!$delete_query){
    
     echo "failed".mysqli_error($conn);
    }
    header("Location: work.php");
    mysqli_close($conn);  
    
}
    
    ?>

 

    </div>


    </div>
    
    </div>
   
    <?php include "includes/footer.php";?>

 