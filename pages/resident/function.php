<?php
//session_start();
require_once '../connection.php';

//Add function
if(isset($_POST['save_resident']))
{
  $firstname = mysqli_real_escape_string($con, $_POST['firstname']);
  $lastname = mysqli_real_escape_string($con, $_POST['lastname']);
  $contactNo = mysqli_real_escape_string($con, $_POST['contactNo']);
  $suffixname = mysqli_real_escape_string($con, $_POST['suffixname']);
  $gender = mysqli_real_escape_string($con, $_POST['gender']);
  $age = mysqli_real_escape_string($con, $_POST['age']);
  $birthdate = mysqli_real_escape_string($con, $_POST['birthdate']);
  $houseNo = mysqli_real_escape_string($con, $_POST['houseNo']);
  $purok = mysqli_real_escape_string($con, $_POST['purok']);
  $barangay = mysqli_real_escape_string($con, $_POST['barangay']);
  $city = mysqli_real_escape_string($con, $_POST['city']);
  $province = mysqli_real_escape_string($con, $_POST['province']);
  $middlename = mysqli_real_escape_string($con, $_POST['middlename']);
  $emailAddress = mysqli_real_escape_string($con, $_POST['emailAddress']);
  $motherName = mysqli_real_escape_string($con, $_POST['motherName']);
  $fatherName = mysqli_real_escape_string($con, $_POST['fatherName']);
  $motherContactNo = mysqli_real_escape_string($con, $_POST['motherContactNo']);
  $fatherContactNo = mysqli_real_escape_string($con, $_POST['fatherContactNo']);
  $height = mysqli_real_escape_string($con, $_POST['height']);
  $weight = mysqli_real_escape_string($con, $_POST['weight']);
  $nationality = mysqli_real_escape_string($con, $_POST['nationality']);
  $civilStatus = mysqli_real_escape_string($con, $_POST['civilStatus']);
  $spouseName = mysqli_real_escape_string($con, $_POST['spouseName']);
  $childrenName = mysqli_real_escape_string($con, $_POST['childrenName']);
  $course = mysqli_real_escape_string($con, $_POST['course']);
  $CSchoolName = mysqli_real_escape_string($con, $_POST['CSchoolName']);
  $CSchoolAddress = mysqli_real_escape_string($con, $_POST['CSchoolAddress']);
  $CYearAttended = mysqli_real_escape_string($con, $_POST['CYearAttended']);
  $HSchoolName = mysqli_real_escape_string($con, $_POST['HSchoolName']);
  $HSchoolAddress = mysqli_real_escape_string($con, $_POST['HSchoolAddress']);
  $HYearAttended = mysqli_real_escape_string($con, $_POST['HYearAttended']);
  $ESchoolName = mysqli_real_escape_string($con, $_POST['ESchoolName']);
  $ESchoolAddress = mysqli_real_escape_string($con, $_POST['ESchoolAddress']);
  $EYearAttended = mysqli_real_escape_string($con, $_POST['EYearAttended']);
  $captured_image_data = mysqli_real_escape_string($con, $_POST['captured_image_data']);

  //quert to add the new data
  $query = "INSERT INTO `tblresident` (`firstname`, `lastname`, `gender`, `age`, `middlename`, `suffixname`, `birthdate`, `houseNo`, `purok`, `barangay`, `city`, `province`, `contactNo`, `emailAddress`, `motherName`, `fatherName`, `motherContactNo`, `fatherContactNo`, `height`, `weight`, `nationality`, `civilStatus`, `spouseName`, `childrenName`, `course`, `CSchoolName`, `CYearAttended`, `HSchoolName`, `HSchoolAddress`, `HYearAttended`, `ESchoolName`, `ESchoolAddress`, `EYearAttended`, `captured_image_data`) VALUES 
  (
  '$firstname',
  '$lastname',
  '$gender',
  '$age',
  '$middlename',
  '$suffixname',
  '$birthdate',
  '$houseNo',
  '$purok',
  '$barangay',
  '$city',
  '$province',
  '$contactNo',
  '$emailAddress',
  '$motherName',
  '$fatherName',
  '$motherContactNo',
  '$fatherContactNo',
  '$height',
  '$weight',
  '$nationality',
  '$civilStatus',
  '$spouseName',
  '$childrenName',
  '$course',
  '$CSchoolName',
  '$CYearAttended',
  '$HSchoolName',
  '$HSchoolAddress',
  '$HYearAttended',
  '$ESchoolName',
  '$ESchoolAddress',
  '$EYearAttended',
  '$captured_image_data')";

  $query_run = mysqli_query($con, $query);

  if($query_run)
  {
      //$_SESSION['messageCreate'] = " Created Successfully";
      header("Location: resident.php");
      exit(0);
  }
}
  //Edit function
  if(isset($_POST['update_resident'])){
    $user_id = mysqli_real_escape_string($con, $_POST['id']);
    $firstname = mysqli_real_escape_string($con, $_POST['firstname']);
    $lastname = mysqli_real_escape_string($con, $_POST['lastname']);
    $houseNo = mysqli_real_escape_string($con, $_POST['houseNo']);
    $purok = mysqli_real_escape_string($con, $_POST['purok']);
    $barangay = mysqli_real_escape_string($con, $_POST['barangay']);
    $city = mysqli_real_escape_string($con, $_POST['city']);
    $province = mysqli_real_escape_string($con, $_POST['province']);
    $contactNo = mysqli_real_escape_string($con, $_POST['contactNo']);
    $gender = mysqli_real_escape_string($con, $_POST['gender']);
    $middlename = mysqli_real_escape_string($con, $_POST['middlename']);
 
    // query to update the data
    $query_run = mysqli_query($con, "UPDATE `tblresident` SET `firstname` = '$firstname', `lastname` = '$lastname', `houseNo` = '$houseNo', `purok` = '$purok', `barangay` = '$barangay', `city` = '$city', `province` = '$province', `contactNo` = '$contactNo', `gender` = '$gender', `middlename` = '$middlename' WHERE `id` = '$user_id'");

    if($query_run)
    {
        header("Location: resident.php");
        exit(0);
    }
  }
  //Delete function
  if(isset($_POST['delete_resident']))
  {
    $id = mysqli_real_escape_string($con, $_POST['id']);

    // query to delete a record
    $query = "DELETE FROM tblresident WHERE id=$id";

    if (mysqli_query($con, $query)) {
      header("Location: resident.php");
        exit(0);
    }
  }

?>