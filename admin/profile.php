
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
    
    <div class="flex-column" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="index.php"><i class="fa fas fa-bars"></i>Dashboard<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="slider.php"><i class="fa far fa-image"></i>Image Slider</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="profile.php"><i class="fa fas fa-user"></i>profile</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="skill.php"><i class="fa fas fa-cogs"></i>skill</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="services.php"><i class="fa fas fa-wrench"></i>Services</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="work.php"><i class="fa fas fa-briefcase"></i>Work</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="msg.php"><i class="fa fas fa-envelope-open"></i>message</a>
      </li>
      </li> <li class="nav-item">
        <a class="nav-link" href="logout.php"><i class="fas fa-power-off"></i>Sign-Out</a>
      </li>
    </ul>
  </div>
    
    </div>






    <div class="col-sm-10">
    <div class=""> <h5 class="text-primary text-center">PROFILE</h5></div><br><hr>


    <?php 
    $query = "SELECT * FROM about";
    $result = mysqli_query($conn,$query);
    if(!$result){
        echo "query failed".mysqli_error($conn);
    }
    while($row=mysqli_fetch_array($result)){
    $id = $row['id'];
    $first_name = $row['first_name'];
    $abt1 = $row['abt1'];
    $abt2 = $row['abt2'];
    $email = $row['email'];
    $address = $row['addres'];
    $image = $row['img'];
   
    
    
?>


 <div class="card mb-3" style="max-width: 540px;">
  <div class="row no-gutters">
    <div class="col-md-4">
      <img src="images/<?php echo $image;?>" class="card-img" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title text-primary"><?php echo $first_name; ?></h5>
        <p class="card-text"><?php echo $abt1; ?></p>
        <p class="card-text"><small class="text-muted"><?php echo $abt2; ?></small></p>
        <p class="card-text"><small class="text-muted"><?php echo $email; ?></small></p>
        <p class="card-text"><small class="text-muted"><?php echo $address; ?></small></p>
<a href="includes/edit_profile.php?id=<?php echo $id;?>" class="btn btn-outline-dark">Edit</a>

      </div>
      
    </div>
  </div>
</div>
<!-- <i class="fa fa-edit fa-edit" aria-hidden="true" style="font-size:25px;"></i> -->

    </div>
    <?php  } ?>
    
    </div>
    
    </div>
    <?php
    if(isset($_GET['delete'])){
        $the_skill_id = $_GET['delete'];
        
        $query = "DELETE FROM about WHERE id=$the_skill_id";
        $delete_query = mysqli_query($conn,$query);
       
        
         echo "<h6 class='text-success text-center'>skill Delete successfully.</h6>";
        
    }
    
    
    ?>
<?php include "includes/footer.php";?>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>   
</body>
</html>