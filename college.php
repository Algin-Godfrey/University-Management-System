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
                             

                             <h1 class="mt-4 mb-4">College Details                  <a class="btn btn-primary float-end" href="add-college.php" role="button">Add New College</a>
                              </h1>
                                 
                  <table id="example" class="table table-striped border" style="width:100%">
        <thead>
            <tr>
                <th class="text-left" >Sl.No</th>
                <th class="text-left" >College Type</th>
                <th class="text-left" >Description</th>
                
                <th class="text-center">Edit</th>

                <th class="text-center">Delete</th>
             </tr>
        </thead>
        <tbody>

            <?php 
               $slno = 1;
            $r= mysqli_query($conn,"Select * from collage order by Coll_ID asc");
            
             while($row = mysqli_fetch_array($r)){

            ?>
            <tr>
                <td class="text-left" ><?php echo $slno++; ?></td>
                <td class="text-left" ><?php echo $row['Coll_Type'];?></td>
                <td class="text-left" ><?php echo $row['Coll_Desc'];?></td>
               

               

                 <td class="text-center"><a href="update-college.php?q=<?php echo $row['Coll_ID'];?>"><i class="fas fa-pencil"></i></a></td>

               

                 <td class="text-center"><a href="college.php?action=delete&id=<?php echo $row['Coll_ID'];?>" onclick="return confirm('Are you sure ?')"><i class="fas fa-trash"></i></a></td>
               
            </tr>

        <?php } ?>
        </tbody>
    </table>
</div>

 <?php 

                if(($_GET['action'] == 'delete') && isset($_GET['id'])){

                    $id = $_GET['id'];

                   $d = mysqli_query($conn,"DELETE from collage WHERE Coll_ID = '$id'");

                   if($d){


                    echo '<script>window.location.href = "college.php";</script>';
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