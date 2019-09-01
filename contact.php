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
    //passed
$toEmail = 'contact@nxtgenmove.com';
$subject = 'Contact Request From'.$name;
$body = '<h2>Contact Request</h2>
        <h4> Name</h4><p>'.$name.'</p>
        <h4> Email</h4><p>'.$email.'</p>
        <h4> Email</h4><p>'.$message.'</p>';

$headers = "MIME-version1.o"."\r\n";
$headers .= "Contet-Type:text/html;charset=UTF-8"."\r\n";
$headers .= "From:".$name."<".$email.">"."\r\n";
if(mail($toEmail,$subject,$body,$headers)){
    $msg = 'your message send successfully!!';
    $msgClass = 'alert-success';
}else{
    $msg = 'your message failed !!';
    $msgClass = 'alert-danger';
}
}


}else{
    //failed
    $msg = 'please check all input field';
    $msgClass = 'alert-danger';
}



 }



?>

<div class="col-sm-12" id="contact">
<br>
<h2 class="text-center tag-line">Wanna start work with Me ?</h2><br>


</div><br>












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




<div class="col-sm-4">
<h4 style="color:grey;">My Contact Details</h4>
<p style="color:grey;">E-Mail <br> info@jogindrakumar.com </p>

<p style="color:grey;">Address:</p>
<p style="color:grey; font-size:15px;"> Delhi,India</p>

<div class="container">
<div class="row">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13996.315465136408!2d77.27682472365139!3d28.717188986670905!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cfc0720d3ad5b%3A0xa216e3b579aafaf3!2sJohripur%2C+New+Delhi%2C+Delhi!5e0!3m2!1sen!2sin!4v1565340455260!5m2!1sen!2sin" width="600" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>


</div>

</div>



</div>


</div>


</div>


</div>


</div>