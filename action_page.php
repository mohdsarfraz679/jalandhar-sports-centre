<?php
// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'register') or die(mysqli_error($db));

if(
    !empty($_POST['firstname']) && 
    !empty($_POST['emailid']) && 
    !empty($_POST['number']) &&
    !empty($_POST['subject'])
  ){
    $firstname = $_POST['firstname'];
    $email = $_POST['emailid'];
    $number = $_POST['number'];
    $subject = $_POST['subject'];
    $qry = "INSERT INTO contact (name,email,mobile,message) VALUES('$firstname', '$email', '$number', '$subject')";
    $run = mysqli_query($db, $qry) or die(mysqli_error($db));
    header('location:contact.php');
  }
else{
  header('location:contact.php');
}
?>