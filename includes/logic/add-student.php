<?php 
//if ( ! defined( 'ROOT_PATH' ) ) {
    //define( 'ROOT_PATH', $_SERVER['DOCUMENT_ROOT']);
//}
include_once('../../config.php');

$category = 'Books';
$status = 'Available';
date_default_timezone_set('Asia/Manila');
$curtmtmp   = date('Y-m-d H:i:s');

if (isset($_POST['add_student_btn'])) {
	add_student();
}

function add_student() {
	// call these variables with the global keyword to make them available in function
	global $db, $errors, $username, $email, $curdate, $curtmtmp, $category, $status;
    
	
	$stud_id         =  $_POST['stud_id'];
	$lname        =  $_POST['lname'];
	$fname         =  $_POST['fname'];
	$mname         =  $_POST['mname'];
	$bdate      =  $_POST['bdate'];
	$age          =  $_POST['age'];
	$gender         =  $_POST['gender'];
	$address  =  $_POST['address'];
    $course           =  $_POST['course'];
    $year_lvl     =  $_POST['year_lvl'];
    $email            =  $_POST['email'];
    $contact_no        =  $_POST['contact_no'];
    $account_stat        =  $_POST['account_stat'];
    //$print_stat            =  $_POST['print_stat'];
    $user_type            =  $_POST['user_type'];
    $password            =  $_POST['password'];
    $password1      = md5($password);
   // $clrnc_stat            =  $_POST['clrnc_stat'];
    //$remark            =  $_POST['remark'];
    //$remark_stat            =  $_POST['remark_stat'];
    //$apprvd_date            =  $_POST['apprvd_date']; 

    $query = "INSERT INTO `users`(`email`, `password`, `user_type`, `created_at`, `updated_at`) VALUES ('$email','$password1','$user_type','$curtmtmp','$curtmtmp');";

    $query .= "INSERT INTO `stud_tbl` (stud_id, lname, fname, mname, bdate, age, gender, address, course, year_lvl, 
     contact_no, account_stat, print_stat, clrnc_stat, remark, remark_stat, apprvd_date) 
            VALUES('$stud_id', '$lname', '$fname', '$mname','$bdate','$age','$gender','$address','$course','$year_lvl','$contact_no','$account_stat','1','','','','')";
    $result = mysqli_multi_query($db, $query);

        if($result){
                $_SESSION['success']  = "New user successfully created!!";
                header('location: ../../studenttbl.php');
        } else {
            echo "error";
            echo mysqli_error($db);
    }
}
?>