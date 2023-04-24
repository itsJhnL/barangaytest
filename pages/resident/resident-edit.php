<!-- Edit Staff Modal -->
<div class="modal fade" id="Edit_Resident<?php echo $row['id']?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-md">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Create Staff Account</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="container">
          <!-- Form -->
          <form action="function.php" method="POST">
            <div class="row g-2 mb-2">
              <div class="text-center d.flex pb-3">
                <img src="../../includes/assets/img/talavera_logo.png" class="w-auto" height="150" alt="Logo">
              </div>
              <div class="col">
                <input type="hidden" name="id" value="<?php echo $row['id']?>"/>
                <label class="form-label" >Last Name</label>
                <input type="text" class="form-control" name="lastname" autocomplete="off" required value="<?php echo $row['lastname']?>">
              </div>
              <div class="col">
                <label class="form-label" >First Name</label>
                <input type="text" class="form-control" name="firstname"  autocomplete="off" required value="<?php echo $row['firstname']?>">
              </div>
              <div class="col">
                <label class="form-label" >Middle Name</label>
                <input type="text" class="form-control" name="middlename"  autocomplete="off" required value="<?php echo $row['middlename']?>">
              </div>
            </div>

            <!-- Address -->
            <div class="row mb-2">
              <label class="form-label" >Address</label><br>
              <small>House# / Purok / Barangay / City / Province</small>
              <div class="col">
                <input type="text" class="form-control" name="address" placeholder="" autocomplete="off" required value="<?php echo strtoupper($row['houseNo']);?>, <?php echo strtoupper($row['purok']); ?>, <?php echo strtoupper($row['barangay']); ?>, <?php echo strtoupper($row['city']); ?>, <?php echo strtoupper($row['province']); ?>">
              </div>
            </div>
            
            <!-- Contact and Gender -->
            <div class="row g-2 mb-2">
              <div class="col input-group">
                <label>Contact No.</label>
                <div class="input-group">
                  <div class="input-group-text">+63</div>
                  <input type="text" class="form-control" name="contactNo" maxlength="11" placeholder="" autocomplete="off" required value="<?php echo $row['contactNo']; ?>">
                </div>
              </div>
              <div class="col input-group">
                <label>Gender</label>
                <div class="input-group">
                  <div class="input-group-text"><i class="bi bi-gender-ambiguous"></i></div>
                  <label value="<?php echo $row['gender']; ?>"></label>
                  <select class="form-select" name="gender" autocomplete="off" required>
                    <option value="MALE">Male</option>
                    <option value="FEMALE">Female</option>
                  </select>
                </div>
              </div>
            </div>

            <!-- input a username and password -->
            <div class="row g-2 mb-2">
              
              <div class="col input-group">
                <label>Username</label>
                <div class="input-group">
                  <div class="input-group-text"><i class="fa-solid fa-user"></i></div>
                  <input type="text" class="form-control" name="username" autocomplete="off" placeholder="Username" value="<?php echo $row['username']?>">
                </div>
              </div>
              
              <div class="col input-group">
                <label>Password</label>
                <div class="input-group">
                  <div class="input-group-text"><i class="fa-solid fa-key"></i></div>
                  <input type="text" class="form-control" name="password" autocomplete="off" placeholder="Password" value="<?php echo $row['password']?>">
                </div>
              </div>
            </div>

            <div class="row g-2 mb-3">
              <div class="col">
                <label class="form-label">Contact No.</label>
                <input type="text" class="form-control" name="contactNo" placeholder="+63" autocomplete="off" required value="<?php echo $row['contactNo']?>">
              </div>
              <div class="col">
                <label class="form-label">Status</label>
                <select class="form-select" name="status" autocomplete="off" required>
                  <option value="Active">Active</option>
                  <option value="Not Active">Not Active</option>
                </select>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
              <button type="submit" name="update_resident" class="btn btn-primary">Update</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>