<?php include '../connection.php'; ?>

<?php
   if(isset($_POST['id'])) {
    if(!empty($_POST['id'])) {
      header("location:cert/goodmoral_form.php?id=$_POST[id]");
    } else {
      header("location:goodmoral.php");
    }
  }
?>