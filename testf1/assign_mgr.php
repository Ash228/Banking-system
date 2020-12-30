<?php
 session_start();
 error_reporting(E_ALL ^ E_WARNING ^ E_NOTICE);
include 'dbcon.php';
error_reporting(E_ALL ^ E_WARNING ^ E_NOTICE ^ E_STRICT);

$empid            = mysqli_real_escape_string($db, $_POST['empid']);
$ifsc            = mysqli_real_escape_string($db, $_POST['ifsc']);

$result1 = mysqli_query($db, "SELECT ifsc FROM employee WHERE empid = '$empid'") or die('SQL Error: ' . mysqli_error($db));
$row1 = mysqli_fetch_array($result1);
$ifsc1 = $row1[0];
$ifsc1 = mysqli_real_escape_string($db, $ifsc1);

if($ifsc1){
if($ifsc==$ifsc1){
$sql    = "UPDATE branch set mgrid='$empid'";

if ($stmt = mysqli_prepare($db, $sql)) {
    mysqli_stmt_bind_param($stmt, "i",$empid);
	
    if (mysqli_stmt_execute($stmt)){
		$msg = "Manager assigned";
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
}}
else{
	$msg = "Employee does not belong to your branch";
	echo "<script type=\"text/javascript\">alert(\"$msg\");</script>";
	header("Refresh: 0,url=tabs11.php");
}
}
else{
    $msg = "Branch does not exist";
	echo "<script type=\"text/javascript\">alert(\"$msg\");</script>";
	header("Refresh: 0,url=tabs11.php");
}
mysqli_close($db); 
?>