<?php include ('../pages/connection.php'); ?>
<?php 
include 'header.php';

$query = "SELECT * from dashboard";
$result = mysqli_query ($con,$query);

$about = mysqli_query($con, "SELECT about FROM dashboard WHERE id='id'");

$query1 = "SELECT * from tblofficials";
$result = mysqli_query ($con,$query1);

$male = mysqli_query($con, "SELECT * FROM tblresident WHERE gender = 'he';");
$female = mysqli_query($con, "SELECT * FROM tblresident WHERE gender = 'she';");
?>

  <!-- Dashboard details -->
  <div class="container-fluid px-4">
    <h1 class="my-2">Dashboard</h1>
    <hr>
    <!-- <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Dashboard</li>
    </ol> -->
    <div class="row pb-5 g-2">
      <div class="col-sm-2 ps-5 pt-2">
        <img src="talavera_logo.png" alt="" class="w-auto" height="150">
      </div>
      <div class="col-sm-10">
        <div class="input-group">
          <div class="card bg-light my-3">
            <div class="card-body">
              <?php 
                $squery = mysqli_query($con, "SELECT * FROM dashboard");
                while($row = mysqli_fetch_array($squery))
                {
                echo '
                  <p>'.$row['about'].'</p>
                  ';
                }
              ?>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-xl-4 col-md-6">
        <div class="card bg-primary text-white mb-4">
          <div class="card-body"><h4>Total Residents</h4></div>
            <b class="mb-4 fs-4 text-center">
            <span class="fas fa-user"></span>
              <?php
                $q = mysqli_query($con,"SELECT * from tblresident");
                $num_rows = mysqli_num_rows($q);

                echo $num_rows;
              ?>
            </b>
        </div>
      </div>
      <div class="col-xl-4 col-md-6">
        <div class="card bg-primary text-white mb-4">
          <div class="card-body">
            <h4>Male</h4>
          </div>
          <b class="mb-4 fs-4 text-center">
            <span class="fas fa-user"></span>
            <?php echo $male->num_rows;?>
            </b>
        </div>
      </div>
      <div class="col-xl-4 col-md-6">
        <div class="card bg-primary text-white mb-4">
          <div class="card-body"><h4>Female</h4></div>
          <b class="mb-4 fs-4 text-center">
            <span class="fas fa-user"></span>
            <?php echo $female->num_rows;?>
            </b>
        </div>
      </div>
    </div>
  </div>

  <!-- Card content -->

  <div class="container mt-4">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <span class="row">
              <div class="col">
                <h4>Officials Details</h4>
              </div>
              <!-- search bar -->
              <div class="col-4  ms-auto">
                <input class="form-control mr-sm-2" type="search" placeholder="Type to search" aria-label="Search" aria-describeby="btnNavbarSearch" id="myInput" onkeyup="myFunction()">
              </div>
            </span>
          </div>
            
          <div class="card-body">
            <table class="table table-bordered table-hover table-striped" id="myTable">
              <thead>
                <tr class="col text-center">
                                  
                  <th class="col-2">Position</th>
                  <th class="col-3">Name</th>
                  <th class="col-2">Contact No.</th>
                  <th class="col-2">Address</th>
                  <th class="col-2">Status</th>
                  <th class="col=2">Action</th>
                </tr>
              </thead>
              <tbody>
                <?php
                  $squery = mysqli_query($con, "SELECT * FROM tblofficials");
                  while($row = mysqli_fetch_array($squery))
                  {
                    echo '
                    <tr class="text-center">
                      <td> '.strtoupper($row['position']).' </td>
                      <td> '.strtoupper($row['lastname']).', '.strtoupper($row['firstname']).' '.strtoupper($row['middlename']).'. </td>
                      <td> '.strtoupper($row['contactNo']).' </td>
                      <td> '.strtoupper($row['address']).' </td>
                      <td> '.strtoupper($row['status']).' </td>
                      ';
                  ?>
                      <td>
                          <form action="function.php" method="POST" class="d-inline">
                              <button type="button" class="btn btn-info btn-sm" title="View" data-bs-toggle="modal" data-bs-target="#View_Official<?php echo $row['id']; ?>"><i class="fa-solid fa-eye"></i></button>
                          </form>
                      </td>
                    </tr>
                    <?php
                    // include 'view-official.php';
                  }
                ?>
              </tbody>
            </table>

          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- SEARCH script -->
  <script>
    function myFunction() {
      var input, filter, table, tr, td, i, txtValue;
      input = document.getElementById("myInput");
      filter = input.value.toUpperCase();
      table = document.getElementById("myTable");
      tr = table.getElementsByTagName("tr");
      for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[1];
        if (td) {
          txtValue = td.textContent || td.innerText;
          if (txtValue.toUpperCase().indexOf(filter) > -1) {
            tr[i].style.display = "";
          } else {
            tr[i].style.display = "none";
          }
        }       
      }
    }
  </script>
  
<?php 
include 'footer.php';
?>