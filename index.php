<!--<!DOCTYPE html>
<html>  
<head>   
<title>  
UDBMS
</title> 
<style>

html {
  height: 100%;
}

body {
  /* The image used */
  background-image: url("img/univ.jpg");

  /* Full height */
  height: 100%;

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}

</style> 
</head>  -->
 <?php include 'header.php'; ?>
<body style="background-image: url('img/univ.jpg');height: 100%;background-position: center;
  background-repeat: no-repeat;
  background-size: cover;"><center>
<h1 style="color:white;font-size:50px;" class="pt-5 pb-5">Welcome <br>to <br>University Database Management System</h1> 
 <?php 
  $msg = '';
 echo $msg;?>
 <div class="pt-5 mt-5">
<form style="color:white;border:1px solid black;width:25%;font-size:18px;background-color:grey" method="post" class="p-4 mt-5" action="index.php" >

	<h5 >ADMIN LOGIN</h5><br>

	
	<input name="username" class="form-control" placeholder="Username" type="text"/><br><br>


	
	<input name="pw" type="password" placeholder="Password" class="form-control"/><br><br>

	<h3><input type="submit" class="btn btn-primary" value="Login" name="lg"/> </h3><br><br>

   <a href="registration.php" class="btn btn-warning">New Student Registration</a>


</form>
</div>

<?php 
include 'conn.php';
if(isset($_POST['lg'])){



   $username = $_POST['username'];
    $password = $_POST['pw'];

    $r = mysqli_num_rows(mysqli_query($conn,"SELECT * from login Where login_username = '$username' and login_password='$password' "));
  
    if($r > 0){

       header("Location: dashboard.php");
     
    }else{


       echo '<script>alert("User not exists");</script>';
    }


}



?>
</center>
</body>  
</html> 