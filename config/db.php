<?php
$conn = mysqli_connect('localhost','root','','profile');
//check connection

if(mysqli_connect_errno()){
    echo 'failed to connect '.mysqli_errno($conn);
}

?>