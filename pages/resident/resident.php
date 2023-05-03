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
                <h1 class="my-2">Resident List</h1>
                <hr>
                <!-- <?php include('message.php'); ?> -->
                <div class="card d.flex">
                    <div class="card-header">
                        <button type="button" class="btn btn-success float-start" title="Create" data-bs-toggle="modal" data-bs-target="#Add_Resident">
                            New <i class="bi bi-person-fill-add"></i>
                            <!-- <i class="bi bi-person-add"></i> -->
                            <!-- <i class="bi bi-person-plus"></i> -->
                        </button>

                        <!-- search bar -->
                        <div class="col-4  ms-auto">
                            <input class="form-control mr-sm-2" type="search" placeholder="Search name..." aria-label="Search" aria-describeby="btnNavbarSearch" id="myInput" onkeyup="myFunction()">
                        </div>
                    </div>
                    
                    <div class="card-body">
                        <table class="table table-bordered table-hover table-striped" id="myTable">
                            <thead>
                                <tr class="col text-center">
                                    <!-- <th class="col">#</th> -->
                                    <th class="col">Image</th> 
                                    <th class="col">Name</th> 
                                    <th class="col">Address</th>
                                    <th class="col">Gender</th> 
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
                                        <td style="width:70px;"><image src="img/image.jpg" style="width:60px;height:60px;"/></td>
                                        <td> '.strtoupper($row['lastname']).', '.strtoupper($row['firstname']).' '.strtoupper($row['middlename']).'. </td>
                                        <td>#'.strtoupper($row['houseNo']).', PUROK '.strtoupper($row['purok']).', '.strtoupper($row['barangay']).' '.strtoupper($row['city']).' '.strtoupper($row['province']).'</td>
                                        <td> '.strtoupper($row['gender']).' </td>
                                        ';
                                ?>
                                        <td class="col-2">
                                            <form action="code.php" method="POST" class="d-inline">
                                                <button type="button" class="btn btn-info btn-sm" title="View" data-bs-toggle="modal" data-bs-target="#View_Resident<?php echo $row['id']; ?>"><i class="fa-solid fa-eye"></i></button>
                                                <button type="button" class="btn btn-primary btn-sm" title="Edit" data-bs-toggle="modal" data-bs-target="#Edit_Resident<?php echo $row['id']; ?>"><i class="fa-solid fa-pen-to-square" aria-hidden="true"></i></button>
                                                <button type="button" class="btn btn-danger btn-sm" title="Delete" data-bs-toggle="modal" data-bs-target="#Delete_Resident<?php echo $row['id']; ?>"><i class="fa-solid fa-trash"></i></button>
                                            </form>
                                        </td>
                                        </tr>
                                        
                                        <?php
                                        
                                        include 'resident-edit.php'; 
                                        include 'resident-delete.php';
                                        include 'resident-view.php';
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
        
        //Search function
        function myFunction() {
            var input, filter, table, tr, td, i, txtValue;
            input = document.getElementById("myInput");
            filter = input.value.toUpperCase();
            table = document.getElementById("myTable");
            tr = table.getElementsByTagName("tr");
            for (i = 0; i < tr.length; i++) {
            td = tr[i].getElementsByTagName("td")[0];
            if (td) {
                txtValue = td.textContent || td.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                tr[i].style.display = "";
                } else {
                tr[i].style.display = "none";
                }
            }       
            }
        }
    </script>
    

<?php 
include '../../includes/footer.php';
?>