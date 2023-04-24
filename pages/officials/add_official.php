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
                <img src="../../includes/assets/img/talavera_logo.png" class="w-auto" height="150" alt="Logo">
              </div>
              <div class="col">
                <label class="form-label">Last Name</label>
                <input type="text" class="form-control" name="lastname" autocomplete="off" required>
              </div>
              <div class="col">
                <label class="form-label">First Name</label>
                <input type="text" class="form-control" name="firstname"  autocomplete="off" required>
              </div>
              <div class="col">
                <label class="form-label">Middle Name</label>
                <input type="text" class="form-control" name="middlename"  autocomplete="off" required>
              </div>
            </div>

            <!-- Address -->
            <div class="row mb-2">
              <label class="form-label">Address</label>
              <div class="col">
                <input type="text" class="form-control" name="address" placeholder="" autocomplete="off" required>
              </div>
            </div>
            
            <!-- Contact and Email -->
            <div class="row g-2 mb-2">
              <div class="col input-group">
                <label>Contact No.</label>
                <div class="input-group">
                  <div class="input-group-text">+63</div>
                  <input type="text" class="form-control" name="contactNo" maxlength="11" placeholder="" autocomplete="off" required>
                </div>
              </div>
              <div class="col input-group">
                <label>Email Address</label>
                <div class="input-group">
                  <div class="input-group-text"><i class="bi bi-envelope-at-fill"></i></div>
                  <input type="email" class="form-control" name="email" placeholder="" autocomplete="off" required>
                </div>
              </div>
            </div>
            <!-- Positions and Gender -->
            <div class="row g-2 mb-2">
              <div class="col-md-6">
                <label class="form-label">Position</label>
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
                <label class="form-label">Gender</label>
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
                <label class="form-label">Start Date</label>
                <input class="form-control" type="date" name="start_date" id="" required>
              </div>
              <div class="col">
                <label class="form-label">End Date</label>
                <input class="form-control" type="date" name="end_date" id="" required>
              </div>
            </div>

            <!-- Status -->
            <input type="hidden" name="status" value="NOT ACTIVE">
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
              <button type="submit" name="add_official" class="btn btn-primary">Submit</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>