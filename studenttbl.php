<?php
    include('import-csv.php');
    require_once(ROOT_PATH . 'includes/layout/header.php');
    require_once(ROOT_PATH . 'includes/layout/sidebar.php');
    

    $sql = "SELECT stud_tbl.user_id, users.lname, users.fname, users.mname, bdate, gender, contact_no, course, year_lvl from users, stud_tbl where stud_tbl.user_id = users.user_id";
    $result = mysqli_query($db, $sql);
    if (mysqli_num_rows($result) > 0) {
 ?>
    <div class="data-table-area mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="sparkline13-list">
                            <div class="sparkline13-hd">
                                <div class="main-sparkline13-hd">
                                    <div class="col-lg-11 col-md-10 col-sm-11 col-xs-12">
                                        <h1>Student Table</h1>
                                    </div>
                                    <a class="Primary mg-b-10 btn btn-custon-rounded-two btn-success" href="#" data-toggle="modal" data-target="#PrimaryModalalert"><i class="fa fa-plus edu-plus-pro" aria-hidden="true"></i> Add New</a>
                                </div>
                            </div>
                            <div class="sparkline13-graph">
                                <div class="datatable-dashv1-list custom-datatable-overright">
                                    <div id="toolbar">
                                        <select class="form-control dt-tb">
                                          <option value="">Export Basic</option>
                                          <option value="all">Export All</option>
                                          <option value="selected">Export Selected</option>
                                        </select>
                                    </div>
                                    <div class="theader">
                                    <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true"
                                        data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                        <thead>
                                            <tr>
                                                <th data-field="state" data-checkbox="true"></th>
                                                <th data-field="user_id">Student ID</th>
                                                <th data-field="lname">Full Name</th>
                                                <th data-field="bdate">Birth Day</th>
                                                <th data-field="gender">Gender</th>
                                                <th data-field="course">Course</th>
                                                <th data-field="year_lvl">Year Level</th>
                                                <th data-field="contact_no">Contact No</th>
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
                                                <td><?php echo $row["user_id"]; ?></td>
                                                <td><?php echo $row["lname"]; echo ", "; echo $row["fname"]; echo " "; echo $row["mname"];?></td>
                                                
                                                <td><?php echo $row["bdate"]; ?></td>
                                                <td><?php echo $row["gender"]; ?></td>
                                                <td><?php echo $row["course"]; ?></td>
                                                <td><?php echo $row["year_lvl"]; ?></td>
                                                <td><?php echo $row["contact_no"]; ?></td>
                                                <td>
                                                  <div style="display: flex;">
                                                  <a href="" style="background: #1aff00"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                                  <a href="#" data-toggle="modal" data-target="#PrimaryModalalert2" style="background: #00bbff">
                                                  <i class="fa fa-pencil-square-o update" 
                                                     data-stud_id="<?php echo $row['user_id']; ?>"
                                                     data-lname="<?php echo $row["lname"]; echo ", "; echo $row["fname"]; echo " "; echo $row["mname"];?>"
                                                     data-bdate="<?php echo $row["bdate"]; ?>"
                                                     data-gender="<?php echo $row["gender"]; ?>"
                                                     data-course="<?php echo $row["course"]; ?>"
                                                     data-year_lvl="<?php echo $row["year_lvl"]; ?>"
                                                     data-contact_no="<?php echo $row["contact_no"]; ?>"
                                                     ></i>
                                                  </a>
                                                  <a href="#" class="delete" data-id="<?php echo $row['user_id']; ?>" data-toggle="modal" data-target="#DangerModalhdbgcl" style="background: #ff0000">
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
                    <!-- Add Modal Section Start -->
                      <div id="PrimaryModalalert" class="modal modal-edu-general default-popup-PrimaryModal fade" role="dialog">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-close-area modal-close-df">
                                        <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                                    </div>
                                    <div class="modal-header header-color-modal bg-color-3">
                                        <h4 class="modal-title">Add Student</h4>
                                        <div class="modal-close-area modal-close-df">
                                            <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                                        </div>
                                    </div>
                                    <form class="form-horizontal well" action="import-csv.php" method="post" name="upload_excel" enctype="multipart/form-data">
                                        <fieldset>
                                          <legend>Import CSV/Excel file</legend>
                                          <div class="control-group">
                                            <div class="control-label">
                                              <label>CSV/Excel File:</label>
                                            </div>
                                            <div class="controls">
                                              <input type="file" name="file" id="file" class="input-large">
                                            </div>
                                          </div>
                                          
                                          <div class="control-group">
                                            <div class="controls">
                                            <button type="submit" id="submit" name="Import" class="btn btn-primary button-loading" data-loading-text="Loading...">Upload</button>
                                            </div>
                                          </div>
                                        </fieldset>
                                      </form>
                                </div>
                            </div>
                      </div>
                    <!-- Add Modal Section end -->
                    <!-- Edit Modal Section Start -->
                    <div id="PrimaryModalalert2" class="modal modal-edu-general default-popup-PrimaryModal fade" role="dialog">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-close-area modal-close-df">
                                        <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                                    </div>
                                    <div class="modal-header header-color-modal bg-color-3">
                                        <h4 class="modal-title">Edit Student Information</h4>
                                        <div class="modal-close-area modal-close-df">
                                            <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                                        </div>
                                    </div>
                                    <form id="update_form" method="post" name="userform" enctype="multipart/form-data" action="includes/logic/edit-studinfo.php">
                                      <div class="modal-body">
                                        <div class="col-lg-12 cold-md-12 col-sm-12 col-xs-12">
                                        <input type="hidden" id="no" name="no" class="form-control" required>
                                          <div class="form-group">
                                            <label >Student ID</label>
                                            <input name="stud_id" id="stud_id" type="text" class="form-control" disabled placeholder="Student ID" required>
                                          </div>
                                        </div>
                                        <div class="col-lg-6 cold-md-6 col-sm6 col-xs-12">
                                            <div class="form-group">
                                              <label >Last Name</label>
                                              <input name="lname" id="lname" type="text" class="form-control" placeholder="Last Name" required>
                                            </div>
                                            <div class="form-group">
                                              <label >First Name</label>
                                              <input name="fname" id="fname" type="text" class="form-control" placeholder="First Name" required>
                                            </div>
                                            <div class="form-group">
                                              <label >Middle Name</label>
                                              <input name="mname" id="mname" type="text" class="form-control" placeholder="Middle Name" required>
                                            </div>
                                            <div class="form-group" id="data_3">
                                                <label>Birth Date</label>
                                                <div class="input-group date">
                                                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                                    <input type="text" id="bdate" name="bdate" class="form-control" value="" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                              <label >Age</label>
                                              <input name="age" id="age" type="text" class="form-control" placeholder="Age" required>
                                            </div>
                                            <div class="form-group">
                                              <label >Gender</label>
                                              <select name="gender" style="color: #9b9b9b;" class="form-control">
                                                  <option value="none" selected="" disabled="">Select Account Status</option>
                                                  <option  value="Male">Female</option>
                                                  <option  value="Female">Male</option>
                                                  
                                              </select>
                                            </div>
                                            <div class="form-group">
                                              <label >Address</label>
                                              <input name="address" id="address" type="text" class="form-control" placeholder="Address" required>
                                            </div>
                                            </div>
                                          <div class="col-lg-6 cold-md-6 col-sm12 col-xs-12">
                                            <div class="form-group">
                                              <label >Course</label>
                                              <input name="course" id="course" type="text" class="form-control" placeholder="Course" required>
                                            </div>
                                            <div class="form-group">
                                              <label >Year Level</label>
                                              <input name="year_lvl" id="year_lvl" type="text" class="form-control" placeholder="Year Level">
                                            </div>
                                            <div class="form-group">
                                              <label >Email</label>
                                              <input name="email" type="text" id="email" class="form-control" placeholder="Email">
                                            </div>
                                            <div class="form-group">
                                              <label >Contact Number</label>
                                              <input name="contact_no" id="contact_no" type="text" class="form-control" placeholder="Contact Number">
                                            </div>
                                            <div class="form-group">
                                              <label >Accout Status</label>
                                              <select name="account_stat" style="color: #9b9b9b;" class="form-control">
                                                  <option value="none" selected="" disabled="">Select Account Status</option>
                                                  <option  value="Active">Active</option>
                                                  <option  value="In Active">In Active</option>
                                                  
                                              </select>
                                            </div>
                                            <div class="form-group">
                                              <label >Print Status</label>
                                              <input name="print_stat" id="print_stat" type="text" class="form-control" placeholder="Print Status">
                                            </div>
                                            <div class="form-group">
                                              <label >User Type</label>
                                              <select name="user_type" style="color: #9b9b9b;" class="form-control">
                                                      <option value="none" selected="" disabled="">Select User Type</option>
                                                      <option  value="Student">Student</option>
                                                      <option  value="Signatory" disabled="">Signatory</option>
                                                      <option  value="Appointed Staff" disabled="">Appointed Staff</option>
                                                  </select>
                                            </div>
                                            <div class="form-group">
                                              <label >Password</label>
                                              <input name="password" id="password" type="text" class="form-control" placeholder="Password">
                                            </div>
                                        </div>
                                      </div>
                                      <div class="modal-footer">
                                          <button class="Primary btn btn-custon-rounded-two btn-danger" data-dismiss="modal" href="#">Cancel</button>
                                          <button class="Primary mg-b-10 btn btn-custon-rounded-two btn-success" type="submit" href="#" name="edit_books_btn">Update</a>
                                      </div>
                                    </form>
                                </div>
                            </div>
                      </div>
                    <!-- edit modal Section end -->
                    <!-- Delete modal Section Start -->
                      <div id="DangerModalhdbgcl" class="modal modal-edu-general FullColor-popup-DangerModal fade" role="dialog">
                          <div class="modal-dialog">
                              <div class="modal-content">
                                  <div class="modal-header header-color-modal bg-color-4">
                                      <h4 class="modal-title">Information</h4>
                                      <div class="modal-close-area modal-close-df">
                                          <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                                      </div>
                                  </div>
                                  <div class="modal-body">
                                      <input type="hidden" id="no" name="no" class="form-control">
                                      <span class="educate-icon educate-danger modal-check-pro information-icon-pro"></span>
                                      <h2>Warning!</h2>
                                      <p>Are yo sure you want to delete the informaton of..........</p>
                                  </div>
                                  <div class="modal-footer danger-md">
                                      <button class="Primary btn btn-custon-rounded-two btn-danger" data-dismiss="modal" href="#">Cancel</button>
                                      <button href="#" class="Primary mg-b-10 btn btn-custon-rounded-two btn-success" type="button" id="delete">Delete</button>
                                  </div>
                              </div>
                          </div>
                      </div>
                    <!-- Delete modal Section end -->
                </div>
            </div>
        </div>
        <!-- Static Table End -->
        <div class="footer-copyright-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="footer-copy-right">
                            <p>Copyright © 2022. All rights reserved.</p>
                            <p> Hosted by MVSoftech.Inc</p>
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
    <!-- data table JS
		============================================ -->
    <script src="js/data-table/bootstrap-table.js"></script>
    <script src="js/data-table/tableExport.js"></script>
    <script src="js/data-table/data-table-active.js"></script>
    <script src="js/data-table/bootstrap-table-editable.js"></script>
    <script src="js/data-table/bootstrap-editable.js"></script>
    <script src="js/data-table/bootstrap-table-resizable.js"></script>
    <script src="js/data-table/colResizable-1.5.source.js"></script>
    <script src="js/data-table/bootstrap-table-export.js"></script>
    <!--  editable JS
		============================================ -->
    <script src="js/editable/jquery.mockjax.js"></script>
    <script src="js/editable/mock-active.js"></script>
    <script src="js/editable/select2.js"></script>
    <script src="js/editable/moment.min.js"></script>
    <script src="js/editable/bootstrap-datetimepicker.js"></script>
    <script src="js/editable/bootstrap-editable.js"></script>
    <script src="js/editable/xediable-active.js"></script>
    <!-- Chart JS
		============================================ -->
    <script src="js/chart/jquery.peity.min.js"></script>
    <script src="js/peity/peity-active.js"></script>
    <!-- tab JS
		============================================ -->
    <script src="js/tab.js"></script>
    <!-- plugins JS
		============================================ -->
    <script src="js/plugins.js"></script>
    <!-- main JS
		============================================ -->
    <script src="js/main.js"></script>
    <!-- datapicker JS
		============================================ -->
    <script src="js/datapicker/bootstrap-datepicker.js"></script>
    <script src="js/datapicker/datepicker-active.js"></script>
    <!-- ajax JS
		============================================ -->
    <script src="js/ajax.js"></script>

</body>

</html>