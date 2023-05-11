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
                <th class="col">User</th>
                <th class="col">Date</th>
                <th class="col">Action</th>
              
              </tr>
            </thead>
            <tbody>
            <?php
                $query = mysqli_query($con, "SELECT * , concat(firstname,' ',lastname) as action FROM tbl_logs;");
                while($row = mysqli_fetch_array($query))
                {
                  echo '
                  <tr>
                    <td>'.$row['user'].'</td>
                    <td>'.$row['logdate'].'</td>
                    <td>'.$row['action'].'</td>
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


