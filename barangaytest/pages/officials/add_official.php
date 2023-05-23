<!-- Add Official Modal -->
<style media="screen">
  .upload{
    width: 140px;
    position: relative;
    margin: auto;
    text-align: center;
  }
  .upload img{
    /* border-radius: 50%; */
    border: 8px solid #DCDCDC;
    width: 191px;
    height: 80px;
  }
  .upload .rightRound{
    position: absolute;
    bottom: 0;
    left: 161px;
    background: #00B4FF;
    width: 32px;
    height: 32px;
    line-height: 33px;
    text-align: center;
    border-radius: 50%;
    overflow: hidden;
    cursor: pointer;
  }
  .upload .leftRound{
    position: absolute;
    bottom: 0;
    left: 0;
    background: red;
    width: 32px;
    height: 32px;
    line-height: 33px;
    text-align: center;
    border-radius: 50%;
    overflow: hidden;
    cursor: pointer;
  }
  .upload .fa{
    color: white;
  }
  .upload input{
    position: absolute;
    transform: scale(2);
    opacity: 0;
  }
  .upload input::-webkit-file-upload-button, .upload input[type=submit]{
    cursor: pointer;
  }
</style>
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
                <?php 

                  $query = mysqli_query($con, "SELECT image FROM dashboard");
                  {
                  while($row = mysqli_fetch_array($query))
                  echo'
                  <image src="../settings/img/'.basename($row['image']).'" style="border-radius: 50%" alt="" class="w-auto" height="150">';

                  }

                ?>
              </div>
              <div class="col">
                <label >Last Name</label>
                <input type="text" class="form-control" name="lastname" autocomplete="off" oninput="this.value = this.value.toUpperCase()" onkeyup="lettersOnly(this)" required>
              </div>
              <div class="col">
                <label >First Name</label>
                <input type="text" class="form-control" name="firstname"  autocomplete="off" oninput="this.value = this.value.toUpperCase()" onkeyup="lettersOnly(this)" required>
              </div>
              <div class="col">
                <label >Middle Name</label>
                <input type="text" class="form-control" name="middlename"  autocomplete="off" oninput="this.value = this.value.toUpperCase()" onkeyup="lettersOnly(this)" required>
              </div>
            </div>

            <!-- Address -->
            <div class="row mb-2">
              <label >Address</label>
              <div class="col">
                <input type="text" class="form-control" name="address" placeholder="" autocomplete="off" oninput="this.value = this.value.toUpperCase()" required>
              </div>
            </div>
            
            <!-- Contact and Email -->
            <div class="row g-2 mb-2">
              <div class="col">
                <label>Contact No.</label>
                <input type="text" class="form-control" name="contactNo" maxlength="11" placeholder="" autocomplete="off" oninput="this.value = this.value.replace(/[^0-9-]/g, '').replace(/(\..*)\./g, '$1');" required>
              </div>
              
              <div class="col">
                <label>Email Address</label>
                <input type="email" class="form-control" name="email" placeholder="" autocomplete="off" oninput="this.value = this.value.toUpperCase()" required>
              </div>
                
            </div>
            <!-- Positions and Gender -->
            <div class="row g-2 mb-2">
              <div class="col-md-6">
                <label >Position</label>
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
                <label >Gender</label>
                <select class="form-select" name="gender" autocomplete="off" required>
                  <option selected disabled value="">Choose an option</option>
                  <option value="MALE">MALE</option>
                  <option value="FEMALE">FEMALE</option>
                </select>
              </div>
            </div>

            <!-- Start/End Date -->
            <div class="row g-2 mb-2">
              <div class="col-md-6">
                <label >Start Date</label>
                <input class="form-control" type="date" name="start_date" id="" required>
              </div>
              <div class="col">
                <label >End Date</label>
                <input class="form-control" type="date" name="end_date" id="" required>
              </div>
            </div>

            <label>Signature</label>
            <div class="input-group mb-3">

              <input type="hidden" name="id" value="<?php echo $user['id']; ?>">
              <div class="upload">
                <img src="img/<?php echo basename($user['image'])  ?>" id = "image">

                <div class="rightRound" id = "upload">
                  <input type="file" name="fileImg" id = "fileImg" accept=".jpg, .jpeg, .png">
                  <i class = "fa fa-camera"></i>
                </div>

                <div class="leftRound" id = "cancel" style = "display: none;">
                  <i class = "fa fa-times"></i>
                </div>
                <div class="" id = "confirm" style = "display: none;">
                  <input type="hidden">
              </div>
            </div>

              <script type="text/javascript">
                document.getElementById("fileImg").onchange = function(){
                  document.getElementById("image").src = URL.createObjectURL(fileImg.files[0]); // Preview new image

                  document.getElementById("cancel").style.display = "block";
                  document.getElementById("confirm").style.display = "block";

                  document.getElementById("upload").style.display = "none";
                }

                var userImage = document.getElementById('image').src;
                document.getElementById("cancel").onclick = function(){
                  document.getElementById("image").src = userImage; // Back to previous image

                  document.getElementById("cancel").style.display = "none";
                  document.getElementById("confirm").style.display = "none";

                  document.getElementById("upload").style.display = "block";
                }
              </script>
            </div>

            <!-- Status -->
            <input type="hidden" name="status" value="Active">
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
              <button type="submit" name="add_official" class="button-color btn">Submit</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- RegEx -->
<script>
  function lettersOnly (input) {
    var regex = /[^a-z ]/gi;
    input.value = input.value.replace (regex, "");
  }
</script>