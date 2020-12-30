<?php
session_start();
error_reporting(E_ALL ^ E_WARNING ^ E_NOTICE);
include 'dbcon.php';

$empidi            = mysqli_real_escape_string($db, $_POST['empid']);

$result1 = mysqli_query($db, "SELECT * FROM employee WHERE empid = '$empidi'") or die('SQL Error: ' . mysqli_error($db));
$row1 = mysqli_fetch_array($result1);

$name              = $row1['name'];
$address           = $row1['address'];
$phone             = $row1['phone'];
$mail              = $row1['mail'];
$bdate             = $row1['bdate'];
$gender            = $row1['gender'];
$ifsc              = $row1['ifsc'];
$role              = $row1['role'];
$salary            = $row1['salary'];


$name1              = mysqli_real_escape_string($db, $_POST['name']);
$address1           = mysqli_real_escape_string($db, $_POST['address']);
$phone1             = mysqli_real_escape_string($db, $_POST['phone']);
$mail1              = mysqli_real_escape_string($db, $_POST['mail']);
$bdate1             = mysqli_real_escape_string($db, $_POST['bdate']);
$gender1            = mysqli_real_escape_string($db, $_POST['gender']);
$ifsc1              = mysqli_real_escape_string($db, $_POST['ifsc']);
$role1              = mysqli_real_escape_string($db, $_POST['role']);
$salary1            = mysqli_real_escape_string($db, $_POST['salary']);

if($name1 != NULL)
    $name = $name1;
if($address1 != NULL)
    $address = $address1;
if($phone1 != NULL)
    $phone = $phone1;
if($mail1 != NULL)
    $mail = $mail1;
if($bdate1 != NULL)
    $bdate = $bdate1;
if($gender1 != NULL)
    $gender = $gender1;
if($ifsc1 != NULL)
    $ifsc = $ifsc1;
if($role1 != NULL)
    $role = $role1;
if($salary1 != NULL)
    $salary = $salary1;

$sqli  = "UPDATE employee set name='$name', address='$address', phone=$phone, email='$mail', bdate='$bdate', gender='$gender', ifsc='$ifsc', role='$role',salary=$salary where empid='$empidi'";
if ($stmti = mysqli_prepare($db, $sqli)) {
    mysqli_stmt_bind_param($stmti, "ississsssi", $empidi, $name, $address, $phone, $mail, $bdate, $gender, $ifsc, $role, $salary);
    
    // Attempt to execute the prepared statement
    if (mysqli_stmt_execute($stmti)) {
        $msg = "Account information updated";
        echo "<script type=\"text/javascript\">alert(\"$msg\");</script>";
		header("Refresh: 0,url=tabs11.php");
    } else {
        $msg = "ERROR: Could not execute query: $sql. " . mysqli_error($db);
		echo "<script type=\"text/javascript\">alert(\"$msg\");</script>";
		header("Refresh: 0,url=tabs11.php");
    }
} else {
    $msg = "ERROR: Could not execute query: $sql. " . mysqli_error($db);
	echo "<script type=\"text/javascript\">alert(\"$msg\");</script>";
	header("Refresh: 0,url=tabs11.php");
}
// Close statement
mysqli_stmt_close($stmti);
mysqli_close($db);
?>