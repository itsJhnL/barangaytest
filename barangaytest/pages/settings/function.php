<?php 

    include '../connection.php';


    if(isset($_POST['update_bio']))
    {
        $about = mysqli_real_escape_string($con, $_POST['about']);

        $query = mysqli_query($con, "INSERT INTO `dashboard` (`about`) VALUES ($about)");

        $query_run = mysqli_query($con, $query);

        if($query_run)
        {
            //$_SESSION['messageCreate'] = " Created Successfully";
            header("Location: dashboard.php");
            exit(0);
        
        }

    }
?>