$(document).on('click','.update',function(e) {
    var no=$(this).attr("data-no");
    var stud_id=$(this).attr("data-stud_id");
    var lname=$(this).attr("data-lname");
    var fname=$(this).attr("data-fname");
    var mname=$(this).attr("data-mname");
    var bdate=$(this).attr("data-bdate");
    var age=$(this).attr("data-age");
    var gender=$(this).attr("data-gender");
    var address=$(this).attr("data-address");
    var course=$(this).attr("data-course");
    var year_lvl=$(this).attr("data-year_lvl");
    var email=$(this).attr("data-email");
    var contact_no=$(this).attr("data-contact_no");
    var account_stat=$(this).attr("dataaccount_stat");
    var print_stat=$(this).attr("data-print_stat");
    var user_typ=$(this).attr("data-user_typ");
    var password=$(this).attr("data-password");
    var clrnc_stat=$(this).attr("data-clrnc_stat");
    var remark_stat=$(this).attr("data-remark_stat");
    var remark=$(this).attr("data-remark");
    var apprvd_date=$(this).attr("data-apprvd_date");
    
    /*$('#no').val(no);
    $('#stud_id').val(stud_id);
    $('#lname').val(lname);
    $('#fname').val(fname);
    $('#mname').val(mname);
    $('#course').val(course);
    $('#year_lvl').val(year_lvl);
    $('#clrnc_stat').val(clrnc_stat);
    $('#remark_stat').val(remark_stat);
    $('#remark').val(remark);
    $('#apprvd_date').val(apprvd_date);*/
   
    $('#no').val(no);
    $('#stud_id').val(stud_id);
    $('#lname').val(lname);
    $('#fname').val(fname);
    $('#mname').val(mname);
    $('#bdate').val(bdate);
    $('#age').val(age);
    $('#gender').val(gender);
    $('#address').val(address);
    $('#course').val(course);
    $('#year_lvl').val(year_lvl);
    $('#email').val(email);
    $('#contact_no').val(contact_no);
    $('#account_stat').val(account_stat);
    $('#print_stat').val(print_stat);
    $('#user_typ').val(user_typ);
    $('#password').val(password);
    
    $('#clrnc_stat').val(clrnc_stat);
    $('#remark_stat').val(remark_stat);
    $('#remark').val(remark);
    $('#apprvd_date').val(apprvd_date);
});
/*$no              =  $_POST['no'];
	$stud_id         =  $_POST['stud_id'];
	$lname           =  $_POST['lname'];
    $fname           =  $_POST['fname'];
	$mname           =  $_POST['mname'];
	$bdate      =  $_POST['bdate'];
	$age          =  $_POST['age'];
	$gender         =  $_POST['gender'];
	$address  =  $_POST['address'];
    $course           =  $_POST['course'];
    $year_lvl     =  $_POST['year_lvl'];
    $email            =  $_POST['email'];
    $contact_no        =  $_POST['contact_no'];
    $account_stat        =  $_POST['account_stat'];
    $user_typ            =  $_POST['user_typ'];
    $password            =  $_POST['password'];*/

$(document).on("click", ".delete", function() { 
    var no=$(this).attr("data-no");
    $('#no').val(no);
    
});
$(document).on("click", "#delete", function() { 
    $.ajax({
        url: "config.php",
        type: "POST",
        cache: false,
        data:{
            type:3,
            no: $("#no").val()
        },
        success: function(dataResult){
                $('#DangerModalhdbgcl').modal('hide');
                $("#"+dataResult).remove();
                window.location.href("../studenttbl.php");
        
        }
    });
});