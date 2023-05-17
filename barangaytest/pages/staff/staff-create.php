<?php include ('code.php'); ?>

<!-- Add Staff Modal -->
<div class="modal fade" id="Add_Staff" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
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
                <?php 

                  $query = mysqli_query($con, "SELECT image FROM dashboard");
                  {
                  while($row = mysqli_fetch_array($query))
                  echo'
                  <image src="../settings/img/'.basename($row['image']).'" style="border-radius: 50%" alt="" class="w-auto" height="150">';

                  }

                ?>
              </div>
              <script>
                function lettersOnly (input) {
                  var regex = /[^a-z ]/gi;
                  input.value = input.value.replace (regex, "");
                }
              </script>
              <div class="col">
                <label >Last Name</label>
                <input type="text" class="form-control" name="lastname" autocomplete="off" onkeyup="lettersOnly(this)" required>
              </div>
              <div class="col">
                <label >First Name</label>
                <input type="text" class="form-control" name="firstname"  autocomplete="off" onkeyup="lettersOnly(this)" required>
              </div>
              <div class="col">
                <label >Middle Name</label>
                <input type="text" class="form-control" name="middlename"  autocomplete="off" onkeyup="lettersOnly(this)" required>
              </div>
            </div>

            <!-- Address -->
            <div class="row mb-2">
              <label >Address</label>
              <div class="col">
                <input type="text" class="form-control" name="address" placeholder="" autocomplete="off" required>
              </div>
            </div>
            
            <!-- Contact and Gender -->
            <div class="row g-2 mb-2">
              <div class="col">
                <label>Contact No.</label>
                <input type="text" class="form-control" name="contactNo" maxlength="11" placeholder="" autocomplete="off" required oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" />
              </div>
              <div class="col">
                <label>Gender</label>
                <select class="form-select" name="gender" autocomplete="off" required>
                  <option selected disabled value="">Choose an option</option>
                  <option value="MALE">Male</option>
                  <option value="FEMALE">Female</option>
                </select>
              </div>
            </div>

            <!-- input a username and password -->
            <div class="row g-2 mb-2">
              <div class="col input-group">
                <label>Username</label>
                <div class="input-group">
                  <div class="input-group-text"><i class="fa-solid fa-user"></i></div>
                  <input type="text" class="form-control" name="username" autocomplete="off" placeholder="Username">
                </div>
              </div>
              
              <div class="col input-group">
                <label>Password</label>
                <div class="input-group">
                  <div class="input-group-text"><i class="fa-solid fa-key"></i></div>
                  <input type="password" class="form-control" name="password" autocomplete="off" placeholder="Password">
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
              <button type="submit" name="save_staff" class="button-color btn">Submit</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>