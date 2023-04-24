<!-- Edit Official Modal -->
<div class="modal fade" id="Edit_Official<?php echo $row['id']; ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-md">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Edit Official</h5>
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
                <label class="form-label">Last Name</label>
                <input type="text" class="form-control" name="lastname" autocomplete="off" required value="<?php echo strtoupper($row['lastname']); ?>">
                
              </div>
              <div class="col">
                <label class="form-label">First Name</label>
                <input type="text" class="form-control" name="firstname"  autocomplete="off" required value="<?php echo strtoupper($row['firstname']); ?>">
                
              </div>
              <div class="col">
                <label class="form-label">Middle Name</label>
                <input type="text" class="form-control" name="middlename"  autocomplete="off" required value="<?php echo strtoupper($row['middlename']); ?>">
                
              </div>
            </div>

            <!-- address -->
            <div class="row mb-2">
              <label class="form-label">Address</label>
              <div class="col">
                <input type="text" class="form-control" name="address" placeholder="" autocomplete="off" required value="<?php echo strtoupper($row['address']); ?>">
                
              </div>
            </div>
            
            <!-- Contact and Email -->
            <div class="row g-2 mb-2">
              <div class="col input-group">
                <label>Contact No.</label>
                <div class="input-group">
                  <div class="input-group-text">+63</div>
                  <input type="text" class="form-control" name="contactNo" maxlength="11" placeholder="" autocomplete="off" required value="<?php echo strtoupper($row['contactNo']); ?>">
                </div>
              </div>
              <div class="col input-group">
                <label>Email address</label>
                <div class="input-group">
                  <div class="input-group-text"><i class="bi bi-envelope-at-fill"></i></div>
                  <input type="email" class="form-control" name="email" placeholder="" autocomplete="off" required value="<?php echo strtoupper($row['email']); ?>">
                </div>
              </div>
            </div>
            <!-- Positions and Gender -->
            <div class="row g-2 mb-2">
              <div class="col-md-7">
                <?php 
                  if($row['position'] =="Barangay Captain")
                  {
                    echo '
                    <label>Position</label>
                    <select class="form-select" name="position" autocomplete="off">
                      <option value="Barangay Captain"><b>'.strtoupper($row['position']).'</b></option>
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
                    ';
                  }
                  if($row['position'] =="Kagawad(Ordinance)")
                  {
                    echo '
                    <label>Position</label>
                    <select class="form-select" name="position" autocomplete="off">
                      <option value="Kagawad(Ordinance)"><b>'.strtoupper($row['position']).'</b></option>
                      <option value="Barangay Captain">Barangay Captain</option>
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
                    ';
                  }
                  if($row['position'] =="Kagawad(Public Safety)")
                  {
                    echo '
                    <label>Position</label>
                    <select class="form-select" name="position" autocomplete="off">
                      <option value="Kagawad(Public Safety)"><b>'.strtoupper($row['position']).'</b></option>
                      <option value="Barangay Captain">Barangay Captain</option>
                      <option value="Kagawad(Ordinance)">Kagawad(Ordinance)</option>
                      <option value="Kagawad(Tourism)">Kagawad(Tourism)</option>
                      <option value="Kagawad(Budget & Finance)">Kagawad(Budget & Finance)</option>
                      <option value="Kagawad(Agriculture)">Kagawad(Agriculture)</option>
                      <option value="Kagawad(Education)">Kagawad(Education)</option>
                      <option value="Kagawad(Infrastracture)">Kagawad(Infrastracture)</option>
                      <option value="SK Chairman">SK Chairman</option>
                      <option value="Secretary">Secretary</option>
                      <option value="Treasurer">Treasurer</option>
                    </select>
                    ';
                  }
                  if($row['position'] =="Kagawad(Tourism)")
                  {
                    echo '
                    <label>Position</label>
                    <select class="form-select" name="position" autocomplete="off">
                      <option value="Kagawad(Tourism)"><b>'.strtoupper($row['position']).'</b></option>
                      <option value="Barangay Captain">Barangay Captain</option>
                      <option value="Kagawad(Ordinance)">Kagawad(Ordinance)</option>
                      <option value="Kagawad(Public Safety)">Kagawad(Public Safety)</option>
                      <option value="Kagawad(Budget & Finance)">Kagawad(Budget & Finance)</option>
                      <option value="Kagawad(Agriculture)">Kagawad(Agriculture)</option>
                      <option value="Kagawad(Education)">Kagawad(Education)</option>
                      <option value="Kagawad(Infrastracture)">Kagawad(Infrastracture)</option>
                      <option value="SK Chairman">SK Chairman</option>
                      <option value="Secretary">Secretary</option>
                      <option value="Treasurer">Treasurer</option>
                    </select>
                    ';
                  }
                  if($row['position'] =="Kagawad(Budget & Finance)")
                  {
                    echo '
                    <label>Position</label>
                    <select class="form-select" name="position" autocomplete="off">
                      <option value="Kagawad(Budget & Finance)"><b>'.strtoupper($row['position']).'</b></option>
                      <option value="Barangay Captain">Barangay Captain</option>
                      <option value="Kagawad(Ordinance)">Kagawad(Ordinance)</option>
                      <option value="Kagawad(Public Safety)">Kagawad(Public Safety)</option>
                      <option value="Kagawad(Tourism)">Kagawad(Tourism)</option>
                      <option value="Kagawad(Agriculture)">Kagawad(Agriculture)</option>
                      <option value="Kagawad(Education)">Kagawad(Education)</option>
                      <option value="Kagawad(Infrastracture)">Kagawad(Infrastracture)</option>
                      <option value="SK Chairman">SK Chairman</option>
                      <option value="Secretary">Secretary</option>
                      <option value="Treasurer">Treasurer</option>
                    </select>
                    ';
                  }
                  if($row['position'] =="Kagawad(Agriculture)")
                  {
                    echo '
                    <label>Position</label>
                    <select class="form-select" name="position" autocomplete="off">
                      <option value="Kagawad(Agriculture)"><b>'.strtoupper($row['position']).'</b></option>
                      <option value="Barangay Captain">Barangay Captain</option>
                      <option value="Kagawad(Ordinance)">Kagawad(Ordinance)</option>
                      <option value="Kagawad(Public Safety)">Kagawad(Public Safety)</option>
                      <option value="Kagawad(Tourism)">Kagawad(Tourism)</option>
                      <option value="Kagawad(Budget & Finance)">Kagawad(Budget & Finance)</option>
                      <option value="Kagawad(Education)">Kagawad(Education)</option>
                      <option value="Kagawad(Infrastracture)">Kagawad(Infrastracture)</option>
                      <option value="SK Chairman">SK Chairman</option>
                      <option value="Secretary">Secretary</option>
                      <option value="Treasurer">Treasurer</option>
                    </select>
                    ';
                  }
                  if($row['position'] =="Kagawad(Education)")
                  {
                    echo '
                    <label>Position</label>
                    <select class="form-select" name="position" autocomplete="off">
                      <option value="Kagawad(Education)"><b>'.strtoupper($row['position']).'</b></option>
                      <option value="Barangay Captain">Barangay Captain</option>
                      <option value="Kagawad(Ordinance)">Kagawad(Ordinance)</option>
                      <option value="Kagawad(Public Safety)">Kagawad(Public Safety)</option>
                      <option value="Kagawad(Tourism)">Kagawad(Tourism)</option>
                      <option value="Kagawad(Budget & Finance)">Kagawad(Budget & Finance)</option>
                      <option value="Kagawad(Agriculture)">Kagawad(Agriculture)</option>
                      <option value="Kagawad(Infrastracture)">Kagawad(Infrastracture)</option>
                      <option value="SK Chairman">SK Chairman</option>
                      <option value="Secretary">Secretary</option>
                      <option value="Treasurer">Treasurer</option>
                    </select>
                    ';
                  }
                  if($row['position'] =="Kagawad(Infrastracture)")
                  {
                    echo '
                    <label>Position</label>
                    <select class="form-select" name="position" autocomplete="off">
                      <option value="Kagawad(Infrastracture)"><b>'.strtoupper($row['position']).'</b></option>
                      <option value="Barangay Captain">Barangay Captain</option>
                      <option value="Kagawad(Ordinance)">Kagawad(Ordinance)</option>
                      <option value="Kagawad(Public Safety)">Kagawad(Public Safety)</option>
                      <option value="Kagawad(Tourism)">Kagawad(Tourism)</option>
                      <option value="Kagawad(Budget & Finance)">Kagawad(Budget & Finance)</option>
                      <option value="Kagawad(Agriculture)">Kagawad(Agriculture)</option>
                      <option value="Kagawad(Education)">Kagawad(Education)</option>
                      <option value="SK Chairman">SK Chairman</option>
                      <option value="Secretary">Secretary</option>
                      <option value="Treasurer">Treasurer</option>
                    </select>
                    ';
                  }
                  if($row['position'] =="SK Chairman")
                  {
                    echo '
                    <label>Position</label>
                    <select class="form-select" name="position" autocomplete="off">
                      <option value="SK Chairman"><b>'.strtoupper($row['position']).'</b></option>
                      <option value="Barangay Captain">Barangay Captain</option>
                      <option value="Kagawad(Ordinance)">Kagawad(Ordinance)</option>
                      <option value="Kagawad(Public Safety)">Kagawad(Public Safety)</option>
                      <option value="Kagawad(Tourism)">Kagawad(Tourism)</option>
                      <option value="Kagawad(Budget & Finance)">Kagawad(Budget & Finance)</option>
                      <option value="Kagawad(Agriculture)">Kagawad(Agriculture)</option>
                      <option value="Kagawad(Education)">Kagawad(Education)</option>
                      <option value="Kagawad(Infrastracture)">Kagawad(Infrastracture)</option>
                      <option value="Secretary">Secretary</option>
                      <option value="Treasurer">Treasurer</option>
                    </select>
                    ';
                  }
                  if($row['position'] =="Secretary")
                  {
                    echo '
                    <label>Position</label>
                    <select class="form-select" name="position" autocomplete="off">
                      <option value="Secretary"><b>'.strtoupper($row['position']).'</b></option>
                      <option value="Barangay Captain">Barangay Captain</option>
                      <option value="Kagawad(Ordinance)">Kagawad(Ordinance)</option>
                      <option value="Kagawad(Public Safety)">Kagawad(Public Safety)</option>
                      <option value="Kagawad(Tourism)">Kagawad(Tourism)</option>
                      <option value="Kagawad(Budget & Finance)">Kagawad(Budget & Finance)</option>
                      <option value="Kagawad(Agriculture)">Kagawad(Agriculture)</option>
                      <option value="Kagawad(Education)">Kagawad(Education)</option>
                      <option value="Kagawad(Infrastracture)">Kagawad(Infrastracture)</option>
                      <option value="SK Chairman">SK Chairman</option>
                      <option value="Treasurer">Treasurer</option>
                    </select>
                    ';
                  }
                  if($row['position'] =="Treasurer")
                  {
                    echo '
                    <label>Position</label>
                    <select class="form-select" name="position" autocomplete="off">
                      <option value="Treasurer"><b>'.strtoupper($row['position']).'</b></option>
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
                    </select>
                    ';
                  }
                ?>
              </div>
              <div class="col input-group">
                <?php 
                  if($row['gender'] == "MALE")
                  {
                    echo'
                    <label class="form-label">Gender</label>
                    <div class="input-group">
                      <div class="input-group-text"><i class="bi bi-gender-ambiguous"></i></div>
                      <select class="form-select" name="gender" autocomplete="off" required>
                        <option value="MALE">'.strtoupper($row['gender']).'</option>
                        <option value="FEMALE">FEMALE</option>
                      </select>
                    </div>
                    ';
                  }

                  elseif($row['gender'] == "FEMALE")
                  {
                    echo'
                    <label>Gender</label>
                    <div class="input-group">
                      <div class="input-group-text"><i class="bi bi-gender-ambiguous"></i></div>
                      <select class="form-select" name="gender" autocomplete="off" required>
                        <option value="FEMALE">'.strtoupper($row['gender']).'</option>
                        <option value="MALE">MALE</option>
                      </select>
                    </div>
                    ';
                  }
                ?>
              </div>
            </div>

            <!-- Start/End Date -->
            <div class="row g-2 mb-2">
              <div class="col-md-6">
                <label class="form-label">Start Date</label>
                <input class="form-control" type="date" name="start_date" id="" required value="<?php echo ($row['start_date']); ?>">
              </div>
              <div class="col">
                <label class="form-label">End Date</label>
                <input class="form-control" type="date" name="end_date" id="" requried value="<?php echo ($row['end_date']); ?>">
              </div>
            </div>

            <!-- Status -->
            <input type="hidden" name="status" value="Active">

            <div class="col mb-3">
              <?php 

                if($row['status'] == "Active")
                {
                  echo '
                  <label class="form-label">Status</label>
                  <select class="form-select" name="status" autocomplete="off" required>
                    <option value="Active">'.strtoupper($row['status']).'</option>
                    <option value="Inactive">Inactive</option>
                  </select>
                  ';
                }

                elseif($row['status'] == "Inactive")
                {
                  echo '
                  <label class="form-label">Status</label>
                  <select class="form-select" name="status" autocomplete="off" required>
                    <option value="Inactive">'.strtoupper($row['status']).'</option>
                    <option value="Active">Active</option>
                  </select>
                  ';
                }

                else {
                  echo"";
                }
              ?>
            </div>


            <div class="row modal-footer">
              <span class="col text-start">
                <button type="submit" class="btn btn-success">End Term</button>
              </span>
              <span class="col text-end">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
                <button type="submit" name="update_official" class="btn btn-primary">Submit</button>
              </span>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>