<?php
  include ('../connection.php');

if(isset($_POST['add_official']))
{


  if(isset($_FILES["fileImg"]["name"]))
  {
    $id = $_POST["id"];

    $src = $_FILES["fileImg"]["tmp_name"];
    $imageName = $_FILES["fileImg"]["name"];

    $target = "signature/" . $imageName;

    move_uploaded_file($src, $target);

    $query = "UPDATE tblofficials SET signature = '$imageName' WHERE id = $id";
    mysqli_query($con, $query);

  }

  $position = mysqli_real_escape_string($con, $_POST['position']);
  $lastname = mysqli_real_escape_string($con, $_POST['lastname']);
  $firstname = mysqli_real_escape_string($con, $_POST['firstname']);
  $middlename = mysqli_real_escape_string($con, $_POST['middlename']);
  $contactNo = mysqli_real_escape_string($con, $_POST['contactNo']);
  $address = mysqli_real_escape_string($con, $_POST['address']);
  $start_date = mysqli_real_escape_string($con, $_POST['start_date']);
  $end_date = mysqli_real_escape_string($con, $_POST['end_date']);
  $status = mysqli_real_escape_string($con, $_POST['status']);
  $email = mysqli_real_escape_string($con, $_POST['email']);
  $gender = mysqli_real_escape_string($con, $_POST['gender']);
  $signature = mysqli_real_escape_string($con, $_POST['signature']);

  // query to insert the data
  $query = "INSERT INTO `tblofficials` (`position`, `lastname`, `firstname`, `middlename`, `contactNo`, `address`, `start_date`, `end_date`, `status`,  `email`,`gender`, `signature`)
   VALUES 
    ('$position',
    '$lastname',
    '$firstname',
    '$middlename',
    '$contactNo',
    '$address',
    '$start_date',
    '$end_date',
    '$status',
    '$email',
    '$gender',
    '$signature')";

  $query_run = mysqli_query($con, $query);

  if($query_run)
  {
      //$_SESSION['messageCreate'] = " Created Successfully";
      header("Location: officials.php");
      exit(0);
  } else {
    header("Location: officials.php");
    exit(0);
  }
  $con->close();
}

//Edit function
if(isset($_POST['update_official']))
{
  $id = mysqli_real_escape_string($con, $_POST['id']);
  $position = mysqli_real_escape_string($con, $_POST['position']);
  $lastname = mysqli_real_escape_string($con, $_POST['lastname']);
  $firstname = mysqli_real_escape_string($con, $_POST['firstname']);
  $middlename = mysqli_real_escape_string($con, $_POST['middlename']);
  $contactNo = mysqli_real_escape_string($con, $_POST['contactNo']);
  $address = mysqli_real_escape_string($con, $_POST['address']);
  $start_date = mysqli_real_escape_string($con, $_POST['start_date']);
  $end_date = mysqli_real_escape_string($con, $_POST['end_date']);
  $status = mysqli_real_escape_string($con, $_POST['status']);
  $email = mysqli_real_escape_string($con, $_POST['email']);
  $gender = mysqli_real_escape_string($con, $_POST['gender']);

  // query to update the data
  $query_run = mysqli_query($con, "UPDATE `tblofficials` SET `position` = '$position', `lastname` = '$lastname', `firstname` = '$firstname',  `middlename` = '$middlename', `contactNo` = '$contactNo', `email` = '$email',  `address` = '$address', `start_date` = '$start_date', `end_date` = '$end_date', `status` = '$status', `email` = '$email', `gender` = '$gender' WHERE `id` = '$id'") or die(mysqli_error());

  if($query_run)
  {
      header("Location: officials.php");
      exit(0);
  }
  $con->close();
}
//Delete function
if(isset($_POST['delete_official']))
{
  $id = mysqli_real_escape_string($con, $_POST['id']);

  // query to delete a record
  $query = "DELETE FROM tblofficials WHERE id=$id";

  if (mysqli_query($con, $query)) {
    header("Location: officials.php");
      exit(0);
  }
}

// Active function
if(isset($_POST['Active'])) {
  $id = $_POST['id'];
  $status = "Active";
    // query to update the data
    $sql = "UPDATE tblofficials SET status = '$status' WHERE id = '$id'";
    if($result2 = $con->query($sql)) {
      header("location:officials.php");
  }
}

// Restore function
if(isset($_POST['Active']))
{
  $id = $_POST['id'];

  $position = mysqli_real_escape_string($con, $_POST['position']);
  $lastname = mysqli_real_escape_string($con, $_POST['lastname']);
  $firstname = mysqli_real_escape_string($con, $_POST['firstname']);
  $middlename = mysqli_real_escape_string($con, $_POST['middlename']);
  $contactNo = mysqli_real_escape_string($con, $_POST['contactNo']);
  $address = mysqli_real_escape_string($con, $_POST['address']);
  $start_date = mysqli_real_escape_string($con, $_POST['start_date']);
  $end_date = mysqli_real_escape_string($con, $_POST['end_date']);
  $status = mysqli_real_escape_string($con, $_POST['status']);
  $email = mysqli_real_escape_string($con, $_POST['email']);
  $gender = mysqli_real_escape_string($con, $_POST['gender']);

  $query_run = "INSERT INTO `tblofficials` (`position`, `lastname`, `firstname`, `middlename`, `contactNo`, `address`, `start_date`, `end_date`, `status`,  `email`,`gender`)
   VALUES 
    ('$position',
    '$lastname',
    '$firstname',
    '$middlename',
    '$contactNo',
    '$address',
    '$start_date',
    '$end_date',
    '$status',
    '$email',
    '$gender')";
    
    if($result2 = $con->query($query_run)) {
      header("Location: officials.php");
    }
}

// Restore delete function
if(isset($_POST['Active']))
{
  $id = mysqli_real_escape_string($con, $_POST['id']);

  // query to delete a record
  $query = "DELETE FROM tbl_archives WHERE id=$id";

  if (mysqli_query($con, $query)) {
    header("Location: officials.php");
      exit(0);
  }
}

// Inactive function
if(isset($_POST['Inactive'])) {
  $id = $_POST['id'];
  $status = "Inactive";
  // query to update the data
  $sql = "UPDATE tblofficials SET status = '$status' WHERE id = '$id'";

  // query to delete a record
  $query = "DELETE FROM tblofficials WHERE id=$id";
  if($result2 = $con->query($query)) {
    header("location:officials.php");
  }
}


// Archive function

if(isset($_POST['Inactive']))
{
  $id = $_POST['id'];

  $position = mysqli_real_escape_string($con, $_POST['position']);
  $lastname = mysqli_real_escape_string($con, $_POST['lastname']);
  $firstname = mysqli_real_escape_string($con, $_POST['firstname']);
  $middlename = mysqli_real_escape_string($con, $_POST['middlename']);
  $contactNo = mysqli_real_escape_string($con, $_POST['contactNo']);
  $address = mysqli_real_escape_string($con, $_POST['address']);
  $start_date = mysqli_real_escape_string($con, $_POST['start_date']);
  $end_date = mysqli_real_escape_string($con, $_POST['end_date']);
  $status = mysqli_real_escape_string($con, $_POST['status']);
  $email = mysqli_real_escape_string($con, $_POST['email']);
  $gender = mysqli_real_escape_string($con, $_POST['gender']);
  $reason = mysqli_real_escape_string($con, $_POST['reason']);

  $query_run = "INSERT INTO `tbl_archives` (`position`, `lastname`, `firstname`, `middlename`, `contactNo`, `address`, `start_date`, `end_date`, `status`,  `email`, `gender`, `reason`)
   VALUES 
    ('$position',
    '$lastname',
    '$firstname',
    '$middlename',
    '$contactNo',
    '$address',
    '$start_date',
    '$end_date',
    '$status',
    '$email',
    '$gender',
    '$reason')";
    
    if($result2 = $con->query($query_run)) {
      header("Location: officials.php");
    }
}

// Archive delete function
if(isset($_POST['delete_official_archive']))
{
  $id = mysqli_real_escape_string($con, $_POST['id']);

  // query to delete a record
  $query = "DELETE FROM tbl_archives WHERE id=$id";

  if (mysqli_query($con, $query)) {
    header("Location: archive.php");
      exit(0);
  }
}

// End Term function

if(isset($_POST['EndTerm']))
{
  $id = $_POST['id'];

  $position = mysqli_real_escape_string($con, $_POST['position']);
  $lastname = mysqli_real_escape_string($con, $_POST['lastname']);
  $firstname = mysqli_real_escape_string($con, $_POST['firstname']);
  $middlename = mysqli_real_escape_string($con, $_POST['middlename']);
  $contactNo = mysqli_real_escape_string($con, $_POST['contactNo']);
  $address = mysqli_real_escape_string($con, $_POST['address']);
  $start_date = mysqli_real_escape_string($con, $_POST['start_date']);
  $end_date = mysqli_real_escape_string($con, $_POST['end_date']);
  $status = mysqli_real_escape_string($con, $_POST['status']);
  $email = mysqli_real_escape_string($con, $_POST['email']);
  $gender = mysqli_real_escape_string($con, $_POST['gender']);
  $reason = mysqli_real_escape_string($con, $_POST['reason']);

  $query_run = "INSERT INTO `tbl_archives` (`position`, `lastname`, `firstname`, `middlename`, `contactNo`, `address`, `start_date`, `end_date`, `status`,  `email`, `gender`, `reason`)
   VALUES 
    ('$position',
    '$lastname',
    '$firstname',
    '$middlename',
    '$contactNo',
    '$address',
    '$start_date',
    '$end_date',
    '$status',
    '$email',
    '$gender',
    '$reason')";
    
  if($result2 = $con->query($query_run)) {
    header("Location: officials.php");
  }
}

// End Term delete function
if(isset($_POST['EndTerm']))
{
  $id = mysqli_real_escape_string($con, $_POST['id']);

  // query to delete a record
  $query = "DELETE FROM tblofficials WHERE id=$id";

  if (mysqli_query($con, $query)) {
    header("Location: officials.php");
      exit(0);
  }
}

?>