<?php include 'function.php'; ?>

<div class="modal fade" id="Edit_Resident<?php echo $row['id']; ?>" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
      <h5 class="modal-title" id="staticBackdropLabel">Resident's Personal Information</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action="function.php" class="" method="post">
                <div class="row g-2">
                    <div class="text-center d.flex pb-12">
                    <input type="hidden" name="id" value="<?php echo $row['id']?>"/>
                    </div>
                    <label class="mb-2"><b>Resident Name</b></label>
                    <div class="col mb-3">
                      <label>Last Name</label>
                      <input type="text" class="form-control" autocomplete="off" name="lastname" value="<?php echo $row['lastname']?>">
                        
                    </div>
                    <div class="col mb-3">
                      <label>First Name</label>
                      <input type="text" class="form-control" autocomplete="off" name="firstname" value="<?php echo $row['firstname']?>">
                        
                    </div>
                    <div class="col mb-3">
                      <label>Middle Name</label>
                      <input type="text" class="form-control" autocomplete="off" name="middlename" value="<?php echo $row['middlename']?>">
                      
                    </div>
                    <div class="col mb-3">
                    <label for="nameExtension">Name Extension</label>
                    <select class="form-select" id="nameExtension" aria-label="Name Extension" autocomplete="off" name="suffixname">
                        <option selected disabled></option>
                        <option>Jr.</option>
                        <option>Sr.</option>
                        <option>I</option>
                        <option>II</option>
                        <option>III</option>
                        <option>IV</option>
                        <!-- Add more options as needed -->
                    </select>
                    
                    </div>
                </div>

                <!-- <div class="mb-3">
                <label for="birthday"><b>Birthdate</b></label>
                <input type="date" class="form-control" id="birthday" name="birthday" placeholder="">
                </div> -->

                <div class="row">
                <div class="col-md-4 mb-3">
                    <label for="birthday"><b>Birthdate</b></label>
                    <input type="date" class="form-control" id="birthday" autocomplete="off" name="birthdate" required onchange="calculateAge()" value="<?php echo $row['birthdate']?>">
                </div>
                <div class="col-md-4 mb-3">
                    <label for="age"><b>Age</b></label>
                    <input type="text" class="form-control" id="age" autocomplete="off" name="age" readonly value="<?php echo $row['age']?>"> 

                </div>
                <div class="col-md-4 mb-3">
                    <label for="gender"><b>Gender</b></label>
                    <select class="form-select" id="gender" autocomplete="off" name="gender" value="<?php echo $row['gender']?>">
                        <option value="MALE">Male</option>
                        <option value="FEMALE">Female</option>
                    </select>
                </div>
            </div>

            <script>
                function calculateAge() {
                // Get the birthdate input field
                const birthdayInput = document.getElementById("birthday");
                
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

                <div class="row">
                  <div class="col-md-12 mb-3">
                    <label for="address"><b>Address</b></label>
                  </div>
                  <div class="col-md-4 mb-3">
                    <input type="text" class="form-control" id="house-number" name="houseNo" placeholder="House Number" value="<?php echo $row['houseNo']?>">
                  </div>
                  <div class="col-md-4 mb-3">
                    <input type="text" class="form-control" id="purok-number" name="purok" placeholder="Purok Number" value="<?php echo $row['purok']?>">
                  </div>
                  <div class="col-md-4 mb-3">
                    <input class="form-control" id="barangay" name="barangay" placeholder="barangay" value="<?php echo $row['barangay']?>">         
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4 mb-3">
                    <input class="form-control" id="town-city" name="city" placeholder="Town/City" value="<?php echo $row['city']?>">
                     
                              
                  </div>
                  <div class="col-md-4 mb-3">
                    <input class="form-control" id="province" name="province" placeholder="Province" value="<?php echo $row['province']?>"> 
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-12 mb-3">
                      <label for="contact-info"><b>Contact Information</b></label>
                  </div>
                  <div class="col-md-6 mb-3">
                      <input type="text" class="form-control" id="contact-number" autocomplete="off" name="contactNo" maxlength="11" placeholder="Your Contact Number" value="<?php echo $row['contactNo']?>">
                  </div>
                 <!--  <div class="col-md-6 mb-3">
                      <input type="email" class="form-control" id="email" name="email" placeholder="Your Email Address (Optional)">
                  </div> -->
                </div>
                <div class="row">
                  <div class="col-md-6 mb-3">
                      <label>Username</label>
                      <input type="text" class="form-control" autocomplete="off" name="username" value="<?php echo $row['username']?>">
                  </div>
                  <div class="col-md-6 mb-3">
                    <label>Password</label>
                      <input type="password" class="form-control" autocomplete="off" name="password" value="<?php echo $row['password']?>">
                  </div>
                </div>
                

                <!-- <div class="row">
                  <div class="col-md-12 mb-3">
                      <label for="additional-info"><b>Additional Information</b></label>
                  </div>
                  <div class="col-md-3 mb-3">
                      <input type="number" class="form-control" id="height" name="height" placeholder="Height (in cm)">
                  </div>
                  <div class="col-md-3 mb-3">
                      <input type="number" class="form-control" id="weight" name="weight" placeholder="Weight (in kg)">
                  </div>
                  <div class="col-md-6 mb-3">
                      <input type="text" class="form-control" id="nationality" name="nationality" placeholder="Nationality">
                  </div>
                </div>

  
  <div class="row">
  <div class="col-md-4 mb-3">
    <label for="civil-status"><b>Civil Status</b></label>
    <select class="form-select" id="civil-status" name="civil-status" onchange="showSpouseChildrenFields()">
      <option value="single">Single</option>
      <option value="married">Married</option>
      <option value="divorced">Divorced</option>
      <option value="widowed">Widowed</option>
    </select>
  </div>
  
  <div class="col-md-8 mb-2">
    <label for="spouse-name"><b></b></label>
    <input type="text" class="form-control" id="spouse-name" placeholder="Spouse Name" name="spouse-name" style="display: none;">
  </div>
</div>

<div class="row" id="spouse-children-fields" style="display: none;">
  <div class="col-md-4 mb-3">
    <label for="num-children"><b>Number of Children</b></label>
    <input type="number" class="form-control" id="num-children" name="num-children" onchange="showChildNameFields()">
  </div>
</div>

<div id="child-name-fields"></div>

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
            <div class="col-md-8 mb-2">
              <input type="text" class="form-control" placeholder="Child ${i} Name" id="child-${i}-name" name="child-${i}-name">
            </div>
            <div class="col-md-6 mb-3"></div>
          </div>
        `;
        childNameFields.innerHTML += childNameField;
      }
    }
  </script> -->
              <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>  
                <button type="submit" class="btn btn-primary" name="update_resident">Submit</button>
              </div>
    
            </form>
      </div>
        

    </div>
  </div>
</div>


<!-- Second Modal!!!!!!!!!!!!!!!!!!!!! -->
<!-- <div class="modal fade" id="exampleModalToggle2" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalToggleLabel2">Educational Background</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <div class="container">
            
            <form action="#" class="" method="post">
                <div class="row">
                <div class="col-md-12 mb-3">
                    <label for="additional-info"><b>College</b></label>
                </div>
                <div class="col-md-5 mb-3">
                    <input type="text" class="form-control" id="Ccourse" name="Ccourse" placeholder="Course">
                </div>
                <div class="col-md-7 mb-3">
                    <input type="number" class="form-control" id="Cschoolname" name="Cschoolname" placeholder="School Name">
                </div>
                <div class="col-md-6 mb-3">
                    <input type="text" class="form-control" id="Caddress" name="Caddress" placeholder="School Address">
                </div>
                <div class="col-md-6 mb-3">
                    <input type="text" class="form-control" id="Cyear" name="Cyear" placeholder="Year Attended Ex: 2012-2016">
                </div>
                </div>

                <div class="row">
                <div class="col-md-12 mb-3">
                    <label for="additional-info"><b>High School</b></label>
                </div>
                <div class="col-md-7 mb-3">
                    <input type="number" class="form-control" id="Hschoolname" name="Hschoolname" placeholder="School Name">
                </div>
                <div class="col-md-5 mb-3">
                    <input type="text" class="form-control" id="Haddress" name="Haddress" placeholder="School Address">
                </div>
                <div class="col-md-6 mb-3">
                    <input type="text" class="form-control" id="Hyear" name="Hyear" placeholder="Year Attended Ex: 2012-2016">
                </div>
                </div>

                <div class="row">
                <div class="col-md-12 mb-3">
                    <label for="additional-info"><b>Elementary</b></label>
                </div>
                <div class="col-md-7 mb-3">
                    <input type="number" class="form-control" id="Eschoolname" name="Eschoolname" placeholder="School Name">
                </div>
                <div class="col-md-5 mb-3">
                    <input type="text" class="form-control" id="Eaddress" name="Eaddress" placeholder="School Address">
                </div>
                <div class="col-md-6 mb-3">
                    <input type="text" class="form-control" id="Eyear" name="Eyear" placeholder="Year Attended Ex: 2012-2016">
                </div>
                </div>

            </form>
        </div>
      </div>
      <div class="modal-footer">
        <button class="btn btn-primary" data-bs-target="#Add_Residents" data-bs-toggle="modal">Back to first</button>
      </div>
    </div>
  </div>
</div>
 -->