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
              Talavera, officially the Municipality of Talavera (Ilocano: Ili ti Talavera; Tagalog: Bayan ng Talavera), is a 1st class municipality[5] in the province of Nueva Ecija, Philippines. According to the PSA Census of Housing and Population for 2020, it has a population of 132,388.

              Talavera is part of Cabanatuan conurbation as adjacent urban center in the heart of Nueva Ecija. It is dubbed as the "Milk Capital" and "Food basket in Inland Luzon".
              </p>
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
                <h4>NEWS</h4>
              </div>
              <!-- search bar -->
              <div class="col-4  ms-auto">
                <input class="form-control mr-sm-2" type="search" placeholder="Type to search" aria-label="Search" aria-describeby="btnNavbarSearch" id="myInput" onkeyup="myFunction()">
              </div>
            </span>
          </div>
            
          <div class="card-body">
            
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos consequatur ut accusamus quis nostrum, incidunt enim rem tempore, vel eaque, in temporibus iusto neque at doloribus obcaecati rerum excepturi beatae?</p>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aut quisquam voluptatem expedita a sapiente fuga amet optio beatae vitae ratione. Nemo aliquid minima, assumenda dolore fugiat ullam voluptate quasi adipisci!</p>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolore quas non odit magni necessitatibus cum eius odio aliquam, voluptas, sapiente iste, cumque officiis sequi sint est! Omnis dicta necessitatibus repellendus.</p>

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
