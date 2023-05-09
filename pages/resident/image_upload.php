<?php
    $folderPath = 'images/';
    $image_parts = explode(";base64,", $_POST['image']);
    $image_type_aux = explode("image/", $image_parts[0]);
    $image_type = $image_type_aux[1];
    $image_base64 = base64_decode($image_parts[1]);
    $file = $folderPath . uniqid() . '.png';
    file_put_contents($file, $image_base64);
?>

<?php

if(isset($_POST['save_resident']))
{
    $capturedImage = mysqli_real_escape_string($con, $_FILES['captured_image_data']);

    $query = "INSERT INTO `tblresident` (`captured_image_data`) VALUES ($capturedImage)";

    $query_run = mysqli_query($con, $query);
}

?>