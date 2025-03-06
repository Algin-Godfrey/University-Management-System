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
                             

                             <h3 class="mt-4 mb-4">Add New Course       
                              </h3>

                              <form method="post" >

                                <div class="row">

                                    <div class="col-6 mb-4">
                                         
                                         <input type="text" name="cname" placeholder="Enter Course Name" class="form-control" />

                                    </div>

                                     <div class="col-6 mb-4">
                                         
                                         <input type="text" name="desc" placeholder="Enter Course Description" class="form-control" />

                                    </div>

                                     <div class="col-6 mb-4">
                                         
                                         <input type="text" name="ctype" placeholder="Enter Course Type" class="form-control" />

                                    </div>

                                   

                                       <div class="col-6 mb-4">
                                         
                                         <button type="submit" name="submit" class="btn btn-primary float-end">Submit</button>

                                    </div>


                                    

                                </div>

                              </form>

                              <?php 
include 'conn.php';
if(isset($_POST['submit'])){

    $cname = $_POST['cname'];

   $desc = $_POST['desc'];
    $ctype = $_POST['ctype'];


    $r = mysqli_query($conn,"INSERT INTO `course`(`Crs_Desc`, `Crs_Name`, `Crs_Type`) VALUES ('$desc','$cname','$ctype')");
  
    if($r > 0){

        echo '<script>alert("Course added successfull");window.location.href = "courses.php";</script>';


     
    }else{


       echo '<script>alert("Course Not Added");</script>';
    }


}



?>
                
</div>
                </main>
               
              <?php include 'footer.php'; ?>


    