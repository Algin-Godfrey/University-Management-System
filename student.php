 <?php include 'header.php';

error_reporting(0);
  ?>
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
                             

                             <h1 class="mt-4 mb-4">Student Details                  <a class="btn btn-primary float-end" href="add-student.php" role="button">Add New Student</a>
                              </h1>
                                 
                  <table id="example" class="table table-striped border" style="width:100%">
        <thead>
            <tr>
                <th class="text-left" >Sl.No</th>
                <th class="text-left" >Name</th>
                <th class="text-left" >Email</th>
                <th class="text-left" >Mobile</th>
                <th class="text-left">Address</th>
                <!--<th class="text-left">Course</th>-->
                <th class="text-center">Edit</th>

                <th class="text-center">Delete</th>
             </tr>
        </thead>
        <tbody>

            <?php 
               $slno = 1;
           //$r= mysqli_query($conn,"Select * from student left JOIN course ON stu_id = Crs_stu_id order by stu_id asc");
               $r= mysqli_query($conn,"Select * from student order by stu_id asc");


            
             while($row = mysqli_fetch_array($r)){

            ?>
            <tr>
                <td class="text-left" ><?php echo $slno++; ?></td>
                <td class="text-left" ><?php echo $row['stu_name'];?></td>
                <td class="text-left" ><?php echo $row['stu_email'];?></td>
                <td class="text-left" ><?php echo $row['stu_mobile'];?></td>
                <td class="text-left" ><?php echo $row['stu_add'];?></td>
                <!-- <td class="text-left" ><?php echo $row['Crs_Name'];?><br><?php echo $row['Crs_Desc'];?></td>-->
                 

                <td class="text-center"><a href="update-student.php?q=<?php echo $row['stu_id'];?>"><i class="fas fa-pencil"></i></a></td>

               

                <td class="text-center"><a href="student.php?action=delete&id=<?php echo $row['stu_id'];?>" onclick="return confirm('Are you sure ?')"><i class="fas fa-trash"></i></a></td>
               
            </tr>

        <?php } ?>
        </tbody>
    </table>
</div>

 <?php 

                if(($_GET['action'] == 'delete') && isset($_GET['id'])){

                    $id = $_GET['id'];

                   $d = mysqli_query($conn,"DELETE from student WHERE stu_id = '$id'");

                   if($d){


                    echo '<script>window.location.href = "student.php";</script>';
                   }else{


                    echo mysqli_error($conn);
                   }

                }
                ?>



                </main>
               
              <?php include 'footer.php'; ?>


               <script>$('#example').DataTable({
    pageLength: 10,
    filter: true,
   
});</script>