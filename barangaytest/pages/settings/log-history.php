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
                <th class="col-sm-2">Date</th>
                <th class="col-sm-4">Remarks</th>
              
              </tr>
            </thead>
            <tbody>
            <?php
                $query = mysqli_query($con, "SELECT * FROM tbl_logs;");
                while($row = mysqli_fetch_array($query))
                {
                  echo '
                  <tr class="text-center">
                    <td>'.$row['id'].'</td>
                    <td>'.$row['usertype'].'</td>
                    <td>'.$row['created_at'].'</td>
                    <td>'.$row['remarks'].'</td>
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


