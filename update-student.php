 <?php include 'header.php'; ?>
    <body class="sb-nav-fixed">
       <?php include 'topnav.php'; ?>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                 <?php include 'sidebar.php'; ?>
            </div>
            <div id="layoutSidenav_content">
                <main>

                     <div class="container-fluid px-4 py-5">
                       
                        <div class="row  shadow-lg p-3 mb-5 bg-white rounded">
                             

                             <h3 class="mt-4 mb-4">Update Student Details              
                              </h3>


                              <form method="post" >

                                 <?php 
                              

       $id = $_GET['q'];

       $r= mysqli_query($conn,"Select * from student Where stu_id ='$id'");

       while($row = mysqli_fetch_array($r)){
       ?>                


                                <div class="row">

                                    <div class="col-6 mb-4">

                                        <label>Student Name</label>
                                         
                                         <input type="text" name="sname" placeholder="Enter Student Name" class="form-control" value="<?php echo $row['stu_name']?>"/>

                                    </div>

                                     <div class="col-6 mb-4">
                                         <label>Student Email</label>
                                         <input type="email" name="email" placeholder="Enter Email" class="form-control" value="<?php echo $row['stu_email']?>"/>

                                    </div>

                                     <div class="col-6 mb-4">

                                         <label>Student Mobile</label>
                                         
                                         <input type="text" name="mobile" placeholder="Enter Mobile Number" class="form-control" value="<?php echo $row['stu_mobile']?>"/>

                                    </div>

                                     <div class="col-6 mb-4">

                                         <label>Student Address</label>
                                         
                                         <input type="text" name="address" placeholder="Enter Address" class="form-control" value="<?php echo $row['stu_add']?>"/>

                                    </div>

                                       <div class="col-6 mb-4">
                                         
                                         

                                    </div>

                                       <div class="col-6 mb-4  float-end">
                                         
                                         <button type="submit" name="submit" class="btn btn-primary float-end">Submit</button>

                                    </div>


                                    

                                </div>
                            <?php  } ?>

                              </form>

                              <?php 

if(isset($_POST['submit'])){

    $name = $_POST['sname'];

   $email = $_POST['email'];
    $mobile = $_POST['mobile'];

    $address = $_POST['address'];

    $r = mysqli_query($conn,"UPDATE `student`  SET `stu_name`='$name', `stu_email`='$email', `stu_mobile`='$mobile', `stu_add`='$address' WHERE stu_id='$id'");
  
    if($r > 0){

        echo '<script>alert("Updation successfull");window.location.href = "student.php";</script>';


     
    }else{


       echo '<script>alert("No Updation");</script>';
    }


}



?>
                
</div>
                </main>
               
              <?php include 'footer.php'; ?>

