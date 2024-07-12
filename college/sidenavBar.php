<div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark bg-info" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <a class="nav-link active" href="index.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <div class="sb-sidenav-menu-heading text-white"> All Deatils</div>  
                            <a class="nav-link collapsed active" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Degree Details &nbsp;&nbsp;&nbsp;&darr;
                                <div class="sb-sidenav-collapse-arrow active"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link active" href="add_degree.php">Add Degree</a>
                                    <a class="nav-link active" href="manage_degree.php">Manage Degree</a>
                                    <a class="nav-link active" href="add_exam&rank.php">Add Rank</a>
                                    <a class="nav-link active" href="manage_exam&rank.php">Manage Rank</a>
                                </nav>
                            </div>
                            <a class="nav-link collapsed active" href="manage_student.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Applied Student Details
                            </a>
                            <a class="nav-link collapsed active" href="manage_colf.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Manage College Facilities
                            </a>
                            <a class="nav-link collapsed active" href="add_colf.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Add College Facilities
                            </a>                          
                        </div>
                    </div>
                    <div class="sb-sidenav-footer py-2">
                        <div class="small">Logged in as: <?php echo $_SESSION['cinfo']['cname']?></div>
                        Counselling World
                    </div>
                </nav>
            </div>