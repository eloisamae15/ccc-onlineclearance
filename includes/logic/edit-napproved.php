<?php 
if ( ! defined( 'ROOT_PATH' ) ) {
    define( 'ROOT_PATH', $_SERVER['DOCUMENT_ROOT']);
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
    $no            =  $_POST['no'];
	$clrnc_stat    =  $_POST['clrnc_stat'];
	$remark_stat   =  $_POST['remark_stat'];
	$remark        =  $_POST['remark'];
	
	
    


    $query = "UPDATE `stud_tbl` SET `clrnc_stat`='$clrnc_stat',`remark_stat`='$remark_stat',`remark`='$remark' WHERE no = '$no'";
    $result = mysqli_query($db, $query);

        if($result){
           
            $_SESSION['success']  = "Student's Status updated successfully!!";
            header('location: ../../napproved.php');
        } else {
            echo "error";
            echo mysqli_error($db);
    }
}
?>