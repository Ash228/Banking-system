<?php
include 'dbcon.php';
error_reporting(E_ALL ^ E_WARNING ^ E_NOTICE ^ E_STRICT);
$ifsc = mysqli_real_escape_string($db, $_POST['ifsc']);
$sql    = "DELETE FROM branch WHERE ifsc='$ifsc'";
if ($stmt = mysqli_prepare($db, $sql)) {
    mysqli_stmt_bind_param($stmt, "s",$ifsc);
	$res=mysqli_stmt_execute($stmt);
    if (mysqli_stmt_affected_rows($stmt)==1){
		$msg = "Branch and its associated records are deleted";
		echo "<script type=\"text/javascript\">alert(\"$msg\");</script>";
		header("Refresh: 0,url=tabs11.php");
	} 
	else {
		$msg = "No such branch exists";
		echo "<script type=\"text/javascript\">alert(\"$msg\");</script>";
		header("Refresh: 0,url=tabs11.php");
	}
}
else {
    $msg = "ERROR: Could not execute query: $sql. " . mysqli_error($db);
	echo "<script type=\"text/javascript\">alert(\"$msg\");</script>";
	header("Refresh: 0,url=tabs11.php");
}
mysqli_close($db); 
?>