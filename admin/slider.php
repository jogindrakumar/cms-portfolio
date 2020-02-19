
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
    
  <?php include "navigations/slider_nav.php"; ?>
    
    </div>

    <div class="col-sm-10">
   <div class="row">
   <div class="col-sm-4">
   <div class="">
   <h5 class="text-center text-primary"><i class="fa far fa-image"></i> SLIDER IMAGES
    
    
    </h5>

   </div><br><hr>
    <?php 
  
    
?>
<!-- get id -->
<?php

$query = "SELECT * FROM slider";
$result = mysqli_query($conn,$query);
if(!$result){
    echo "query failed".mysqli_error($conn);
}
while($row=mysqli_fetch_assoc($result)){
    $id = $row['id'];
   $image = $row['images'];
   

?>


<img class="img-thumbnail" src="../images/<?php echo $image; ?>" alt="" width="100px" height="100px">

<a href="includes/edit_slide.php?id=<?php echo $id; ?>" class="btn btn-dark">EDIT</a>
<a href="slider.php?id=<?php echo $id;?>" class="btn btn-secondary">DELETE
 </a>
 
<br><p><?php  ?></p>


<?php } ?>
  <!-- delete query for slide -->
 <?php
 
    if(isset($_GET['id'])){
        $the_slide_id = $_GET['id'];
        
        $query = "DELETE FROM slider WHERE id=$the_slide_id";
        $delete_query = mysqli_query($conn,$query);
       
        
         //echo "<h6 class='text-success text-center'>skill Delete successfully.</h6>";
         header("Location:slider.php");
        
    }
    
    
    ?> 
   
   </div>
   <?php
$msg = '';
if(isset($_POST['submit'])){
    
    $image = $_FILES['image']['name'];
    $tmp_image = $_FILES['image']['tmp_name'];
    
    move_uploaded_file($tmp_image,"../images/$image");
    
    $query = "INSERT INTO slider (images) VALUES ('$image')";
    $query_result = mysqli_query($conn,$query);
    
    if($query_result){
        $msg = 'image upload successfully!';
        header("Location:slider.php");
    }else{
        $msg = 'error'.mysqli_error($conn);
    }
}


?>

<?php 

$query = "SELECT * FROM slider";
$result = mysqli_query($conn,$query);

$rowcount = mysqli_num_rows($result);

?>

 <!-- carousel slider shown here  -->
 
   <div class="col-sm-8">
   <div class="container-fluid">
       <div class="row">
           <div class="col-sm-12">
               <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
   <?php
       for($i=1;$i<=$rowcount;$i++)
       {
           $row = mysqli_fetch_array($result);
       
          if($i==1){
      
      
      ?>
    <div class="carousel-item active">
      <img src="../images/<?php echo $row['images'];?>" class="d-block w-100" alt="..." width="100%" height="400px">
    </div>
    
    <?php }else{
        ?>
    <div class="carousel-item">
      <img src="../images/<?php echo $row['images'];?>" class="d-block w-100" alt="..." width="100%" height="400px">
    </div><?php } ?>
    <?php }  ?>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
               
               
           </div>
       </div>
       
       
       
   </div> 
  
    <h5 class="text-center text-primary">ADD more images here ..</h5>
    
    <div class="container-fluid">
        <div class="row justify-content-center">
           
            <div class="col-sm-4 bg-dark">
                <h5 class="text-center text-success"><?php echo $msg; ?></h5>
               <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                    <label for="image" class="text-primary">image</label>
                    <input type="file" name="image" class="form-control">
                </div>
                <div class="form-group  bg-dark">
                    <input type="submit" name="submit" value="upload" class="form-control btn btn-primary">
                </div>
                   
               </form>
                
            </div>
        </div>
        
    </div>
   
   <p class="text-center text-warning">To view better Image should be 1200px by 480px</p>
   
   
   </div>
   
   </div>
    </div>

    
    </div>
    
    </div>
   
    <?php include "includes/footer.php";?>

   