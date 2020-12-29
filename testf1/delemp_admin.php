<?php
 session_start();
 error_reporting(E_ALL ^ E_WARNING ^ E_NOTICE);
include 'dbcon.php';
error_reporting(E_ALL ^ E_WARNING ^ E_NOTICE ^ E_STRICT);

$empidd = mysqli_real_escape_string($db, $_POST['empid']);

$result = mysqli_query($db, "SELECT empid from employee where empid='$empidd'") or die('SQL Error: ' . mysqli_error($db));
$row = mysqli_fetch_array($result);
if($row['empid'])
{
$sql    = "DELETE FROM employee WHERE empid='$empidd'";

if ($stmt = mysqli_prepare($db, $sql)) {
    mysqli_stmt_bind_param($stmt, "i",$empidd);
	
    if (mysqli_stmt_execute($stmt)){
		$msg = "Employee removed";
		echo "<script type=\"text/javascript\">alert(\"$msg\");</script>";
		header("Refresh: 0,url=tabs11.php");
	} 
	else {
		$msg = "ERROR: Could not execute query: $sql. " . mysqli_error($db);
		echo "<script type=\"text/javascript\">alert(\"$msg\");</script>";
		header("Refresh: 0,url=tabs11.php");
	}
}
else {
    $msg = "ERROR: Could not execute query: $sql. " . mysqli_error($db);
	echo "<script type=\"text/javascript\">alert(\"$msg\");</script>";
	header("Refresh: 0,url=tabs11.php");
}
}
else{
	$msg = "No such Employee id exists";
	echo "<script type=\"text/javascript\">alert(\"$msg\");</script>";
	header("Refresh: 0,url=tabs11.php");
}
mysqli_close($db); 
?>