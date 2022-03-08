<?php
    include('config.php');
    require_once(ABSPATH . 'includes/layout/header.php');
    
?>
<div class="stud col-lg-6 cold-md-6 col-sm6 col-xs-12">
<div class="row">
        <div class="col-md-3 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                <img class="rounded-circle mt-5" src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQF2psCzfbB611rnUhxgMi-lc2oB78ykqDGYb4v83xQ1pAbhPiB&usqp=CAU">
          <!--  <span class="font-weight-bold"></span>
            <span class="text-black-50"></span><span> </span> -->
        </div>
        </div>
        <div class="col-md-5 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h3 class="text-center">My Profile</h3>
                </div>
                <div class="col-lg-12 cold-md-12 col-sm-12 col-xs-12">
                    <div class="row mt-3">
                        <label >Student ID Number</label>
                        <input name="" type="" class="form-control" placeholder="Student ID" required>
                    </div>
                    <div class="row mt-3">
                        <label >Full Name</label>
                        <input name="" type="" class="form-control" placeholder="Full Name" required>
                    </div>
                </div>
                
                <div class="row mt-3">
                    <div class="col-md-12"><label class="labels">PhoneNumber</label><input type="text" class="form-control" placeholder="enter phone number" value=""></div>
                    <div class="col-md-12"><label class="labels">Address</label><input type="text" class="form-control" placeholder="enter address" value=""></div>
                    <div class="col-md-12"><label class="labels">Email ID</label><input type="text" class="form-control" placeholder="enter email id" value=""></div>
                    <div class="col-md-12"><label class="labels">Education</label><input type="text" class="form-control" placeholder="education" value=""></div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-6"><label class="labels">Country</label><input type="text" class="form-control" placeholder="country" value=""></div>
                    <div class="col-md-6"><label class="labels">State/Region</label><input type="text" class="form-control" value="" placeholder="state"></div>
                </div>
                <div class="mt-5 text-center">
                    <button class="btn btn-primary profile-button" type="button">Save Profile</button>
                </div>
               
            </div>
        </div>
        
        
    </div>