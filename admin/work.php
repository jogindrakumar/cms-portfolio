

    


<?php include "function.php";?>


<?php  include "../config/db.php"; ?>


<?php include "includes/header.php";?>


<body>
<?php include "includes/navbar.php";?>
<br>
    <div class="col-sm-12">
    <div class="row">
    <div class="col-sm-2">
    
    <div class="flex-column" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="index.php"><i class="fa fas fa-bars"></i>Dashboard<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="slider.php"><i class="fa far fa-image"></i>Image Slider</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="profile.php"><i class="fa fas fa-user"></i>profile</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="skill.php"><i class="fa fas fa-cogs"></i>skill</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="services.php"><i class="fa fas fa-wrench"></i>Services</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="work.php"><i class="fa fas fa-briefcase"></i>Work</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"><i class="fa fas fa-envelope-open"></i>message</a>
      </li>
     
    </ul>
  </div>
    
    </div>






    <div class="col-sm-10">
   <div class="">
   <h5 class="text-center text-primary">WORK
    
    
    </h5>
    
   </div>
   
   <a href="includes/add_work.php" class="btn btn-primary">Add Work</a>
   <br>
   <hr>
<!-- get id -->
<?php




?>

<div class="row">
<?php 
    $query = "SELECT * FROM work";
    $result = mysqli_query($conn,$query);
    if(!$result){
        echo "query failed".mysqli_error($conn);
    }
    while($row=mysqli_fetch_array($result)){
    $work_id = $row['id'];
    $title = $row['title'];
    $details = $row['details'];
    $image = $row['img'];
    
?> 
                  <div class="col-sm-4">
                    <div class="card" style="width: 18rem;">
  <img src="../images/<?php echo $image; ?>" class="card-img-top" alt="...">
  <div class="card-body">
  <h5 class="card-title"><?php echo $title ; ?></h5>
    <p class="card-text"><?php echo $details ; ?></p>
    

    <a href="#" class="btn btn-primary">View</a>
  
 
<a class="btn btn-dark" href="includes/edit_work.php?id=<?php echo $work_id;?>">Edit</a>
<a class="btn btn-secondary" href="work.php?delete=<?php echo $work_id;?>">Delete</a>




  </div>
</div>

                  <br>    
                  </div>
                  <?php   } ?>
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

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>   
</body>
</html>