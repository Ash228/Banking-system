<?php
session_start();
include 'dbcon.php';
error_reporting(E_ALL ^ E_WARNING);
$empid   = mysqli_real_escape_string($db, $_SESSION['empid']);

/* $name    = mysqli_real_escape_string($db, $_POST['name']);
$address = mysqli_real_escape_string($db, $_POST['address']);
$phone   = mysqli_real_escape_string($db, $_POST['phone']);
$mail    = mysqli_real_escape_string($db, $_POST['mail']);
$bdate   = mysqli_real_escape_string($db, $_POST['bdate']);
$gender  = mysqli_real_escape_string($db, $_POST['gender']);
// Attempt insert query execution
$sqli    = "UPDATE employee set name='$name', address='$address', phone=$phone, email='$mail', bdate='$bdate', gender='$gender' where empid='$empid'";
*/
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
$query = $query . " WHERE empid = '".$empid."' ";

if ($stmti = mysqli_prepare($db, $query)) {
    //mysqli_stmt_bind_param($stmti, "ississs", $empid, $name, $address, $phone, $mail, $bdate, $gender);
    mysqli_stmt_bind_param($stmti, $var, $val_arr);
    if (mysqli_stmt_execute($stmti)) {
        $msg = "Info updated!";
		echo "<script type=\"text/javascript\">alert(\"$msg\");</script>";
		header("Refresh: 0,url=tabs10.php");
    } else {
        $msg = "ERROR: Could not execute query: $sql. " . mysqli_error($db);
		echo "<script type=\"text/javascript\">alert(\"$msg\");</script>";
		header("Refresh: 0,url=tabs10.php");
    }
} else {
    $msg = "ERROR: Could not execute query: $sql. " . mysqli_error($db);
	echo "<script type=\"text/javascript\">alert(\"$msg\");</script>";
	header("Refresh: 0,url=tabs10.php");
}
mysqli_stmt_close($stmti);
mysqli_close($db);
?>