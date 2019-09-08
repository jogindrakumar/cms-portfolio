






<div class="container">
<div class="row">
<div class="col-sm-12">
<div class="row">
<div class="col-sm-3">
<!-- aboutphoto -->
<?php 
$query = "SELECT * FROM about";
$result = mysqli_query($conn,$query);
$about = mysqli_fetch_all($result,MYSQLI_ASSOC);
mysqli_close($conn);


?>
<?php foreach($about as $about) : ?>
<img src="images/<?php echo $about['img']; ?>" alt="" height="200px" width="200px">

</div>
<div class="col-sm-9" id="about">



<h3 class="text-primary">About Me</h3>



<p style="font-size:20px;"><?php echo $about['abt1'];?> </p>
<p style="font-size:20px;"><?php echo $about['abt2'];?> </p>



<?php endforeach; ?>
<p class="" style="font-size:25px;">
<a href="https://www."><i class="fab fa-facebook-f"></i></a>
        <a href="https://"><i class="fab fa-twitter"></i></a>
        <a href="https://"><i class="fab fa-instagram"></i></a>
</p>


<a href="#contact" class="btn btn-primary">Hire me</a>
</div>

</div>
</div>

</div>


</div><br><br>
<div class="container">
<div class="row">
<div class="col-sm-12">
<div class="row">
<div class="col-sm-3">
<h3>My Skills</h3>



</div>
<div class="col-sm-9">

<p><?php 
   include "skill.php";
?>


</p>
<!-- 
<p>CSS
<div class="progress" style="height: 5px;">
  <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
</div>
</p>
<p>Bootstrap
<div class="progress" style="height: 5px;">
  <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
</div>
</p>
<p>javascript
<div class="progress" style="height: 5px;">
  <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 45%" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
</div>
</p>
<p>PHP
<div class="progress" style="height: 5px;">
  <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
</div>
</p> -->
</div>
</div>

</div>


</div>

</div>