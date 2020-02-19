
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
    
    <?php include "navigations/msg_nav.php"; ?>
    
    </div>
    
    <div class="col-sm-10">
   <div class="">
   <h5 class="text-center text-primary"><i class="fa fas fa-envelope-open"></i> Inbox
    
    
    </h5>
    
   </div>

   <div class="card">
   
   <table class="table table-hover">
  <thead>
    <tr>
     
      <th scope="col">Name</th>
      <th scope="col">E-mail</th>
      <th scope="col">Message</th>
      <!-- <th scope="col">view</th> -->
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
      
      <!-- <td><button class="btn btn-outline-primary">View</button></td> -->
      <td>  <a href="msg.php?delete=<?php echo $id; ?>" class="btn btn-outline-danger">Delete</a> </td>
      
     
    </tr>



    <?php } ?>
    
  </tbody>
</table>
</div>
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
