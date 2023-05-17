<?php
  include "header.php";
  include "navbar.php";
  include "functions.php";
  include "sweetalert2.php";

  function moveImage($img, $studentid) {
    $filenameimage = $img['name'];
    $filetemlocimage = $img['tmp_name'];
    $foldername = "teachers_document/" . $studentid;
    $filepathimage = $foldername . "/" . $filenameimage;
  
    if (!is_dir($foldername)) {
      mkdir($foldername);
    }
  
    if (file_exists($filepathimage)) {
      unlink($filepathimage);
    }
  
    move_uploaded_file($filetemlocimage, $filepathimage);
    return $filepathimage;
  }
  
?>
<title>Employee Information</title>
<?php
  if(isset($_POST['view'])) {
    header("location:teachersmodule.php?view=$_POST[teacherno]");
  }
  if(isset($_GET['add'])) {
    echo "<script type='text/javascript'>
      $(window).on('load',function(){
        $('#exampleModalCenter').modal('show');
      });
    </script>";
  }

?>
<script>
    function calculateAge(dateOfBirth) {
        var dob = new Date(dateOfBirth);
        var currentDate = new Date();
        var age = currentDate.getFullYear() - dob.getFullYear();
        var monthDifference = currentDate.getMonth() - dob.getMonth();

        if (monthDifference < 0 || (monthDifference === 0 && currentDate.getDate() < dob.getDate())) {
        age--;
        }

        return age;
    }
</script>

<?php if(isset($_GET['view'])): ?>
  <script type='text/javascript'>
    $(window).on('load',function(){
      $('#exampleModalCenter').modal('show');
    });
  </script>
  <?php
    $sql = "SELECT * FROM tbl_teachers WHERE teacher_no = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('i', $_GET['view']);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();
  ?>
<?php endif; ?>
<style>
.modal-dialog{
  width:1000px;
}

</style>
<div class="modal fade" id="exampleModalCenter" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog-centered" role="document">
    <div class="modal-content" style="width:2000px;">
      <div class="modal-header">
        <h6 class="modal-title" id="exampleModalLongTitle"><b><?php echo isset($_GET['view']) ? 'Employee Information' : 'Employee Information'?></b><h6>
      <a href="teachersmodule.php"> <button type="button" class="close"  aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button></a>
      </div>
      <div class="modal-body"  >
        <form action="teachersinfo.php" method="POST">
        <div class="col-sm-4">
          <input type="hidden" name="teacherno" value="<?php echo isset($_GET['view']) ? $_GET['view'] : ''; ?>" />
          <label for="teacherid" class="marginTopBot" style="font-size:16px">Teacher ID</label>
          <input <?php echo isset($_GET['edit']) ? "readonly" : "";?> value=<?php echo date('Y') . randNo(6);?> readonly id="teacherid" required name="teacherid" type="text" class="inputHeight form-control" value="<?php echo isset($_GET['edit']) ? $row['teacher_id'] : ""; ?>"/>
      
  </div>
  <br>
  <br>
  <br><div class="col-sm-12">
  <b><label for="lastname" class="marginTopBot" style="font-size:18px;">Employee Personal Information</label></b>
                                        </div>
 
          <div class="col-sm-3">
         
      
          <label for="lastname" class="marginTopBot" >Last Name</label>
  
          <input oninput="this.value=this.value.toUpperCase()" id="lastname" required name="lastname" type="text" class="inputHeight form-control" value="<?php echo isset($_GET['view']) ? $row['last_name'] : '';?>"/>
 
  </div>

  <div class="col-sm-3">
  
          <label for="firstname" class="marginTopBot">First Name</label>
          <input oninput="this.value=this.value.toUpperCase()" id="firstname" required name="firstname" type="text" class="inputHeight form-control" value="<?php echo isset($_GET['view']) ? $row['first_name'] : '';?>"/>
          </div>
         
 
   <div class="col-sm-3">
   
          <label for="lastname" class="marginTopBot">Middle Name</label>
  
          <input oninput="this.value=this.value.toUpperCase()" id="middlename" required name="middlename" type="text" class="inputHeight form-control" value="<?php echo isset($_GET['view']) ? $row['middle_name'] : '';?>"/>
 
  </div>
  <div class="col-sm-3">
  
         
          <label for="lastname" class="marginTopBot">Extension Name</label>
  
          <select name="stat" id="stat" class=" inputHeight form-control">
                                        <option readonly></option>
                                        
                                        <?php
                                          $sql2 = "SELECT * FROM tbl_options WHERE itemcategory = 'EXT_NAME'";
                                          $result2 = $conn->query($sql2);                                                
                                          while($row2 = $result2->fetch_assoc()) {
                                              if($row2['itemname'] == $row['ext_name']){
                                                  echo "<option selected value='" . $row2['itemname'] . "'>" . $row2['itemname'] . "</option>";
                                              }else{
                                                  echo "<option value='" . $row2['itemname'] . "'>" . $row2['itemname'] . "</option>";
                                              }                                      
                                          }
                                        ?>                                       
                                        </select> 
  </div>


        
     <br/>
  <br/>
  <br/>  
  
  <div class="col-sm-2">
  <label for="dataofbirth" class="marginTopBot">Date of Birth</label>
          <input oninput="this.value=this.value.toUpperCase()" placeholder="MM/DD/YYYY" id="dateofbirth" required name="dateofbirth" onchange = "updateAge()" type="date" class="inputHeight form-control form-control-lg" value="<?php echo isset($_GET['view']) ? $row['birthday'] : '';?>"/>
  </div>
  <div class="col-sm-2">
                   <label for="age" class="marginTopBot">Age</label>
          <input oninput="this.value=this.value.toUpperCase()" id="age" required name="age" type="text" class="inputHeight form-control form-control-lg" readonly value="<?php echo isset($_GET['view']) ? $row['age'] : '';?>"/>
  </div> 
  <div class="col-sm-2"> 
          <label for="placeofbirth" class="marginTopBot">Place of Birth</label>
          <input oninput="this.value=this.value.toUpperCase()" id="placeofbirth" required name="placeofbirth" type="text" class="inputHeight form-control" value="<?php echo isset($_GET['view']) ? $row['birthplace'] : '';?>"/>
  </div>
  <div class="col-sm-1">
          <label for="lastname" class="marginTopBot" >Sex</label>
  
          <select name="sem" id="sem" required="required" class=" inputHeight form-control">
          <option readonly></option>
                                      
                                       
          <?php
                                          $sql2 = "SELECT * FROM tbl_options WHERE itemcategory = 'SEX'";
                                          $result2 = $conn->query($sql2);                                                
                                          while($row2 = $result2->fetch_assoc()) {
                                              if($row2['itemname'] == $row['sex']){
                                                  echo "<option selected value='" . $row2['itemname'] . "'>" . $row2['itemname'] . "</option>";
                                              }else{
                                                  echo "<option value='" . $row2['itemname'] . "'>" . $row2['itemname'] . "</option>";
                                              }                                      
                                          }
                                        ?>                                         
                                        </select> 
  </div>
  <div class="col-sm-2">
                   <label for="age" class="marginTopBot">Contact Number</label>
          <input oninput="this.value=this.value.toUpperCase()" id="resign" required name="resign" type="text" class="inputHeight form-control" value="<?php echo isset($_GET['view']) ? $row['contact_no'] : '';?>"/>
  </div> 
  <div class="col-sm-1">
  
          <label for="firstname" class="marginTopBot">Civil Status</label>
  
  <select name="civil", id="civil", class="inputHeight form-control" >
      <option value=""></option>
    
       <?php
                                          $sql2 = "SELECT * FROM tbl_settings WHERE itemcategory = 'CIVILSTATUS'";
                                          $result2 = $conn->query($sql2);                                                
                                          while($row2 = $result2->fetch_assoc()) {
                                              if($row2['itemname'] == $row['civil_status']){
                                                  echo "<option selected value='" . $row2['itemname'] . "'>" . $row2['itemname'] . "</option>";
                                              }else{
                                                  echo "<option value='" . $row2['itemname'] . "'>" . $row2['itemname'] . "</option>";
                                              }                                      
                                          }
                                        ?>
  </select>
  </div>
  <div class="col-sm-2">
  
  <label for="firstname" class="marginTopBot">Religion</label>

<select name="rel", id="rel", class="inputHeight form-control" >
<option value=""></option>

 <?php
                                          $sql2 = "SELECT * FROM tbl_settings WHERE itemcategory = 'RELIGION' order by itemname ASC";
                                          $result2 = $conn->query($sql2);                                                
                                          while($row2 = $result2->fetch_assoc()) {
                                              if($row2['itemname'] == $row['religion']){
                                                  echo "<option selected value='" . $row2['itemname'] . "'>" . $row2['itemname'] . "</option>";
                                              }else{
                                                  echo "<option value='" . $row2['itemname'] . "'>" . $row2['itemname'] . "</option>";
                                              }                                      
                                          }
                                        ?>
</select>
</div>
     <br/>
  <br/>
  <br/>
  <br/>
  <br/>
<div class="col-sm-12">
  <b><label for="lastname" class="marginTopBot" style="font-size:18px;">Employee Address</label></b>
                                        </div>
                                        <div class = "col-sm-2">
                                        <label>Region<span class="required">*</span></label>
                        <select name="region" id="region" required class="inputHeight form-control" onchange="getAddress(1)">
                        <?php
                                $sql2 = "SELECT region_name FROM tble_region ORDER BY region_name";
                                $result2 = $conn->query($sql2);
                                echo "<option readonly></option>";
                                while($row2 = $result2->fetch_assoc()) {
                                  if ($row2['region_name'] == $row['region']) {
                                    echo "<option selected value='" . $row2['region_name'] . "'>" . $row2['region_name'] . "</option>";
                                  } else {
                                    echo "<option value='" . $row2['region_name'] . "'>" . $row2['region_name'] . "</option>";
                                  }
                                }
                            ?>
                        </select>
            </select>
  </div>
  <div class="col-sm-2">
  <label>Province<span class="required">*</span></label>
                        <select name="province" id="province" class="inputHeight form-control" onchange="getAddress(2)" required="required">
                        
                        </select> 
                          </div>
  <div class="col-sm-2">
 
   
  <label for="firstname" class="marginTopBot">Municipality</label>
  
  
                        <select name="city" id="city" class="inputHeight form-control" onchange="getAddress(3)" required="required">
                        
                        </select>  
</div>
  <div class="col-sm-3">
  
          <label for="lastname" class="marginTopBot">Barangay</label>
  
                        <select name="brgy" id="brgy" class="inputHeight form-control" required="required">

                        </select>  
  </div>
 
  <div class="col-sm-3">

          <label for="firstname" class="marginTopBot">House Number</label>
          <input oninput="this.value=this.value.toUpperCase()" id="houseno" name="houseno" type="text" class="inputHeight form-control" value="<?php echo isset($_GET['view']) ? $row['house_no'] : '';?>"/>
       <br/>
     
 
 
   </div>
   <div class="col-sm-12">
  <b><label for="lastname" class="marginTopBot" style="font-size:18px;">Employee Education Background</label></b>
                                        </div>
                                        <div class="col-sm-3">
          <label for="firstname" class="marginTopBot">Highest Educational Attainment</label>
  
  <select name="ed", id="ed", class="inputHeight form-control" >
      <option readonly></option>
       <?php
                                          $sql2 = "SELECT * FROM tbl_options WHERE itemcategory = 'EDUCATION'";
                                          $result2 = $conn->query($sql2);                                                
                                          while($row2 = $result2->fetch_assoc()) {
                                              if($row2['itemname'] == $row['educ_level']){
                                              
                                                  echo "<option selected value='" . $row2['itemname'] . "'>" . $row2['itemname'] . "</option>";
                                              }else{
                                                  echo "<option value='" . $row2['itemname'] . "'>" . $row2['itemname'] . "</option>";
                                              }                                      
                                          }
                                        ?>
  </select>
  </div>
 
  
  <div id = "crs" class="col-sm-3">
   
  <label for="firstname" class=" marginTopBot">Course</label>
  
<select name="crs", id="crs", class="inputHeight form-control chosen" >

    <option value=""></option>
    <?php 
    $query ="SELECT DISTINCT itemname FROM tbl_settings where itemcategory = 'COURSE' order by itemname";
    $result = $conn->query($query);
    if($result->num_rows> 0){
        while($optionData=$result->fetch_assoc()){
        $option =$optionData['itemname'];
       
    ?>
    <option value="<?php echo $option; ?>" ><?php echo $option; ?> </option>
   <?php
    }}
    ?>
     
</select>



</div>

  <div id ="major" class="col-sm-3">

  <label for="firstname" class="marginTopBot">Major</label>
  
<select name="major", id="major", class="inputHeight form-control" >
    <option value=""></option>
    <?php 
    $query ="SELECT DISTINCT itemname FROM tbl_options where itemcategory = 'MAJOR_MASTER' order by itemname";
    $result = $conn->query($query);
    if($result->num_rows> 0){
        while($optionData=$result->fetch_assoc()){
        $option =$optionData['itemname'];
       
    ?>
    <option value="<?php echo $option; ?>" ><?php echo $option; ?> </option>
   <?php
    }}
    ?>
     
</select>

</div>

<div class="col-sm-3">

 
  <label for="firstname" class="marginTopBot">School</label>
  
<select name="school", id="school", class="inputHeight form-control" >
    <option value=""></option>
    <?php 
    $query ="SELECT DISTINCT itemname FROM tbl_settings where itemcategory = 'SCHOOL' order by itemname";
    $result = $conn->query($query);
    if($result->num_rows> 0){
        while($optionData=$result->fetch_assoc()){
        $option =$optionData['itemname'];
       
    ?>
    <option value="<?php echo $option; ?>" ><?php echo $option; ?> </option>
   <?php
    }}
    ?>
     
</select>


 

</div>
<div class="col-sm-3">
          <label for="firstname" class="marginTopBot">Date Graduated</label>
          <input oninput="this.value=this.value.toUpperCase()" placeholder="MM/DD/YYYY" id="dataofbirth" required name="grad" type="text" class="inputHeight form-control dateselect" value="<?php echo isset($_GET['view']) ? $row['date_graduated'] : '';?>"/>

  </div>
 
<div class="col-sm-12">
  <b><label for="lastname" class="marginTopBot" style="font-size:18px;">Employment Information</label></b>
                                        </div>
     
  <br/>
  <br/>
  <div class="col-sm-3">

  <label for="firstname" class="marginTopBot">Designation</label>
  
<select name="pos", id="pos", class="inputHeight form-control" >
  <option></option>
  <?php
                                          $sql2 = "SELECT * FROM tbl_settings where itemcategory = 'PoSITION_TYPE'";
                                          $result2 = $conn->query($sql2);                                                
                                          while($row2 = $result2->fetch_assoc()) {
                                              if($row2['itemname'] == $row['designation']){
                                                  echo "<option selected value='" . $row2['itemname'] . "'>" . $row2['itemname'] . "</option>";
                                              }else{
                                                  echo "<option value='" . $row2['itemname'] . "'>" . $row2['itemname'] . "</option>";
                                              }                                      
                                          }
                                        ?>
</select>


 

</div>
<div class="col-sm-1">
          <label for="firstname" class="marginTopBot">Date Hired</label>
          <input oninput="this.value=this.value.toUpperCase()" placeholder="MM/DD/YYYY" id="dataofbirth" required name="datehire" type="text" class="inputHeight form-control dateselect" value="<?php echo isset($_GET['view']) ? $row['hired'] : '';?>"/>

  </div>
 

  <div class="col-sm-2">
          <label for="firstname" class="marginTopBot">Employment Status</label>
          <select name="rsn", id="rsn", class="inputHeight form-control" >
    <option value=""></option>
    <?php
                                          $sql2 = "SELECT * FROM tbl_settings where itemcategory = 'DESIGNATION_LEVEL'";
                                          $result2 = $conn->query($sql2);                                                
                                          while($row2 = $result2->fetch_assoc()) {
                                              if($row2['itemname'] == $row['designation_lvl']){
                                                  echo "<option selected value='" . $row2['itemname'] . "'>" . $row2['itemname'] . "</option>";
                                              }else{
                                                  echo "<option value='" . $row2['itemname'] . "'>" . $row2['itemname'] . "</option>";
                                              }                                      
                                          }
                                        ?>
</select>   
   </div>
   <div class="col-sm-2">
          <label for="firstname" class="marginTopBot">Date of Permanency</label>
          <input oninput="this.value=this.value.toUpperCase()" placeholder="MM/DD/YYYY" id="perma" name="perma" type="text" class="inputHeight form-control dateselect" value="<?php echo isset($_GET['view']) ? $row['permanency_date'] : '';?>"/>

   </div>
   <div class="col-sm-1">
          <label for="firstname" class="marginTopBot">Department</label>
          <select name="dept", id="dept", class="inputHeight form-control" >
    <option value=""></option>
    <?php
                                          $sql2 = "SELECT * FROM tbl_options where itemcategory = 'GRADE_TYPE'";
                                          $result2 = $conn->query($sql2);                                                
                                          while($row2 = $result2->fetch_assoc()) {
                                              if($row2['itemname'] == $row['department']){
                                                  echo "<option selected value='" . $row2['itemname'] . "'>" . $row2['itemname'] . "</option>";
                                              }else{
                                                  echo "<option value='" . $row2['itemname'] . "'>" . $row2['itemname'] . "</option>";
                                              }                                      
                                          }
                                        ?>  
</select>    
   </div>
   <div class="col-sm-2">
          <label for="firstname" class="marginTopBot">Employment Type</label>
          <select name="postype", id="postype", class="inputHeight form-control" >
    <option value=""></option>
    <?php
                                          $sql2 = "SELECT * FROM tbl_settings where itemcategory = 'DESIG_TYPE'";
                                          $result2 = $conn->query($sql2);                                                
                                          while($row2 = $result2->fetch_assoc()) {
                                              if($row2['itemname'] == $row['designation_type']){
                                                  echo "<option selected value='" . $row2['itemname'] . "'>" . $row2['itemname'] . "</option>";
                                              }else{
                                                  echo "<option value='" . $row2['itemname'] . "'>" . $row2['itemname'] . "</option>";
                                              }                                      
                                          }
                                        ?>  
</select>  

   </div>
   <div id = "tl" class="col-sm-1">
   <label for="firstname" class="marginTopBot" >With Teaching Load?</label>
          <select name="tl", id="tl",  class="inputHeight form-control" >
    <option value=""></option>
    <?php
                                          $sql2 = "SELECT * FROM tbl_options where itemcategory = 'tl'";
                                          $result2 = $conn->query($sql2);                                                
                                          while($row2 = $result2->fetch_assoc()) {
                                              if($row2['itemname'] == $row['teaching_load']){
                                                  echo "<option selected value='" . $row2['itemname'] . "'>" . $row2['itemname'] . "</option>";
                                              }else{
                                                  echo "<option value='" . $row2['itemname'] . "'>" . $row2['itemname'] . "</option>";
                                              }                                      
                                          }
                                        ?>  
</select> 

 
   </div>
   <div class="col-sm-12">
  <b><label for="lastname" class="marginTopBot" style="font-size:18px;">Government Issued ID</label></b>
                                        </div>
                                        <div class="col-sm-2">
         
    
                                        <label for="lastname" class="marginTopBot">SSS ID No.</label>
 
 <input oninput="this.value=this.value.toUpperCase()" id="sss" required name="sss" type="text" class="inputHeight form-control" value="<?php echo isset($_GET['view']) ? $row['sss'] : '';?>"/>

</div>
<div class="col-sm-2">
 

 <label for="lastname" class="marginTopBot">TIN ID No.</label>

 <input oninput="this.value=this.value.toUpperCase()" id="tin" required name="tin" type="text" class="inputHeight form-control" value="<?php echo isset($_GET['view']) ? $row['tin'] : '';?>"/>

</div>
<div class="col-sm-2">
 

 <label for="lastname" class="marginTopBot">Pag-ibig ID No.</label>

 <input oninput="this.value=this.value.toUpperCase()" id="pagibig" required name="pagibig" type="text" class="inputHeight form-control" value="<?php echo isset($_GET['view']) ? $row['pagibig'] : '';?>"/>

</div>
<div class="col-sm-2">
 

 <label for="lastname" class="marginTopBot">Philhealth.</label>

 <input oninput="this.value=this.value.toUpperCase()" id="phil"  name="phil" type="text" class="inputHeight form-control" value="<?php echo isset($_GET['view']) ? $row['philhealth'] : '';?>"/>
 <br/>
</div>
<div class="col-sm-2">
 

 <label for="lastname" class="marginTopBot">PRC ID No.</label>

 <input oninput="this.value=this.value.toUpperCase()" id="prc"  name="prc" type="text" class="inputHeight form-control" value="<?php echo isset($_GET['view']) ? $row['prc'] : '';?>"/>

</div>
<div class="col-sm-12">
  <b><label for="lastname" class="marginTopBot" style="font-size:18px;">Employee's Credentials</label></b>
  
                                        </div>
                                        <div class="col-sm-6">
         
    
         <label for="lastname" class="marginTopBot">Transcript of Records</label>
         <strong class="warning"><?php echo isset($_SESSION['message1']) ? $_SESSION['message1'] : ""; unset($_SESSION['message1']); ?></strong>
         <div class="custom-file">
         <input type="file" class="custom-file-input" name="tor" id="tor" onchange="checkInputs()">
                      <label class="custom-file-label" for="tor">Choose file</label>
                                        </div>
                                        <br/>
</div>
<div class="col-sm-6">


<label for="lastname" class="marginTopBot">PRC Ratings</label>
<strong class="warning"><?php echo isset($_SESSION['message2']) ? $_SESSION['message2'] : ""; unset($_SESSION['message2']); ?></strong>
         <div class="custom-file">
         <input type="file" class="custom-file-input" name="prc_doc" id="prc_doc" onchange="checkInputs()">
                        <label class="custom-file-label" for="prc_doc">Choose file</label>
                                        </div>
                                      
</div>
<div class="col-sm-6">
         
    
         <label for="lastname" class="marginTopBot">Others</label>
         <strong class="warning"><?php echo isset($_SESSION['message3']) ? $_SESSION['message3'] : ""; unset($_SESSION['message3']); ?></strong>
         <div class="custom-file">
         <input type="file" class="custom-file-input" name="other1" id="other1" onchange="checkInputs()">
                      <label class="custom-file-label" for="other1">Choose file</label>
                                        </div>
                                        <br/>
</div>
<div class="col-sm-6">


<label for="lastname" class="marginTopBot">Others</label>
<strong class="warning"><?php echo isset($_SESSION['message4']) ? $_SESSION['message4'] : ""; unset($_SESSION['message4']); ?></strong>
         <div class="custom-file">
         <input type="file" class="custom-file-input" name="other2" id="other2" onchange="checkInputs()">
                      <label class="custom-file-label" for="other2">Choose file</label>
                                        </div>
                                      
</div>
<div class="col-sm-6">


<label for="lastname" class="marginTopBot">Others</label>
<strong class="warning"><?php echo isset($_SESSION['message5']) ? $_SESSION['message5'] : ""; unset($_SESSION['message5']); ?></strong>
         <div class="custom-file">
         <input type="file" class="custom-file-input" name="other3" id="other3" onchange="checkInputs()">
                      <label class="custom-file-label" for="f138File">Choose file</label>
                                        </div>
                                        <br/>
                                        <br/>
                                      
</div>
                                        <br/> 
                                        <br/> 
                                        <br/> 
  <button type="submit" class="btn btn-secondary btn-block" name="<?php echo isset($_GET['view']) ? 'updateteacher' : 'addteacher'; ?>"><?php echo isset($_GET['view']) ? 'Update' : 'Add'?></button>
           </form>
      </div>
    </div>
  </div>
</div>
<br/>
<br/>
  <!-- top tiles -->
  <div class="row" >
    <div class="page-title">
      <div class="title_left">
        <h3><a href="index.php"><i style="font-size:26px" class="fa fa-chevron-circle-left"></i></a> Employee's Information</h3>
      </div>
    </div>
  </div>
  <br />
  <form action='teachersinfo.php' method='POST' id='option'></form>

  <a href="teachersinfo.php?add" title="New" type="button" class="btn btn-secondary text-white"><i class="fas fa-plus-square" style='font-size:24px'></i></a>
  
  <button type="submit" name="delete" title="Delete" class="btn btn-secondary text-white" form="option"><i class="fas fa-minus-square" style='font-size:24px'></i></button>
  <br /><br />
  <!-- /top tiles -->
  <div class="row">
    <div class="col-md-12 col-sm-12 ">
      <div class="x_panel">
        <div class="x_title">
          <h2>Teacher's Information<small></small></h2>
          <ul class="nav navbar-right panel_toolbox">
            <li>
              <a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
            </li>
          </ul>
          <div class="clearfix"></div>
        </div>
        <div class="x_content">
          <table id="datatable" style="width:100%" class="text-center table table-bordered">
            <thead>
              <tr>
                <td></td>
               
                <td>Teacher ID</td>
                <td>Full Name</td>
                
              </tr>
            </thead>
            <tbody>
            <?php
              $sql = "SELECT * FROM tbl_teachers where status = '' ";
              $stmt = $conn->prepare($sql);
              $stmt->execute();
              $result = $stmt->get_result();
              while($row = $result->fetch_assoc()) {
                echo "
                  <tr>
                    <td scope='row'>
                      <div class='text-center'>
                          <label class='radio'>
                            <input type='radio' class='hidden message' name='teacherno' form='option' required value='$row[teacher_no]'>
                            <span class='label'></span>
                          </label>
                      </div>
                    </td>
                    
                    <td>$row[teacher_id]</td>
                    <td>$row[fullname]</td>
                    
                  </tr>";
              }
            ?>
            </tbody>
          </table>
          <br />
        </div>
      </div>
    </div>
  </div>
  <br />
  <?php
   if(isset($_POST['print'])) {
    if(!empty($_POST['teacherno'])) {
      header("location:printteachersinfo.php?teacherno=$_POST[teacherno]");
    } else {
      header("location:teachersmodule.php");
    }
  }
  if(isset($_POST['delete'])) {
    $teacherno = $_POST['teacherno'];
    $sql = "DELETE FROM tbl_teachers WHERE teacher_no = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('i', $teacherno);
    if($stmt->execute()) {
      $_SESSION['toast'] = "Tuition Fee Deleted";
      $_SESSION['toast_code'] = "success";
      header("location:teachersmodule.php");
    } else {
      $_SESSION['toast'] = "Tuition Delete Failed";
      $_SESSION['toast_code'] = "error";
      header("location:teachersmodule.php"); 
    }
  }
  if(isset($_POST['updateteacher'])) {
    $teacherno = $_POST['teacherno'];
    $teacherid = $_POST['teacherid'];
    $lastname = $_POST['lastname'];
    $firstname = $_POST['firstname'];
    $middlename = $_POST['middlename'];
    $stat = $_POST['stat'];
    $fullname = $lastname . ", "  . $firstname . " " . $middlename . " " . $stat;
   
    $dateofbirth = $_POST['dateofbirth'];
    $age = $_POST['age'];
    $placeofbirth = $_POST['placeofbirth'];
    
    $city_text = $_POST['city_text'];
    $resign = $_POST['resign'];
    $sem = $_POST['sem'];
    $houseno = $_POST['houseno'];
    $barangay_text = $_POST['barangay_text'];
    $province_text = $_POST['province_text'];
    $address = $houseno . "" . $barangay_text . ", " . $city_text . ", " . $province_text;
   $ed = $_POST['ed'];
   $crs = $_POST['crs'];
   $resign = $_POST['resign'];
   $rel = $_POST['rel'];
   $civil = $_POST['civil'];
  
$grad = $_POST['grad'];
$pos = $_POST['pos'];
$datehire = $_POST['datehire'];
$rsn = $_POST['rsn'];
$dept = $_POST['dept'];
$postype = $_POST['postype'];
$tl = $_POST['tl'];
$sss = $_POST['sss'];
$tin = $_POST['tin'];
$pagibig = $_POST['pagibig'];
$prc = $_POST['prc'];
$phil = $_POST['phil'];
$school = $_POST['school'];
$perma = $_POST['perma'];
$tor = $_POST['tor'];
$prc_doc = $_POST['prc_doc'];
$other1 = $_POST['other1'];
$other2 = $_POST['other2'];
$other3 = $_POST['other3'];
$major = $_POST['major'];
    $sql = "UPDATE tbl_teachers SET teacher_id = ?, fullname = ?, last_name = ?, first_name = ?, middle_name = ?, ext_name = ?, birthday = ?, age = ?, birthplace = ?, sex = ?, contact_no = ?, house_no = ?,
     educ_level = ?, course = ?, address = ?, religion = ?, civil_status = ?, date_graduated = ?, designation = ?, hired = ?, designation_lvl = ?, department = ?, designation_type = ?, sss = ?, tin = ?, pagibig = ?, prc = ?, teaching_load = ?, philhealth = ?,
     graduate_school = ?, permanency_date = ?, tor = ?, prc_rating = ?, file1 =?, file2 = ?, file3 = ?, major = ? WHERE teacher_no = ? LIMIT 1";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('sssssssisssssssssssssssssssssssssssssi', $teacherid, $fullname, $lastname, $firstname, $middlename, $stat, $dateofbirth, $age, $placeofbirth, $sem, $resign, $houseno, $ed, $crs, $address, $rel, $civil, 
    $grad, $pos, $datehire, $rsn, $dept, $postype, $sss, $tin, $pagibig, $prc, $tl, $phil, $tor, $prc_doc, $other1, $other2, $other3, $major, $teacherno);
    $stmt->execute();
    header("location:teachersmodule.php");
  }
  if(isset($_POST['addteacher'])) {
    $teacherid = $_POST['teacherid'];
    $lastname = $_POST['lastname'];
    $firstname = $_POST['firstname'];
    $middlename = $_POST['middlename'];
    $fullname = $lastname . ", "  . $firstname . " " . $middlename . " " . $stat;
   
    $dateofbirth = $_POST['dateofbirth'];
    $age = $_POST['age'];
    $placeofbirth = $_POST['placeofbirth'];
    $stat = $_POST['stat'];
    $city = $_POST['city'];
    $resign = $_POST['resign'];
    $sem = $_POST['sem'];
    $houseno = $_POST['houseno'];
    $brgy = $_POST['brgy'];
    $province = $_POST['province'];
    $region = $_POST['region'];
    $address = $houseno . " " . $barangay_text . ", " . $city_text . ", " . $province_text;
   $ed = $_POST['ed'];
   $crs = $_POST['crs'];
   $status = $_POST['status'];
   $date_res =  $_POST['date_res'];
   $rel = $_POST['rel'];
   $civil = $_POST['civil'];
  
$grad = $_POST['grad'];
$pos = $_POST['pos'];
$datehire = $_POST['datehire'];
$rsn = $_POST['rsn'];
$dept = $_POST['dept'];
$postype = $_POST['postype'];
$tl = $_POST['tl'];
$sss = $_POST['sss'];
$tin = $_POST['tin'];
$pagibig = $_POST['pagibig'];
$prc = $_POST['prc'];
$phil = $_POST['phil'];
 $prof = $_POST['prof'];
 $prin = $_POST['prin'];
 $img = $_POST['img'];
 $school = $_POST['school'];
 $sep = $_POST['sep'];
 $tor = $_POST['tor'];
 $prc_doc = $_POST['prc_doc'];
 $other1 = $_POST['other1'];
 $other2 = $_POST['other2'];
 $others = $_POST['others'];
 $major = $_POST['major'];
 $perma = $_POST['perma'];
$region = $_POST['region'];
        $sql = "INSERT INTO tbl_teachers (teacher_id, fullname, last_name, first_name, middle_name, birthday, age, birthplace, ext_name, sex, contact_no, house_no, barangay, municipality, province, educ_level, course, address, status, date_resigned , civil_status, religion, date_graduated, designation, hired, designation_lvl, department, designation_type, sss, tin, pagibig, prc, teaching_load, philhealth, reason_of_separation, graduate_school, permanency_date, tor, prc_rating, file1, file2, file3, major, region)
        VALUES ('$teacherid', '$fullname', '$lastname', '$firstname', '$middlename', '$dateofbirth', '$age', '$placeofbirth', '$stat', '$sem', '$resign', '$houseno',  '$brgy', '$city', '$province', '$ed', '$crs', '$address', '$status', '$date_res', '$civil', '$rel', '$grad', '$pos', '$datehire', '$rsn', '$dept', '$postype', '$sss', '$tin', '$pagibig', '$prc', '$tl', '$phil', '$sep', '$school', '$perma', '$tor', '$prc_doc', '$other1', '$other2', '$others', '$major', '$region')";
    $result1 = $conn->query($sql);
   
    if($pos == 'PRINCIPAL'){
      $sql = "INSERT INTO tbl_principal(principal_id, last_name, first_name, middle_name, designation, status, image) VALUES ('$teacherid', '$lastname', '$firstname', '$middlename', '$pos', '$prin', '$img')";
      $result2 = $conn->query($sql);
      $insertData = $conn->query($insert);
    }
    $_SESSION['status'] = "Success";
    $_SESSION['status_code'] = "success";
    $_SESSION['status_message'] = "Employee Information Successfully Inserted";
    header('location:teachersmodule.php');
   
}

   
   
        
  include "footer.php";
  ob_end_flush();
?>
<script  type="text/javascript">
  $('.myDatepicker2').datetimepicker({
      format: 'MM/DD/YYYY'
  });
  $('.dateselect').datepicker({
    format: 'mm/dd/yyyy',
    // startDate: '-3d'
  });
  $(document).ready( function () {
    $('#table_id').DataTable();
  });
  document.addEventListener("DOMContentLoaded", function() {
      var elements = document.getElementsByClassName("message");
      for (var i = 0; i < elements.length; i++) {
          elements[i].oninvalid = function(e) {
              e.target.setCustomValidity("");
              if (!e.target.validity.valid) {
                  e.target.setCustomValidity("Select a Teacher");
              }
          };
          elements[i].oninput = function(e) {
              e.target.setCustomValidity("");
          };
      }
  })
</script>
<script>
   function checkInputs() {
			var input1 = document.getElementById("f138File").value;
			var input2 = document.getElementById("f137File").value;
			var input3 = document.getElementById("psaFile").value;
			var input4 = document.getElementById("pictureFile").value;

			if (input1) {
				document.getElementById("f138upbtn").disabled = false;
			} else {
				document.getElementById("f138upbtn").disabled = true;
			}
			if (input2) {
				document.getElementById("f137upbtn").disabled = false;
			} else {
				document.getElementById("f137upbtn").disabled = true;
			}
			if (input3) {
				document.getElementById("psaupbtn").disabled = false;
			} else {
				document.getElementById("psaupbtn").disabled = true;
			}
			if (input4) {
				document.getElementById("pictureupbtn").disabled = false;
			} else {
				document.getElementById("pictureupbtn").disabled = true;
			}
			if (input1 && input2 && input3 && input4) {
				document.getElementById("upallBtn").disabled = false;
			} else {
				document.getElementById("upallBtn").disabled = true;
			}
		}
    </script>
<script>
$("#tl").hide();

 
$("#postype").on("change", function(){  
    if ($(this).val()=="PERSONNEL")
       $("#tl").show();
      
    else
       $("#tl").hide();
       
});
</script>


<script>
$("#major").hide();

 
$("#ed").on("change", function(){  
    if ($(this).val()=="MASTERS DEGREE")
       $("#major").show();
      
    else
       $("#major").hide();
       
});
</script>
<script>
$("#major").hide();

 
$("#ed").on("change", function(){  
    if ($(this).val()=="MASTERS DEGREE")
       $("#crs").hide();
      
    else
       $("#crs").show();
       
});
</script>

<script>
    function updateAge() {
      var dob = document.getElementById("dateofbirth").value;
      var age = calculateAge(dob);
      document.getElementById("age").value = age;
    }
</script>

<script>
   function getAddress (add){
        var brgy   = $("#brgy").val();
        var city  = $("#city").val();
        var prov = $("#province").val();
        var region = $("#region").val();
        if (add == 1){
            $("#brgy").empty();
            $("#city").empty();
            $("#province").empty();
            $.ajax({
                url:'data6.php',
                method:'GET',
                data:{getProv: "ON", region:region},
                dataType: 'JSON',
                success: function(response){
                    $("#province").append("<option readonly></option>");
                    var len = response.length;
                    for(var i=0; i<len; i++){
                        var province = response[i].province;
                        var str_prov = "<option value='" + province + "'>" + province + "</option>";
                        $("#province").append(str_prov);
                    }
                }
            });
        }
        if (add == 2){
            $("#brgy").empty();
            $("#city").empty();
            $.ajax({
                url:'data6.php',
                method:'GET',
                data:{getCity: "ON", prov:prov},
                dataType: 'JSON',
                success: function(response){
                    $("#city").append("<option readonly></option>");
                    var len = response.length;
                    for(var i=0; i<len; i++){
                        var cityN = response[i].cityN;
                        var str_city = "<option value='" + cityN + "'>" + cityN + "</option>";
                        $("#city").append(str_city);
                    }
                }
            });
        }
        if (add == 3){
            $("#brgy").empty();
            $.ajax({
                url:'data6.php',
                method:'GET',
                data:{getBrgy: "ON", city:city},
                dataType: 'JSON',
                success: function(response){
                    $("#brgy").append("<option readonly></option>");
                    var len = response.length;
                    for(var i=0; i<len; i++){
                        var brgyN = response[i].brgyN;
                        var str_brgy = "<option value='" + brgyN + "'>" + brgyN + "</option>";
                        $("#brgy").append(str_brgy);
                    }
                }
            });
        }
    }
</script>
</html>