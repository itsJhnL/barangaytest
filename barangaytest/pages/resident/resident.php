<?php
    include '../../includes/header.php';
    /* include '../../includes/scripts.php'; */
    include '../connection.php';
?>
    <div class="container px-4">
        <div class="row">
            <div class="col-md-12">
                <h1 class="my-2">Resident List</h1>
                <hr>
                <div class="card d.flex">
                    <div class="card-header">
                        <button type="button" class="button-color btn float-start" title="Create" data-bs-toggle="modal" data-bs-target="#Add_Resident">
                            New <i class="bi bi-person-fill-add"></i>
                        </button>
                    </div>
                    
                    <div class="card-body">
                        <table class="table table-bordered table-hover table-striped" id="myTable">
                            <thead>
                                <tr class="col text-center">
                                    <!-- <th class="col">#</th> -->
                                    <th class="col">Image</th> 
                                    <th class="col">Name</th> 
                                    <th class="col">Address</th>
                                    <th class="col">Age</th> 
                                    <th class="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php


                                    $squery = mysqli_query($con, "SELECT * FROM tblresident");
                                    while($row = mysqli_fetch_array($squery))
                                    {
                                    echo '
                                        <tr class="text-center">
                                        <td style="width:70px;"><image src="images/'.basename($row['captured_image']).'" style="width:60px;height:60px;"/></td>
                                        <td> '.strtoupper($row['lastname']).', '.strtoupper($row['firstname']).' '.strtoupper($row['middlename']).'. </td>
                                        <td>#'.strtoupper($row['houseNo']).', PUROK '.strtoupper($row['purok']).', '.strtoupper($row['barangay']).' '.strtoupper($row['city']).' '.strtoupper($row['province']).'</td>
                                        <td> '.strtoupper($row['age']).' </td>
                                        ';
                                ?>
                                        <td class="col-2">
                                            <form action="function.php" method="POST" class="d-inline">
                                                <!-- <button type="button" class="btn btn-info btn-sm" title="View" data-bs-toggle="modal" data-bs-target="#View_Resident<?php echo $row['id']; ?>"><i class="fa-solid fa-eye"></i></button> -->
                                                <button type="button" class="button-color btn btn-sm" title="Edit" data-bs-toggle="modal" data-bs-target="#Edit_Resident<?php echo $row['id']; ?>">Edit <i class="fa-solid fa-pen-to-square" aria-hidden="true"></i></button>
                                                <button type="button" class="btn btn-danger btn-sm" title="Delete" data-bs-toggle="modal" data-bs-target="#Delete_Resident<?php echo $row['id']; ?>">Delete <i class="fa-solid fa-trash"></i></button>
                                            </form>
                                        </td>
                                        </tr>
                                        
                                        <?php
                                        
                                        include 'resident-edit.php'; 
                                        include 'resident-delete.php';
                                    }
                                ?>
                            </tbody>
                            
                            
                        </table>
                    </div>
                    <!-- add modal-->
                    <?php include ('resident-create.php'); ?>
                </div>
            </div>
        </div>
    </div>

    
<script>
  $(document).ready( function () 
  {
    $('#myTable').DataTable();
  } );
</script>

<?php 
include 'pagination/pagination.php';
include '../../includes/footer.php';
?>