<?php include "config/db.php";?>
<?php include "config/fun.php"; ?>



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
<?php echo $title ; ?>

 <div class="progress" style="height: 5px;">
    <div class="progress-bar progress-bar-striped bg-primary" role="progressbar" style="width: <?php echo $per; ?>%" aria-valuenow="<?php echo $per; ?>" aria-valuemin="0" aria-valuemax="100"></div>
  </div>
    <?php   echo "<br>"; } ?>