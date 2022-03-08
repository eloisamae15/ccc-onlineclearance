<?php
    include('config.php');
    require_once(ROOT_PATH . 'includes/layout/header.php');
    require_once(ROOT_PATH . 'includes/layout/sidebar.php');

    $sql = "SELECT * from stud_tbl where clrnc_stat = '' order by lname,course,year_lvl";
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
                                        <h1>Pendings</h1>
                                    </div>
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
                                                <th data-field="no">No</th>
                                                <th data-field="stud_id">Student ID</th>
                                                <th data-field="name">Full Name</th>
                                                
                                                <th data-field="course">Course</th>
                                                <th data-field="year_lvl">Year Level</th>
                                                <th data-field="clrnc_stat">Clearance Stat</th>
                                                <th data-field="remark_stat">Remark_stat</th>
                                                <th data-field="remark">Remark</th>
                                                <th data-field="apprvd_date">Approved Date</th>
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
                                                
                                                <td><?php echo $row["course"]; ?></td>
                                                <td><?php echo $row["year_lvl"]; ?></td>
                                                <td><?php echo $row["clrnc_stat"]; ?></td>
                                                <td><?php echo $row["remark_stat"]; ?></td>
                                                <td><?php echo $row["remark"]; ?></td>
                                                <td><?php echo $row["apprvd_date"]; ?></td>
                                                <td>
                                                  <div style="display: flex;">
                                                  <a href="#" data-toggle="modal" data-target="#PrimaryModalalert2" style="background: #00bbff">
                                                  <i class="fa fa-pencil-square-o update" 
                                                     data-no="<?php echo $row["no"]; ?>"
                                                     data-stud_id="<?php echo $row['stud_id']; ?>"
                                                     data-lname="<?php echo $row["lname"]; ?>"
                                                     data-fname="<?php echo $row["fname"]; ?>"
                                                     data-mname="<?php echo $row["mname"]; ?>"
                                                     data-course="<?php echo $row["course"]; ?>"
                                                     data-year_lvl="<?php echo $row["year_lvl"]; ?>"
                                                     data-clrnc_stat="<?php echo $row["clrnc_stat"]; ?>"
                                                     data-remark_stat="<?php echo $row["remark_stat"]; ?>"
                                                     data-remark="<?php echo $row["remark"]; ?>"
                                                     data-apprvd_date="<?php echo $row["apprvd_date"]; ?>"
                                                     ></i>
                                                  </a>
                                                  <a href="" style="background: #1aff00"><i class="fa fa-thumbs-up" aria-hidden="true"></i></a>
                                                  <a href="#" class="delete" data-id="<?php echo $row['no']; ?>" data-toggle="modal" data-target="#DangerModalhdbgcl" style="background: #ff0000">
                                                  <i  class="fa fa-thumbs-down" aria-hidden="true" data-toggle="tooltip" title="Approved"></i></a>
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
                                        <h4 class="modal-title">Add New Book</h4>
                                        <div class="modal-close-area modal-close-df">
                                            <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                                        </div>
                                    </div>
                                    <form id="update_form" method="post" name="userform" enctype="multipart/form-data" action="includes/logic/add-cstat.php">
                                      <div class="modal-body">
                                        <div class="col-lg-12 cold-md-12 col-sm-12 col-xs-12">
                                          <div class="form-group">
                                            <label >Barcode ID</label>
                                            <input name="barcode" type="text" class="form-control" placeholder="Barcode ID" required>
                                          </div>
                                        </div>
                                        <div class="col-lg-6 cold-md-6 col-sm6 col-xs-12">
                                            <div class="form-group">
                                              <label >Title</label>
                                              <input name="title" type="text" class="form-control" placeholder="Title" required>
                                            </div>
                                            <div class="form-group">
                                              <label >Edition</label>
                                              <input name="edition" type="text" class="form-control" placeholder="Edition" required>
                                            </div>
                                            <div class="form-group">
                                              <label >Volume</label>
                                              <input name="volume" type="text" class="form-control" placeholder="Volume" required>
                                            </div>
                                            <div class="form-group">
                                              <label >Author</label>
                                              <input name="author" type="text" class="form-control" placeholder="Author" required>
                                            </div>
                                            <div class="form-group">
                                              <label >Publisher</label>
                                              <input name="publisher" type="text" class="form-control" placeholder="Publisher" required>
                                            </div>
                                            <div class="form-group">
                                              <label >Class</label>
                                              <input name="class" type="text" class="form-control" placeholder="Class" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 cold-md-6 col-sm12 col-xs-12">
                                            <div class="form-group">
                                              <label >Pages</label>
                                              <input name="pages" type="number" class="form-control" placeholder="Pages" required>
                                            </div>
                                            <div class="form-group" id="data_3">
                                                <label>Date Received</label>
                                                <div class="input-group date">
                                                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                                    <input type="text" name="date_received" class="form-control" value="" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                              <label >Year</label>
                                              <input name="year" type="text" class="form-control" placeholder="Year" required>
                                            </div>
                                            <div class="form-group">
                                              <label >Cash Price</label>
                                              <input name="cash_price" type="number" class="form-control" placeholder="Cash Price">
                                            </div>
                                            <div class="form-group">
                                              <label >Source of Fund</label>
                                              <input name="sof" type="text" class="form-control" placeholder="Source of Fund">
                                            </div>
                                            <div class="form-group">
                                              <label >Remarks</label>
                                              <input name="remarks" type="text" class="form-control" placeholder="Remarks">
                                            </div>
                                        </div>
                                      </div>
                                      <div class="modal-footer">
                                          <button class="Primary btn btn-custon-rounded-two btn-danger" data-dismiss="modal" href="#">Cancel</button>
                                          <button class="Primary mg-b-10 btn btn-custon-rounded-two btn-success" type="submit" href="#" name="add_books_btn">Add Book</a>
                                      </div>
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
                                        <h4 class="modal-title">Edit Clearance Status</h4>
                                        <div class="modal-close-area modal-close-df">
                                            <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                                        </div>
                                    </div>
                                    <form id="update_form" method="post" name="userform" enctype="multipart/form-data" action="includes/logic/edit-cstat.php">
                                      <div class="modal-body">
                                        <div class="col-lg-12 cold-md-12 col-sm-12 col-xs-12">
                                        <input type="hidden" id="no" name="no" class="form-control" required>
                                          <div class="form-group col-lg-12 cold-md-12 col-sm-12 col-xs-12">
                                            <label >Student ID</label>
                                            <input name="stud_id" id="stud_id" type="text" class="form-control" disabled placeholder="Student ID" required>
                                          </div>
                                            <div class="form-group col-lg-4 col-md-4 col-sm-4">
                                              <label >First Name</label>
                                              <input name="fname" id="fname" type="text" class="form-control" disabled placeholder="First Name" required>
                                            </div>
                                            <div class="form-group col-lg-4 col-md-4 col-sm-4">
                                              <label >Middle Name</label>
                                              <input name="mname" id="mname" type="text" class="form-control" disabled placeholder="Middle Name" required>
                                            </div>
                                            <div class="form-group col-lg-4 col-md-4 col-sm-4">
                                              <label >Last Name</label>
                                              <input name="lname" id="lname" type="text" class="form-control" disabled placeholder="Last Name" required>
                                            </div>
                                            <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                              <label >Clearance Status</label>
                                              <select name="clrnc_stat" style="color: #9b9b9b;" class="form-control">
                                                  <option value="none" selected="" disabled="">Select Clearance Status</option>
                                                  <option  value="Approved">Active</option>
                                                  <option  value="Not Approved">In Active</option>
                                                  
                                              </select>
                                            </div>
                                            <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                              <label >Remark_Status</label>
                                              <input name="remark_stat" id="remark_stat" type="text" class="form-control" placeholder="Remark_Status" required>
                                            </div>
                                            <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                              <label >Remark</label>
                                              <input name="remark" id="remark" type="text" class="form-control" placeholder="Remark" required>
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
                                      <h4 class="modal-title">BG Color Header Modal</h4>
                                      <div class="modal-close-area modal-close-df">
                                          <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                                      </div>
                                  </div>
                                  <div class="modal-body">
                                      <input type="hidden" id="id" name="id" class="form-control">
                                      <span class="educate-icon educate-danger modal-check-pro information-icon-pro"></span>
                                      <h2>Danger!</h2>
                                      <p>The Modal plugin is a dialog box/popup window that is displayed on top of the current page</p>
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
                            <p>Copyright © 2018. All rights reserved.</p>
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