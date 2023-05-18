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
  $query = "INSERT
   INTO `tblstaff`(`firstname`, `lastname`, `address`, `contactNo`, `gender`, `username`, `password`, `middlename`) VALUES 
  (
  '$firstname',
  '$lastname',
  '$address',
  '$contactNo',
  '$gender',
  '$username',
  '$password',
  '$middlename')";

  /* if(isset($_SESSION['role'])){
    $action = 'Update Staff with name of '.$firstname;
    $iquery = "INSERT INTO tbl_logs (usertype,date,remarks) values ('".$_SESSION['role']."', NOW(), '".$action."')";
    mysqli_query($con, $iquery);
  } */

  $date = date_default_timezone_set('Asia/Tokyo'); 
  $currentDateTime = date('F j, Y - g:i:A');

  $insert = 'Added Staff with name of '.$firstname ." " .$lastname;
  
  $query1 = "INSERT INTO `tbl_logs` (`usertype`, `remarks`, `created_at`) VALUES ('Admin', '$insert', '$currentDateTime')";
  mysqli_query($con, $query1);
  

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


    $date = date_default_timezone_set('Asia/Tokyo'); 
    $currentDateTime = date('F j, Y - g:i:A');
  
    $insert = 'Update Staff with name of '.$firstname ." " .$lastname;
    
    $query1 = "INSERT INTO `tbl_logs` (`usertype`, `remarks`, `created_at`) VALUES ('Admin', '$insert', '$currentDateTime')";
    mysqli_query($con, $query1);

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
    $firstname = mysqli_real_escape_string($con, $_POST['firstname']);
    $lastname = mysqli_real_escape_string($con, $_POST['lastname']);

    // query to delete a record
    $query = "DELETE FROM tblstaff WHERE id=$id";

    $date = date_default_timezone_set('Asia/Tokyo'); 
    $currentDateTime = date('F j, Y - g:i:A');
  
    $insert = "Deleted Staff with name of ".$firstname ." " .$lastname;
    
    $query1 = "INSERT INTO `tbl_logs` (`usertype`, `remarks`, `created_at`) VALUES ('Admin', '$insert', '$currentDateTime')";
    mysqli_query($con, $query1);

    if (mysqli_query($con, $query)) {
      header("Location: staff.php");
        exit(0);
    }
  }

?>