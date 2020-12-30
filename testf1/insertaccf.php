<?php
session_start();
include 'dbcon.php';
error_reporting(E_ALL ^ E_WARNING);
$custid = mysqli_real_escape_string($db, $_POST['custid']);
$amount = mysqli_real_escape_string($db, $_POST['amount']);
$period = mysqli_real_escape_string($db, $_POST['period']);
$roi    = $period + 7;

$empid = $_SESSION['empid'];
$empid = mysqli_real_escape_string($db, $empid);
$result1 = mysqli_query($db, "SELECT * FROM employee WHERE empid = '$empid'") or die('SQL Error: ' . mysqli_error($db));
$row1 = mysqli_fetch_array($result1);
$ifsc = $row1['ifsc'];
echo "<script type=\"text/javascript\">alert(\"$ifsc\");</script>";

$ifsc = mysqli_real_escape_string($db, $ifsc);

// Attempt insert query execution
$sql = "INSERT INTO deposits(period,roi,bifsc,custid,amount) VALUES ('$period', '$roi', '$ifsc','$custid','$amount')";

if ($stmt = mysqli_prepare($db, $sql)) {
    mysqli_stmt_bind_param($stmt, "iisii", $period, $roi, $ifsc, $custid, $amount);
    if (mysqli_stmt_execute($stmt)) {
        $msg = "deposit added successfully";
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

mysqli_stmt_close($stmt);
mysqli_close($db);
?>