<?php 

include ('../../pages/connection.php');

$query = "SELECT * from tblofficials";
$result = mysqli_query ($con,$query);
?>

<?php 
  include 'include/header.php';
?>

  <!-- Dashboard details -->
  <div class="container-fluid px-4">
    <h1 class="my-2">Dashboard</h1>
    <hr>
    <!-- <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Dashboard</li>
    </ol> -->
    <div class="row">
      <div class="col my-auto pb-3">
        <img src="talavera_logo.png" alt="" class="w-auto" height="150">
      </div>
      <div class="col-md-10">
        <div class="input-group">
          <div class="card bg-secondary text-white my-3">
            <div class="card-body">
              <p>
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aspernatur consequatur reiciendis sed quia exercitationem ipsam fugit quasi minus repudiandae animi nisi expedita veniam mollitia tenetur, eaque rerum aliquam, quam suscipit vel non eveniet! Praesentium quis atque eum ducimus, iure minima aliquid eius excepturi accusamus? Repellat reiciendis natus nesciunt repudiandae suscipit?
              </p>
            </div>
          </div>
        </div>
      </div>
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
              <?php
                $male = mysqli_query($con,"SELECT * from tblresident");
                $countGender = mysqli_num_rows($male);

                echo $countGender;
              ?>
            </b>
        </div>
      </div>
      <div class="col-xl-4 col-md-6">
        <div class="card bg-primary text-white mb-4">
          <div class="card-body"><h4>Female</h4></div>
          <b class="mb-4 fs-4 text-center">
            <span class="fas fa-user"></span>
              <?php
                $female = mysqli_query($con,"SELECT * from tblresident");
                $countGender = mysqli_num_rows($female);

                echo $countGender;
              ?>
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
                  <th class="col-1">Start</th>
                  <th class="col-1">End</th>
                  <th class="col-2">Status</th>
                  <th class="col=2">Action</th>
                </tr>
              </thead>
              <tbody>
                <?php                         
                  while($row=mysqli_fetch_assoc($result))
                  {
                  
                  $position = $row['position'];
                  $name = $row['completeName'];
                  $contactNo = $row['contactNo'];
                  $address = $row['address'];
                  $start_date = $row['start_date'];
                  $end_date = $row['end_date'];
                  $status = $row['status'];
                ?>
                <tr class="text-center">
                  <td><?php echo $position ?></td>
                  <td><?php echo $name ?></td>
                  <td><?php echo $contactNo ?></td>
                  <td><?php echo $address ?></td>
                  <td><?php echo $start_date ?></td>
                  <td><?php echo $end_date ?></td>
                  <td><?php echo $status ?></td>
                  <td><button class="btn btn-info"><i class="fa-solid fa-eye no-gutters"></i></button></td>
                </tr>        
                  <?php 
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

  <!-- Toggle Button -->
  <script src="../js/scripts.js"></script>
  
<?php 
include 'include/footer.php';
include 'include/scripts.php';
?>
