<?php 
    /** Absolute path to the WordPress directory. */
    if ( ! defined( 'ROOT_PATH' ) ) {
        define( 'ROOT_PATH', $_SERVER['DOCUMENT_ROOT']);
    }
    include_once(ROOT_PATH . '/config.php');
    
?>
    <!-- Start Left menu area -->
    <div class="left-sidebar-pro">
        <nav id="sidebar" class="">
            <div class="sidebar-header">
                <a href="#"><img class="main-logo" src="img/logo/LOGINLogo.png" alt="" /></a>
                <strong><a href="index.html"><img src="img/logo/LOGINLogo.png" alt="" /></a></strong>
            </div>
            <div class="left-custom-menu-adp-wrap comment-scrollbar">
                <nav class="sidebar-nav left-sidebar-menu-pro">
                    <ul class="metismenu" id="menu1">
                        <li>
                            <a href="dashboard.php">
                            <span class="fa fa-tachometer icon-wrap" aria-hidden="true"></span>
                            <span class="mini-click-non" > Dashboard</span>
							</a>
                        </li>
                        
                        <li>
                            <a class="has-arrow" href="all-students.html" aria-expanded="false">
                                <i class="fa fa-file-text-o icon-wrap" aria-hidden="true"></i>
                                <span class="mini-click-non">Clearance Approval</span>
                            </a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="All Students" href="clrncapprvl.php">
                                    <span class="fa fa-spinner icon-wrap" aria-hidden="true"></span>
                                    <span class="mini-sub-pro">Pending</span></a>
                                </li>
                                <li><a title="Add Students" href="approved.php">
                                    <span class="fa fa-check-circle-o icon-wrap" aria-hidden="true"></span>
                                    <span class="mini-sub-pro">Approved</span></a>
                                </li>     
                                <li><a title="Add Students" href="napproved.php">
                                    <span class="fa fa-minus-circle icon-wrap" aria-hidden="true"></span>
                                    <span class="mini-sub-pro">Not Approved</span></a>
                                </li>
                                <li><a title="Add Students" href="signatory-clearance.php">
                                    <span class="fa fa-minus-circle icon-wrap" aria-hidden="true"></span>
                                    <span class="mini-sub-pro">New</span></a>
                                </li>
                            </ul>
                        </li>
                        <!-- Library Assets Section -->
                        <li>
                            <a class="has-arrow" href="all-courses.html" aria-expanded="false">
                                <i class="fa fa-graduation-cap icon-wrap" aria-hidden="true"></i>
                                <span class="mini-click-non">Student</span>
                            </a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="All Library" href="studenttbl.php">
                                    <span class="fa fa-user-circle-o" aria-hidden="true"></span>
                                    <span class="mini-sub-pro"></span>College Student</a>
                                </li>
                                <li><a title="All Library" href="manuscript.php">
                                    <span class="fa fa-user-circle-o" aria-hidden="true"></span>
                                    <span class="mini-sub-pro">Senior High School</span></a>
                                </li>
                                <!-- <li><a title="All Library" href="student-profile.php">
                                    <span class="fa fa-user-circle-o" aria-hidden="true"></span>
                                    <span class="mini-sub-pro">SF</span></a>
                                </li> -->
                            </ul>
                        </li>
                        <li>
                            <a class="has-arrow" href="" aria-expanded="false">
                                <span class="fa fa-folder-open icon-wrap" aria-hidden="true"></span>
                                <span class="mini-click-non">Clearance Reports</span>
                            </a>
                            <ul class="submenu-angle chart-mini-nb-dp" aria-expanded="false">
                                <li><a title="Bar Charts" href="#">
                                    <span class="fa fa-folder-open icon-wrap" aria-hidden="true"></span>
                                    <span class="mini-sub-pro">Report</span></a>
                                </li>
                            </ul>
                        </li>
                        
                        <li>
                            <a class="has-arrow" href="#" aria-expanded="false">
                                <span class="fa fa-users icon-wrap" aria-hidden="true"></span>
                                <span class="mini-click-non">Manage Signatory</span>
                            </a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="Inbox" href="signatorytbl.php">
                                    <span class="fa fa-user-secret" aria-hidden="true"></span>
                                    <span class="mini-sub-pro">College Signatory</span></a>
                                </li>
                                <li><a title="View Mail" href="#">
                                    <span class="fa fa-user" aria-hidden="true"></span>
                                    <span class="mini-sub-pro">SHS Signatory</span>
                                </a>
                                </li>
                                
                                <li><a title="View Mail" href="#">
                                    <span class="fa fa-user-plus" aria-hidden="true"></span>
                                    <span class="mini-sub-pro">Add Signatory</span>
                                </a>
                                </li>
                            </ul>
                        </li>
                        <li class="active">
                            <a title="Landing Page" href="login.php" aria-expanded="false">
                                <span class="fa fa-sign-out icon-wrap" aria-hidden="true"></span>
                                <span class="mini-click-non">Logout</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </nav>
    </div>
    <!-- End Left menu area -->
    <!-- Start Welcome area -->
    <div class="all-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                   <!-- <div class="logo-pro">
                        <a href="#"><img class="main-logo" src="img/logo/logosn.png" alt=""/>City College of Calapan</a>
                    </div> -->
                </div>
            </div>
        </div>
        <div class="header-advance-area">
            <div class="header-top-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="header-top-wraper">
                                <div class="row">
                                    <div class="col-lg-1 col-md-0 col-sm-1 col-xs-12">
                                        <div class="menu-switcher-pro">
                                            <button type="button" id="sidebarCollapse" class="btn bar-button-pro header-drl-controller-btn btn-info navbar-btn">
													<i class="educate-icon educate-nav"></i>
												</button>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-7 col-sm-6 col-xs-12">
                                        <div class="header-top-menu tabl-d-n">
                                            <ul class="nav navbar-nav mai-top-nav">
                                                <li class="nav-item"><a href="#" class="nav-link"></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                        <div class="header-right-info">
                                            <ul class="nav navbar-nav mai-top-nav header-right-menu">
                                                <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><span class="indicator-nt"></span></a>
                                                    <div role="menu" class="notification-author dropdown-menu animated zoomIn">
                                                        <div class="notification-single-top">
                                                            <h1>Notifications</h1>
                                                        </div>
                                                        <ul class="notification-menu">
                                                            <li>
                                                                <a href="#">
                                                                    <div class="notification-icon">
                                                                        <i class="educate-icon educate-checked edu-checked-pro admin-check-pro" aria-hidden="true"></i>
                                                                    </div>
                                                                    <div class="notification-content">
                                                                        <span class="notification-date">16 Sept</span>
                                                                        <h2>Advanda Cro</h2>
                                                                        <p>Please done this project as soon possible.</p>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <div class="notification-icon">
                                                                        <i class="fa fa-cloud edu-cloud-computing-down" aria-hidden="true"></i>
                                                                    </div>
                                                                    <div class="notification-content">
                                                                        <span class="notification-date">16 Sept</span>
                                                                        <h2>Sulaiman din</h2>
                                                                        <p>Please done this project as soon possible.</p>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <div class="notification-icon">
                                                                        <i class="fa fa-eraser edu-shield" aria-hidden="true"></i>
                                                                    </div>
                                                                    <div class="notification-content">
                                                                        <span class="notification-date">16 Sept</span>
                                                                        <h2>Victor Jara</h2>
                                                                        <p>Please done this project as soon possible.</p>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <div class="notification-icon">
                                                                        <i class="fa fa-line-chart edu-analytics-arrow" aria-hidden="true"></i>
                                                                    </div>
                                                                    <div class="notification-content">
                                                                        <span class="notification-date">16 Sept</span>
                                                                        <h2>Victor Jara</h2>
                                                                        <p>Please done this project as soon possible.</p>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                        <div class="notification-view">
                                                            <a href="#">View All Notification</a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
															<img src="img/profile/<?php echo $_SESSION['user']['img']; ?>" alt="" />
															<span class="admin-name"><?php echo $_SESSION['user']['fname'] . ' ' . $_SESSION['user']['lname']; ?></span>
															<i class="fa fa-angle-down edu-icon edu-down-arrow"></i>
														</a>
                                                    <ul role="menu" class="dropdown-header-top author-log dropdown-menu animated zoomIn">
                                                        <li><a href="#"><span class="edu-icon edu-home-admin author-log-ic"></span>My Account</a>
                                                        </li>
                                                        <li><a href="#"><span class="edu-icon edu-user-rounded author-log-ic"></span>My Profile</a>
                                                        </li>
                                                        <li><a href="#"><span class="edu-icon edu-settings author-log-ic"></span>Settings</a>
                                                        </li>
                                                        <li><a href="logout.php"><span class="edu-icon edu-locked author-log-ic"></span>Log Out</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <!-- -->
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Mobile Menu start -->
            <div class="mobile-menu-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="mobile-menu">
                                <nav id="dropdown">
                                    <ul class="mobile-menu-nav">
                                        <li><a data-toggle="collapse" data-target="#Charts" href="dashboard.php">Dashboard <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                            <ul class="collapse dropdown-header-top">
                                                <li><a href="dashboard.php">Dashboard v.1</a></li>
                                                
                                            </ul>
                                        </li>
                                        
                                        <li><a data-toggle="collapse" data-target="#demoevent" href="#">Clearance Approval <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                            <ul id="demoevent" class="collapse dropdown-header-top">
                                                <li><a href="clrncapprvl.php">Peding</a>
                                                </li>
                                                <li><a href="approved.php">Approved</a>
                                                </li>
                                                <li><a href="napproved.php">Not Approved</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#demolibra" href="#">Student <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                            <ul id="demolibra" class="collapse dropdown-header-top">
                                                <li><a href="studdenttbl.php">College Student</a>
                                                </li>
                                                <li><a href="studenttbl.php">Senior High School</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#demodepart" href="#">Clearance Report <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                            <ul id="demodepart" class="collapse dropdown-header-top">
                                                <li><a href="#">College Student</a>
                                                </li>
                                                <li><a href="#">SHS Student</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#demodepart" href="#">Manage Signatory <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                            <ul id="demodepart" class="collapse dropdown-header-top">
                                                <li><a href="#">College Student</a>
                                                </li>
                                                <li><a href="#">SHS Student</a>
                                                </li>
                                            </ul>
                                        </li>
                                        
                                        <li>
                                            <a data-toggle="collapse" data-target="#Pagemob" href="login.php">Log out<span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Mobile Menu end -->
            <div class="breadcome-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcome-list">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="breadcome-heading">
                                            <form role="search" class="sr-input-func">
                                               <!-- <input type="text" placeholder="Search..." class="search-int form-control">
                                                <a href="#"><i class="fa fa-search"></i></a>-->
                                            </form>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <ul class="breadcome-menu">
                                            <li><a href="#"></a> <span class="bread-slash"></span>
                                            </li>
                                            <li><span class="bread-blod"></span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>