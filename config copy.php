<?php
session_start();
if ( ! defined( 'ROOT_PATH' ) ) {
	define( 'ROOT_PATH', $_SERVER['DOCUMENT_ROOT']);
}
// connect to database
$db = mysqli_connect('db', 'root', 'clearance', 'clearance');

// variable declaration
$firstname  = "";
$middlename = "";
$lastname   = "";
$username   = "";
$contact    = "";
$street     = "";
$status     = "";
$email      = "";
$errors     = array(); 
date_default_timezone_set('Asia/Manila');
$curtmtmp   = date('Y-m-d H:i:s');

if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}



// return user array from their id
function getUserById($id){
	global $db;
	$query = "SELECT * FROM users WHERE id=" . $id;
	$result = mysqli_query($db, $query);

	$user = mysqli_fetch_assoc($result);
	return $user;
}

// escape string
function e($val){
	global $db;
	return mysqli_real_escape_string($db, trim($val));
}

function display_error() {
	global $errors;

	if (count($errors) > 0){
		echo '<div class="error">';
			foreach ($errors as $error){
				echo $error .'<br>';
			}
		echo '</div>';
	}
}	
function isLoggedIn()
{
	if (isset($_SESSION['user'])) {
		return true;
	}else{
		return false;
	}
}

// call the login() function if register_btn is clicked
if (isset($_POST['login_btn'])) {
	login();
}
// LOGIN USER
function login(){
	global $db, $email, $errors;

	// grap form values
	$email = e($_POST['email']);
	$password = e($_POST['password']);

	// make sure form is filled properly
	if (empty($email)) {
		array_push($errors, "Email is required");
	}
	if (empty($password)) {
		array_push($errors, "Password is required");
	}

	// attempt login if no errors on form
	if (count($errors) == 0) {
		$password = md5($password);

		$query = "SELECT users.id, email, user_type, first_name, middle_name, last_name, profile_pic FROM users, borrowers WHERE email='$email' AND password='$password' AND users.id = borrowers.id LIMIT 1";
		$results = mysqli_query($db, $query);

		if (mysqli_num_rows($results) == 1) { // user found
			// check if user is admin or user
			$logged_in_user = mysqli_fetch_assoc($results);
			if ($logged_in_user['user_type'] == 'admin') {

				$_SESSION['user'] = $logged_in_user;
				$_SESSION['success']  = "You are now logged in";
				header('location: admin/index.php');		  
			}else{
				$_SESSION['user'] = $logged_in_user;
				$_SESSION['success']  = "You are now logged in";

				header('location: index.php');
			}
		}else {
			array_push($errors, "Wrong email/password combination");
		}
	}
}
function isAdmin()
{
	if (isset($_SESSION['user']) && $_SESSION['user']['user_type'] == 'admin' ) {
		return true;
	}else{
		return false;
	}
}

// Delete user
if(count($_POST)>0){
	if($_POST['type']==3){
		$id=$_POST['id'];
		$sql = "DELETE FROM `library-resources` WHERE id=$id;";
		$sql .= "DELETE FROM books where id=$id";
		if (mysqli_multi_query($db, $sql)) {
			echo $id;
			header('location: books.php');
		} 
		else {
			echo "Error: " . $sql . "<br>" . mysqli_error($db);
		}
	}
}

// call the register() function if register_btn is clicked
if (isset($_POST['register_btn'])) {
	register();
}


// REGISTER USER
function register(){
	// call these variables with the global keyword to make them available in function
	global $db, $errors, $username, $email, $curtmtmp;

	// receive all input values from the form. Call the e() function
    // defined below to escape form values
	$email       =  e($_POST['email']);
	$password_1  =  e($_POST['password_1']);
	$password_2  =  e($_POST['password_2']);
	$firstname   =  e($_POST['firstname']);
	$middlename  =  e($_POST['middlename']);
	$lastname    =  e($_POST['lastname']);
	$contact     =  e($_POST['contact']);
	$status      = "inactive";


	// form validation: ensure that the form is correctly filled

	if (empty($email)) { 
		array_push($errors, "Email is required"); 
	}
	// Check if the email is already exist
	$sql = "SELECT * FROM users WHERE email='$email' LIMIT 1";
	$result = mysqli_query($db, $sql);
	if (mysqli_num_rows($result) == 1) {
		array_push($errors, "Email is already exists");
	}
	if (empty($password_1)) { 
		array_push($errors, "Password is required"); 
	}
	if ($password_1 != $password_2) {
		array_push($errors, "The two passwords do not match");
	}
	// register user if there are no errors in the form
	if (count($errors) == 0) {
		$password = md5($password_1);//encrypt the password before saving in the database

		if (isset($_POST['user_type'])) {
			$user_type = e($_POST['user_type']);
			$query = "INSERT INTO users (email, password, user_type, status, created_at, updated_at) 
					  VALUES('$email', '$password', '$user_type', '$status', '$curtmtmp', '$curtmtmp')";

			$query .= "INSERT INTO borrowers (first_name, middle_name, last_name, contact, created_at, updated_at) 
					  VALUES('$firstname', '$middlename', '$lastname', '$contact', '$curtmtmp', '$curtmtmp')";

			mysqli_multi_query($db, $query);
			$_SESSION['success']  = "New user successfully created!!";
			header('location: users.php');
		}else{

			$query = "INSERT INTO users (email, password, user_type, status, created_at, updated_at) 
					  VALUES('$email', '$password', 'user', '$status', '$curdate', '$curdate');";

			$query .= "INSERT INTO borrowers (first_name, middle_name, last_name, contact, created_at, updated_at) 
					  VALUES('$firstname', '$middlename', '$lastname', '$contact', '$curtmtmp', '$curtmtmp')";

			mysqli_multi_query($db, $query);
				// get id of the created user
			$logged_in_user_id = mysqli_insert_id($db);

			$_SESSION['user'] = getUserById($logged_in_user_id); // put logged in user in session
			$_SESSION['success']  = "You are now logged in";
			header('location: index.php');
		
		}
	}
}





?>
