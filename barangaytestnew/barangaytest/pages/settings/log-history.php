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
    <h1 class="my-2">Log History</h1>
    <hr>
      <div class="card d.flex">
        <div class="card-header">
            
            
            <!-- search bar -->
            <div class="col-4  ms-auto">
              <input class="form-control mr-sm-2" type="search" placeholder="Type to search" aria-label="Search" aria-describeby="btnNavbarSearch" id="myInput" onkeyup="myFunction()">
            </div>
        </div>
          
        <div class="card-body">
          <table class="table table-bordered table-hover table-striped">
            <thead>
              <tr class="col text-center">
                <th class="col-sm-1">ID</th>
                <th class="col-sm-1">User</th>
                <th class="col-sm-3">Remarks</th>
                <th class="col-sm-3">Timestamp</th>
                <th class="col-sm-4">Address</th>
              
              </tr>
            </thead>
            <tbody>
            <?php
                $query = mysqli_query($con, "SELECT * , concat(firstname,' ',lastname) as fullname FROM tbl_logs;");
                while($row = mysqli_fetch_array($query))
                {
                  echo '
                  <tr>
                    <td>'.$row['id'].'</td>
                    <td>'.$row['usertype'].'</td>
                    <td>'.$row['remarks'].'</td>
                    <td>'.$row['fullname'].'</td>
                    <td>'.$row['timestamp'].'</td>
                    <td>'.$row['address'].'</td>
                    </tr>
                  ';
                }

            ?>
              
            </tbody>
          </table>
        </div>
        
      </div>
    </div>
  </div>
</div>


