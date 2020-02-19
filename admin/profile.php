
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
    
   <?php include "navigations/profile_nav.php"; ?>
    
    </div>






    <div class="col-sm-10">
    <div class=""> <h5 class="text-primary text-center"><i class="fa fas fa-user"></i> PROFILE</h5></div><br><hr>


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
    $maps = $row['mps'];
    $image = $row['img'];
   
    
    
?>


 <div class="card mb-3" style="max-width: 540px;">
  <div class="row no-gutters">
    <div class="col-md-4">
      <img src="images/<?php echo $image;?>" class="card-img" alt="...">
    </div>
    <div class="col-md-6">
      <div class="card-body">
        <h5 class="card-title text-primary"><?php echo $first_name; ?></h5>
        <p class="card-text"><?php echo $abt1; ?></p>
        <p class="card-text"><small class="text-muted"><?php echo $abt2; ?></small></p>
        <p class="card-text"><small class="text-muted"><?php echo $email; ?></small></p>
        <p class="card-text"><small class="text-muted"><?php echo $address; ?></small></p>
<a href="includes/edit_profile.php?id=<?php echo $id;?>" class="btn btn-outline-dark">Edit</a>

      </div>
      
    </div>
    <div class="col-sm-2">
    <div class="card">
    <?php echo $maps;?>
    </div>
    
    </div>
  </div>
</div>


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

