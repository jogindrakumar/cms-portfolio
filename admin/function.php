<?php



function login(){
  global $conn;

if(isset($_SESSION['user_role'])){
  if($_SESSION['user_role'] =='admin'){
      return true;
  }
}

}

function confirm_login(){
  global $conn;
  if(!login()){
       echo  "Login Required !";
      header("Location: ../login.php");
  }
}

function confirm_login_addskill(){
  global $conn;
  if(!login()){
       echo  "Login Required !";
      header("Location: ../../login.php");
  }
}


?>
<?php function add_skill(){
  global $conn;
  $msg = '';
if(isset($_POST['add_skill'])){
  $skill = $_POST['skill'];
  $per = $_POST['per'];
  
  $skill = mysqli_real_escape_string($conn,$skill);
  $per = mysqli_real_escape_string($conn,$per);
  if(empty($skill) || empty($per)){
    // echo  "all field fill required";

    echo "<script>
    swal('check all field!', '', 'error')</script>";
}else{

  $query = "INSERT INTO skill(title,per) VALUES('$skill','$per')";
  $result = mysqli_query($conn,$query);
  if(!$result){
      echo "failed".mysqli_error($conn);
  
  }else{
    echo "<script>
    swal('Good job!', '', 'success')</script>";
  }
}

  
  
  
  
  
  }
  


}





?>
