<?php

include 'connection.php';

if(isset($_GET['deleteid'])){
    $id = $_GET['deleteid'];

    $sql = "DELETE from `tblstaff` where id=$id";
    $result = mysqli_query($con,$sql);
    if($result){
        header ("location: index.php") or die(mysqli_error($con));
    }
}

?>