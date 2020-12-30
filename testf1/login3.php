<?php
session_start();
include 'dbcon.php';
$_SESSION['adminid'] = $_POST['usname'];
$adminid             = $_SESSION['adminid'];
$password          = $_POST['psw'];
$password          = md5($password);
//prevent mysql injection
$adminid             = stripcslashes($adminid);
$password          = stripcslashes($password);

$adminid    = mysqli_real_escape_string($db, $adminid);
$password = mysqli_real_escape_string($db, $password);

$result = mysqli_query($db, "SELECT * FROM admin WHERE adminid = '$adminid' and password = '$password'") or die('SQL Error: ' . mysqli_error($db));
$row = mysqli_fetch_array($result);

if (($row['adminid'] == $adminid) && ($row['password'] == $password)) {
    $_SESSION['status'] = "Active";
    header("location: tabs11.php");
} else {
    $msg = "Your Username or Password is invalid";
	echo "<script type=\"text/javascript\">alert(\"$msg\");</script>";
	header("Refresh: 0,url=index.php");
}
mysqli_close($db);
?> 