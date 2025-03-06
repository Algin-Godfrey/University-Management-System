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
                             

                             <h1 class="mt-4 mb-4">Registration Details                  <a class="btn btn-primary float-end" href="add-student.php" role="button">Add New Student</a>
                              </h1>
                                 
                  <table id="example" class="table table-striped border" style="width:100%">
        <thead>
            <tr>
                <th class="text-left" >Sl.No</th>
                <th class="text-left" >Student Id</th>
                <th class="text-left" >Student Name</th>
                <th class="text-left" >Registration Id</th>
                <th class="text-left">Course Id</th>
                <th class="text-left">Course Name</th>
               
             </tr>
        </thead>
        <tbody>

            <?php 
               $slno = 1;
         
               $r= mysqli_query($conn,"Select * from stu_crs_reg order by stu_id asc");


            
             while($row = mysqli_fetch_array($r)){

            ?>
            <tr>
                <td class="text-left" ><?php echo $slno++; ?></td>
                <td class="text-left" ><?php echo $row['stu_id'];?></td>
                <td class="text-left" ><?php echo $row['stu_name'];?></td>
                
                <td class="text-left" ><?php echo $row['reg_id'];?></td>
                <td class="text-left" ><?php echo $row['crs_id'];?></td>

                 <td class="text-left" ><?php echo $row['crs_name'];?></td>
                
                     
            </tr>

        <?php } ?>
        </tbody>
    </table>
</div>

                </main>
               
              <?php include 'footer.php'; ?>


               <script>$('#example').DataTable({
    pageLength: 10,
    filter: true,
   
});</script>