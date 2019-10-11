<?php include "config/db.php";?>

<div class="container">
<div class="row">
<div class="col-sm-12 bg-dark" id="work">
<br>
<h2 class="text-center text-white tag-line">Work</h2><br>


</div>

</div>

</div>


<br>
<div class="container">
<div class="row">

<div class="col-sm-12">

<div class="row">
<?php 
    $query = "SELECT * FROM work";
    $result = mysqli_query($conn,$query);
    if(!$result){
        echo "query failed".mysqli_error($conn);
    }
    while($row=mysqli_fetch_array($result)){
    $work_id = $row['id'];
    $title = $row['title'];
    $details = $row['details'];
    $image = $row['img'];
    
?> 
    <div class="col-sm-3">
    <a href="">
    <div class="card">
  <div class="embed-responsive embed-responsive-16by9">
     <img alt="Card image cap" class="card-img-top embed-responsive-item" src="images/<?php echo $image; ?>">
  </div>
  <div class="card-block">
    <h4 class="card-title"><?php echo $title; ?></h4></a>
    <p class="card-text"><?php echo $details;?></p>
  </div>
</div><br>
    </div>

    <?php  }?>



</div>




        </div>



</div>


</div>
  <br>

