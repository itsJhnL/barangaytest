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
  $username = mysqli_real_escape_string($con, $_POST['username']);
  $password = mysqli_real_escape_string($con, $_POST['password']);
  $age = mysqli_real_escape_string($con, $_POST['age']);
  $birthdate = mysqli_real_escape_string($con, $_POST['birthdate']);
  $houseNo = mysqli_real_escape_string($con, $_POST['houseNo']);
  $purok = mysqli_real_escape_string($con, $_POST['purok']);
  $barangay = mysqli_real_escape_string($con, $_POST['barangay']);
  $city = mysqli_real_escape_string($con, $_POST['city']);
  $province = mysqli_real_escape_string($con, $_POST['province']);
  $contactNo = mysqli_real_escape_string($con, $_POST['contactNo']);
  $middlename = mysqli_real_escape_string($con, $_POST['middlename']);

  //quert to add the new data
  $query = "INSERT INTO `tblresident` (`firstname`, `lastname`, `gender`, `age`, `middlename`, `suffixname`, `birthdate`, `houseNo`, `purok`, `barangay`, `city`, `province`, `contactNo`,`username`, `password`) VALUES 
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
  '$username',
  '$password')";

  $query_run = mysqli_query($con, $query);

  if($query_run)
  {
      //$_SESSION['messageCreate'] = " Created Successfully";
      header("Location: resident.php");
      exit(0);
  }
  else
  {
      //$_SESSION['messageCreate'] = " Not Created";
      header("Location: resident.php");
      exit(0);
  }
}
  //Edit function
  if(isset($_POST['update_resident'])){
    $user_id = mysqli_real_escape_string($con, $_POST['id']);
    $firstname = mysqli_real_escape_string($con, $_POST['firstname']);
    $lastname = mysqli_real_escape_string($con, $_POST['lastname']);
    $address = mysqli_real_escape_string($con, $_POST['address']);
    $contactNo = mysqli_real_escape_string($con, $_POST['contactNo']);
    $gender = mysqli_real_escape_string($con, $_POST['gender']);
    $username = mysqli_real_escape_string($con, $_POST['username']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $status = mysqli_real_escape_string($con, $_POST['status']);
    $middlename = mysqli_real_escape_string($con, $_POST['middlename']);
 
    // query to update the data
    $query_run = mysqli_query($con, "UPDATE `tblresident` SET `firstname` = '$firstname', `lastname` = '$lastname', `address` = '$address', `contactNo` = '$contactNo', `gender` = '$gender', `username` = '$username', `password` = '$password', `status` = '$status', `middlename` = '$middlename' WHERE `id` = '$user_id'");

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