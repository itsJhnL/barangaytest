<?php 

include ('../connection.php');



?>


<?php
include '../../includes/header.php';
include '../../includes/scripts.php';
?>

<!-- Card content -->
<div class="container px-4">
  <div class="row">
    <div class="col-md-12">
    <h1 class="my-2">User Account</h1>
    <hr>
      <div class="card d.flex">
        <div class="card-header">
          <span class="row">
            <div class="col">
              <h4>Administrator</h4>
            </div>
            <!-- search bar -->
            <div class="col-4  ms-auto">
              <input class="form-control mr-sm-2" type="search" placeholder="Type to search" aria-label="Search" aria-describeby="btnNavbarSearch" id="myInput" onkeyup="myFunction()">
            </div>
          </span>
        </div>
              
        <div class="card-body">
          <table class="table table-bordered table-hover table-striped">
            <thead>
              <tr class="col text-center">
                <th class="col">ID</th>
                <th class="col">Username</th>
                <th class="col">Password</th>
                <th class="col">Option</th>
              
              </tr>
            </thead>
            <tbody>
            <?php
              $query = mysqli_query($con, "SELECT *  FROM tbluser;");
              while($row = mysqli_fetch_array($query))
              {
                echo '
                <tr class="text-center">
                  <td>'.$row['id'].'</td>
                  <td>'.$row['username'].'</td>
                  <td>'.$row['password'].'</td>
                  <td>
                  
                ';?>
                    <form action="function.php" method="POST" class="d-inline">
                    <button type="button" class="button-color btn btn-sm" title="Edit" data-bs-toggle="modal" data-bs-target="#admin<?php echo $row['id']; ?>">Edit <i class="fa-solid fa-pen-to-square" aria-hidden="true"></i></button>
                    </form>
                  </td>
                </tr>
              <?php
              include 'admin-edit.php'; 
              }
            ?>
            </tbody>
          </table>
        </div>
      </div>
      <div class="card d.flex">
        <div class="card-header">
          <span class="row">
            <div class="col">
              <h4>Staff</h4>
            </div>
            <!-- search bar -->
            <div class="col-4  ms-auto">
              <input class="form-control mr-sm-2" type="search" placeholder="Type to search" aria-label="Search" aria-describeby="btnNavbarSearch" id="myInput" onkeyup="myFunction()">
            </div>
          </span>
        </div>
          
        <div class="card-body">
          <table class="table table-bordered table-hover table-striped">
            <thead>
              <tr class="col text-center">
                <th class="col">ID</th>
                <th class="col">Name</th>
                <th class="col">Username</th>
                <th class="col">Password</th>
                <th class="col">Option</th>
              
              </tr>
            </thead>
            <tbody>
            <?php
                $query = mysqli_query($con, "SELECT * , concat(firstname,' ',lastname) as fullname FROM tblstaff;");
                while($row = mysqli_fetch_array($query))
                {
                  echo '
                  <tr class="text-center">
                    <td>'.$row['id'].'</td>
                    <td>'.$row['fullname'].'</td>
                    <td>'.$row['username'].'</td>
                    <td>'.$row['password'].'</td>
                    <td>
                    
                  ';?>
                        <form action="function.php" method="POST" class="d-inline">
                            <button type="button" class="button-color btn btn-sm" title="Edit" data-bs-toggle="modal" data-bs-target="#Edit_User<?php echo $row['id']; ?>">Edit <i class="fa-solid fa-pen-to-square" aria-hidden="true"></i></button>
                        </form>
                    </td>
                 </tr>
                <?php
                include 'user-edit.php'; 
                }
                ?>
                    
            
              
            </tbody>
          </table>
        </div>
        
      </div>
    </div>
  </div>
</div>


