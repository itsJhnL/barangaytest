<?php
    include '../../includes/header.php';
    include '../../includes/scripts.php';
?>

<?php include '../connection.php'; ?>

    <div class="container px-4">
        <div class="row">
            <div class="col-md-12">
                <h1 class="my-2">Officials Inactive List</h1>
                <hr>
                <div class="card d.flex">
                    <div class="card-header">

                        <!-- search bar -->
                        <div class="col-4  ms-auto">
                            <input class="form-control mr-sm-2" type="search" placeholder="Type to search" aria-label="Search" aria-describeby="btnNavbarSearch" id="myInput" onkeyup="myFunction()">
                        </div>
                    </div>
                    
                    <div class="card-body">
                        <table class="table table-bordered table-hover table-striped text-center">
                            <thead>
                                <tr class="col text-center my-auto">
                                    <th class="col-2">Position</th> 
                                    <th class="col-2">Full Name</th> 
                                    <th class="col-4">Address</th>
                                    <th class="col">Contact</th>
                                    <th class="col-2">Action</th>
                                    <th class="col">Option</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $squery = mysqli_query($con, "SELECT * , concat(firstname,' ',lastname) as fullname FROM tbl_archives;");
                                    while($row = mysqli_fetch_array($squery))
                                    {
                                        echo '
                                        <tr class="text-center">
                                            <td> '.strtoupper($row['position']).' </td>
                                            <td> '.strtoupper($row['fullname']).' </td>
                                            <td> '.strtoupper($row['address']).' </td>
                                            <td> '.strtoupper($row['contactNo']).' </td>
                                            ';
                                ?>
                                            
                                            <td>
                                                <form action="function.php" method="POST" class="d-inline">
                                                    <button type="button" class="btn btn-info btn-sm" title="View" data-bs-toggle="modal" data-bs-target="#View_Official<?php echo $row['id']; ?>"><i class="bi bi-eye-fill"></i></button>
                                                    <button type="button" class="btn btn-danger btn-sm" title="Delete" data-bs-toggle="modal" data-bs-target="#Delete_Official_Archive<?php echo $row['id']; ?>"><i class="bi bi-trash-fill"></i></button>
                                                </form>
                                            </td>

                                            <td class="col">
                                                <?php

                                                    $query = mysqli_query($con, "SELECT status FROM tbl_archives where status='Inactive'");

                                                    if($query)
                                                    {
                                                        echo '
                                                            <form action="function.php" method="POST">
                                                                <button type="button" class="btn btn-info" title="Set Active" data-bs-toggle="modal" data-bs-target="#setActive'.$row['id'].'">Restore</button>
                                                            </form>
                                                        ';
                                                    }
                                                ?>
                                            </td>
                                        </tr>
                                        <?php
                                        include 'active.php';
                                        include 'view_official.php';
                                        include 'delete_official_archive.php';
                                        
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

<?php 
include '../../includes/footer.php';
?>