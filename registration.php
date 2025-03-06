 <?php include 'header.php'; ?>
<body style="background-image: url('img/univ.jpg');height: 100%;background-position: center;
  background-repeat: no-repeat;
  background-size: cover;"><center>
<h5 style="color:white;font-size:50px;" class="pt-5 pb-5">New Student Registration</h5> 
 <?php 
  $msg = '';
 echo $msg;?>
 <div class="pt-5 mt-5">
<form style="color:white;border:1px solid black;width:25%;font-size:18px;background-color:grey" method="post" class="p-4 mt-5" action="registration.php" >


	<input name="sname" class="form-control mb-4" placeholder="Student Name" type="text"/>

  <input name="sid" class="form-control mb-4" placeholder="Student Id" type="number"/>

  <select name="course" class="form-control mb-4">
     <option disabled selected>Select Course</option>
    <?php
       $r = mysqli_query($conn,"SELECT * FROM course order by Crs_id desc");
       while($row = mysqli_fetch_array($r)){

        $cid = $row['Crs_id'];

    ?>
       <option value="<?php echo $cid;?>" ><?php echo $row['Crs_Name']; ?></option>   

     <?php } ?>
 

  </select>
	
	<input type="submit" class="btn btn-primary" value="Submit" name="reg"/><br><br>

   <a href="index.php" class="btn btn-warning">Login</a> 




</form>
</div>

<?php 
include 'conn.php';
if(isset($_POST['reg'])){



   $stu_name = $_POST['sname'];
   $stu_id = $_POST['sid'];
    $course = $_POST['course'];

    $r = mysqli_query($conn,"Insert into stu_reg (stu_id,stu_name) values('$stu_id','$stu_name') "); 
  
    if($r){



       // echo '<script>alert("Registration Successfull");</script>';

        $ins_id = mysqli_insert_id($conn);

        
     
    }else{


       echo '<script>alert("Not Registered");</script>';
    }


    $crs = mysqli_query($conn,"SELECT * from course where Crs_id = '$course'");

    while($cr = mysqli_fetch_array($crs)){

    $crsname = $cr['Crs_Name'];


      $r2 = mysqli_query($conn,"Insert into reg_crs (reg_id,crs_id,crs_name) values('$ins_id','$course','$crsname') "); 

      $r3 = mysqli_query($conn,"Insert into stu_crs_reg (stu_id,stu_name,reg_id,crs_id,crs_name) values(' $stu_id','$stu_name','$ins_id','$course','$crsname') "); 


}

if($r && $r2 && $r3){

echo '<script>alert("Registration Successfull");</script>';

}



}



?>
</center>
</body>  
</html> 