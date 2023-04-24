<?php
 
	echo '
	<aside class="left-side sidebar-offcanvas">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- Sidebar user panel -->
                    <div class="user-panel">
                        
                        <div class="pull-left info">
                            <h4>Hello, '.$_SESSION['role'].'</h4>

                        </div>
                    </div>
                    <!-- /.search form -->
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    ';
                    /* Admin page */
                    if($_SESSION['role'] == "Administrator"){
                        echo '
                    <ul class="sidebar-menu">
                    
                        <li>
                            /* dashbord panel */
                            <a href="sidebar/sidebar-left.php">
                                <i class="fa fa-dashboard"></i><span>Dashboard</span>
                            </a>
                            </li>
                            
                            /* Staff panel */
                            <li>
                                <a href="../staff/staff.php">
                                    <i class="fa fa-user"></i> <span>Staff</span>
                                </a>
                            </li>     

                            /* Resident panel */
                            <li>
                                <a href="../resident/resident.php">
                                    <i class="fa fa-users"></i> <span>Resident</span>
                                </a>
                            </li>

                            /* Transaction */
                            <li><button class="dropdown-btn">Transactions<i class="fa fa-caret-down"></i>
                            </button>

                            /* Transaction dropdown list */
                            <div class="dropdown-container">
                        
                                <p><a href="#">
                                <span>Barangay Clearance</span></a></p>
                                
                                <p><a href="#">
                                <span>Business Clearance</span></a></p>
                                
                                <p> <a href="#">
                                <span>Certificate of Indigence</span></a></p>
                                
                                <p> <a href="#">
                                <span>Certificate of Residency</span></a></p>
                                
                                <p> <a href="#">
                                <span>Certificate of Solo Parent</span></a></p>
                                
                                <p><a href="#">
                                <span>Certificate of Good Moral</span></a></p>
                                
                                <p> <a href="#">
                                <span>Certificate of Building Permit</span></a></p>
                                
                                <p><a href="#">
                                <span>Certificate of Business Closure</span></a></p>
                                
                                <p><a href="#">
                                <span>Certificate of Late Registration</span></a></p>
                                
                                <p> <a href="#">
                                <span>Certifcate of Deceased Person</span></a></p>
                                
                                <p> <a href="#">
                                <span>Certificate of Living Together</span></a></p>

                                <p> <a href="#">
                                <span>Certifcate of Same Person</span></a></p>

                                <p> <a href="#">
                                <span>Patunay sa Kuryente</span></a></p>
                            
                            </div>
                            
                            /* Report panel */
                            </li>
                                
                                <li>
                                    <a href="#">
                                        <i class="fa fa-file"></i> <span>Report</span>
                                    </a>
                                </li>
                            
                            <li>

                                /* Setting panel */
                                <button class="dropdown-btn">Settings
                                <i class="fa fa-caret-down"></i>
                                </button>
                                <div class="dropdown-container">
                                    
                                /* Setting dropdown list */
                                <p><a href="#">
                                <span>User Account</span></a></p>

                                <p><a href="#">
                                <span>Log History</span></a></p>

                                <p><a href="../officials/officials.php">
                                <span>Barangay Officials</span></a></p>

                                <p><a href="#">
                                <span>Maintenace</span></a></p>
                            
                            </li>      
                    </ul>';
                    }
                    /* Staff page */
                    elseif(isset($_SESSION['staff'])){
                        echo '
                        <ul class="sidebar-menu">
                            <li>
                                <a href="../officials/officials.php">
                                    <i class="fa fa-user"></i> <span>Barangay Officials</span>
                                </a>
                            </li>
                            <li>
                                <a href="../resident/resident.php">
                                    <i class="fa fa-users"></i> <span>Resident</span>
                                </a>
                            </li>
                            <li>
                                <a href="../clearance/clearance.php">
                                    <i class="fa fa-file"></i> <span>Clearance</span>
                                </a>
                            </li>
                            <li>
                                <a href="../activity/activity.php">
                                    <i class="fa fa-calendar"></i> <span>Activity</span>
                                </a>
                            </li>
                        </ul>';
                    }
                    /* Resident panel */
                    else{
                        echo '
                        <ul class="sidebar-menu">
                            <li>
                                <a href="../permit/permit.php">
                                    <i class="fa fa-file"></i> <span>Permit</span>
                                </a>
                            </li>
                            <li>
                                <a href="../clearance/clearance.php">
                                    <i class="fa fa-file"></i> <span>Clearance</span>
                                </a>
                            </li>
                            <li>
                                <a href="../activity/activity.php">
                                    <i class="fa fa-calendar"></i> <span>Activity</span>
                                </a>
                            </li>
                        </ul>';
                    }
                echo '
                </section>
                <!-- /.sidebar -->
            </aside>
	';


?>

<link rel="stylesheet" href="side.css">


<script>
/* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
    this.classList.toggle("side");
    var dropdownContent = this.nextElementSibling;
    if (dropdownContent.style.display === "block") {
      dropdownContent.style.display = "none";
    } else {
      dropdownContent.style.display = "block";
    }
  });
}
</script>

