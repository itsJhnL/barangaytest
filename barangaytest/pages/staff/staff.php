<?php
    include '../../includes/header.php';
    include '../../includes/scripts.php';
?>
<?php
    include '../connection.php';
?>
    <div class="container px-4">
        <div class="row">
            <div class="col-md-12">
                <h1 class="my-2">Staff list</h1>
                <hr>
                <!-- <?php include('message.php'); ?> -->
                <div class="card d.flex">
                    <div class="card-header">
                        <button type="button" class="button-color btn float-start" title="Create" data-bs-toggle="modal" data-bs-target="#Add_Staff">
                            New <i class="bi bi-person-fill-add"></i>
                            <!-- <i class="bi bi-person-add"></i> -->
                            <!-- <i class="bi bi-person-plus"></i> -->
                        </button>
                    </div>
                    
                    <div class="card-body">
                        <table class="table table-bordered table-hover table-striped" id="myTable">
                            <thead>
                                <tr class="col text-center">
                                    <th class="col">Name</th> 
                                    <th class="col">Address</th>
                                    <th class="col">Contact No.</th>
                                    <th class="col">Gender</th> 
                                    <th class="col">Username</th>
                                    <th class="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php


                                    $squery = mysqli_query($con, "SELECT *, concat(barangay,', ',City,', ',province,' ') as address FROM tblstaff");
                                    while($row = mysqli_fetch_array($squery))
                                    {
                                    echo '
                                        <tr class="text-center">
                                        <td> '.strtoupper($row['lastname']).', '.strtoupper($row['firstname']).' '.strtoupper($row['middlename']).'. </td>
                                        <td> '.strtoupper($row['address']).' </td>
                                        <td> '.strtoupper($row['contactNo']).' </td>
                                        <td> '.strtoupper($row['gender']).' </td>
                                        <td> '.($row['username']).' </td>
                                        <td>';
                                ?>
                                        <form action="function.php" method="POST" class="d-inline">
                                            <button type="button" class="button-color btn btn-sm" title="View" data-bs-toggle="modal" data-bs-target="#View_Staff<?php echo $row['id']; ?>"><i class="fa-solid fa-eye"></i></button>
                                            <button type="button" class="button-color btn btn-primary btn-sm" title="Edit" data-bs-toggle="modal" data-bs-target="#Edit_Staff<?php echo $row['id']; ?>"><i class="fa-solid fa-pen-to-square" aria-hidden="true"></i></button>
                                            <button type="button" class="btn btn-danger btn-sm" title="Delete" data-bs-toggle="modal" data-bs-target="#Delete_Staff<?php echo $row['id']; ?>"><i class="fa-solid fa-trash"></i></button>
                                        </form>
                                        </td>
                                        </tr>
                                        
                                        <?php
                                        
                                        include 'staff-edit.php'; 
                                        include 'staff-delete.php';
                                        include 'staff-view.php';
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                    <!-- add modal-->
                    <?php include ('staff-create.php'); ?>
                </div>
            </div>
        </div>
    </div>

    <!-- Pagination -->
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