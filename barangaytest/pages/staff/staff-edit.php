<!-- Edit Staff Modal -->
<div class="modal fade" id="Edit_Staff<?php echo $row['id']?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-md">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Edit Staff Account</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="container">
          <!-- Form -->
          <form action="function.php" method="POST">
            <div class="row g-2 mb-2">
            <script>
              function lettersOnly (input) {
                var regex = /[^a-z ]/gi;
                input.value = input.value.replace (regex, "");
              }
            </script>
              <div class="col">
                <input type="hidden" name="id" value="<?php echo $row['id']?>"/>
                <label >Last Name</label>
                <input type="text" class="form-control" name="lastname" autocomplete="off" oninput="this.value = this.value.toUpperCase()" onkeyup="lettersOnly(this)" required value="<?php echo $row['lastname']?>" required>
              </div>
              <div class="col">
                <label >First Name</label>
                <input type="text" class="form-control" name="firstname"  autocomplete="off" oninput="this.value = this.value.toUpperCase()" onkeyup="lettersOnly(this)" required value="<?php echo $row['firstname']?>" required>
              </div>
              <div class="col">
                <label >Middle Name</label>
                <input type="text" class="form-control" name="middlename"  autocomplete="off" oninput="this.value = this.value.toUpperCase()" onkeyup="lettersOnly(this)" required value="<?php echo $row['middlename']?>" required>
              </div>
            </div>

            <!-- Address -->
            <!-- <div class="row mb-2">
              <label >Address</label>
              <div class="col">
                <input type="text" class="form-control" name="address" placeholder="" autocomplete="off" oninput="this.value = this.value.toUpperCase()" onkeyup="lettersOnly(this)" required value="<?php echo $row['address']?>">
              </div>
            </div> -->

            <div class="row g-2">
              <div class="col-md-12">
                <label>Address</label>
              </div>

              <div class="col-md-6 mb-3">
                <input type="hidden" name="province" value="<?php echo $row['province']; ?>">
                <input type="hidden" name="City" value="<?php echo $row['City']; ?>">
                <input type="hidden" name="barangay" value="<?php echo $row['barangay']; ?>">
                <select class="form-select" name="province" id="Province">
                  <option selected disabled><?php echo $row['province']; ?></option>
                </select>
              </div>
              <div class="col-md-6 mb-3">
                <select class="form-select" name="City" id="CityTown">
                  <option value="<?php echo $row['City']; ?>" selected disabled><?php echo $row['City']; ?></option>
                </select>
              </div>
              <div class="col-md-6 mb-3">
                <select class="form-select" name="barangay" id="Barangay">
                  <option value="<?php echo $row['barangay']; ?>" selected disabled><?php echo $row['barangay']; ?></option>
                </select>
              </div>
              <div class="col-md-3 mb-3">
                <input type="text" class="form-control" value="<?php echo $row['houseNo']; ?>" name="houseNo" placeholder="House No" autocomplete="off" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" required>
              </div>
              <div class="col-md-3 mb-3">
                <input type="text" class="form-control" value="<?php echo $row['purokNo']; ?>" name="purokNo" placeholder="Purok No" autocomplete="off" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" required>
              </div>
            </div>
            
            <!-- Contact and Gender -->
            <div class="row g-2 mb-2">
              <div class="col">
                <label>Contact No.</label>
                <input type="text" class="form-control" name="contactNo" maxlength="11" placeholder="" autocomplete="off" required value="<?php echo $row['contactNo']; ?>" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" / required>
              </div>
              <div class="col">
                <?php 
                  if($row['gender'] == "MALE")
                  {
                    echo'
                    <label >Gender</label>
                    <select class="form-select" name="gender" autocomplete="off" required>
                      <option value="MALE">'.strtoupper($row['gender']).'</option>
                      <option value="FEMALE">FEMALE</option>
                    </select>
                    ';
                  }

                  elseif($row['gender'] == "FEMALE")
                  {
                    echo'
                    <label>Gender</label>
                    <select class="form-select" name="gender" autocomplete="off" required>
                      <option value="FEMALE">'.strtoupper($row['gender']).'</option>
                      <option value="MALE">MALE</option>
                    </select>
                    ';
                  }
                ?>
              </div>
            </div>

            <!-- input a username and password -->
            <div class="row g-2 mb-2">
              
              <div class="col input-group">
                <label>Username</label>
                <div class="input-group">
                  <div class="input-group-text"><i class="fa-solid fa-user"></i></div>
                  <input type="text" class="form-control" name="username" id="username" minlength="4" maxlength="12" autocomplete="off" placeholder="Username" value="<?php echo $row['username']?>" required>
                </div>
              </div>
              
              <div class="col input-group">
                <label>Password</label>
                <div class="input-group">
                  <div class="input-group-text"><i class="fa-solid fa-key"></i></div>
                  <input type="text" class="form-control" name="password" minlength="4" autocomplete="off" placeholder="Password" value="<?php echo $row['password']?>" required>
                </div>
              </div>
              <label id="user_msg" style="color:#CC0000;" ></label>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
              <button type="submit" name="update_staff" class="button-color btn">Update</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>



<script type="text/javascript">
    $(document).ready(function() {
 
        var timeOut = null; // this used for hold few seconds to made ajax request
 
        var loading_html = '<img src="image/ajax-loader.gif" style="height: 20px; width: 20px;"/>'; // just an loading image or we can put any texts here
 
        //when button is clicked
        $('#username').keyup(function(e){
 
            // when press the following key we need not to make any ajax request, you can customize it with your own way
            switch(e.keyCode)
            {
                //case 8:   //backspace
                case 9:     //tab
                case 13:    //enter
                case 16:    //shift
                case 17:    //ctrl
                case 18:    //alt
                case 19:    //pause/break
                case 20:    //caps lock
                case 27:    //escape
                case 33:    //page up
                case 34:    //page down
                case 35:    //end
                case 36:    //home
                case 37:    //left arrow
                case 38:    //up arrow
                case 39:    //right arrow
                case 40:    //down arrow
                case 45:    //insert
                //case 46:  //delete
                    return;
            }
            if (timeOut != null)
                clearTimeout(timeOut);
            timeOut = setTimeout(is_available, 500);  // delay delay ajax request for 1000 milliseconds
            $('#user_msg').html(loading_html); // adding the loading text or image
        });
  });
function is_available(){
    //get the username
    var username = $('#username').val();
 
    //make the ajax request to check is username available or not
    $.post("check_username.php", { username: username },
    function(result)
    {
        console.log(result);
        if(result != 0)
        {
            $('#user_msg').html('Not Available');
            document.getElementById("btn_add").disabled = true;
        }
        else
        {
            $('#user_msg').html('<span style="color:#006600;">Available</span>');
            document.getElementById("btn_add").disabled = false;
        }
    });
 
}
</script>