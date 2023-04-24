<?php 

include "../connection.php";

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap 4.0 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">

    <title>Add Staff Account</title>
</head>
<body>    
    <?php include "add_modal.php"; ?>

    <div class="container">
    <?php include('../message.php'); ?>
        <h3 class="my-5" >Admin Page</h3>
        <hr>
        
        <!-- Log out button -->
        <!-- <div class="row my-5">
            <div class="col md 12 text-right">
                <button type="button" class="btn btn-info">
                    <a href="../../logout.php" class="text-light">Log out</a>
                </button>
            </div>
        </div> -->
        <div class="card my-5">
            <div class="card-header">

                <!-- BUTTONS -->
                <!-- Add user -->
                <button action="display.php" class="btn btn-primary " data-toggle="modal" data-target="#addModal">
                    <!-- <a href="useradmin.php" class="text-light"> Add User </a> -->
                    Add Staff
                </button>

                <!-- Delete all function -->
                <button action="useradmin.php" class="btn btn-danger " data-toggle="modal" data-target="#add">
                    <!-- <a href="useradmin.php" class="text-light"> Add User </a> -->
                    Delete All
                </button>
                
            </div>
            <div class="card-body">
                <!-- ADD Modal -->
                <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">

                        <!-- Modal-Content -->
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Create Staff Account</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            
                            <div class="container my-5">
                                <!-- Form -->
                                <form action="SaveData" class="" method="post">
                                    <div class="modal-body">
                                    <div class="alert alert-warning d-none">Warning</div>
                                    <div class="form-group">
                                        <label>Full Name</label>
                                        <input type="text" class="form-control" name="username" placeholder="Lastname, Firstname MI." autocomplete="off" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Username</label>
                                        <input type="text" class="form-control" name="username" placeholder="Enter your username" autocomplete="off" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="password" class="form-control" name="password" placeholder="Enter you password" autocomplete="off" required>
                                    </div>
                                    </div>
                                    
                                </form>
                            </div>
                            
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- EDIT Modal -->
                <div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">

                        <!-- Modal-Content -->
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Edit Staff Account</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            
                            <div class="container my-5">
                                <!-- Form -->
                                <form class="" method="post">
                                    <div class="form-group">
                                        <label>Username</label>
                                        <input type="text" class="form-control" name="username" placeholder="" autocomplete="off" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="password" class="form-control" name="modal_password" placeholder="" autocomplete="off" required>
                                        </script>
                                    </div>
                                </form>
                            </div>
                            
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary" name="submit">Submit</button>


                            </div>
                        </div>
                    </div>
                </div>
                <!-- Data table -->
                <table class="table table-striped, text-dark">
                    <thead>
                        <!-- check box to delete all -->
                        <tr>
                        <th scope="col" style="width: 19.4px;" class="sorting_disabled" rowspan="1" colspan="1" aria-label=""><input type="checkbox" name="chk_delete[]" class="cbxMain" onchange="checkMain(this)">
                        </th>
                        <th scope="col">Full Name</th>
                        <th scope="col">User Name</th>
                        <th scope="col">Password</th>
                        <th scope="col" class="text-right">Operations</th>
                        </tr>
                    </thead>
                    <tbody>

                        

                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <script>
        $(document).on('submit', '#SaveData' function (event){
            event.preventDefault();

            va forData = new FormData(this);
            formData.append("save_data", true);

            $.ajax({
                type: "POST",
                url: "process.php",
                data: formData,
                processData: false,
                contentType: false,
                success: function (response) {

                    var res = jquery.parseJSON(response);

                    if(res.states == 422) {
                        $('#errorMessage').removeClass('d.none');
                        $('#errorMessage').text(res.message);
                    }
                    else if(res.status == 200){
                        $('#errorMessage').addClass('d-none');
                        $('#addModal').modal('hide');
                        $('SaveData')[0].reset();
                    }
                }
            });
        });
    </script>
    
</body>
</html>



<!-- PHP -->
<?php

include '../connection.php';

if(isset($_POST['submit'])) {
    $complete_name = $_POST['complete_name'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    $sql = "INSERT INTO `tblstaff`(`id`, `complete_name`, `username`, `password`) VALUES ('','$complete_name', '$username','$password')";

    $result = mysqli_query($con,$sql);

    if($result){

        /* echo "Data inserted successfully"; */
        header ("location: display.php") or die(mysqli_error($con));
    }
}

?>