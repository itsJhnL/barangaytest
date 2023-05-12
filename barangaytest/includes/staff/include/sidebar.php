

<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">    
        <div class="sb-sidenav-menu">
            <div class="text-center my-2 ">
                <h6>Hello, Wick<?php //.$_SESSION['role']. ?></h6>
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
                    <a class="nav-link <?= $page == 'staffAcc.php' ? 'active':''?>" href="staffAcc.php">
                        <div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
                        Resident
                    </a>
                </li>
                <li>
                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                        <div class="sb-nav-link-icon"><i class="fas fa-file-alt"></i></div>
                        Transactions
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav">
                            <a class="nav-link <?= $page == '#.php' ? 'active':''?>" href="#">Barangay Clearance</a>
                            <a class="nav-link <?= $page == '#.php' ? 'active':''?>" href="#">Business Clearance</a>
                            <a class="nav-link <?= $page == '#.php' ? 'active':''?>" href="#">Certificate of Indigence</a>
                            <a class="nav-link <?= $page == '#.php' ? 'active':''?>" href="#">Certificate of Residency</a>
                            <a class="nav-link <?= $page == '#.php' ? 'active':''?>" href="#">Certificate of Solo Parent</a>
                            <a class="nav-link <?= $page == '#.php' ? 'active':''?>" href="#">Certificate of Good Moral</a>
                            <a class="nav-link <?= $page == '#.php' ? 'active':''?>" href="#">Certificate of Building Permit</a>
                            <a class="nav-link <?= $page == '#.php' ? 'active':''?>" href="#">Certificate of Business Closure</a>
                            <a class="nav-link <?= $page == '#.php' ? 'active':''?>" href="#">Certificate of Late Registration</a>
                            <a class="nav-link <?= $page == '#.php' ? 'active':''?>" href="#">Certifcate of Deceased Person</a>
                            <a class="nav-link <?= $page == '#.php' ? 'active':''?>" href="#">Certificate of Living Together</a>
                            <a class="nav-link <?= $page == '#.php' ? 'active':''?>" href="#">Certifcate of Same Person</a>
                            <a class="nav-link <?= $page == '#.php' ? 'active':''?>" href="#">Patunay sa Kuryente</a>
                        </nav>
                    </div>
                </li>
                <li>
                    <a class="nav-link" href="#">
                        <div class="sb-nav-link-icon"><i class="fas fa-chart-pie"></i></div>
                        Reports
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
                            <a class="nav-link" href="#">Log History</a>
                            <a class="nav-link <?= $page == 'officials.php' ? 'active':''?> " href="../officials/officials.php">Barangay Officials</a>
                            <a class="nav-link" href="#">Maintenace</a>
                        </nav>
                    </div>
                </li>
            </div>         
        </div>
        <div class="sb-sidenav-footer">
            <div class="small">Logged in as:</div>
            Staff
        </div>
    </nav>
</div>