<?php


// initializing variables
$username = "";
$email    = "";
$address    = "";
$city    = "";
$state    = "";
$zip    = "";
$school_name    = "";
$dob    = "";
$mobile    = "";
$aadhar    = "";
$age = "";
$gender = "";
$academicyear = "";
$profileimg = "demouser.jpg";
$otherinfo = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'register');
session_start();
// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);
  $address = mysqli_real_escape_string($db, $_POST['address']);
  $city = mysqli_real_escape_string($db, $_POST['city']);
  $state = mysqli_real_escape_string($db, $_POST['state']);
  $zip = mysqli_real_escape_string($db, $_POST['zip']);
  $school_name = mysqli_real_escape_string($db, $_POST['schoolname']);
  $dob = mysqli_real_escape_string($db, $_POST['dob']);
  $mobile = mysqli_real_escape_string($db, $_POST['mobile']);
  $age = mysqli_real_escape_string($db, $_POST['age']);
  $gender = mysqli_real_escape_string($db, $_POST['gender']);
  $academicyear = mysqli_real_escape_string($db, $_POST['academic_year']);
  $aadhar = mysqli_real_escape_string($db, $_POST['aadhar']);
  $otherinfo = mysqli_real_escape_string($db, $_POST['otherinfo']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");
  }
  if (empty($address)) { array_push($errors, "Address is required"); }
  if (empty($city)) { array_push($errors, "City is required"); }
  if (empty($state)) { array_push($errors, "State is required"); }
  if (empty($zip)) { array_push($errors, "Zip is required"); }
  if (empty($school_name)) { array_push($errors, "Name of School is required"); }
  if (empty($dob)) { array_push($errors, "Date of Birth is required"); }
  if (empty($mobile)) { array_push($errors, "Mobile number is required"); }
  if (empty($aadhar)) { array_push($errors, "Aadhar number is required"); }
  if (empty($age)) { array_push($errors, "Age is required"); }
  if (empty($gender)) { array_push($errors, "Gender is required"); }
  if (empty($academicyear)) { array_push($errors, "Academic year is required"); }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM user WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }

    // if ($user['email'] === $email) {
    //   array_push($errors, "email already exists");
    // }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = md5($password_1);//encrypt the password before saving in the database

  	$query = "INSERT INTO user (username, email, password, address, city, state, zip, schoolname, dob, mobile, aadhar, age, gender, academic_year, otherinfo) 
  			  VALUES('$username', '$email', '$password', '$address', '$city', '$state', '$zip', '$school_name', '$dob', '$mobile', '$aadhar', '$age', '$gender', '$academicyear', '$otherinfo')";
  	mysqli_query($db, $query);
  	$_SESSION['username'] = $username;
    $_SESSION['email'] = $email;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: profile.php');
  }
} 

// LOGIN USER
if (isset($_POST['login_user'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($username)) {
  	array_push($errors, "Username is required");
  }
  if (empty($password)) {
  	array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
  	$password = md5($password);
  	$query = "SELECT * FROM user WHERE username='$username' AND password='$password'";
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) == 1) {
      session_start();
  	  $_SESSION['username'] = $username;
      // echo $_SESSION['username'];
      // die();
      $userdata = mysqli_fetch_array($results);
      $_SESSION['email'] = $userdata['email'];
  	  $_SESSION['success'] = "You are now logged in";
  	  header('location: profile.php');
  	}else {
  		array_push($errors, "Wrong username/password combination");
  	}
  }
}

?>