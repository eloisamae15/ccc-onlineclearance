<?php 
if ( ! defined( 'ROOT_PATH' ) ) {
    define( 'ROOT_PATH', $_SERVER['DOCUMENT_ROOT']);
}
include_once(ROOT_PATH . 'config.php');

$category = 'Books';
$status = 'Available';
date_default_timezone_set('Asia/Manila');
$curtmtmp   = date('Y-m-d H:i:s');

if (isset($_POST['add_books_btn'])) {
	add_books();
}

function add_books() {
	// call these variables with the global keyword to make them available in function
	global $db, $errors, $username, $email, $curdate, $curtmtmp, $category, $status;
    
	$barcode        =  $_POST['barcode'];
	$title          =  $_POST['title'];
	$edition        =  $_POST['edition'];
	$volume         =  $_POST['volume'];
	$author         =  $_POST['author'];
	$publisher      =  $_POST['publisher'];
	$class          =  $_POST['class'];
	$pages          =  $_POST['pages'];
	$date_received  =  $_POST['date_received'];
    $year           =  $_POST['year'];
    $cash_price     =  $_POST['cash_price'];
    $sof            =  $_POST['sof'];
    $remarks        =  $_POST['remarks'];
    


    $query = "INSERT INTO `library-resources` (barcode, category, status, created_at, updated_at) 
            VALUES('$barcode', '$category', '$status', '$curtmtmp', '$curtmtmp')";
    $result = mysqli_query($db, $query);

        if($result){
                $sql = "INSERT INTO books (title, barcode, edition, volume, author, publisher, class, pages, remarks, date_received, `year`, cash_price, sof, created_at, updated_at) 
                VALUES ('$title', '$barcode', '$edition', '$volume', '$author', '$publisher', '$class', '$pages', '$remarks', '$date_received', '$year', '$cash_price', '$sof', '$curtmtmp', '$curtmtmp')";
                $allresult = mysqli_query($db, $sql);
                $_SESSION['success']  = "New user successfully created!!";
                header('location: ../../books.php');
        } else {
            echo "error";
            echo mysqli_error($db);
    }
}
?>