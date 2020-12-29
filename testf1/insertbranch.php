<?php
session_start();
error_reporting(E_ALL ^ E_WARNING ^ E_NOTICE);
include 'dbcon.php';
$ifsc              = mysqli_real_escape_string($db, $_POST['ifsc']);
$name              = mysqli_real_escape_string($db, $_POST['name']);
$address           = mysqli_real_escape_string($db, $_POST['address']);
$phone             = mysqli_real_escape_string($db, $_POST['phone']);
$mgrid             = mysqli_real_escape_string($db, $_POST['mgrid']);

$result1 = mysqli_query($db, "SELECT * FROM branch WHERE ifsc = '$ifsc'") or die('SQL Error: ' . mysqli_error($db));
$row1 = mysqli_fetch_array($result1);
$ifsc1 = $row1['ifsc'];
$ifsc1 = mysqli_real_escape_string($db, $ifsc1);

if($ifsc1!=$ifsc){

    $sqli = "INSERT INTO branch(ifsc, name, address,phone) VALUES ('$ifsc', '$name', '$address','$phone')";

    if ($stmti = mysqli_prepare($db, $sqli)) {
            mysqli_stmt_bind_param($stmti, "sssi", $ifsc, $name, $address,$phone);
            if (mysqli_stmt_execute($stmti)) {
                $msg = "Branch added successfully";
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
}
else{
    $msg = "ERROR: Branch already exists";
	echo "<script type=\"text/javascript\">alert(\"$msg\");</script>";
	header("Refresh: 0,url=tabs11.php");
}

mysqli_stmt_close($stmti);
mysqli_stmt_close($stmt);
mysqli_close($db);
?>