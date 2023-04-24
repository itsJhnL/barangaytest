<?php
//session_start();
require_once '../connection.php';

//Add function
if(isset($_POST['save_staff']))
{
  $firstname = mysqli_real_escape_string($con, $_POST['firstname']);
  $lastname = mysqli_real_escape_string($con, $_POST['lastname']);
  $address = mysqli_real_escape_string($con, $_POST['address']);
  $contactNo = mysqli_real_escape_string($con, $_POST['contactNo']);
  $gender = mysqli_real_escape_string($con, $_POST['gender']);
  $username = mysqli_real_escape_string($con, $_POST['username']);
  $password = mysqli_real_escape_string($con, $_POST['password']);
  $middlename = mysqli_real_escape_string($con, $_POST['middlename']);

  //quert to add the new data
  $query = "INSERT INTO `tblstaff`(`firstname`, `lastname`, `address`, `contactNo`, `gender`, `username`, `password`, `middlename`) VALUES 
  (
  '$firstname',
  '$lastname',
  '$address',
  '$contactNo',
  '$gender',
  '$username',
  '$password',
  '$middlename')";

  $query_run = mysqli_query($con, $query);

  if($query_run)
  {
      //$_SESSION['messageCreate'] = " Created Successfully";
      header("Location: staff.php");
      exit(0);
  }
  else
  {
      //$_SESSION['messageCreate'] = " Not Created";
      header("Location: staff.php");
      exit(0);
  }
}
  //Edit function
  if(isset($_POST['update_staff'])){
    $user_id = mysqli_real_escape_string($con, $_POST['id']);
    $firstname = mysqli_real_escape_string($con, $_POST['firstname']);
    $lastname = mysqli_real_escape_string($con, $_POST['lastname']);
    $address = mysqli_real_escape_string($con, $_POST['address']);
    $contactNo = mysqli_real_escape_string($con, $_POST['contactNo']);
    $gender = mysqli_real_escape_string($con, $_POST['gender']);
    $username = mysqli_real_escape_string($con, $_POST['username']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $middlename = mysqli_real_escape_string($con, $_POST['middlename']);
 
    // query to update the data
    $query_run = mysqli_query($con, "UPDATE `tblstaff` SET `firstname` = '$firstname', `lastname` = '$lastname', `address` = '$address', `contactNo` = '$contactNo', `gender` = '$gender', `username` = '$username', `password` = '$password', `middlename` = '$middlename' WHERE `id` = '$user_id'");

    if($query_run)
    {
        header("Location: staff.php");
        exit(0);
    }
  }
  //Delete function
  if(isset($_POST['delete_staff']))
  {
    $id = mysqli_real_escape_string($con, $_POST['id']);

    // query to delete a record
    $query = "DELETE FROM tblstaff WHERE id=$id";

    if (mysqli_query($con, $query)) {
      header("Location: staff.php");
        exit(0);
    }
  }

?>