<?php
session_start();
include 'dbcon.php';
error_reporting(E_ALL ^ E_WARNING);
$name    = mysqli_real_escape_string($db, $_POST['name']);
$bdate   = mysqli_real_escape_string($db, $_POST['bdate']);
$phone   = mysqli_real_escape_string($db, $_POST['phone']);
$mail    = mysqli_real_escape_string($db, $_POST['mail']);
$gender  = mysqli_real_escape_string($db, $_POST['gender']);
// Attempt insert query execution
$sqli    = "UPDATE admin set name='$name', phone=$phone, email='$mail', bdate='$bdate', gender='$gender' where adminid='$adminid'";
if ($stmti = mysqli_prepare($db, $sqli)) {
    mysqli_stmt_bind_param($stmti, "isisss", $adminid, $name, $phone, $mail, $bdate, $gender);
    if (mysqli_stmt_execute($stmti)) {
        $msg = "Info updated!";
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
mysqli_stmt_close($stmti);
mysqli_close($db);
?>