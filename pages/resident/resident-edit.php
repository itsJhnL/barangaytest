<form action="function.php" method="POST">
  <!-- 1st modal Resident Information -->
  <div class="modal fade" id="Edit_Resident<?php echo $row['id']?>" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
    <div class="modal-dialog modal-dialog-scrollable modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Resident's Personal Information</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="row g-2 mb-2">
            <div class="text-center d.flex pb-3">
              <img src="img/template.png<?php /* basename($row['capturedImage']) */ ?>" class="w-auto" height="150" alt="Picture">
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
                <option value="male">Male</option>
                <option value="female">Female</option>
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
            <div class="col-md-6 mb-3">
              <input type="text" class="form-control" value="<?php echo $row['houseNo']?>" name="houseNo" placeholder="House Number">
            </div>
            <div class="col-md-6 mb-3">
              <input type="text" class="form-control" value="<?php echo $row['purok']?>" name="purok" placeholder="Purok Number">
            </div>
            <div class="col-md-6 mb-3">
              <input class="form-control" value="<?php echo $row['barangay']?>" name="barangay" placeholder="Barangay"/>        
            </div>
            <div class="col-md-6 mb-3">
              <input class="form-control" value="<?php echo $row['city']?>" name="city" placeholder="Town/City"/>    
            </div>
            <div class="col-md-6 mb-3">
              <input class="form-control" value="<?php echo $row['province']?>" name="province" placeholder="Province"/>
            </div>
          </div>

          <div class="row g-2">
            <div class="col-md-12 mb-3">
                <label><b>Contact Information</b></label>
            </div>
            <div class="col-md-6 mb-3">
                <input type="number" class="form-control" value="<?php echo $row['contactNo']?>" name="contactNo" placeholder="Your Contact Number">
            </div>
            <div class="col-md-6 mb-3">
                <input type="email" class="form-control" value="<?php echo $row['emailAddress']?>" name="emailAddress" placeholder="Your Email Address (Optional)">
            </div>
            <div class="col-md-6 mb-3">
                <input type="text" class="form-control" value="<?php echo $row['motherName']?>" name="motherName" placeholder="Mother's Name">
            </div>
            <div class="col-md-6 mb-3">
                <input type="number" class="form-control" value="<?php echo $row['motherContactNo']?>" name="motherContactNo" placeholder="Your Mother's Contact Number">
            </div>
            <div class="col-md-6 mb-3">
                <input type="text" class="form-control" value="<?php echo $row['fatherName']?>" name="fatherName" placeholder="Father's Name">
            </div>
            <div class="col-md-6 mb-3">
                <input type="number" class="form-control" value="<?php echo $row['fatherContactNo']?>" name="fatherContactNo" placeholder="Your Father's Contact Number">
            </div>
          </div>

          <div class="row g-2">
            <div class="col-md-12 mb-3">
              <label><b>Additional Information</b></label>
            </div>
            <div class="col-md-6 mb-3">
              <input type="text" class="form-control" value="<?php echo $row['height']?>" name="height" placeholder="Height (in cm)">
            </div>
            <div class="col-md-6 mb-3">
              <input type="text" class="form-control" value="<?php echo $row['weight']?>" name="weight" placeholder="Weight (in kg)">
            </div>
            <div class="col-md-6 mb-3">
              <input type="text" class="form-control" value="<?php echo $row['nationality']?>" name="nationality" placeholder="Nationality">
            </div>
          </div>
          <div class="row g-2">
            <div class="col-md-6 mb-3">
              <label><b>Civil Status</b></label>
              <select class="form-select" value="<?php echo $row['civilStatus']?>" name="civilStatus" id="civilStatus" onchange="showSpouseChildrenFields()">
                <option value="single">Single</option>
                <option value="married">Married</option>
                <option value="divorced">Divorced</option>
                <option value="widowed">Widowed</option>
              </select>
            </div>
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
          <div class="col-md-12 mb-2">
            <label for="additional-info"><b>Educational Background</b></label>
          </div>
          <hr>

          <div class="row g-2">
            <div class="col-md-12 mb-3">
                <label for="additional-info"><b>College</b></label>
            </div>
            <div class="col-md-6">
                <input type="text" class="form-control" value="<?php echo $row['course']?>" name="course" placeholder="Course">
            </div>
            <div class="col-md-6 mb-3">
                <input type="text" class="form-control" value="<?php echo $row['CSchoolName']?>" name="CSchoolName" placeholder="School Name">
            </div>
            <div class="col-md-6 mb-3">
                <input type="text" class="form-control" value="<?php echo $row['CSchoolAddress']?>" name="CSchoolAddress" placeholder="School Address">
            </div>
            <div class="col-md-6 mb-3">
                <input type="text" class="form-control" value="<?php echo $row['CYearAttended']?>" name="CYearAttended" placeholder="Year Attended Ex: 2012-2016">
            </div>
          </div>

          <div class="row g-2">
            <div class="col-md-12 mb-3">
              <label for="additional-info"><b>High School</b></label>
            </div>
            <div class="col mb-3">
              <input type="text" class="form-control" value="<?php echo $row['HSchoolName']?>" name="HSchoolName" placeholder="School Name">
            </div>
            <div class="col mb-3">
              <input type="text" class="form-control" value="<?php echo $row['HSchoolAddress']?>" name="HSchoolAddress" placeholder="School Address">
            </div>
            <div class="col mb-3">
              <input type="text" class="form-control" value="<?php echo $row['HYearAttended']?>" name="HYearAttended" placeholder="Year Attended Ex: 2012-2016">
            </div>
          </div>

          <div class="row g-2">
            <div class="col-md-12 mb-3">
              <label for="additional-info"><b>Elementary</b></label>
            </div>
            <div class="col mb-3">
              <input type="text" class="form-control" value="<?php echo $row['ESchoolName']?>" name="ESchoolName" placeholder="School Name">
            </div>  
            <div class="col mb-3">
              <input type="text" class="form-control" value="<?php echo $row['ESchoolAddress']?>" name="ESchoolAddress" placeholder="School Address">
            </div>
            <div class="col mb-3">
              <input type="text" class="form-control" value="<?php echo $row['EYearAttended']?>" name="EYearAttended" placeholder="Year Attended Ex: 2012-2016">
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
              <label for="">Business ID</label>
              <input type="text" class="form-control" value="<?php echo $row['BusinessID']?>" name="BusinessID">
            </div>
            <div class="col-md-6">
              <label for="">Business Nature</label>
              <input type="text" class="form-control" value="<?php echo $row['BusinessNature']?>" name="BusinessNature">
            </div>
            <div class="col-md-6">
              <label for="">Business Name</label>
              <input type="text" class="form-control" value="<?php echo $row['BusinessName']?>" name="BusinessName">
            </div>
            <div class="col-md-6">
              <label for="">Business Owner</label>
              <input type="text" class="form-control" value="<?php echo $row['BusinessOwner']?>" name="BusinessOwner">
            </div>
            <div class="col-md-6">
              <label for="">Owner Address</label>
              <input type="text" class="form-control" value="<?php echo $row['BusinessOwnerAddress']?>" name="BusinessOwnerAddress">
            </div>
            <div class="col-md-6 mb-2">
              <label for="">Contact Number</label>
              <input type="text" class="form-control" value="<?php echo $row['BusinessContactNumber']?>" name="BusinessContactNumber">
            </div>
            <div class="col-md-12">
              <label for="">Business Address</label>
            </div>
            <div class="col-md-3">
              <label for="">Building No.</label>
              <input type="text" class="form-control" value="<?php echo $row['BusinessBldgNo']?>" name="BusinessBldgNo">
            </div>
            <div class="col-md-3">
              <label for="">Purok No.</label>
              <input type="text" class="form-control" value="<?php echo $row['BusinessPurokNo']?>" name="BusinessPurokNo">
            </div>
            <div class="col-md-6">
              <label for="">Barangay</label>
              <input type="text" class="form-control" value="<?php echo $row['BusinessBarangay']?>" name="BusinessBarangay">
            </div>
            <div class="col-md-6">
              <label for="">Municipality</label>
              <input type="text" class="form-control" value="<?php echo $row['BusinessMunicipality']?>" name="BusinessMunicipality">
            </div>
            <div class="col-md-6">
              <label for="">Province</label>
              <input type="text" class="form-control" value="<?php echo $row['BusinessProvince']?>" name="BusinessProvince">
            </div>
          </div>
        </div>
        
        <div class="modal-footer float-end">
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
          <button type="submit" name="update_resident" class="btn btn-primary" onclick="saveSnap()">Update</button>
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
  <script language="JavaScript">
	 // Configure a few settings and attach camera 250x187
	 Webcam.set({
	  width: 250,
	  height: 250,
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
        '<img id="after_capture_frame" src="'+data_uri+'"/>';
        $("#captured_image_data").val(data_uri);
        $("#imageval").val(data_uri);
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

  function saveSnap(){
	var base64data = $("#captured_image_data").val();
	 $.ajax({
    type: "POST",
    dataType: "json",
    url: "image_upload.php",
    data: {image: base64data},
    success: function(data) { 
    alert(data);
    }
  });
	}
</script>