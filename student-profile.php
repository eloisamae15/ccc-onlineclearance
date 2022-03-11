<?php
    include('config.php');
    require_once(ROOT_PATH . 'includes/layout/header.php');

    $sql = "SELECT `no`, `stud_id`, `lname`, `fname`, `mname`, `bdate`, `age`, `gender`, `address`, `course`,`email`, `year_lvl`, `contact_no`, `account_stat`, `print_stat`, `clrnc_stat`, `remark`, `remark_stat`, `apprvd_date`, `user_type` FROM `stud_tbl`,`users` WHERE stud_tbl.no = users.id ";
    $result = mysqli_query($db, $sql);
    if (mysqli_num_rows($result) > 0) {
    
    ?>
<html class="no-js" lang="en">

<head>
<!-- <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.11.5/datatables.min.css"/> -->
 
</head>

<body>
  <div class="studpage">
    <div class="all-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                </div>
            </div>
        </div>
        <!-- Single pro tab review Start-->
        <div class="single-pro-review-area mt-t-30 mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="profile-info-inner">
                            <div class="profile-img">
                                <img src="img/profile/1.jpg" alt="" />
                            </div>
                            <div class="profile-details-hr">
                                <div class="row">
                                    <div class="address-hr tb-sm-res-d-n dps-tb-ntn">
                                        <p class="fa fa-id-badge" aria-hidden="true"><b> Student ID</b><br /> 18-01934</p>
                                    </div>
                                    <div class="address-hr">
                                        <p class="fa fa-user" aria-hidden="true"><b> Full Name</b><br />Eloisa Mae De Torres</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="payment-adress mg-t-15">
                                    <a ><button onclick="location.href='login.php'" class="btn btn-primary waves-effect waves-light mg-b-15"type="submit"  >Logout</button></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                        <div class="product-payment-inner-st res-mg-t-30 analysis-progrebar-ctn">
                            <ul id="myTabedu1" class="tab-review-design">
                            <li ><a href="#profile">Profile</a></li>
                                <li class="active"> <a  href="#viewclearance">Clearance Status</a></li>
                               
                            </ul>
                            <div id="myTabContent" class="tab-content custom-product-edit st-prf-pro">
                                <div class="product-tab-list tab-pane fade active in" id="viewclearance">
                                   
                                   <div class="table-responsive">
                                   <div class="data-table-area mg-b-15">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="sparkline13-list">
                                <div class="sparkline13-hd">
                                    <div class="main-sparkline13-hd">
                                        <div class="col-lg-11 col-md-10 col-sm-11 col-xs-12">
                                            <!-- <h1>Student Table</h1> -->
                                        </div>
                                        <!-- <a class="Primary mg-b-10 btn btn-custon-rounded-two btn-success" href="#" data-toggle="modal" data-target="#PrimaryModalalert"><i class="fa fa-plus edu-plus-pro" aria-hidden="true"></i> Add New</a> -->
                                    </div>
                                </div>
                                <div class="sparkline13-graph">
                                    <div class="datatable-dashv1-list custom-datatable-overright">
                                        <!-- <div id="toolbar">
                                            <select class="form-control dt-tb">
                                            <option value="">Export Basic</option>
                                            <option value="all">Export All</option>
                                            <option value="selected">Export Selected</option>
                                            </select>
                                        </div> -->
                                        <div class="theader">
                                        <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true"
                                            data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                            <thead>
                                                <tr>
                                                    <th data-field="state" data-checkbox="true"></th>
                                                    <th data-field="no">No</th>
                                                    <th data-field="stud_id">Student ID</th>
                                                    <th data-field="lname">Full Name</th>
                                                
                                                    <th data-field="bdate">Birth Day</th>
                                                    <th data-field="age">Age</th>
                                                    <th data-field="gender">Gender</th>
                                                    <th data-field="address">Address</th>
                                                    <th data-field="course">Course</th>
                                                    <th data-field="year_lvl">Year Level</th>
                                                    <th data-field="email">Email</th>
                                                    <th data-field="contact_no">Contact No</th>
                                                    <th data-field="account_stat">Account Status</th>
                                                    <th data-field="print_stat">Print Status</th>
                                                    <th data-field="user_type">User Type</th>
                                                    <th data-field="action">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $i=0;
                                                while($row = mysqli_fetch_array($result)) {
                                                ?>
                                                <tr>
                                                    <td></td>
                                                    <td><?php echo $row["no"]; ?></td>
                                                    <td><?php echo $row["stud_id"]; ?></td>
                                                    <td><?php echo $row["lname"]; echo ", "; echo $row["fname"]; echo " "; echo $row["mname"];?></td>
                                                    
                                                    <td><?php echo $row["bdate"]; ?></td>
                                                    <td><?php echo $row["age"]; ?></td>
                                                    <td><?php echo $row["gender"]; ?></td>
                                                    <td><?php echo $row["address"]; ?></td>
                                                    <td><?php echo $row["course"]; ?></td>
                                                    <td><?php echo $row["year_lvl"]; ?></td>
                                                    <td><?php echo $row["email"]; ?></td>
                                                    <td><?php echo $row["contact_no"]; ?></td>
                                                    <td><?php echo $row["account_stat"]; ?></td>
                                                    <td><?php echo $row["print_stat"]; ?></td>
                                                    <td><?php echo $row["user_type"]; ?></td>
                                                    <td>
                                                    <div style="display: flex;">
                                                    <a href="" style="background: #1aff00"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                                    <a href="#" data-toggle="modal" data-target="#PrimaryModalalert2" style="background: #00bbff">
                                                    <i class="fa fa-pencil-square-o update" 
                                                        data-no="<?php echo $row["no"]; ?>"
                                                        data-stud_id="<?php echo $row['stud_id']; ?>"
                                                        data-lname="<?php echo $row["lname"]; ?>"
                                                        data-fname="<?php echo $row["fname"]; ?>"
                                                        data-mname="<?php echo $row["mname"]; ?>"
                                                        data-bdate="<?php echo $row["bdate"]; ?>"
                                                        data-age="<?php echo $row["age"]; ?>"
                                                        data-gender="<?php echo $row["gender"]; ?>"
                                                        data-address="<?php echo $row["address"]; ?>"
                                                        data-course="<?php echo $row["course"]; ?>"
                                                        data-year_lvl="<?php echo $row["year_lvl"]; ?>"
                                                        data-email="<?php echo $row["email"]; ?>"
                                                        data-contact_no="<?php echo $row["contact_no"]; ?>"
                                                        data-account_stat="<?php echo $row["account_stat"]; ?>"
                                                        data-print_stat="<?php echo $row["print_stat"]; ?>"
                                                        data-user_type="<?php echo $row["user_type"]; ?>"
                                                        ></i>
                                                    </a>
                                                    <a href="#" class="delete" data-id="<?php echo $row['no']; ?>" data-toggle="modal" data-target="#DangerModalhdbgcl" style="background: #ff0000">
                                                    <i class="fa fa-trash-o" aria-hidden="true" data-toggle="tooltip" title="Delete"></i></a>
                                                    </div>
                                                    </td>
                                                </tr>
                                                <?php
                                                    $i++;
                                                        }
                                                    }else{
                                                        echo "No result found";
                                                    }
                                                ?>
                                            </tbody>
                                        </table>
                                                </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                        
                    
                        
                    </div>
                </div>
            </div>
            <!-- Static Table End -->
            
        </div>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="payment-adress mg-t-15">
                                                    <button type="submit" class="btn btn-primary waves-effect waves-light mg-b-15">Print Clearance</button>
                                                </div>
                                            </div>
                                        </div>
                                    
                                    </div>
                                    <div class="product-tab-list tab-pane fade" id="profile">
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="review-content-section">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label >Student ID</label>
                                                        <input name="number" type="text" class="form-control" placeholder="Student ID">
                                                    </div>
                                                    <div class="form-group">
                                                        <label >Full Name</label>
                                                        <input type="text" class="form-control" placeholder="Fullname">
                                                    </div>
                                                    <div class="form-group">
                                                        <label >Date of Birth</label>
                                                        <input type="text" class="form-control" placeholder="Date of Birth">
                                                    </div>
                                                    <div class="form-group">
                                                        <label >Age</label>
                                                        <input type="text" class="form-control" placeholder=" Age">
                                                    </div>
                                                    <div class="form-group">
                                                        <label >Gender</label>
                                                        <input type="text" class="form-control" placeholder=" Gender">
                                                    </div>
                                                
                                                </div>
                                                
                                                    <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label >Address</label>
                                                        <input type="text" class="form-control" placeholder=" Address">
                                                    </div>
                                                    <div class="form-group">            
                                                        <label >Course</label>
                                                        <input name="number" type="text" class="form-control" placeholder="Course">
                                                    </div>
                                                    <div class="form-group">
                                                        <label >Year Level</label>
                                                        <input type="text" class="form-control" placeholder="Year Level">
                                                    </div>
                                                    <div class="form-group">
                                                        <label >Email</label>
                                                        <input type="text" class="form-control" placeholder="Email">
                                                    </div>
                                                    <div class="form-group">
                                                        <label >Contact Number</label>
                                                        <input type="text" class="form-control" placeholder="Contact Number">
                                                    </div>
                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
            </div>
        </div>
        <div class="footer-copyright-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="footer-copy-right">
                            <p>Copyright © 2018. All rights reserved. Template by <a href="https://colorlib.com/wp/templates/">Colorlib</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- jquery
		============================================ -->
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <!-- bootstrap JS
		============================================ -->
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.11.5/datatables.min.js"></script>
    <!-- wow JS
		============================================ -->
    <script src="js/wow.min.js"></script>
    <!-- price-slider JS
		============================================ -->
    <script src="js/jquery-price-slider.js"></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="js/jquery.meanmenu.js"></script>
    <!-- owl.carousel JS
		============================================ -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- sticky JS
		============================================ -->
    <script src="js/jquery.sticky.js"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="js/jquery.scrollUp.min.js"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/scrollbar/mCustomScrollbar-active.js"></script>
    <!-- metisMenu JS
		============================================ -->
    <script src="js/metisMenu/metisMenu.min.js"></script>
    <script src="js/metisMenu/metisMenu-active.js"></script>
    <!-- morrisjs JS
		============================================ -->
    <script src="js/sparkline/jquery.sparkline.min.js"></script>
    <script src="js/sparkline/jquery.charts-sparkline.js"></script>
    <!-- calendar JS
		============================================ -->
    <script src="js/calendar/moment.min.js"></script>
    <script src="js/calendar/fullcalendar.min.js"></script>
    <script src="js/calendar/fullcalendar-active.js"></script>
    <!-- tab JS
		============================================ -->
    <script src="js/tab.js"></script>
    <!-- plugins JS
		============================================ -->
    <script src="js/plugins.js"></script>
    <!-- main JS
		============================================ -->
    <script src="js/main.js"></script>
    <!-- <script>
        $(document).ready(function() {
    $('#example').DataTable();
} );
    </script>
    -->
</body>

</html>