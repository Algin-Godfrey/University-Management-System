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
                             

                             <h3 class="mt-4 mb-4">Add New College           
                              </h3>

                              <form method="post" >

                                <div class="row">

                                    <div class="col-6 mb-4">
                                         
                                         <input type="text" name="ctype" placeholder="Enter College Type" class="form-control" />

                                    </div>

                                     <div class="col-6 mb-4">
                                         
                                         <input type="text" name="cdesc" placeholder="Enter College Description" class="form-control" />

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

    $ctype = $_POST['ctype'];

   $cdesc = $_POST['cdesc'];
   

    $r = mysqli_query($conn,"INSERT INTO `collage`(`Coll_Type`, `Coll_Desc`) VALUES ('$ctype','$cdesc')");
  
    if($r > 0){

        echo '<script>alert("College added successfully");window.location.href = "college.php";</script>';


     
    }else{


       echo '<script>alert("College Not added");</script>';
    }


}



?>
                
</div>
                </main>
               
              <?php include 'footer.php'; ?>

