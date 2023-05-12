<!-- 1st modal Resident Information -->
<div class="modal fade" id="View_Resident<?php echo $row['id']; ?>" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
    <div class="modal-dialog modal-dialog-scrollable modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">View Mode</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            
            <!-- Educational Background -->
            <div class="col-md-12 mb-3">
                <label for="additional-info"><b>Personal Information</b></label>
            </div>
            <hr>
            <div class="row g-2 mb-2">
              <div class="col">
                <label class="form-label"><b>Last Name</b></label>
                <input type="text" class="form-control" name="lastname" autocomplete="off" >
              </div>
              <div class="col">
                <label class="form-label"><b>First Name</b></label>
                <input type="text" class="form-control" name="firstname"  autocomplete="off" >
              </div>
              <div class="col">
                <label class="form-label"><b>Middle Name</b></label>
                <input type="text" class="form-control" name="middlename"  autocomplete="off" >
              </div>
              <div class="col-md-2">
                <label><b>Suffix</b></label>
                <select class="form-select mt-2" name="suffixname" aria-label="Name Extension">
                  <option selected>NaN</option>
                  <option>Jr.</option>
                  <option>Sr.</option>
                  <option>I</option>
                  <option>II</option>
                  <option>III</option>
                  <option>IV</option>
                </select>
              </div>
            </div>

            <div class="row g-2">
              <div class="col-md-6 mb-3">
                <label><b>Gender</b></label>
                <select class="form-select" name="gender">
                  <option value="male">Male</option>
                  <option value="female">Female</option>
                </select>
              </div>
              <div class="col-md-4 mb-3">
                <label><b>Birthdate</b></label>
                <input type="date" class="form-control" id="bdate" name="birthdate"  onchange="calculateAge()">
              </div>
              <div class="col-md-2 mb-3">
                <label><b>Age</b></label>
                <input type="text" class="form-control" id="Myage" name="age" readonly>
              </div>
            </div>

            <div class="row g-2">
              <div class="col-md-12">
                <label><b>Address</b></label>
              </div>
              <div class="col-md-6 mb-3">
                <input type="text" class="form-control" name="houseNo" placeholder="House Number">
              </div>
              <div class="col-md-6 mb-3">
                <input type="text" class="form-control" name="purok" placeholder="Purok Number">
              </div>
              <div class="col-md-6 mb-3">
                <input class="form-control" name="barangay" placeholder="Barangay"/>        
              </div>
              <div class="col-md-6 mb-3">
                <input class="form-control" name="city" placeholder="Town/City"/>    
              </div>
              <div class="col-md-6 mb-3">
                <input class="form-control" name="province" placeholder="Province"/>
              </div>
            </div>

            <div class="row g-2">
              <div class="col-md-12 mb-3">
                  <label><b>Contact Information</b></label>
              </div>
              <div class="col-md-6 mb-3">
                  <input type="number" class="form-control" name="contactNo" placeholder="Your Contact Number">
              </div>
              <div class="col-md-6 mb-3">
                  <input type="email" class="form-control" name="emailAddress" placeholder="Your Email Address (Optional)">
              </div>
              <div class="col-md-6 mb-3">
                  <input type="text" class="form-control" name="motherName" placeholder="Mother's Name">
              </div>
              <div class="col-md-6 mb-3">
                  <input type="number" class="form-control" name="motherContactNo" placeholder="Your Mother's Contact Number">
              </div>
              <div class="col-md-6 mb-3">
                  <input type="text" class="form-control" name="fatherName" placeholder="Father's Name">
              </div>
              <div class="col-md-6 mb-3">
                  <input type="number" class="form-control" name="fatherContactNo" placeholder="Your Father's Contact Number">
              </div>
            </div>

            <div class="row g-2">
              <div class="col-md-12 mb-3">
                <label><b>Additional Information</b></label>
              </div>
              <div class="col-md-6 mb-3">
                <input type="text" class="form-control" name="height" placeholder="Height (in cm)">
              </div>
              <div class="col-md-6 mb-3">
                <input type="text" class="form-control" name="weight" placeholder="Weight (in kg)">
              </div>
              <div class="col-md-6 mb-3">
                <input type="text" class="form-control" name="nationality" placeholder="Nationality">
              </div>
            </div>
            <div class="row g-2">
              <div class="col-md-6 mb-3">
                <label><b>Civil Status</b></label>
                <select class="form-select" name="civilStatus" id="civilStatus" onchange="showSpouseChildrenFields()">
                  <option value="single">Single</option>
                  <option value="married">Married</option>
                  <option value="divorced">Divorced</option>
                  <option value="widowed">Widowed</option>
                </select>
              </div>
              <div class="col-md-6 mb-2">
                <label><b></b></label>
                <input type="text" class="form-control" id="spouse-name" placeholder="Spouse Name" name="spouseName" style="display: none;">
              </div>
              <div class="col" id="spouse-children-fields" style="display: none;">
                <div class="col-md-6 mb-3">
                  <label><b>Number of Children</b></label>
                  <input type="number" class="form-control" id="num-children" onchange="showChildNameFields()">
                </div>
              </div>
              <div id="child-name-fields"></div>
            </div>

            <br>
            <!-- Educational Background -->
            <div class="col-md-12 mb-3">
                <label for="additional-info"><b>Educational Background</b></label>
            </div>
            <hr>

            <div class="row g-2">
                <div class="col-md-12 mb-3">
                    <label for="additional-info"><b>College</b></label>
                </div>
                <div class="col-md-6">
                    <input type="text" class="form-control" name="course" placeholder="Course">
                </div>
                <div class="col-md-6 mb-3">
                    <input type="text" class="form-control" name="CSchoolName" placeholder="School Name">
                </div>
                <div class="col-md-6 mb-3">
                    <input type="text" class="form-control" name="CSchoolAddress" placeholder="School Address">
                </div>
                <div class="col-md-6 mb-3">
                    <input type="text" class="form-control" name="CYearAttended" placeholder="Year Attended Ex: 2012-2016">
                </div>
                </div>

                <div class="row g-2">
                <div class="col-md-12 mb-3">
                    <label for="additional-info"><b>High School</b></label>
                </div>
                <div class="col mb-3">
                    <input type="text" class="form-control" name="HSchoolName" placeholder="School Name">
                </div>
                <div class="col mb-3">
                    <input type="text" class="form-control" name="HSchoolAddress" placeholder="School Address">
                </div>
                <div class="col mb-3">
                    <input type="text" class="form-control" name="HYearAttended" placeholder="Year Attended Ex: 2012-2016">
                </div>
                </div>

                <div class="row g-2">
                <div class="col-md-12 mb-3">
                    <label for="additional-info"><b>Elementary</b></label>
                </div>
                <div class="col mb-3">
                    <input type="text" class="form-control" name="ESchoolName" placeholder="School Name">
                </div>  
                <div class="col mb-3">
                    <input type="text" class="form-control" name="ESchoolAddress" placeholder="School Address">
                </div>
                <div class="col mb-3">
                    <input type="text" class="form-control" name="EYearAttended" placeholder="Year Attended Ex: 2012-2016">
                </div>
            </div>

            <br>
            <!-- Business Info -->
            <div class="col-md-12 mb-2">
                <label for="additional-info"><b>Business Information</b></label>
            </div>
            <hr>

            <div class="row g-2">
              <div class="col-md-6">
                <label for=""><b>Business ID</b></label>
                <input type="text" class="form-control" name="BusinessID">
              </div>
              <div class="col-md-6">
                <label for=""><b>Business Nature</b></label>
                <input type="text" class="form-control" name="BusinessNature">
              </div>
              <div class="col-md-6">
                <label for=""><b>Business Name</b></label>
                <input type="text" class="form-control" name="BusinessName">
              </div>
              <div class="col-md-6">
                <label for=""><b>Business Owner</b></label>
                <input type="text" class="form-control" name="BusinessOwner">
              </div>
              <div class="col-md-6">
                <label for=""><b>Owner Address</b></label>
                <input type="text" class="form-control" name="BusinessOwnerAddress">
              </div>
              <div class="col-md-6 mb-2">
                <label for=""><b>Contact Number</b></label>
                <input type="text" class="form-control" name="BusinessContactNumber">
              </div>
              <div class="col-md-12">
                <label for=""><b>Business Address</b></label>
              </div>
              <div class="col-md-3">
                <label for=""><b>Building No.</b></label>
                <input type="text" class="form-control" name="BusinessBldgNo">
              </div>
              <div class="col-md-3">
                <label for=""><b>Purok No.</b></label>
                <input type="text" class="form-control" name="BusinessPurokNo">
              </div>
              <div class="col-md-6">
                <label for=""><b>Barangay</b></label>
                <input type="text" class="form-control" name="BusinessBarangay">
              </div>
              <div class="col-md-6">
                <label for=""><b>Municipality</b></label>
                <input type="text" class="form-control" name="BusinessMunicipality">
              </div>
              <div class="col-md-6">
                <label for=""><b>Province</b></label>
                <input type="text" class="form-control" name="BusinessProvince">
              </div>
            </div>
        </div>
    </div>
</div>

