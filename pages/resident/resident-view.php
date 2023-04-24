<!-- View Staff Modal -->
<div class="modal fade" id="View_Resident<?php echo $row['id'];?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">View mode</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <div class="row g-2 mb-2">
                    <div class="col">
                        <label>Last Name</label>
                        <p class="form-control" name="lastname" ><?php echo strtoupper($row['lastname']);?></p>
                    </div>
                    <div class="col">
                        <label>First Name</label>
                        <p class="form-control" name="firstname"><?php echo strtoupper($row['firstname']);?></p>
                    </div>
                    <div class="col">
                        <label>Middle Name</label>
                        <p class="form-control" name="middlename"><?php echo strtoupper($row['middlename']);?></p>
                    </div>
                </div>
                <div class="mb-3">
                    <label>Address</label><br>
                    <small>House# / Purok / Barangay / City / Province</small>
                    <p class="form-control">
                        <?php echo strtoupper($row['houseNo']); ?>, <?php echo strtoupper($row['purok']); ?>, <?php echo strtoupper($row['barangay']); ?>, <?php echo strtoupper($row['city']); ?>, <?php echo strtoupper($row['province']); ?>
                    </p>    
                </div>
                <div class="row g-2">
                    <div class="col">
                    <label>Contact No.</label>
                    <p class="form-control">
                        <?php echo strtoupper($row['contactNo']); ?>
                    </p>    
                    </div>
                    <div class="col">
                    <label>Gender</label>
                    <p class="form-control">
                        <?php echo strtoupper($row['gender']); ?>
                    </p>
                </div>
                <div class="row g-2">
                    <div class="col">
                        <label>Username</label>
                        <p class="form-control">
                            <?php echo strtoupper($row['username']); ?>
                        </p>
                    </div>
                    <div class="col">
                        <label>Password</label>
                        <p class="form-control">
                            <?php echo strtoupper($row['password']); ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>