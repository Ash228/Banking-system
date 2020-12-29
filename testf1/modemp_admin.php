<?php
session_start();
error_reporting(E_ALL ^ E_WARNING ^ E_NOTICE);
include 'dbcon.php';

$empidi            = mysqli_real_escape_string($db, $_POST['empid']);
$var = '';
$val_arr = array();
$query = "UPDATE employee SET";
$comma = " ";
foreach($_POST as $key => $val) {
    if( !empty($val) && $key!="empid") {
        $query .= $comma . $key . " = " . mysqli_real_escape_string($db, $val);
        $comma = ", ";
       // echo "<script type=\"text/javascript\">alert(\"$val,$key\");</script>";
        $var .= 's';
        array_push($val_arr, $val);
    }
}
//echo "<script type=\"text/javascript\">alert(\"$query\");</script>";
$query = $query . " WHERE empid = '".$empidi."' ";
//echo "<script type=\"text/javascript\">alert(\"$query\");</script>";
if ($stmti = mysqli_prepare($db, $query)) {
    //mysqli_stmt_bind_param($stmti, "ississsssi", $empidi, $name, $address, $phone, $mail, $bdate, $gender, $ifsc, $role, $salary);
    mysqli_stmt_bind_param($stmti, $var, $val_arr);
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