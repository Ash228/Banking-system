<?php
 session_start();
 error_reporting(E_ALL ^ E_WARNING ^ E_NOTICE);
include 'dbcon.php';
error_reporting(E_ALL ^ E_WARNING ^ E_NOTICE ^ E_STRICT);

$empidd = mysqli_real_escape_string($db, $_POST['empidd']);


$sql    = "DELETE FROM employee WHERE empid='$empidd'";

if ($stmt = mysqli_prepare($db, $sql)) {
    mysqli_stmt_bind_param($stmt, "i",$empidd);
	$res=mysqli_stmt_execute($stmt);
	
    if (mysqli_stmt_affected_rows($stmt)==1){
		$msg = "Employee removed";
		echo "<script type=\"text/javascript\">alert(\"$msg\");</script>";
		header("Refresh: 0,url=tabs11.php");
	} 
	else {
		$msg = "No such Employee id exists";
		echo "<script type=\"text/javascript\">alert(\"$msg\");</script>";
		header("Refresh: 0,url=tabs11.php");
	}
}
else {
    $msg = "ERROR: Could not execute query: $sql. " . mysqli_error($db);
	echo "<script type=\"text/javascript\">alert(\"$msg\");</script>";
	header("Refresh: 0,url=tabs11.php");
}}
else{
	$msg = "Employee does not belong to your branch";
	echo "<script type=\"text/javascript\">alert(\"$msg\");</script>";
	header("Refresh: 0,url=tabs11.php");
}
mysqli_close($db); 
?>