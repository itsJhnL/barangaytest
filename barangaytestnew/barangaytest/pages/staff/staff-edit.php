<!-- Edit Staff Modal -->
<div class="modal fade" id="Edit_Staff<?php echo $row['id']?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-md">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Create Staff Account</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="container">
          <!-- Form -->
          <form action="code.php" method="POST">
            <div class="row g-2 mb-2">
              <div class="text-center d.flex pb-3">
                <img src="../../includes/assets/img/talavera_logo.png" class="w-auto" height="150" alt="Logo">
              </div>
              <div class="col">
                <input type="hidden" name="id" value="<?php echo $row['id']?>"/>
                <label >Last Name</label>
                <input type="text" class="form-control" name="lastname" autocomplete="off" required value="<?php echo $row['lastname']?>">
              </div>
              <div class="col">
                <label >First Name</label>
                <input type="text" class="form-control" name="firstname"  autocomplete="off" required value="<?php echo $row['firstname']?>">
              </div>
              <div class="col">
                <label >Middle Name</label>
                <input type="text" class="form-control" name="middlename"  autocomplete="off" required value="<?php echo $row['middlename']?>">
              </div>
            </div>

            <!-- Address -->
            <div class="row mb-2">
              <label >Address</label>
              <div class="col">
                <input type="text" class="form-control" name="address" placeholder="" autocomplete="off" required value="<?php echo $row['address']?>">
              </div>
            </div>
            
            <!-- Contact and Gender -->
            <div class="row g-2 mb-2">
              <div class="col">
                <label>Contact No.</label>
                <input type="text" class="form-control" name="contactNo" maxlength="11" placeholder="" autocomplete="off" required value="<?php echo $row['contactNo']; ?>">
              </div>
              <div class="col">
                <?php 
                  if($row['gender'] == "MALE")
                  {
                    echo'
                    <label >Gender</label>
                    <select class="form-select" name="gender" autocomplete="off" required>
                      <option value="MALE">'.strtoupper($row['gender']).'</option>
                      <option value="FEMALE">FEMALE</option>
                    </select>
                    ';
                  }

                  elseif($row['gender'] == "FEMALE")
                  {
                    echo'
                    <label>Gender</label>
                    <select class="form-select" name="gender" autocomplete="off" required>
                      <option value="FEMALE">'.strtoupper($row['gender']).'</option>
                      <option value="MALE">MALE</option>
                    </select>
                    ';
                  }
                ?>
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
            <!-- <div class="row g-2 mb-3">
              <div class="col">
                <label >Contact No.</label>
                <input type="text" class="form-control" name="contactNo" placeholder="+63" autocomplete="off" required value="<?php echo $row['contactNo']?>">
              </div>
              <div class="col">
                <?php 

                  if($row['status'] == "ACTIVE")
                  {
                    echo '
                    <label >Status</label>
                    <select class="form-select" name="status" autocomplete="off" required>
                      <option value="ACTIVE">'.strtoupper($row['status']).'</option>
                      <option value="NOT ACTIVE">NOT ACTIVE</option>
                    </select>
                    ';
                  }

                  elseif($row['status'] == "NOT ACTIVE")
                  {
                    echo '
                    <label >Status</label>
                    <select class="form-select" name="status" autocomplete="off" required>
                      <option value="NOT ACTIVE">'.strtoupper($row['status']).'</option>
                      <option value="ACTIVE">ACTIVE</option>
                    </select>
                    ';
                  }

                  else {
                    echo"";
                  }
                ?>
              </div>
            </div> -->
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
              <button type="submit" name="update_staff" class="button-color btn">Update</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>