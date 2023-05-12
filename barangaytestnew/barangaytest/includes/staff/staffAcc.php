<?php
    /* session_start(); */
    require '../../pages/connection.php';
?>

<?php 
include 'include/header.php';
?>
  
    <div class="container px-4">

        
        <?php //include('message.php'); ?>
        <div class="row">
            <div class="col-md-12">
                <h1 class="my-2">Resident List</h1>
                <hr>
                <div class="card">
                    <div class="card-header">
                        <button type="button" class="btn btn-primary float-start" data-bs-toggle="modal" data-bs-target="#Add_Residents">
                            Add Residents
                        </button>
                        <!-- search bar -->
                        <div class="col-4  ms-auto">
                            <input class="form-control mr-sm-2" type="search" placeholder="Type to search" aria-label="Search" aria-describeby="btnNavbarSearch" id="myInput" onkeyup="myFunction()">
                        </div>
                    </div>
                    
                    <div class="card-body">

                        <table class="table table-bordered table-hover table-striped">
                            <thead>
                                <tr class="text-center">
                                    <th class="col">ID</th>
                                    <th class="col">Firstname</th>
                                    <th class="col">Lastname</th>
                                    <th class="col">Birthdate</th>
                                    <th class="col">Age</th>
                                    <th class="col">Gender</th>
                                    <th class="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    $query = "SELECT * FROM tblresident";
                                    $query_run = mysqli_query($con, $query);

                                    if(mysqli_num_rows($query_run) > 0)
                                    {
                                        foreach($query_run as $resident)
                                        {
                                            ?>
                                            <tr class="text-center">
                                                <td class="text-center"><?= $resident['id']; ?></td>
                                                <td><?= $resident['firstname']; ?></td>
                                                <td><?= $resident['lastname']; ?></td>
                                                <td><?= $resident['birthdate']; ?></td>
                                                <td><?= $resident['age']; ?></td>
                                                <td><?= $resident['gender']?></td>
                                                <td class="text-center">
                                                    <!-- <a href="resident-view.php?id=<?= $resident['id']; ?>" class="btn btn-info btn-sm">View</a> -->
                                                    <a href="resident-edit.php?id=<?= $resident['id']; ?>" class="btn btn-primary btn-sm">Edit</a>
                                                    <form action="code.php" method="POST" class="d-inline">
                                                        <button type="submit" name="delete_resident" value="<?=$resident['id'];?>" class="deleteStaffBtn btn btn-danger btn-sm">Delete</button>
                                                    </form>
                                                </td>
                                            </tr>
                                            <?php
                                        }
                                    }
                                    else
                                    {
                                        echo "<h5> No Record Found </h5>";
                                    }
                                ?>
                                
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include ('../../pages/resident/resident-create.php'); ?>

    <script>
        $(document).on('click', '.deleteStaffBtn', function (e) {
            e.preventDefault();

            if(confirm('Are you sure you want to delete this data?'))
            {
                var staff_id = $(this).val();
                $.ajax({
                    type: "POST",
                    url: "code.php",
                    data: {
                        'delete_staff': true,
                        'staff_id': staff_id
                    },
                    success: function (response) {

                        var res = jQuery.parseJSON(response);
                        if(res.status == 500) {

                            alert(res.message);
                        }else{
                            alertify.set('notifier','position', 'top-right');
                            alertify.success(res.message);

                            $('#myTable').load(location.href + " #myTable");
                        }
                    }
                });
            }
        });
    </script>

        <!-- Toggle Button -->
  <script src="../js/scripts.js"></script>
  

<?php 
include 'include/footer.php';
include 'include/scripts.php';
?>