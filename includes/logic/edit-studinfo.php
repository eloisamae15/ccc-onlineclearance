<?php 
if ( ! defined( 'ROOT_PATH' ) ) {
    define( 'ROOT_PATH', $_SERVER['DOCUMENT_ROOT'] . '/CCCLMS/' );
}
include_once(ROOT_PATH . 'config.php');

$category = 'Books';
$status = 'Available';
date_default_timezone_set('Asia/Manila');
$curtmtmp   = date('Y-m-d H:i:s');

if (isset($_POST['edit_books_btn'])) {
	edit_books();
}

function edit_books() {
	// call these variables with the global keyword to make them available in function
	global $db, $errors, $username, $email, $curdate, $curtmtmp, $category, $status;
    $no              =  $_POST['no'];
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
    $password            =  $_POST['password'];



    $query = "UPDATE `stud_tbl` SET `lname`='$lname',`fname`='$fname',`mname`='$mname',
    `bdate`='$bdate',`age`='$age',`gender`='$gender',`address`='$address',`course`='$course',`year_lvl`='$year_lvl',
    `email`='$email',`contact_no`='$contact_no',`account_stat`='$account_stat',`user_typ`='$user_typ',`password`='$password' WHERE no = '$no'";
    $result = mysqli_query($db, $query);

        if($result){
           
            $_SESSION['success']  = "Student's Status updated successfully!!";
            header('location: ../../studenttbl.php');
        } else {
            echo "error";
            echo mysqli_error($db);
    }
}

?>
