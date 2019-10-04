
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
      <li class="nav-item">
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
      <li class="nav-item active">
        <a class="nav-link" href="msg.php"><i class="fa fas fa-envelope-open"></i>message</a>
      </li>
      </li> <li class="nav-item">
        <a class="nav-link" href="logout.php"><i class="fas fa-power-off"></i>Sign-Out</a>
      </li>
    </ul>
  </div>
    
    </div>






    <div class="col-sm-10">
   <div class="">
   <h5 class="text-center text-primary">Inbox
    
    
    </h5>
    
   </div>

   
   
   <table class="table table-hover">
  <thead>
    <tr>
     
      <th scope="col">Name</th>
      <th scope="col">E-mail</th>
      <th scope="col">Message</th>
      <th scope="col">view</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
    <tr>
    <?php
   $query = "SELECT * FROM msg ";
   $result = mysqli_query($conn,$query);
   while($row=mysqli_fetch_array($result)){
     $id = $row['id'];
     $name = $row['visiter_name'];
     $email = $row['email'];
     $message = $row['msg'];
   
   
   
   ?>
      <td><?php echo $name; ?></td>
      <td><?php echo $email; ?></td>
      <td><?php echo $message; ?></td>
      
      <td><button class="btn btn-outline-primary">View</button></td>
      <td>  <a href="msg.php?delete=<?php echo $id; ?>" class="btn btn-outline-danger">Delete</a> </td>
      
     
    </tr>



    <?php } ?>
    
  </tbody>
</table>

<?php // Delete msg query 
                if(isset($_GET['delete'])){

                  $get_id = $_GET['delete'];

                  $query = "DELETE FROM msg WHERE id= $get_id";
                  $result = mysqli_query($conn,$query);
                  if(!$result){
                    echo "query failed".mysqli_error($conn);
                  }
                  header("Location: msg.php");
                } 
                ?>
<!-- <button class="btn btn-outline-danger">Delete</button> -->

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