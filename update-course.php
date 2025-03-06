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
                             

                             <h3 class="mt-4 mb-4">Update Course       
                              </h3>

                              <form method="post" >

                                 <?php 


       $id = $_GET['q'];

       $r= mysqli_query($conn,"Select * from course Where Crs_id ='$id'");

       while($row = mysqli_fetch_array($r)){
       ?>                

                                <div class="row">

                                    <div class="col-6 mb-4">
                                        <label>Course Name</label>
                                         
                                         <input type="text" name="cname" placeholder="Enter Course Name" class="form-control" value="<?php echo $row['Crs_Name']?>"/>

                                    </div>

                                     <div class="col-6 mb-4">

                                        <label>Course Description</label>
                                         
                                         <input type="text" name="desc" placeholder="Enter Course Description" class="form-control" value="<?php echo $row['Crs_Desc']?>"/>

                                    </div>

                                     <div class="col-6 mb-4">

                                        <label>Course Type</label>
                                         
                                         <input type="text" name="ctype" placeholder="Enter Course Type" class="form-control" value="<?php echo $row['Crs_Type']?>"/>

                                    </div>

                                   

                                       <div class="col-6 mb-4">
                                         
                                         <button type="submit" name="submit" class="btn btn-primary float-end">Submit</button>

                                    </div>


                                    

                                </div>
                                   <?php  } ?>

                              </form>

                            

                              <?php 

if(isset($_POST['submit'])){

    $cname = $_POST['cname'];

   $desc = $_POST['desc'];
    $ctype = $_POST['ctype'];


    $r = mysqli_query($conn,"UPDATE `course` set `Crs_Desc` = '$desc', `Crs_Name` ='$cname',  `Crs_Type` = '$ctype' WHERE Crs_id = '$id'");
  
    if($r > 0){

        echo '<script>alert("Updation successfull");window.location.href = "courses.php";</script>';


     
    }else{


       echo '<script>alert("No Updation");</script>';
    }


}



?>
                
</div>
                </main>
               
              <?php include 'footer.php'; ?>


    