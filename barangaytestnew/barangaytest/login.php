<!DOCTYPE html>
<html lang="en">
    <?php
    session_start();
    ?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/a26cd4790f.js" crossorigin="anonymous"></script>

    
    
    <link rel="stylesheet" href="includes/assets/css/login.css" />
    <title>Barangay Information System</title>  
</head>
<body>
    
    <div class="container" style="position: sticky">
        <form action="" method="POST">
            <div class="card">
                <img src="includes/assets/img/talavera_logo.png" alt="">
                <!-- <p>Barangay Information System</p> -->
                
                <div class="input-field">
                    <input type="text" name="username" autocomplete="off" required>
                    <span>Username</span>
                </div>

                <div class="input-field">
                    <input type="text" name="password" autocomplete="off" required>
                    <span>Password</span>
                </div>
                
            </div>

            <div class="btn">
                <button type="submit" name="LogIn" class="login">Log in</button>
            </div>
        </form>
    </div>
    
</body>
</html>



<?php

//function.php and database.php are now together
//but this statement will be read first before the next statement of database.php
include_once("pages/connection.php");

if(isset($_POST['LogIn'])) {

    // Retrieve user input //Kapag na detect na ni login, gagawin nya yung nasa loob ng curley braces {}
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Query the database
    $admin = mysqli_query($con, "SELECT * FROM tbluser WHERE username='$username' AND password='$password' and user_type = 'administrator' ");
    $result_admin = mysqli_num_rows($admin);

    $staff = mysqli_query($con, "SELECT * FROM tblstaff WHERE username='$username' AND password='$password'");
    $result_staff = mysqli_num_rows($staff);

    /* $resident = mysqli_query($con, "SELECT * FROM tblresident WHERE username='$username' AND password='$password'");
    $result_resident = mysqli_num_rows($resident); */

    // Check the query result
    if ($result_admin > 0) 
    {

        while($row = mysqli_fetch_array($admin))
        {
            $_SESSION['role'] = "administrator";
            $_SESSION['userid'] = $row['id'];
            $_SESSION['username'] = $row['username'];
        }
        // if valid login credentials go to
        header('Location: pages/dashboard/dashboard.php');
    }

    elseif ($result_staff > 0)
    {

        while($row = mysqli_fetch_array($staff))
        {
            $_SESSION['role'] = "staff";
            $_SESSION['userid'] = $row['id'];
            $_SESSION['username'] = $row['username'];
        }
        //if valid login credentials go to
        header('Location: includes/staff/dashboard.php');
    }
    elseif ($result_resident > 0)
    {

        while($row = mysqli_fetch_array($resident))
        {
            $_SESSION['role'] = "resident";
            $_SESSION['userid'] = $row['id'];
            $_SESSION['username'] = $row['username'];
        }
        //if valid login credentials go to
        header('Location: includes/resident/dashboard.php');
    }
    else {
        header('Location: login.php');
    }

    if ($result = 0){
        echo "the";
    }
}

?>

