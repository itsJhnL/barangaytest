<?php
   include ('../connection.php');
?>

<?php 
include '../../includes/header.php';
?>
 <script src="fill.js"></script>

 
    <div class="container px-4">
        <div class="row">
            <div class="col-md-12">
                <h1 class="my-2">REPORTS</h1>
                <hr>
               
                <div class="card d.flex">
                    <div class="card-header">
                        <div class="dropdown">
                            <button class="button-color btn dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                Filter
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <li><option class="dropdown-item">By Purok</option></li>
                                <li><option class="dropdown-item">By Barangay</option></li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="card-body">
                        <table id="myTable" class="table table-bordered table-hover table-striped" id="myTable">
                            <thead>
                                <tr class="col text-center">
                                    <th class="col-md-4">Name</th>
                                    <th class="col-md-4">Addresss</th>
                                    <th class="col">Clearance</th> 
                                    <th class="col">Date</th> 
                                    
                                   
                                </tr>
                            </thead>
                            <tbody>

                            <tr class="text-center">
                                <?php
                                    $squery = mysqli_query($con, "SELECT *, concat('#',houseNo, ' PUROK', purokNo, ' ',barangay,' ',city,' ',province,'') as address FROM tbl_reports");
                                    while($row = mysqli_fetch_array($squery))
                                    {
                                        echo '
                                        <tr class="text-center">
                                            <td> '.$row['lastname'].', '.$row['firstname'].' '.$row['middlename'].'.</td>
                                            <td> '.$row['address'].' </td>
                                            <td> '.$row['clearanceType'].' </td>
                                            <td> '.$row['date'].' </td>
                                        </tr>
                                        '; 
                                     
                                    }
                                ?>
                            </tbody>
                        </table>

                        <script>
                            window.onload = () => {
                                console.log(document.querySelector("#emp-table > tbody > tr:nth-child(1) > td:nth-child(2) ").innerHTML);
                            };

                            getUniqueValuesFromColumn()
                                
                        </script>
                    
                    
                    </div>
                    <!-- add modal-->
                  
                </div>
            </div>
        </div>
    </div>

    <script>
        
        //Search function
        function myFunction() {
            var input, filter, table, tr, td, i, txtValue;
            input = document.getElementById("myInput");
            filter = input.value.toUpperCase();
            table = document.getElementById("myTable");
            tr = table.getElementsByTagName("tr");
            for (i = 0; i < tr.length; i++) {
            td = tr[i].getElementsByTagName("td")[0];
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
    
<!-- Pagination -->
<script>
    $(document).ready( function () 
    {
        $('#myTable').DataTable();
    } );
</script>
<?php 
include 'pagination/pagination.php';
include '../../includes/footer.php';
include '../../includes/scripts.php';
?>