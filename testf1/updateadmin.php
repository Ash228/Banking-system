<?php
session_start();
include 'dbcon.php';
error_reporting(E_ALL ^ E_WARNING);
$adminid = $_SESSION['adminid'];
/*$name    = mysqli_real_escape_string($db, $_POST['name']);
$bdate   = mysqli_real_escape_string($db, $_POST['bdate']);
$phone   = mysqli_real_escape_string($db, $_POST['phone']);
$mail    = mysqli_real_escape_string($db, $_POST['mail']);
$gender  = mysqli_real_escape_string($db, $_POST['gender']);

// Attempt insert query execution
$sqli    = "UPDATE admin set name='$name', phone=$phone, email='$mail', bdate='$bdate', gender='$gender' where adminid='$adminid'";
*/
$var = '';
$val_arr = array();
$query = "UPDATE admin SET";
$comma = " ";
foreach($_POST as $key => $val) {
    if( !empty($val) && $key!="adminid") {
        $query .= $comma . $key . " = '" . mysqli_real_escape_string($db, $val);
        $comma = "', ";
       // echo "<script type=\"text/javascript\">alert(\"$val,$key\");</script>";
        $var .= 's';
        array_push($val_arr, $val);
    }
}
$query = $query . "' WHERE adminid = '".$adminid."' ";

if ($stmti = mysqli_prepare($db, $query)) {
    //mysqli_stmt_bind_param($stmti, "isisss", $adminid, $name, $phone, $mail, $bdate, $gender);
    mysqli_stmt_bind_param($stmti, $var, $val_arr);
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