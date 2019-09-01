

<?php
$result = $conn->query("SELECT images FROM slider");


?>
<?php ?>


<!-- <img src="images/about-1.jpg" alt="" height="100px" width="100px"> -->

<div class="bd-example">
  <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
    <?php
$i = 0;
foreach($result as $row){
  $active = '';
  if($i==0){
    $actives = 'active';
  }

  
?>


      <li data-target="#carouselExampleCaptions" data-slide-to="<?php $i ;?>" class="<?php $actives; ?>"></li>
  
      <!-- <li data-target="#carouselExampleCaptions" data-slide-to="2"></li> -->
      <?php
$i++ ; }

?>
    </ol>
    <div class="carousel-inner">
    <?php
$i = 0;
foreach($result as $row){
  $active = '';
  if($i==0){
    $actives = 'active';
  }


?>
      <div class="carousel-item<?php $actives;?>">
        <img src="images/<?php echo $row['images'] ;?>" class="d-block w-100" alt="..." height="400px" width="100%" margin="auto">
        
      </div>
    
      <?php $i++ ; } ?>
     
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
<img src="../images/about-1.jpg" alt="" height="100px" width="100px">

