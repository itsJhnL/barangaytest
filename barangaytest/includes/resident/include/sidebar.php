

<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">    
        <div class="sb-sidenav-menu">
            <div class="text-center my-2 ">
                <h6>Hello, John<?php //.$_SESSION['role']. ?></h6>
                <hr>
            </div>

            <div class="nav">
                <li>
                    <a class="nav-link <?= $page == 'dashboard.php' ? 'active':''?>" href="dashboard.php">
                        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                        Dashboard
                    </a>
                </li>
                <li>
                    <a class="nav-link <?= $page == 'residentAcc.php' ? 'active':''?>" href="residentAcc.php">
                        <div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
                        Permit
                    </a>
                </li>
                <li>
                    <a class="nav-link <?= $page == 'clearance.php' ? 'active':''?>" href="clearance.php">
                        <div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
                        Clearance
                    </a>
                </li>
                <li>
                    <a class="nav-link <?= $page == '#' ? 'active':''?>" href="#">
                        <div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
                        Activity
                    </a>
                </li>
                <li>
                    <a class="nav-link collapsed <?= $page == 'user-account.php' || $page == 'log-history.php' || $page == 'officials.php' || $page == 'maintenance.php' ? 'active':''?>" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                        <div class="sb-nav-link-icon"><i class="fa fa-fw fa-wrench"></i></div>
                        Settings
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                </li>
                <li>
                    <div class="collapse <?= $page == 'user-account.php' || $page == 'log-history.php' || $page == 'officials.php' || $page == 'maintenance.php' ? 'show':''?>" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                            <a class="nav-link" href="#">User Account</a>
                            <!-- <a class="nav-link" href="#">Log History</a> -->
                            <a class="nav-link <?= $page == 'officials.php' ? 'active':''?> " href="../officials/officials.php">Barangay Officials</a>
                            <a class="nav-link" href="#">Maintenace</a>
                        </nav>
                    </div>
                </li>
            </div>         
        </div>
        <div class="sb-sidenav-footer">
            <div class="small">Logged in as:</div>
            Resident
        </div>
    </nav>
</div>