<?php include ('code.php'); ?>

<!-- View Staff Modal -->
<div class="modal fade" id="View_Staff<?php echo $row['id']; ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">View mode</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <div class="row g-2">
                    <div class="col">
                        <label>Last Name</label>
                        <p class="form-control" name="lastname"><?php echo $row['lastname']?></p>
                    </div>
                    <div class="col">
                        <label>First Name</label>
                        <p class="form-control" name="firstname"><?php echo $row['firstname']?></p>
                    </div>
                    <div class="col">
                        <label>Middle Name</label>
                        <p class="form-control" name="middlename"><?php echo $row['middlename']?></p>
                    </div>
                </div>
                <div class="">
                    <label>Address</label>
                    <p class="form-control">
                        <?php echo $row['address']; ?>
                    </p>    
                </div>
                <div class="row mx-auto g-2">
                    <div class="col">
                    <label>Contact No.</label>
                    <p class="form-control">
                        <?php echo $row['contactNo']; ?>
                    </p>    
                    </div>
                    <div class="col">
                    <label>Gender</label>
                    <p class="form-control">
                        <?php echo $row['gender']; ?>
                    </p>
                </div>
                <div class="row mx-auto g-2">
                    <div class="col">
                        <label>Staff Username</label>
                        <p class="form-control">
                            <?php echo $row['username']; ?>
                        </p>
                    </div>
                    <div class="col">
                        <label>Staff Password</label>
                        <p class="form-control">
                            <?php echo $row['password']; ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>