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
