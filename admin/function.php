<?php
function delete_work(){
    global $conn;
    if(isset($_GET['delete'])){
        $work_id = $_GET['delete'];
        
        $query = "DELETE FROM work WHERE id=$work_id";
        $delete_query = mysqli_query($conn,$query);
       
        if($delete_query){
          header("Location:work.php");
         
        }
        mysqli_close($conn);  
        
    }
    
    


}




?>
