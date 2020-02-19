


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
    
   <?php include "navigations/services_nav.php"; ?>
    
    </div>

    <div class="col-sm-10">
   <div class="">
   <h5 class="text-center text-primary"><i class="fa fas fa-wrench"></i> SERVICES
    
    
    </h5>

   </div><br><hr>
   
 
<!-- get id -->
<?php




?>

<div class="row">
<?php 
    $query = "SELECT * FROM services";
    $result = mysqli_query($conn,$query);
    if(!$result){
        echo "query failed".mysqli_error($conn);
    }
    while($row=mysqli_fetch_array($result)){
    $service_id = $row['id'];
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
    

    <a href="#" class="btn btn-outline-primary">View</a>
  
 
<a class="btn btn-outline-dark" href="includes/edit_services.php?id=<?php echo $service_id;?>">Edit</a>



  </div>
</div>

                  <br>    
                  </div>
                  <?php   } ?>
                </div>
              


 

    </div>

    
    </div>
    
    </div>
    <?php include "includes/footer.php";?>

