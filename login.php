<?php include "includes/db.php";?>
<?php
if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT * FROM user";
    $result = mysqli_query($conn,$query);
    while($row=mysqli_fetch_assoc($result)){
        $db_username = $row['username'];
        $db_password = $row['password'];
        $db_user_role = $row['user_role'];
    }

    if($username==$db_username && $password==$db_password && $db_user_role=='admin'){
        header("Location: admin/");
    
    }else{
        header("Location: index.php");
    }
    

}


?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>simple login system</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
    <div class="row">
    <div class="col-sm-8">
    <h1 class="text-center text-primary">login system</h1>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    
    <div class="form-group">
    <label for="username">username</label>
    <input type="text" name="username" class="form-control">
    
    </div>
    <div class="form-group">
    <label for="password">password</label>
    <input type="password" name="password" class="form-control">
    
    </div>
    <input type="submit" name="submit" value="login" class="btn btn-primary">
    
    </form>
    
    </div>

    </div>
    
    </div>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
</body>
</html>