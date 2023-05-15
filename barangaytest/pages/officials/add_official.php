<!-- Add Official Modal -->
<div class="modal fade" id="Add_Official" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-md">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Add Official</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="container">
          <!-- Form -->
          <form action="function.php" method="POST">
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
              <div class="col">
                <label >Last Name</label>
                <input type="text" class="form-control" name="lastname" autocomplete="off" required>
              </div>
              <div class="col">
                <label >First Name</label>
                <input type="text" class="form-control" name="firstname"  autocomplete="off" required>
              </div>
              <div class="col">
                <label >Middle Name</label>
                <input type="text" class="form-control" name="middlename"  autocomplete="off" required>
              </div>
            </div>

            <!-- Address -->
            <div class="row mb-2">
              <label >Address</label>
              <div class="col">
                <input type="text" class="form-control" name="address" placeholder="" autocomplete="off" required>
              </div>
            </div>
            
            <!-- Contact and Email -->
            <div class="row g-2 mb-2">
              <div class="col">
                <label>Contact No.</label>
                <input type="text" class="form-control" name="contactNo" maxlength="11" placeholder="" autocomplete="off" required>
              </div>
              
              <div class="col">
                <label>Email Address</label>
                <input type="email" class="form-control" name="email" placeholder="" autocomplete="off" required>
              </div>
                
            </div>
            <!-- Positions and Gender -->
            <div class="row g-2 mb-2">
              <div class="col-md-6">
                <label >Position</label>
                <select class="form-select" name="position" autocomplete="off" required>
                  <option selected disabled value="">Choose an option</option>
                  <option value="Barangay Captain">Barangay Captain</option>
                  <option value="Kagawad(Ordinance)">Kagawad(Ordinance)</option>
                  <option value="Kagawad(Public Safety)">Kagawad(Public Safety)</option>
                  <option value="Kagawad(Tourism)">Kagawad(Tourism)</option>
                  <option value="Kagawad(Budget & Finance)">Kagawad(Budget & Finance)</option>
                  <option value="Kagawad(Agriculture)">Kagawad(Agriculture)</option>
                  <option value="Kagawad(Education)">Kagawad(Education)</option>
                  <option value="Kagawad(Infrastracture)">Kagawad(Infrastracture)</option>
                  <option value="SK Chairman">SK Chairman</option>
                  <option value="Secretary">Secretary</option>
                  <option value="Treasurer">Treasurer</option>
                </select>
              </div>
              <div class="col">
                <label >Gender</label>
                <select class="form-select" name="gender" autocomplete="off" required>
                  <option selected disabled value="">Choose an option</option>
                  <option value="MALE">Male</option>
                  <option value="FEMALE">Female</option>
                </select>
              </div>
            </div>

            <!-- Start/End Date -->
            <div class="row g-2 mb-2">
              <div class="col-md-6">
                <label >Start Date</label>
                <input class="form-control" type="date" name="start_date" id="" required>
              </div>
              <div class="col">
                <label >End Date</label>
                <input class="form-control" type="date" name="end_date" id="" required>
              </div>
            </div>

            <!-- Status -->
            <input type="hidden" name="status" value="Active">
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
              <button type="submit" name="add_official" class="button-color btn">Submit</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>