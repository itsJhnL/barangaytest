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
                <h1 class="my-2">Permit Clearance</h1>
                <hr>
                <div class="card">
                    <div class="card-header">
                        <button type="button" class="btn btn-primary float-start" data-bs-toggle="modal" data-bs-target="#Add_Residents">
                            Request Permit
                        </button>
                        <!-- search bar -->
                        <!-- <div class="col-4  ms-auto">
                            <input class="form-control mr-sm-2" type="search" placeholder="Type to search" aria-label="Search" aria-describeby="btnNavbarSearch" id="myInput" onkeyup="myFunction()">
                        </div> -->
                    </div>
                    
                    <div class="card-body">

                        <table class="table table-bordered table-hover table-striped">
                            <thead>
                                <tr class="text-center">
                                    <th class="col">Business name</th>
                                    <th class="col">Business Address</th>
                                    <th class="col">Type of Business</th>
                                </tr>
                            </thead>
                            <tbody>
                               
                            </tbody> 
                        </table>
                        <p class="text-center">No record found</p>
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