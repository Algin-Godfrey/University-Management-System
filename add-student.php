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
                             

                             <h3 class="mt-4 mb-4">Add Student Details              
                              </h3>

                              <form method="post" >

                                <div class="row">

                                    <div class="col-6 mb-4">
                                         
                                         <input type="text" name="sname" placeholder="Enter Student Name" class="form-control" />

                                    </div>

                                     <div class="col-6 mb-4">
                                         
                                         <input type="email" name="email" placeholder="Enter Email" class="form-control" />

                                    </div>

                                     <div class="col-6 mb-4">
                                         
                                         <input type="text" name="mobile" placeholder="Enter Mobile Number" class="form-control" />

                                    </div>

                                     <div class="col-6 mb-4">
                                         
                                         <input type="text" name="address" placeholder="Enter Address" class="form-control" />

                                    </div>

                                       <div class="col-6 mb-4">
                                         
                                         

                                    </div>

                                       <div class="col-6 mb-4  float-end">
                                         
                                         <button type="submit" name="submit" class="btn btn-primary float-end">Submit</button>

                                    </div>


                                    

                                </div>

                              </form>

                              <?php 
include 'conn.php';
if(isset($_POST['submit'])){

    $name = $_POST['sname'];

   $email = $_POST['email'];
    $mobile = $_POST['mobile'];

    $address = $_POST['address'];

    $r = mysqli_query($conn,"INSERT INTO `student`(`stu_name`, `stu_email`, `stu_mobile`, `stu_add`) VALUES ('$name','$email','$mobile','$address')");
  
    if($r > 0){

        echo '<script>alert("Registration successfull");window.location.href = "student.php";</script>';


     
    }else{


       echo '<script>alert("Registration Unsuccessfull");</script>';
    }


}



?>
                
</div>
                </main>
               
              <?php include 'footer.php'; ?>

