<div class="container">
<div class="row">
<div class="col-sm-12 bg-dark" id="services">
<br>
<h2 class="text-center tag-line text-white">Services</h2><br>


</div>


</div>

</div>


<br>
<div class="container">
        <div class="col-sm-12">
     
<div class="row">
<?php 
   $query = "SELECT * FROM services";
   $result = mysqli_query($conn,$query);
   while($row=mysqli_fetch_array($result)){
     $id = $row['id'];
     $title = $row['title'];
     $details = $row['details'];
     $img = $row['img'];
     
  
   
   ?>
    <div class="col-sm-4">
  
   <img src="" alt="">
    <div class="card">
  <div class="embed-responsive embed-responsive-16by9">
     <img alt="Card image cap" class="card-img-top embed-responsive-item" src="images/<?php echo $img;?>">
  </div>
  <div class="card-block">
    <h4 class="card-title"><?php echo $title;?></h4></a>
    <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Rerum veritatis suscipit dicta non nihil voluptatem modi culpa.</p>
  </div>
</div>
    </div>
<br>
 


  <?php }?>
    


</div>




        </div>
        </div>
  <br>