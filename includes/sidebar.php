

<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">    
        <div class="sb-sidenav-menu">
            <div class="text-center my-2 ">
                <h6>Hello, Admin<?php //.$_SESSION['role']. ?></h6>
                <hr>
            </div>

            <div class="nav">
                <li>
                    <a class="nav-link <?= $page == 'dashboard.php' ? 'active':''?>" href="../dashboard/dashboard.php">
                        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                        Dashboard
                    </a>
                </li>
                <li>
                    <a class="nav-link <?= $page == 'staff.php' ? 'active':''?>" href="../staff/staff.php">
                        <div class="sb-nav-link-icon"><i class="fas fa-user-circle"></i></div>
                        Staff
                    </a>
                </li>
                <li>
                    <a class="nav-link <?= $page == 'resident.php' ? 'active':''?>" href="../resident/resident.php">
                        <div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
                        Resident
                    </a>
                </li>
                <li>
                    <a class="nav-link collapsed <?= $page == 'business_permit.php' || $page == 'indigency.php' || $page == 'solo_parent.php' || $page == 'goodmoral.php' || $page == 'business_closure.php' || $page == 'deceased_person.php' || $page == 'kuryente.php' ? 'active':''?>" href="#" data-bs-toggle="collapse" data-bs-target="#collapseTransaction" aria-expanded="false" aria-controls="collapseTransaction">
                        <div class="sb-nav-link-icon"><i class="fas fa-file-alt"></i></div>
                        Transactions
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse <?= $page == 'business_permit.php' || $page == 'indigency.php' || $page == 'solo_parent.php' || $page == 'goodmoral.php' || $page == 'business_closure.php' || $page == 'deceased_person.php' || $page == 'kuryente.php' ? 'show':''?>" id="collapseTransaction" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav">
                            <a class="nav-link <?= $page == '#' ? 'active':''?>" href="#">Barangay Clearance</a>
                            <a class="nav-link <?= $page == 'business_permit.php' ? 'active':''?>" href="../clearances/business_permit/business_permit.php">Business Permit</a>
                            <a class="nav-link <?= $page == 'indigency.php' ? 'active':''?>" href="../clearances/indigency.php">Certificate of Indigency</a>
                            <a class="nav-link <?= $page == '#' ? 'active':''?>" href="#">Certificate of Residency</a>
                            <a class="nav-link <?= $page == 'solo_parent.php' ? 'active':''?>" href="../clearances/solo_parent.php">Certificate of Solo Parent</a>
                            <a class="nav-link <?= $page == 'goodmoral.php' ? 'active':''?>" href="../clearances/goodmoral.php">Certificate of Good Moral</a>
                            <a class="nav-link <?= $page == '#' ? 'active':''?>" href="#">Certificate of Building Permit</a>
                            <a class="nav-link <?= $page == 'business_closure.php' ? 'active':''?>" href="../clearances/business_closure.php">Certificate of Business Closure</a>
                            <a class="nav-link <?= $page == '#' ? 'active':''?>" href="#">Certificate of Late Registration</a>
                            <a class="nav-link <?= $page == 'deceased_person.php' ? 'active':''?>" href="../clearances/deceased_person.php">Certifcate of Deceased Person</a>
                            <a class="nav-link <?= $page == '#' ? 'active':''?>" href="#">Certificate of Living Together</a>
                            <a class="nav-link <?= $page == '#' ? 'active':''?>" href="#">Certifcate of Same Person</a>
                            <a class="nav-link <?= $page == 'kuryente.php' ? 'active':''?>" href="../clearances/kuryente.php">Patunay sa Kuryente</a>
                            <a class="nav-link <?= $page == '#' ? 'active':''?>" href="#">Proof of Income</a>
                        </nav>
                    </div>
                </li>
                <li>
                    <a class="nav-link <?= $page == 'report.php' ? 'active':''?>" href="../dashboard/report.php">
                        <div class="sb-nav-link-icon"><i class="fas fa-user-circle"></i></div>
                        Reports
                    </a>
                </li>
                <li>
                    <a class="nav-link collapsed <?= $page == 'user-account.php' || $page == 'log-history.php' || $page == 'officials.php' || $page == 'maintenance.php' ? 'active':''?>" href="#" data-bs-toggle="collapse" data-bs-target="#collapseSetting" aria-expanded="false" aria-controls="collapseSetting">
                        <div class="sb-nav-link-icon"><i class="fa fa-fw fa-wrench"></i></div>
                        Settings
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                </li>
                <li>
                    <div class="collapse <?= $page == 'user-account.php' || $page == 'log-history.php' || $page == 'officials.php' || $page == 'maintenance.php' ? 'show':''?>" id="collapseSetting" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
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
            Administrator
        </div>
    </nav>
</div>