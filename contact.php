<?php include "config/db.php";?>

<?php 
$msg = '';
$msgClass = '';
 // check for submit 

 if(filter_has_var(INPUT_POST,'submit')){
//get form data
$name = htmlspecialchars($_POST['name']);
$email = htmlspecialchars($_POST['email']);
$message = htmlspecialchars($_POST['message']);

// check require field
if(!empty($email)&& !empty($name)&& !empty($message)){
//passed
//check email address
if(filter_var($email,FILTER_VALIDATE_EMAIL) === false){
    //failed
    $msg = 'please enter correct E-mail address';
    $msgClass = 'alert-danger';
}else{

$query = "INSERT INTO msg(visiter_name,email,msg) VALUES('$name','$email','$message')";
$result = mysqli_query($conn,$query);
if($result){
 
  $msg = 'your message send successfully!!';
  $msgClass = 'alert-success';
}else{
      $msg = 'your message failed !!';
      $msgClass = 'alert-danger';
  }

    //passed
// $toEmail = 'contact@nxtgenmove.com';
// $subject = 'Contact Request From'.$name;
// $body = '<h2>Contact Request</h2>
//         <h4> Name</h4><p>'.$name.'</p>
//         <h4> Email</h4><p>'.$email.'</p>
//         <h4> Email</h4><p>'.$message.'</p>';

// $headers = "MIME-version1.o"."\r\n";
// $headers .= "Contet-Type:text/html;charset=UTF-8"."\r\n";
// $headers .= "From:".$name."<".$email.">"."\r\n";
// if(mail($toEmail,$subject,$body,$headers)){
//     $msg = 'your message send successfully!!';
//     $msgClass = 'alert-success';
// }else{
//     $msg = 'your message failed !!';
//     $msgClass = 'alert-danger';
// }
}


}else{
    //failed
    $msg = 'please check all input field';
    $msgClass = 'alert-danger';
}



 }



?>
<div class="container">
<div class="row">

<div class="col-sm-12 bg-dark" id="contact">
<br>
<h2 class="text-center text-white tag-line">Wanna start work with Me ?</h2><br>


</div>
</div>

</div>


<br>












<div class="container">
<div class="row">
<div class="col-sm-12">
<div class="row">
<div class="col-sm-8">


   <div class="card-heading">
   <h4 style="color:grey;">Get in touch</h4></div>
   <div class="card-body">
   <?php  if($msg !=''): ?>
<div class="<?php echo $msgClass ;?>"><?php echo $msg; ?></div>

<?php endif; ?>
   <form method="POST" action="<?php  echo $_SERVER['PHP_SELF'];?>">
  
    <div class="form-group">
    <label for="Name">Name</label>
    <input type="name" class="form-control" placeholder="name" name="name" value="<?php 
    
    echo isset($_POST['name'])?$name : '';
    ?>">

  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" name="email" placeholder="Enter email" value="<?php 
    
    echo isset($_POST['email'])?$email : '';
    ?>">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="message">Message</label>
    <textarea name="message" id="" cols="30" rows="10" class="form-control"
    value="<?php 
    
    echo isset($_POST['message'])?$message : '';
    ?>"
    
    ></textarea>
  </div>
  
  <button type="submit" name="submit" class="btn btn-primary">Send Message</button>
</form>
   
   
   </div>
   
   

</div>
<?php
?>
<?php 
$query = "SELECT * FROM about";
$result = mysqli_query($conn,$query);
$about = mysqli_fetch_all($result,MYSQLI_ASSOC);
mysqli_close($conn);


?>



<div class="col-sm-4">
<h4 style="color:grey;">My Contact Details</h4>
<?php foreach($about as $about) : ?>
<p style="color:grey;"><i class="fas fa-envelope"></i><?php echo $about['email'];?> </p>


<p style="color:grey; font-size:15px;"><i class="fas fa-map-marker-alt"></i>
<?php echo $about['addres'];?> </p>
<?php endforeach; ?>
<div class="container">
<div class="row">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d448181.163741622!2d76.81306442366602!3d28.64727993557044!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cfd5b347eb62d%3A0x37205b715389640!2sDelhi!5e0!3m2!1sen!2sin!4v1567951402381!5m2!1sen!2sin" width="600" height="350" frameborder="0" style="border:0;" allowfullscreen=""></iframe>


</div>

</div>



</div>


</div>


</div>


</div>


</div>