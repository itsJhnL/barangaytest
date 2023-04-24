<?php
    include '../../includes/header.php';
    include '../../includes/scripts.php';
?>

<?php include '../connection.php'; ?>

<style>
    .switch {
    position: relative;
    display: inline-block;
    width: 85px;
    height: 34px;
   }
   
   .switch input {
    display: none;
   }
   
   .slider {
    position: absolute;
    cursor: pointer;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: #3C3C3C;
    -webkit-transition: .4s;
    transition: .4s;
    border-radius: 34px;
   }
   
   .slider:before {
    position: absolute;
    content: "";
    height: 20px;
    width: 20px;
    left: 6px;
    bottom: 7px;
    background-color: white;
    -webkit-transition: .4s;
    transition: .4s;
    border-radius: 50%;
   }
   
   input:checked + .slider {
    background-color: #0E6EB8;
   }
   
   input:focus + .slider {
    box-shadow: 0 0 1px #2196F3;
   }
   
   input:checked + .slider:before {
    -webkit-transform: translateX(26px);
    -ms-transform: translateX(26px);
    transform: translateX(55px);
   }
   
   /*------ ADDED CSS ---------*/
   .slider:after {
    content: 'Not Active';
    color: white;
    display: block;
    position: absolute;
    transform: translate(-50%,-50%);
    top: 50%;
    left: 50%;
    font-size: 10px;
    font-family: Verdana, sans-serif;
   }
   
   input:checked + .slider:after {
    content: 'Active';
   }
   
   /*--------- END --------*/
</style>

    <div class="container px-4">
        <div class="row">
            <div class="col-md-12">
                <h1 class="my-2">Barangay Officials List</h1>
                <hr>
                <div class="card d.flex">
                    <div class="card-header">
                        <button type="button" class="btn btn-success float-start" title="Create" data-bs-toggle="modal" data-bs-target="#Add_Official">
                            New <i class="bi bi-person-fill-add"></i>
                        </button>

                        <!-- search bar -->
                        <div class="col-4  ms-auto">
                            <input class="form-control mr-sm-2" type="search" placeholder="Type to search" aria-label="Search" aria-describeby="btnNavbarSearch" id="myInput" onkeyup="myFunction()">
                        </div>
                    </div>
                    
                    <div class="card-body">
                        <table class="table table-bordered table-hover table-striped">
                            <thead>
                                <tr class="col text-center my-auto">
                                    <th class="col-2">Position</th> 
                                    <th class="col-2">Full Name</th> 
                                    <th class="col-4">Address</th>
                                    <th class="col">Contact</th>
                                    <th class="col-2">Action</th>
                                    <th class="col">Status</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $squery = mysqli_query($con, "SELECT * FROM tblofficials");
                                    while($row = mysqli_fetch_array($squery))
                                    {
                                        echo '
                                        <tr class="text-center">
                                            <td> '.strtoupper($row['position']).' </td>
                                            <td> '.strtoupper($row['lastname']).', '.strtoupper($row['firstname']).' '.strtoupper($row['middlename']).'. </td>
                                            <td> '.strtoupper($row['address']).' </td>
                                            <td> '.strtoupper($row['contactNo']).' </td>
                                            ';
                                ?>
                                            
                                            <td>
                                                <form action="function.php" method="POST" class="d-inline">
                                                    <button type="button" class="btn btn-info btn-sm" title="View" data-bs-toggle="modal" data-bs-target="#View_Official<?php echo $row['id']; ?>"><i class="bi bi-eye-fill"></i></button>
                                                    <button type="button" class="btn btn-primary btn-sm" title="Edit" data-bs-toggle="modal" data-bs-target="#Edit_Official<?php echo $row['id']; ?>"><i class="bi bi-pencil-square"></i></button>
                                                    <button type="button" class="btn btn-danger btn-sm" title="Delete" data-bs-toggle="modal" data-bs-target="#Delete_Official<?php echo $row['id']; ?>"><i class="bi bi-trash-fill"></i></button>
                                                </form>
                                            </td>

                                            <td class="col">
                                                <div class="col mb-3">
                                                    <?php 

                                                    

                                                        if($row['status'] == "Active")
                                                        {
                                                            echo '
                                                            <div class="dropdown">
                                                            
                                                                <button class="btn-sm btn-success dropdown-toggle" type="button" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">
                                                                    '.($row['status']).'
                                                                </button>
                                                                <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                                                <form action="statuschange.php" method="POST">
                                                                    
                                                                    <button class="dropdown-item" type="submit" name="active" value="Inactive">Inactive</button>
                                                                </form>
                                                                </ul>
                                                            </div>
                                                        ';
                                                        }

                                                        elseif($row['status'] == "Inactive")
                                                        {
                                                            echo '
                                                            <div class="dropdown">
                                                            
                                                                <button class="btn-sm btn-danger dropdown-toggle" type="button" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">
                                                                    '.($row['status']).'
                                                                </button>
                                                                <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                                                    <form action="statuschange.php" method="POST">
                                                                        
                                                                        <button class="dropdown-item" type="submit" name="inactive" value="Active">Active</button>
                                                                    </form>
                                                                </ul>
                                                            </div>
                                                            ';
                                                        }

                                                        else {
                                                        echo"";
                                                        }
                                                    ?>
                                                </div>
                                            </td>
                                        </tr>
                                        <?php
                                        include 'view_official.php';
                                        include 'edit_official.php';
                                        include 'delete_official.php';
                                        
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                    <!-- add modal-->
                    <?php include ('add_official.php'); ?>
                </div>
            </div>
        </div>
    </div>
    

<?php 
include '../../includes/footer.php';
?>