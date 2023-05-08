<?php include ('function.php'); ?>

<div class="modal fade" id="Add_Resident" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
  <div class="modal-dialog modal-dialog-scrollable modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Resident's Personal Information</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="#" class="" method="post">
          <div class="row g-2 mb-2">
            <div class="col">
              <label class="form-label"><b>Last Name</b></label>
              <input type="text" class="form-control" name="lastname" autocomplete="off" required>
            </div>
            <div class="col">
              <label class="form-label"><b>First Name</b></label>
              <input type="text" class="form-control" name="firstname"  autocomplete="off" required>
            </div>
            <div class="col">
              <label class="form-label"><b>Middle Name</b></label>
              <input type="text" class="form-control" name="middlename"  autocomplete="off" required>
            </div>
            <div class="col-md-1">
              <label for="nameExtension"><b>Suffix</b></label>
              <select class="form-select mt-2" id="nameExtension" name="suffixname" aria-label="Name Extension">
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
            <div class="col mb-3">
              <label for="birthday"><b>Birthdate</b></label>
              <input type="date" class="form-control" id="birthday" name="birthdate" required onchange="calculateAge()">
            </div>
            <div class="col mb-3">
              <label for="age"><b>Age</b></label>
              <input type="text" class="form-control" id="age" name="age" readonly> 

            </div>
            <div class="col mb-3">
              <label for="gender"><b>Gender</b></label>
              <select class="form-select" id="gender" name="gender">
                <option value="male">Male</option>
                <option value="female">Female</option>
              </select>
            </div>
          </div>

          <div class="row g-2">
            <div class="col-md-12">
              <label for="address"><b>Address</b></label>
            </div>
            <div class="col-md-6 mb-3">
              <input type="text" class="form-control" id="house-number" name="houseNo" placeholder="House Number">
            </div>
            <div class="col-md-6 mb-3">
              <input type="text" class="form-control" id="purok-number" name="purok" placeholder="Purok Number">
            </div>
            <div class="col-md-6 mb-3">
              <input class="form-control" id="barangay" name="barangay" placeholder="Barangay"/>        
            </div>
            <div class="col-md-6 mb-3">
              <input class="form-control" id="town-city" name="city" placeholder="Town/City"/>    
            </div>
            <div class="col-md-6 mb-3">
              <input class="form-control" id="province" name="province" placeholder="Province"/>
            </div>
          </div>

          <div class="row g-2">
            <div class="col-md-12 mb-3">
                <label for="contact-info"><b>Contact Information</b></label>
            </div>
            <div class="col-md-6 mb-3">
                <input type="number" class="form-control" id="contact-number" name="contactNo" placeholder="Your Contact Number">
            </div>
            <div class="col-md-6 mb-3">
                <input type="email" class="form-control" id="email" name="emailAddress" placeholder="Your Email Address (Optional)">
            </div>
            <div class="col-md-6 mb-3">
                <input type="text" class="form-control" id="mother-name" name="motherName" placeholder="Mother's Name">
            </div>
            <div class="col-md-6 mb-3">
                <input type="number" class="form-control" id="mother-contact" name="motherContactNo" placeholder="Your Mother's Contact Number">
            </div>
            <div class="col-md-6 mb-3">
                <input type="text" class="form-control" id="father-name" name="fatherName" placeholder="Father's Name">
            </div>
            <div class="col-md-6 mb-3">
                <input type="number" class="form-control" id="father-contact" name="fatherContactNo" placeholder="Your Father's Contact Number">
            </div>
          </div>

          <div class="row g-2">
            <div class="col-md-12 mb-3">
              <label for="additional-info"><b>Additional Information</b></label>
            </div>
            <div class="col-md-6 mb-3">
              <input type="text" class="form-control" id="height" name="height" placeholder="Height (in cm)">
            </div>
            <div class="col-md-6 mb-3">
              <input type="text" class="form-control" id="weight" name="weight" placeholder="Weight (in kg)">
            </div>
            <div class="col-md-6 mb-3">
              <input type="text" class="form-control" id="nationality" name="nationality" placeholder="Nationality">
            </div>
            <div class="col-md-6 mb-3">
              <label for="civil-status"><b>Civil Status</b></label>
              <select class="form-select" name="civil-status" id="civilStatus" onchange="showSpouseChildrenFields()">
                <option value="single">Single</option>
                <option value="married">Married</option>
                <option value="divorced">Divorced</option>
                <option value="widowed">Widowed</option>
              </select>
            </div>
            <div class="col-md-6 mb-2">
              <label for="spouse-name"><b></b></label>
              <input type="text" class="form-control" id="spouse-name" placeholder="Spouse Name" name="spouseName" style="display: none;">
            </div>
            <div class="col" id="spouse-children-fields" style="display: none;">
              <div class="col mb-3">
                <label for="num-children"><b>Number of Children</b></label>
                <input type="number" class="form-control" id="num-children" name="childrenName" onchange="showChildNameFields()">
              </div>
            </div>
            <div id="child-name-fields"></div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>  
            <button class="btn btn-primary" data-bs-target="#Add_Residents2" data-bs-toggle="modal">Next</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Second Modal!!!!!!!!!!!!!!!!!!!!! -->
<div class="modal fade" id="Add_Residents2" aria-hidden="true" aria-labelledby="Add_Residents2" tabindex="-1">
  <div class="modal-dialog modal-dialog-scrollable modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="Add_Residents2">Educational Background (Optional)</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <div class="container">
            <!-- Form -->
            <form action="#" class="" method="post">
                <div class="row g-2">
                <div class="col-md-12 mb-3">
                    <label for="additional-info"><b>College</b></label>
                </div>
                <div class="col">
                    <input type="text" class="form-control" id="Ccourse" name="course" placeholder="Course">
                </div>
                <div class="col mb-3">
                    <input type="text" class="form-control" id="Cschoolname" name="CSchoolName" placeholder="School Name">
                </div>
                <div class="col mb-3">
                    <input type="text" class="form-control" id="Caddress" name="CSchoolAddress" placeholder="School Address">
                </div>
                <div class="col mb-3">
                    <input type="text" class="form-control" id="Cyear" name="CYearAttended" placeholder="Year Attended Ex: 2012-2016">
                </div>
                </div>

                <div class="row g-2">
                <div class="col-md-12 mb-3">
                    <label for="additional-info"><b>High School</b></label>
                </div>
                <div class="col mb-3">
                    <input type="text" class="form-control" id="Hschoolname" name="HSchoolName" placeholder="School Name">
                </div>
                <div class="col mb-3">
                    <input type="text" class="form-control" id="Haddress" name="HSchoolAddress" placeholder="School Address">
                </div>
                <div class="col mb-3">
                    <input type="text" class="form-control" id="Hyear" name="HSchoolYear" placeholder="Year Attended Ex: 2012-2016">
                </div>
                </div>

                <div class="row g-2">
                <div class="col-md-12 mb-3">
                    <label for="additional-info"><b>Elementary</b></label>
                </div>
                <div class="col mb-3">
                    <input type="text" class="form-control" id="Eschoolname" name="ESchoolName" placeholder="School Name">
                </div>
                <div class="col mb-3">
                    <input type="text" class="form-control" id="Eaddress" name="ESchoolAddress" placeholder="School Address">
                </div>
                <div class="col mb-3">
                    <input type="text" class="form-control" id="Eyear" name="ESchoolAttended" placeholder="Year Attended Ex: 2012-2016">
                </div>
                </div>

            </form>
        </div>
      </div>
      <div class="modal-footer float-start">
        <button class="btn btn-secondary" data-bs-target="#Add_Residents" data-bs-toggle="modal">Previous</button>
        <button class="btn btn-secondary">Skip</button>
        <button class="btn btn-primary" data-bs-target="#takepictureModal" data-bs-toggle="modal">Next</button>
      </div>
    </div>
  </div>
</div>


<div class="modal fade" id="takepictureModal" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Take Picture</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body d-flex flex-column align-items-center text-center">
            <label>Capture live photo</label>
            <div id="results" >
              <img style="width: 100%; " name="image" class="after_capture_frame border border-dark rounded" src="images/template.png" required>
            </div>
            <br>
            <input type="button" id="captureBtn" class="btn btn-info" value="Take Snapshot" >
      </div>
      <div class="modal-footer">
        <button class="btn btn-secondary" data-bs-target="#Add_Residents" data-bs-toggle="modal">Previous</button>
        <button class="btn btn-secondary">Skip</button>
        <button class="btn btn-primary" data-bs-target="#takepictureModal" data-bs-toggle="modal">Next</button>
      </div>
    </div>
  </div>
</div>

<!-- Camera Script -->
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


    document.getElementById('captureBtn').addEventListener('click', function() {
        // take snapshot and get image data
        Webcam.snap( function(data_uri) {
        // display results in page
        document.getElementById('results').innerHTML = 
        '<img class="after_capture_frame" src="'+data_uri+'"/>';
        $("#captured_image_data").val(data_uri);
        $("#imageval").val(data_uri);
        });	
    });

    document.getElementById('close').addEventListener('click', function() {
        Webcam.reset();
    });

	function saveSnap(){
	var base64data = $("#captured_image_data").val();
	 $.ajax({
			type: "POST",
			dataType: "json",
			url: "enrollmentmodule.php",
			data: {image: base64data},
			success: function(data) { 
				alert(data);
			}
		});
	}
</script>

<!-- Script for Civil status -->
<script>
  function showSpouseChildrenFields() {
    var civilStatus = document.getElementById("civil-status").value;
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
        <div class="row">
          <div class="col-md-6 mb-2">
            <input type="text" class="form-control" placeholder="Child ${i} Name" id="child-${i}-name" name="child-${i}-name">
          </div>
          <div class="col-md-6 mb-3"></div>
        </div>
      `;
      childNameFields.innerHTML += childNameField;
    }
  }
</script>

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


    document.getElementById('captureBtn').addEventListener('click', function() {
        // take snapshot and get image data
        Webcam.snap( function(data_uri) {
        // display results in page
        document.getElementById('results').innerHTML = 
        '<img class="after_capture_frame" src="'+data_uri+'"/>';
        $("#captured_image_data").val(data_uri);
        $("#imageval").val(data_uri);
        });	
    });

    document.getElementById('close').addEventListener('click', function() {
        Webcam.reset();
    });

	function saveSnap(){
	var base64data = $("#captured_image_data").val();
	 $.ajax({
			type: "POST",
			dataType: "json",
			url: "enrollmentmodule.php",
			data: {image: base64data},
			success: function(data) { 
				alert(data);
			}
		});
	}
</script>