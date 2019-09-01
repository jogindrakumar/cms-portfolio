






<div class="container">
<div class="row">
<div class="col-sm-12">
<div class="row">
<div class="col-sm-3">
<!-- aboutphoto -->

<img src="images/about-1.jpg" alt="" height="200px" width="200px">

</div>
<div class="col-sm-9" id="about">
<?php 
$query = "SELECT * FROM about";
$result = mysqli_query($conn,$query);
$about = mysqli_fetch_all($result,MYSQLI_ASSOC);
mysqli_close($conn);


?>


<h3>About Me</h3><?php foreach($about as $about) : ?>


<p style="font-size:20px;"><?php echo $about['first_name'];?> </p>
<p style="font-size:20px;"><?php echo $about['abt1'];?> </p>


<?php endforeach; ?>
<p class="" style="font-size:25px;">
<a href="https://www."><i class="fa fa-facebook social-media" aria-hidden="true"></i></a>
        <a href="https://"><i class="fa fa-twitter social-media" aria-hidden="true"></i></a>
        <a href="https://"><i class="fa fa-instagram social-media" aria-hidden="true"></i></a>
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