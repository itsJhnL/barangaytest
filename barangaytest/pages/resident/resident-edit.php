<form action="function.php" method="POST">
  <!-- 1st modal Resident Information -->
  <div class="modal fade" id="Edit_Resident<?php echo $row['id']?>" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
    <div class="modal-dialog modal-dialog-scrollable modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Resident's Personal Information</h5>
          <button type="button" class="btn-close" id="exitCam" data-bs-dismiss="modal" aria-label="Close" onClick="window.location.reload();"></button>
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
              <input class="col-md-4" type="hidden" name="captured_image" id="newCaptured">
            </div>

            <div class="col">
              <input type="hidden" name="id" value="<?php echo $row['id']?>"/>
              <label class="form-label"><b>Last Name</b></label>
              <input type="text" class="form-control" value="<?php echo $row['lastname']?>" name="lastname" autocomplete="off" onkeyup="lettersOnly(this)" oninput="this.value = this.value.toUpperCase()" >
            </div>
            <div class="col">
              <label class="form-label"><b>First Name</b></label>
              <input type="text" class="form-control" value="<?php echo $row['firstname']?>" name="firstname"  autocomplete="off" onkeyup="lettersOnly(this)" oninput="this.value = this.value.toUpperCase()" >
            </div>
            <div class="col">
              <label class="form-label"><b>Middle Name</b></label>
              <input type="text" class="form-control" value="<?php echo $row['middlename']?>" name="middlename"  autocomplete="off" onkeyup="lettersOnly(this)" oninput="this.value = this.value.toUpperCase()" >
            </div>
            <div class="col-md-2">
              <label><b>Suffix</b></label>
              <select class="form-select mt-2" value="<?php echo $row['suffixname']?>" name="suffixname" aria-label="Name Extension">
                <option selected>N/A</option>
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
                <option value="MALE">MALE</option>
                <option value="FEMALE">FEMALE</option>
              </select>
            </div>
            <div class="col-md-4 mb-3">
              <label><b>Birthdate</b></label>
              <input type="date" class="form-control" value="<?php echo $row['birthdate']?>" id="birthday" name="birthdate"  >
            </div>
            <div class="col-md-2 mb-3">
              <label><b>Age</b></label>
              <input type="text" class="form-control" value="<?php echo $row['age']?>" id="editAge" name="age" readonly>
            </div>
          </div>

          

          <div class="row g-2">
            <div class="col-md-12">
              <label>Address</label>
            </div>

            <div class="col-md-6 mb-3">
              <input type="hidden" name="province" value="<?php echo $row['province']; ?>">
              <input type="hidden" name="city" value="<?php echo $row['city']; ?>">
              <input type="hidden" name="barangay" value="<?php echo $row['barangay']; ?>">
              <select class="form-select" name="province" id="editProvince">
                <option selected disabled><?php echo $row['province']; ?></option>
              </select>
            </div>
            <div class="col-md-6 mb-3">
              <select class="form-select" name="city" id="editCityTown">
                <option value="<?php echo $row['city']; ?>" selected disabled><?php echo $row['city']; ?></option>
              </select>
            </div>
            <div class="col-md-6 mb-3">
              <select class="form-select" name="barangay" id="editBarangay">
                <option value="<?php echo $row['barangay']; ?>" selected disabled><?php echo $row['barangay']; ?></option>
              </select>
            </div>
            <div class="col-md-3 mb-3">
              <input type="text" class="form-control" value="<?php echo $row['houseNo']; ?>" name="houseNo" placeholder="House No" autocomplete="off" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" >
            </div>
            <div class="col-md-3 mb-3">
              <input type="text" class="form-control" value="<?php echo $row['purok']; ?>" name="purok" placeholder="Purok No" autocomplete="off" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" >
            </div>
          </div>

          <div class="row g-2">
            <div class="col-md-12">
              <label><b>Contact Information</b></label>
            </div>
            <div class="col-md-6">
              <input type="text" class="form-control" value="<?php echo $row['contactNo']?>" maxlength="11" name="contactNo" placeholder="Your Contact Number" oninput="this.value = this.value.replace(/[^0-9]/g, '').replace(/(\..*)\./g, '$1');">
              <small id="emailHelp" class="form-text text-muted">Contact No.</small>
            </div>
            <div class="col-md-6">
              <input type="email" class="form-control" value="<?php echo $row['emailAddress']?>" name="emailAddress" placeholder="Your Email Address (Optional)" oninput="this.value = this.value.toUpperCase()">
              <small id="emailHelp" class="form-text text-muted">Email Address.</small>
            </div>
            <div class="col-md-6">
              <input type="text" class="form-control" value="<?php echo $row['motherName']?>" name="motherName" placeholder="Mother's Name" oninput="this.value = this.value.toUpperCase()" onkeyup="lettersOnly(this)">
              <small id="emailHelp" class="form-text text-muted">Mother's Name.</small>
            </div>
            <div class="col-md-6">
              <input type="text" class="form-control" value="<?php echo $row['motherContactNo']?>" maxlength="11" name="motherContactNo" placeholder="Your Mother's Contact Number" oninput="this.value = this.value.replace(/[^0-9]/g, '').replace(/(\..*)\./g, '$1');">
              <small id="emailHelp" class="form-text text-muted">Contact No.</small>
            </div>
            <div class="col-md-6">
              <input type="text" class="form-control" value="<?php echo $row['fatherName']?>" name="fatherName" placeholder="Father's Name" oninput="this.value = this.value.toUpperCase()" onkeyup="lettersOnly(this)">
              <small id="emailHelp" class="form-text text-muted">Father's Name.</small>
            </div>
            <div class="col-md-6 mb-5">
              <input type="text" class="form-control" value="<?php echo $row['fatherContactNo']?>" maxlength="11" name="fatherContactNo" placeholder="Your Father's Contact Number" oninput="this.value = this.value.replace(/[^0-9]/g, '').replace(/(\..*)\./g, '$1');">
              <small id="emailHelp" class="form-text text-muted">Contact No.</small>
            </div>
          </div>

          <div class="row g-2">
            <div class="col-md-12">
              <label><b>Additional Information</b></label>
            </div>
            <div class="col-md-6">
              <input type="text" class="form-control" value="<?php echo $row['height']?>" name="height" placeholder="Height (in cm)" oninput="this.value = this.value.replace(/[^0-9]/g, '').replace(/(\..*)\./g, '$1');">
              <small id="emailHelp" class="form-text text-muted">Height</small>
            </div>
            <div class="col-md-6">
              <input type="text" class="form-control" value="<?php echo $row['weight']?>" name="weight" placeholder="Weight (in kg)" oninput="this.value = this.value.replace(/[^0-9]/g, '').replace(/(\..*)\./g, '$1');">
              <small id="emailHelp" class="form-text text-muted">Weight</small>
            </div>
            <div class="col-md-6">
              <input type="text" class="form-control" value="<?php echo $row['nationality']?>" name="nationality" placeholder="Nationality" oninput="this.value = this.value.toUpperCase()" onkeyup="lettersOnly(this)">
              <small id="emailHelp" class="form-text text-muted">Nationality</small>
            </div>
            <div class="col-md-6">
              <select class="form-select" value="<?php echo $row['civilStatus']?>" name="civilStatus" id="civilStatus" onchange="showSpouseChildrenFields()">
                <option value="SINGLE">SINGLE</option>
                <option value="MARRIED">MARRIED</option>
                <option value="DIVORCED">DIVORCED</option>
                <option value="WIDOWED">WIDOWED</option>
              </select>
              <small id="emailHelp" class="form-text text-muted">Civil Status</small>
            </div>
          </div>
          <div class="row g-2">
            
            <div class="col-md-6 mb-2">
              <label><b></b></label>
              <input type="text" class="form-control" value="<?php echo $row['spouseName']?>" id="spouse-name" placeholder="Spouse Name" oninput="this.value = this.value.toUpperCase()" onkeyup="lettersOnly(this)" name="spouseName" style="display: none;">
            </div>
            <div class="col" id="spouse-children-fields" style="display: none;">
              <div class="col-md-6 mb-3">
                <label><b>Number of Children</b></label>
                <input type="number" class="form-control" id="num-children" onchange="showChildNameFields()" oninput="this.value = this.value.toUpperCase()">
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
              <input type="text" class="form-control" value="<?php echo $row['course']?>" name="course" placeholder="Course" oninput="this.value = this.value.toUpperCase()" onkeyup="lettersOnly(this)">
              <small id="emailHelp" class="form-text text-muted">Course</small>
            </div>
            <div class="col-md-6">
              <input type="text" class="form-control" value="<?php echo $row['CSchoolName']?>" name="CSchoolName" placeholder="School Name" oninput="this.value = this.value.toUpperCase()" onkeyup="lettersOnly(this)">
              <small id="emailHelp" class="form-text text-muted">School Name</small>
            </div>
            <div class="col-md-6">
              <input type="text" class="form-control" value="<?php echo $row['CSchoolAddress']?>" name="CSchoolAddress" placeholder="School Address" oninput="this.value = this.value.toUpperCase()" onkeyup="lettersOnly(this)">
              <small id="emailHelp" class="form-text text-muted">School Address</small>
            </div>
            <div class="col-md-6 mb-4">
              <input type="text" class="form-control" value="<?php echo $row['CYearAttended']?>" name="CYearAttended" placeholder="Year Attended Ex: 2012-2016" oninput="this.value = this.value.replace(/[^0-9-]/g, '').replace(/(\..*)\./g, '$1');">
              <small id="emailHelp" class="form-text text-muted">Year attended</small>
            </div>
          </div>

          <div class="row g-2">
            <div class="col-md-12">
              <label for="additional-info"><b>High School</b></label>
            </div>
            <div class="col">
              <input type="text" class="form-control" value="<?php echo $row['HSchoolName']?>" name="HSchoolName" placeholder="School Name" oninput="this.value = this.value.toUpperCase()" onkeyup="lettersOnly(this)">
              <small id="emailHelp" class="form-text text-muted">School Name</small>
            </div>
            <div class="col">
              <input type="text" class="form-control" value="<?php echo $row['HSchoolAddress']?>" name="HSchoolAddress" placeholder="School Address" oninput="this.value = this.value.toUpperCase()" onkeyup="lettersOnly(this)">
              <small id="emailHelp" class="form-text text-muted">School Address</small>
            </div>
            <div class="col mb-4">
              <input type="text" class="form-control" value="<?php echo $row['HYearAttended']?>" name="HYearAttended" placeholder="Year Attended Ex: 2012-2016" oninput="this.value = this.value.replace(/[^0-9-]/g, '').replace(/(\..*)\./g, '$1');">
              <small id="emailHelp" class="form-text text-muted">Year Attended</small>
            </div>
          </div>

          <div class="row g-2">
            <div class="col-md-12">
              <label for="additional-info"><b>Elementary</b></label>
            </div>
            <div class="col">
              <input type="text" class="form-control" value="<?php echo $row['ESchoolName']?>" name="ESchoolName" placeholder="School Name" oninput="this.value = this.value.toUpperCase()" onkeyup="lettersOnly(this)">
              <small id="emailHelp" class="form-text text-muted">School Name</small>
            </div>  
            <div class="col">
              <input type="text" class="form-control" value="<?php echo $row['ESchoolAddress']?>" name="ESchoolAddress" placeholder="School Address" oninput="this.value = this.value.toUpperCase()" onkeyup="lettersOnly(this)">
              <small id="emailHelp" class="form-text text-muted">School Address</small>
            </div>
            <div class="col mb-4">
              <input type="text" class="form-control" value="<?php echo $row['EYearAttended']?>" name="EYearAttended" placeholder="Year Attended Ex: 2012-2016" oninput="this.value = this.value.replace(/[^0-9-]/g, '').replace(/(\..*)\./g, '$1');">
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
              <input type="text" class="form-control" value="<?php echo $row['BusinessID']?>" name="BusinessID" oninput="this.value = this.value.replace(/[^0-9]/g, '').replace(/(\..*)\./g, '$1');">
              <small id="emailHelp" class="form-text text-muted" for="">Business ID</small>
            </div>
            <div class="col-md-6">
              <input type="text" class="form-control" value="<?php echo $row['BusinessNature']?>" name="BusinessNature" oninput="this.value = this.value.toUpperCase()" onkeyup="lettersOnly(this)">
              <small id="emailHelp" class="form-text text-muted" for="">Business Nature</small>
            </div>
            <div class="col-md-6">
              <input type="text" class="form-control" value="<?php echo $row['BusinessName']?>" name="BusinessName" oninput="this.value = this.value.toUpperCase()" onkeyup="lettersOnly(this)">
              <small id="emailHelp" class="form-text text-muted" for="">Business Name</small>
            </div>
            <div class="col-md-6">
              <input type="text" class="form-control" value="<?php echo $row['BusinessOwner']?>" name="BusinessOwner" oninput="this.value = this.value.toUpperCase()" onkeyup="lettersOnly(this)">
              <small id="emailHelp" class="form-text text-muted" for="">Business Owner</small>
            </div>
            <div class="col-md-6">
              <input type="text" class="form-control" value="<?php echo $row['BusinessOwnerAddress']?>" name="BusinessOwnerAddress" oninput="this.value = this.value.toUpperCase()">
              <small id="emailHelp" class="form-text text-muted" for="">Owner Address</small>
            </div>
            <div class="col-md-6">
              <input type="text" class="form-control" value="<?php echo $row['BusinessContactNumber']?>" maxlength="11" name="BusinessContactNumber" oninput="this.value = this.value.replace(/[^0-9]/g, '').replace(/(\..*)\./g, '$1');">
              <small id="emailHelp" class="form-text text-muted" for="">Contact Number</small>
            </div>
            <div class="col-md-12">
            </div>
            <div class="col-md-3">
              <input type="text" class="form-control" value="<?php echo $row['BusinessBldgNo']?>" name="BusinessBldgNo" oninput="this.value = this.value.replace(/[^0-9]/g, '').replace(/(\..*)\./g, '$1');">
              <small id="emailHelp" class="form-text text-muted" for="">Building No.</small>
            </div>
            <div class="col-md-3">
              <input type="text" class="form-control" value="<?php echo $row['BusinessPurokNo']?>" name="BusinessPurokNo" oninput="this.value = this.value.replace(/[^0-9]/g, '').replace(/(\..*)\./g, '$1');">
              <small id="emailHelp" class="form-text text-muted" for="">Purok No.</small>
            </div>
            <div class="col-md-6">
              <input type="text" class="form-control" value="<?php echo $row['BusinessBarangay']?>" name="BusinessBarangay" oninput="this.value = this.value.toUpperCase()">
              <small id="emailHelp" class="form-text text-muted" for="">Barangay</small>
            </div>
            <div class="col-md-6">
              <input type="text" class="form-control" value="<?php echo $row['BusinessMunicipality']?>" name="BusinessMunicipality" oninput="this.value = this.value.toUpperCase()" onkeyup="lettersOnly(this)">
              <small id="emailHelp" class="form-text text-muted" for="">Municipality</small>
            </div>
            <div class="col-md-6">
              <input type="text" class="form-control" value="<?php echo $row['BusinessProvince']?>" name="BusinessProvince" oninput="this.value = this.value.toUpperCase()" onkeyup="lettersOnly(this)">
              <small id="emailHelp" class="form-text text-muted" for="">Province</small>
            </div>
          </div>
        </div>
        
        <div class="modal-footer float-end">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" onClick="window.location.reload();">Cancel</button>
          <button type="submit" name="update_resident" class="button-color btn">Update</button>
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
  $("#birthday").on("input",function(){
    let bdate = $(this).val();
    let bdateformat = new Date(bdate);
    let diff_ms =  Date.now() - bdateformat.getTime();
    let age_dt = new Date(diff_ms);
    let age = Math.abs(age_dt.getUTCFullYear() - 1970);
    $("#editAge").val(age);
  })
</script>

<!-- Address dropdown -->
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript">
  $(document).ready(function(){
  	function loadData(type, category_id){
  		$.ajax({
  			url : "function.php",
  			type : "POST",
  			data: {type : "province"},
  			success : function(data){
          $("#editProvince").append(data);
  				// if(type == "stateData"){
  				// 	$("#CityTown").html(data);
  				// }else {
  				// 	$("#Province").append(data);
  				// }
  				
  			}
  		});
  	}

    function loadCity(province){
  		$.ajax({
  			url : "function.php",
  			type : "POST",
  			data: {type : "City", province : province},
  			success : function(data){
          $("#editCityTown").html("");
          $("#editCityTown").append(data);
  				// if(type == "stateData"){
  				// 	$("#CityTown").html(data);
  				// }else {
  				// 	$("#Province").append(data);
  				// }
  				
  			}
  		});
  	}

    function loadBarangay(CityTown){
  		$.ajax({
  			url : "function.php",
  			type : "POST",
  			data: {type : "editBarangay", CityTown : CityTown},
  			success : function(data){
          $("#editBarangay").html("");
          $("#editBarangay").append(data);
  				// if(type == "stateData"){
  				// 	$("#CityTown").html(data);
  				// }else {
  				// 	$("#Province").append(data);
  				// }
  				
  			}
  		});
  	}

  	loadData();

  	$("#editProvince").on("change",function(){
  		var Province = $("#editProvince").val();

  		if(Province != ""){
  			loadCity(Province);
  		}else{
  			$("#City").html("");
  		}
  	})

    $("#editCityTown").on("change",function(){
  		var City = $("#editCityTown").val();

  		if(City != ""){
  			loadBarangay(City);
  		}else{
  			$("#editCityTown").html("");
  		}
  	})

    $("#bday").on("input",function(){
      var bdate = $(this).val();
      var bdateformat = new Date(bdate);
      var diff_ms =  Date.now() - bdateformat.getTime();
      var age_dt = new Date(diff_ms);
      var age = Math.abs(age_dt.getUTCFullYear() - 1970);
      $("#age").val(age);
    })

  });
</script>