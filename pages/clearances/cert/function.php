<?php include '../connection.php'; ?>

<?php
  if(isset($_POST['id'])) {
    if(!empty($_POST['id'])) {
      header("location:cert/indigency_form.php?id=$_POST[id]");
    } else {
      header("location:indigency.php");
    }
  }
?>