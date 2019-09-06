<?php  include "../config/db.php"; ?>


<?php include "includes/header.php";?>


<body><br>
    <div class="col-sm-12">
    <div class="row">
    <div class="col-sm-3">
    
    <div class="flex-column" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="slider.php">Image Slider</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="profile.php">profile</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="skill.php">skill</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="services.php">Services</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="work.php">Work</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">message</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">setting</a>
      </li>
    </ul>
  </div>
    
    </div>






    <div class="col-sm-9">
    <h5>Profile</h5>


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
<p><img src="images/<?php echo $image;?>" alt="" width="150px" height="100px" class="img-thumbnail"></p>
    <h4><?php echo $first_name; ?></h4>
<p> <?php echo $abt1; ?></p>
<p> <?php echo $abt2; ?></p>
<p> <?php echo $email; ?></p>
<p> <?php echo $address; ?></p>

 
<a href="includes/edit_profile.php?id=<?php echo $id;?>"><i class="fa fa-edit fa-edit" aria-hidden="true" style="font-size:25px;"></i></a>

    </div>
    <?php  echo "<br>"; } ?>
    
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


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>   
</body>
</html>