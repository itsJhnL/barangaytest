<?php include ('function.php'); ?>
<?php include_once ('../../includes/scripts.php'); ?>

<form action="function.php" method="POST">
  <!-- 1st modal Resident Information -->
  <div class="modal fade" id="Add_Resident" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
    <div class="modal-dialog modal-dialog-scrollable modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Resident's Personal Information</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
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
                  <option selected></option>
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
                  <option value="he">Male</option>
                  <option value="she">Female</option>
                </select>
              </div>
              <div class="col-md-4 mb-3">
                <label><b>Birthdate</b></label>
                <input type="date" class="form-control" id="bday" name="birthdate"  onchange="calculateAge()">
              </div>
              <div class="col-md-2 mb-3">
                <label><b>Age</b></label>
                <input type="text" class="form-control" id="age" name="age" readonly>
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
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>  
              <button type="button" class="button-color btn" data-bs-target="#Add_Residents2" data-bs-toggle="modal">Next</button>
            </div>
        </div>
      </div>
    </div>
  </div>

  <!-- 2nd Modal Educational Background -->
  <div class="modal fade" id="Add_Residents2" aria-hidden="true" aria-labelledby="Add_Residents2" tabindex="-1">
    <div class="modal-dialog modal-dialog-scrollable modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="Add_Residents2">Educational Background (Optional)</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <div class="container">
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
          </div>
        </div>
        <div class="modal-footer float-start">
          <button type="button" class="btn btn-secondary" data-bs-target="#Add_Resident" data-bs-toggle="modal">Previous</button>
          <button type="button" class="button-color btn" id="takepicture" data-bs-target="#takepictureModal" data-bs-toggle="modal">Next</button>
        </div>
      </div>
    </div>
  </div>

  <!-- 3rd modal Capture -->
  <div class="modal fade" id="takepictureModal" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Take Picture</h5>
          <button type="button" class="btn-close" id="closeCam" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body d-flex flex-column align-items-center text-center">
          <label>Capture live photo</label>
          <div id="my_camera" class="pre_capture_frame border border-dark rounded"></div>
          <input type="hidden" name="captured_image" id="captured_image_data">
          <div class="mt-3 col-md-4">
            <label for="">or</label>
            <!-- <input id="image_upload" name="" class="form-control input-sm" type="file" /> -->
          </div>
          <br>
          <div class="row g-2">
            <div class="col">
              <input type="button" id="captureBtn" class="button-color btn" value="Capture">
            </div>
            <div class="col">
              <input type=button id="takepicture1" class="btn btn-secondary"  value="Reset" onClick="Webcam.reset()">
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" id="closeCam1" data-bs-target="#Add_Residents2" data-bs-toggle="modal">Previous</button>
          <button type="button" class="button-color btn" id="closeCam2" data-bs-target="#Add_Residents3" data-bs-toggle="modal">Next</button>
        </div>
      </div>
    </div>
  </div>

  <!-- 4th Modal Business -->
  <div class="modal fade" id="Add_Residents3" aria-hidden="true" aria-labelledby="Add_Residents3" tabindex="-1">
    <div class="modal-dialog modal-dialog-scrollable modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="Add_Residents3">Business Information (Optional)</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="container">
            <div class="row g-2">
              <div class="col-md-6">
                <label for="">Business ID</label>
                <input type="text" class="form-control" name="BusinessID">
              </div>
              <div class="col-md-6">
                <label for="">Business Nature</label>
                <input type="text" class="form-control" name="BusinessNature">
              </div>
              <div class="col-md-6">
                <label for="">Business Name</label>
                <input type="text" class="form-control" name="BusinessName">
              </div>
              <div class="col-md-6">
                <label for="">Business Owner</label>
                <input type="text" class="form-control" name="BusinessOwner">
              </div>
              <div class="col-md-6">
                <label for="">Owner Address</label>
                <input type="text" class="form-control" name="BusinessOwnerAddress">
              </div>
              <div class="col-md-6 mb-2">
                <label for="">Contact Number</label>
                <input type="text" class="form-control" name="BusinessContactNumber">
              </div>
              <div class="col-md-12">
                <label for="">Business Address</label>
              </div>
              <div class="col-md-3">
                <label for="">Building No.</label>
                <input type="text" class="form-control" name="BusinessBldgNo">
              </div>
              <div class="col-md-3">
                <label for="">Purok No.</label>
                <input type="text" class="form-control" name="BusinessPurokNo">
              </div>
              <div class="col-md-6">
                <label for="">Barangay</label>
                <input type="text" class="form-control" name="BusinessBarangay">
              </div>
              <div class="col-md-6">
                <label for="">Municipality</label>
                <input type="text" class="form-control" name="BusinessMunicipality">
              </div>
              <div class="col-md-6">
                <label for="">Province</label>
                <input type="text" class="form-control" name="BusinessProvince">
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer float-end">
          <button type="button" class="btn btn-secondary" id="takepicture2" data-bs-target="#takepictureModal" data-bs-toggle="modal">Previous</button>
          <button type="submit" name="save_resident" class="btn btn-primary" onclick="saveSnap()">Submit</button>
        </div>
      </div>
    </div>
  </div>
</form>
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
            <input type="text" class="form-control" name="childrenName" placeholder="Child ${i} Name" id="child-${i}-name" name="child-${i}-name">
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
  function calculateAge() {
  // Get the birthdate input field
  const birthdayInput = document.getElementById("bday");
  
  // Get the age input field
  const ageInput = document.getElementById("age");
  
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
  <script language="JavaScript">
	 // Configure a few settings and attach camera 250x187
	 Webcam.set({
	  width: 600,
	  height: 600,
	  image_format: 'jpeg',
	  jpeg_quality: 90
	 });	 

     document.getElementById('takepicture').addEventListener('click', function() {
        Webcam.attach( '#my_camera' );
    });
    document.getElementById('takepicture1').addEventListener('click', function() {
        Webcam.attach( '#my_camera' );
    });
    document.getElementById('takepicture2').addEventListener('click', function() {
        Webcam.attach( '#my_camera' );
    });


    document.getElementById('captureBtn').addEventListener('click', function() {
        // take snapshot and get image data
        Webcam.snap( function(data_uri) {
        // display results in page
        document.getElementById('my_camera').innerHTML = 
        '<img id="my_camera" src="'+data_uri+'"/>';
        $("#captured_image_data").val(data_uri);
        });	
    });

    document.getElementById('closeCam').addEventListener('click', function() {
        Webcam.reset();
    });
    document.getElementById('closeCam1').addEventListener('click', function() {
        Webcam.reset();
    });
    document.getElementById('closeCam2').addEventListener('click', function() {
        Webcam.reset();
    });

  function saveSnap()
  {
    var base64data = $("#captured_image_data").val();
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