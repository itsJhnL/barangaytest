<form action="function.php" method="POST">
  <!-- 1st modal Resident Information -->
  <div class="modal fade" id="Edit_Resident<?php echo $row['id']?>" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
    <div class="modal-dialog modal-dialog-scrollable modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Resident's Personal Information</h5>
          <button type="button" class="btn-close" id="exitCam" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="row g-2 mb-2">
            <div class="d-flex flex-column align-items-center text-center p-3" >                            
              <div id="camera">
                <a href="<?php echo $row['captured_image'];?>" target="_blank">
                  <img src="images/<?php echo basename($row['captured_image']); ?>" class="capture_frame border border-dark rounded" class="w-auto" height="150" alt="Picture">
                </a>
              </div>
            </div>
            <div class="text-center d.flex pb-3">
              <!-- <button type="button" class="btn btn-info btn-sm" title="Change" id="reuploadPic">Change Profile</button>
              <button type="button" class="btn btn-success btn-sm" title="Change" id="capture">Take Photo</button> -->
              <!-- <br>
              <label for="">or</label>
              <input id="image_upload" name="" class="form-control input-sm" type="file" /> -->
              <input class="col-md-4" type="hidden" name="captured_image" id="newCaptured">
            </div>

            <div class="col">
              <input type="hidden" name="id" value="<?php echo $row['id']?>"/>
              <label class="form-label"><b>Last Name</b></label>
              <input type="text" class="form-control" value="<?php echo $row['lastname']?>" name="lastname" autocomplete="off" >
            </div>
            <div class="col">
              <label class="form-label"><b>First Name</b></label>
              <input type="text" class="form-control" value="<?php echo $row['firstname']?>" name="firstname"  autocomplete="off" >
            </div>
            <div class="col">
              <label class="form-label"><b>Middle Name</b></label>
              <input type="text" class="form-control" value="<?php echo $row['middlename']?>" name="middlename"  autocomplete="off" >
            </div>
            <div class="col-md-2">
              <label><b>Suffix</b></label>
              <select class="form-select mt-2" value="<?php echo $row['suffixname']?>" name="suffixname" aria-label="Name Extension">
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
                <option value="Male">Male</option>
                <option value="Female">Female</option>
              </select>
            </div>
            <div class="col-md-4 mb-3">
              <label><b>Birthdate</b></label>
              <input type="date" class="form-control" value="<?php echo $row['birthdate']?>" id="birthday" name="birthdate"  onchange="calcAge()">
            </div>
            <div class="col-md-2 mb-3">
              <label><b>Age</b></label>
              <input type="text" class="form-control" value="<?php echo $row['age']?>" id="editAge" name="age" readonly>
            </div>
          </div>

          <div class="row g-2">
            <div class="col-md-12">
              <label><b>Address</b></label>
            </div>
            <div class="col-md-6">
              <input class="form-control" value="<?php echo $row['province']?>" name="province" placeholder="Province"/>
              <small id="emailHelp" class="form-text text-muted">Province</small>
            </div>
            <div class="col-md-6">
              <input class="form-control" value="<?php echo $row['city']?>" name="city" placeholder="Town/City"/>    
              <small id="emailHelp" class="form-text text-muted">Town/City</small>
            </div>
            <div class="col-md-6">
              <input class="form-control" value="<?php echo $row['barangay']?>" name="barangay" placeholder="Barangay"/>        
              <small id="emailHelp" class="form-text text-muted">Barangay</small>
            </div>
            <div class="col-md-3">
              <input type="text" class="form-control" value="<?php echo $row['houseNo']?>" name="houseNo" placeholder="House Number">
              <small id="emailHelp" class="form-text text-muted">House No.</small>
            </div>
            <div class="col-md-3 mb-5">
              <input type="text" class="form-control" value="<?php echo $row['purok']?>" name="purok" placeholder="Purok Number">
              <small id="emailHelp" class="form-text text-muted">Purok No.</small>
            </div>
            
            
            
          </div>

          <div class="row g-2">
            <div class="col-md-12">
              <label><b>Contact Information</b></label>
            </div>
            <div class="col-md-6">
              <input type="text" class="form-control" value="<?php echo $row['contactNo']?>" maxlength="11" name="contactNo" placeholder="Your Contact Number">
              <small id="emailHelp" class="form-text text-muted">Contact No.</small>
            </div>
            <div class="col-md-6">
              <input type="email" class="form-control" value="<?php echo $row['emailAddress']?>" name="emailAddress" placeholder="Your Email Address (Optional)">
              <small id="emailHelp" class="form-text text-muted">Email Address.</small>
            </div>
            <div class="col-md-6">
              <input type="text" class="form-control" value="<?php echo $row['motherName']?>" name="motherName" placeholder="Mother's Name">
              <small id="emailHelp" class="form-text text-muted">Mother's Name.</small>
            </div>
            <div class="col-md-6">
              <input type="text" class="form-control" value="<?php echo $row['motherContactNo']?>" maxlength="11" name="motherContactNo" placeholder="Your Mother's Contact Number">
              <small id="emailHelp" class="form-text text-muted">Contact No.</small>
            </div>
            <div class="col-md-6">
              <input type="text" class="form-control" value="<?php echo $row['fatherName']?>" name="fatherName" placeholder="Father's Name">
              <small id="emailHelp" class="form-text text-muted">Father's Name.</small>
            </div>
            <div class="col-md-6 mb-5">
              <input type="text" class="form-control" value="<?php echo $row['fatherContactNo']?>" maxlength="11" name="fatherContactNo" placeholder="Your Father's Contact Number">
              <small id="emailHelp" class="form-text text-muted">Contact No.</small>
            </div>
          </div>

          <div class="row g-2">
            <div class="col-md-12">
              <label><b>Additional Information</b></label>
            </div>
            <div class="col-md-6">
              <input type="text" class="form-control" value="<?php echo $row['height']?>" name="height" placeholder="Height (in cm)">
              <small id="emailHelp" class="form-text text-muted">Height</small>
            </div>
            <div class="col-md-6">
              <input type="text" class="form-control" value="<?php echo $row['weight']?>" name="weight" placeholder="Weight (in kg)">
              <small id="emailHelp" class="form-text text-muted">Weight</small>
            </div>
            <div class="col-md-6">
              <input type="text" class="form-control" value="<?php echo $row['nationality']?>" name="nationality" placeholder="Nationality">
              <small id="emailHelp" class="form-text text-muted">Nationality</small>
            </div>
            <div class="col-md-6">
              <select class="form-select" value="<?php echo $row['civilStatus']?>" name="civilStatus" id="civilStatus" onchange="showSpouseChildrenFields()">
                <option value="single">Single</option>
                <option value="married">Married</option>
                <option value="divorced">Divorced</option>
                <option value="widowed">Widowed</option>
              </select>
              <small id="emailHelp" class="form-text text-muted">Civil Status</small>
            </div>
          </div>
          <div class="row g-2">
            
            <div class="col-md-6 mb-2">
              <label><b></b></label>
              <input type="text" class="form-control" value="<?php echo $row['spouseName']?>" id="spouse-name" placeholder="Spouse Name" name="spouseName" style="display: none;">
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
          <!-- Business Info -->
          <div class="col-md-12">
            <label for="additional-info"><b>Educational Background</b></label>
          </div>
          <hr>

          <div class="row g-2">
            <div class="col-md-12">
                <label for="additional-info"><b>College</b></label>
            </div>
            <div class="col-md-6">
              <input type="text" class="form-control" value="<?php echo $row['course']?>" name="course" placeholder="Course">
              <small id="emailHelp" class="form-text text-muted">Course</small>
            </div>
            <div class="col-md-6">
              <input type="text" class="form-control" value="<?php echo $row['CSchoolName']?>" name="CSchoolName" placeholder="School Name">
              <small id="emailHelp" class="form-text text-muted">School Name</small>
            </div>
            <div class="col-md-6">
              <input type="text" class="form-control" value="<?php echo $row['CSchoolAddress']?>" name="CSchoolAddress" placeholder="School Address">
              <small id="emailHelp" class="form-text text-muted">School Address</small>
            </div>
            <div class="col-md-6 mb-4">
              <input type="text" class="form-control" value="<?php echo $row['CYearAttended']?>" name="CYearAttended" placeholder="Year Attended Ex: 2012-2016">
              <small id="emailHelp" class="form-text text-muted">Year attended</small>
            </div>
          </div>

          <div class="row g-2">
            <div class="col-md-12">
              <label for="additional-info"><b>High School</b></label>
            </div>
            <div class="col">
              <input type="text" class="form-control" value="<?php echo $row['HSchoolName']?>" name="HSchoolName" placeholder="School Name">
              <small id="emailHelp" class="form-text text-muted">School Name</small>
            </div>
            <div class="col">
              <input type="text" class="form-control" value="<?php echo $row['HSchoolAddress']?>" name="HSchoolAddress" placeholder="School Address">
              <small id="emailHelp" class="form-text text-muted">School Address</small>
            </div>
            <div class="col mb-4">
              <input type="text" class="form-control" value="<?php echo $row['HYearAttended']?>" name="HYearAttended" placeholder="Year Attended Ex: 2012-2016">
              <small id="emailHelp" class="form-text text-muted">Year Attended</small>
            </div>
          </div>

          <div class="row g-2">
            <div class="col-md-12">
              <label for="additional-info"><b>Elementary</b></label>
            </div>
            <div class="col">
              <input type="text" class="form-control" value="<?php echo $row['ESchoolName']?>" name="ESchoolName" placeholder="School Name">
              <small id="emailHelp" class="form-text text-muted">School Name</small>
            </div>  
            <div class="col">
              <input type="text" class="form-control" value="<?php echo $row['ESchoolAddress']?>" name="ESchoolAddress" placeholder="School Address">
              <small id="emailHelp" class="form-text text-muted">School Address</small>
            </div>
            <div class="col mb-4">
              <input type="text" class="form-control" value="<?php echo $row['EYearAttended']?>" name="EYearAttended" placeholder="Year Attended Ex: 2012-2016">
              <small id="emailHelp" class="form-text text-muted">Year</small>
            </div>
          </div>

          <br>
          <!-- Business Info -->
          <div class="col-md-12 mb-2">
            <label for="additional-info"><b>Business Information</b></label>
          </div>
          <hr>
          <div class="row g-2">
            <label><b>Business Address</b></label>
            <div class="col-md-6">
              <input type="text" class="form-control" value="<?php echo $row['BusinessID']?>" name="BusinessID">
              <small id="emailHelp" class="form-text text-muted" for="">Business ID</small>
            </div>
            <div class="col-md-6">
              <input type="text" class="form-control" value="<?php echo $row['BusinessNature']?>" name="BusinessNature">
              <small id="emailHelp" class="form-text text-muted" for="">Business Nature</small>
            </div>
            <div class="col-md-6">
              <input type="text" class="form-control" value="<?php echo $row['BusinessName']?>" name="BusinessName">
              <small id="emailHelp" class="form-text text-muted" for="">Business Name</small>
            </div>
            <div class="col-md-6">
              <input type="text" class="form-control" value="<?php echo $row['BusinessOwner']?>" name="BusinessOwner">
              <small id="emailHelp" class="form-text text-muted" for="">Business Owner</small>
            </div>
            <div class="col-md-6">
              <input type="text" class="form-control" value="<?php echo $row['BusinessOwnerAddress']?>" name="BusinessOwnerAddress">
              <small id="emailHelp" class="form-text text-muted" for="">Owner Address</small>
            </div>
            <div class="col-md-6">
              <input type="text" class="form-control" value="<?php echo $row['BusinessContactNumber']?>" maxlength="11" name="BusinessContactNumber">
              <small id="emailHelp" class="form-text text-muted" for="">Contact Number</small>
            </div>
            <div class="col-md-12">
            </div>
            <div class="col-md-3">
              <input type="text" class="form-control" value="<?php echo $row['BusinessBldgNo']?>" name="BusinessBldgNo">
              <small id="emailHelp" class="form-text text-muted" for="">Building No.</small>
            </div>
            <div class="col-md-3">
              <input type="text" class="form-control" value="<?php echo $row['BusinessPurokNo']?>" name="BusinessPurokNo">
              <small id="emailHelp" class="form-text text-muted" for="">Purok No.</small>
            </div>
            <div class="col-md-6">
              <input type="text" class="form-control" value="<?php echo $row['BusinessBarangay']?>" name="BusinessBarangay">
              <small id="emailHelp" class="form-text text-muted" for="">Barangay</small>
            </div>
            <div class="col-md-6">
              <input type="text" class="form-control" value="<?php echo $row['BusinessMunicipality']?>" name="BusinessMunicipality">
              <small id="emailHelp" class="form-text text-muted" for="">Municipality</small>
            </div>
            <div class="col-md-6">
              <input type="text" class="form-control" value="<?php echo $row['BusinessProvince']?>" name="BusinessProvince">
              <small id="emailHelp" class="form-text text-muted" for="">Province</small>
            </div>
          </div>
        </div>
        
        <div class="modal-footer float-end">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" onClick="window.location.reload();">Cancel</button>
          <button type="submit" name="update_resident" class="button-color btn" onclick="changeSnap()">Update</button>
        </div>
      </div>
    </div>
  </div>
</form>

<!-- <script src="js/scripts.js"></script> -->

<!-- Script for Civil status -->
<script>
  function showSpouseChildrenFields() {
    var civilStatus = document.getElementById("civilStatus").value;
    var spouseNameField = document.getElementById("spouse-name");
    var spouseChildrenFields = document.getElementById("spouse-children-fields");
    if (civilStatus == "married") {
      spouseNameField.style.display = "block";
      spouseChildrenFields.style.display = "block";
    } else {
      spouseNameField.style.display = "none";
      spouseChildrenFields.style.display = "none";
    }
  }

  function showChildNameFields() {
    var numChildren = document.getElementById("num-children").value;
    var childNameFields = document.getElementById("child-name-fields");
    childNameFields.innerHTML = "";

    for (var i = 1; i <= numChildren; i++) {
      var childNameField = `
        <div class="col-md-6">
          <div class="col mb-2">
            <input type="text" class="form-control" value="<?php echo $row['childrenName']?>" name="childrenName" placeholder="Child ${i} Name" id="child-${i}-name" name="child-${i}-name">
          </div>
          <div class="col mb-3"></div>
        </div>
      `;
      childNameFields.innerHTML += childNameField;
    }
  }
</script>


<!-- Calculate Age -->
<script>
  function calcAge() {
  // Get the birthdate input field
  const birthdayInput = document.getElementById("birthday");
  
  // Get the age input field
  const ageInput = document.getElementById("editAge");
  
  // Calculate the age based on the birthdate
  const birthdate = new Date(birthdayInput.value);
  const now = new Date();
  const diff = now.getTime() - birthdate.getTime();
  const age = Math.floor(diff / (1000 * 60 * 60 * 24 * 365.25));
  
  // Update the age input field
  ageInput.value = age;
  }
</script>

<!-- Capture -->
<script>
    document.getElementById('reuploadPic').addEventListener('click', function() {
      Webcam.attach( '#camera' );
  });

  document.getElementById('capture').addEventListener('click', function() {
      // take snapshot and get image data
      Webcam.snap( function(data_uri) {
      // display preview
      document.getElementById('camera').innerHTML = 
      '<img id="capture_frame" src="'+data_uri+'"/>';
      $("#newCaptured").val(data_uri);
      });	
      
  });


  function changeSnap(){
	var base64data = $("#newCaptured").val();
	 $.ajax({
    type: "POST",
    dataType: "json",
    url: "function.php",
    data: {image: base64data},
    success: function(data) { 
    alert(data);
    }
  });
	}
</script>