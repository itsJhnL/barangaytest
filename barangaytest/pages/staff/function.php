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
  $province = mysqli_real_escape_string($con, $_POST['province']);
  $City = mysqli_real_escape_string($con, $_POST['City']);
  $barangay = mysqli_real_escape_string($con, $_POST['barangay']);
  $houseNo = mysqli_real_escape_string($con, $_POST['houseNo']);
  $purokNo = mysqli_real_escape_string($con, $_POST['purokNo']);

  //quert to add the new data
  $query = "INSERT
   INTO `tblstaff`(`firstname`, `lastname`, `province`, `City`, `barangay`, `houseNo`, `purokNo`, `contactNo`, `gender`, `username`, `password`, `middlename`) VALUES 
  (
  '$firstname',
  '$lastname',
  '$province',
  '$City',
  '$barangay',
  '$houseNo',
  '$purokNo',
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
    $province = mysqli_real_escape_string($con, $_POST['province']);
    $City = mysqli_real_escape_string($con, $_POST['City']);
    $barangay = mysqli_real_escape_string($con, $_POST['barangay']);
    $houseNo = mysqli_real_escape_string($con, $_POST['houseNo']);
    $purokNo = mysqli_real_escape_string($con, $_POST['purokNo']);
 
    // query to update the data
    $query_run = mysqli_query($con, "UPDATE `tblstaff` SET `firstname` = '$firstname', `lastname` = '$lastname', `province` = '$province', `City` = '$City', `barangay` = '$barangay', `houseNo` = '$houseNo', `purokNo` = '$purokNo', `contactNo` = '$contactNo', `gender` = '$gender', `username` = '$username', `password` = '$password', `middlename` = '$middlename' WHERE `id` = '$user_id'");


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


  /* Address Combo Box function */
  $str = "";
	if(isset($_POST['type']) && $_POST["type"] == "City"){

    $sql = "SELECT DISTINCT citytown FROM tbl_barangays WHERE province = '{$_POST['province']}'";

		$query = mysqli_query($con,$sql) or die("Query Unsuccessful.");

		$str = "";
		while($row = mysqli_fetch_assoc($query)){
		  $str .= "<option value='{$row['citytown']}'>{$row['citytown']}</option>";
		}
    echo $str;

		
	}else if(isset($_POST['type']) && $_POST["type"] == "Barangay"){

    $sql = "SELECT DISTINCT barangay FROM tbl_barangays WHERE CityTown = '{$_POST['CityTown']}'";

		$query = mysqli_query($con,$sql) or die("Query Unsuccessful.");

		$str = "";
		while($row = mysqli_fetch_assoc($query)){
		  $str .= "<option value='{$row['barangay']}'>{$row['barangay']}</option>";
		}
    echo $str;

		
	}else if(isset($_POST['type'])){

		$sql = "SELECT distinct province from tbl_barangays order by province";

		$query = mysqli_query($con,$sql) or die("Query Unsuccessful.");

		
		while($row = mysqli_fetch_assoc($query)){
		  $str .= "<option value='{$row['province']}'>{$row['province']}</option>";
		}
    echo $str;
	}

?>