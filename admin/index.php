<?php  include "../config/db.php"; ?>
 

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
    
  <?php include "navigations/index_nav.php"; ?>
    </div>
    <div class="col-sm-10">
    <?php 

$query = "SELECT * FROM skill";
$result = mysqli_query($conn,$query);

$skill_count = mysqli_num_rows($result);

?>
    <div class="row">
    <div class="col-sm-3">
    <div class="card">
  <div class="card-header bg-success">
  <i class="dash fa fas fa-cogs"><span class="dash-text"> Skill</span></i>
  <h5 class="text-right text-white">Total <?php echo $skill_count; ?></h5>
  <?php 
    $query = "SELECT * FROM skill";
    $result = mysqli_query($conn,$query);

    
    if(!$result){
        echo "query failed".mysqli_error($conn);
    }
    while($row=mysqli_fetch_array($result)){
    $skill_id = $row['id'];
    $title = $row['title'];
    $per = $row['per'];
    
?>
    
  </div>
  <div class="card-body">
    <h5 class="card-title text-uppercase font-weight-bold"><i class="fa fas fa-cogs"></i> <?php echo $title ; ?></h5>
    <div class="progress" style="height: 5px;">
    <div class="progress-bar progress-bar-striped progress-bar-animated bg-primary" role="progressbar" style="width: <?php echo $per; ?>%" aria-valuenow="<?php echo $per; ?>" aria-valuemin="0" aria-valuemax="100">
    
    </div>
  </div>
  <?php   } ?>
  <br>
  
  </div>
  
</div>
    </div>
    <div class="col-sm-3">
    <div class="card">
    <?php 

$query = "SELECT * FROM msg";
$result = mysqli_query($conn,$query);

$msg_count = mysqli_num_rows($result);

?>
  <div class="card-header bg-warning">
  <i class="dash fa fas fa-envelope-open"><span class="dash-text"> Inbox</span></i>
  <h5 class="text-right text-white">Total <?php echo $msg_count; ?></h5>
  </div><br>
  <?php
   $query = "SELECT * FROM msg ";
   $result = mysqli_query($conn,$query);
   while($row=mysqli_fetch_array($result)){
     $id = $row['id'];
     $name = $row['visiter_name'];
     $email = $row['email'];
     $message = $row['msg'];
   
   
   
   ?>
<div class="">
    
    <p class="card-text"> <span class="text-primary font-weight-bold text-uppercase">
    <i class="fa fas fa-envelope-open"></i>
    
     <a href="msg.php"><?php echo $name ; ?></a></span>      </p>
  
    
  </div>

   <?php }?>
  
</div>
    </div>
    <div class="col-sm-3">
    <div class="card">
    <?php 

$query = "SELECT * FROM services";
$result = mysqli_query($conn,$query);

$services_count = mysqli_num_rows($result);

$posts = mysqli_fetch_all($result,MYSQLI_ASSOC);

?>
  <div class="card-header bg-primary">
  <i class="dash fa fas fa-wrench"><span class="dash-text">Services</span></i>
  <h5 class="text-right text-white">Total <?php echo $services_count; ?></h5>
  </div>
  <div class="card-body">
   
    <?php foreach($posts as $post) :?>
    <p class="card-text text-uppercase font-weight-bold"><i class="fa fa-arrow-circle-right text-success"></i> <?php echo $post['title']; ?></p>
   <?php endforeach; ?>
    
  </div>
  
  
</div>
    </div>
    <div class="col-sm-3">
    <div class="card">
    <?php 

$query = "SELECT * FROM work";
$result = mysqli_query($conn,$query);

$work_count = mysqli_num_rows($result);
$posts = mysqli_fetch_all($result,MYSQLI_ASSOC);


?>
  <div class="card-header bg-danger">
  <i class="dash fa fas fa-briefcase"><span class="dash-text"> Work</span></i>
  <h5 class="text-right text-white">Total <?php echo $work_count; ?></h5>
  </div>
  <div class="card-body">
    
    <?php foreach($posts as $post) :?>
    
    <p class="card-text text-uppercase font-weight-bold"><i class="fa fa-arrow-circle-right text-success"></i> <?php echo $post['title']; ?></p>

    <?php endforeach; ?>
  
   
  
    
  </div>
 
</div>
    </div>
    
    
    </div>


    </div>
    
    
    </div>
    
    </div>

    <?php include "includes/footer.php";?>