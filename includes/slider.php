
<?php


$query = "SELECT * FROM slider";
$result = mysqli_query($conn,$query);

$rowcount = mysqli_num_rows($result);

?>


  <!-- main container -->
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
      <img src="images/<?php echo $row['images'];?>" class="d-block w-100" alt="..." width="100%" height="auto">
    </div>
    
    <?php }else{
        ?>
    <div class="carousel-item">
      <img src="images/<?php echo $row['images'];?>" class="d-block w-100" alt="..." width="100%" height="auto">
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
    <br>
    
