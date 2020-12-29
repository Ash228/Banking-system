<?php
session_start();
error_reporting(E_ALL ^ E_WARNING ^ E_NOTICE);
include 'dbcon.php';

$empidi            = mysqli_real_escape_string($db, $_POST['empidi']);
$name              = mysqli_real_escape_string($db, $_POST['name']);
$address           = mysqli_real_escape_string($db, $_POST['address']);
$phone             = mysqli_real_escape_string($db, $_POST['phone']);
$mail              = mysqli_real_escape_string($db, $_POST['mail']);
$bdate             = mysqli_real_escape_string($db, $_POST['bdate']);
$gender            = mysqli_real_escape_string($db, $_POST['gender']);
$ifsc              = mysqli_real_escape_string($db, $_POST['ifsc']);
function random_password($length = 10)
{
    $alphabet    = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890!@#$%^&*()_-=+;:,.?';
    $pass        = array(); //remember to declare $pass as an array
    $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
    for ($i = 0; $i < 8; $i++) {
        $n      = rand(0, $alphaLength);
        $pass[] = $alphabet[$n];
    }
    return implode($pass); //turn the array into a string
}

$psw = random_password(8);
$psw = md5($psw);
$psw = mysqli_real_escape_string($db, $psw);

$role  = mysqli_real_escape_string($db, $_POST['role']);
$salary   = mysqli_real_escape_string($db, $_POST['salary']);

$sqli = "INSERT INTO employee VALUES ('$empidi', '$name', '$address','$phone','$mail','$psw','$bdate','$salary','$ifsc','$gender','$role')";

if ($stmti = mysqli_prepare($db, $sqli)) {
        mysqli_stmt_bind_param($stmti, "ississsisss", $empidi, $name, $address,$phone,$mail,$psw,$bdate,$salary,$ifsc,$gender,$role);
        if (mysqli_stmt_execute($stmti)) {
            $msg = "Employee added Successfully";
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
mysqli_stmt_close($stmt);
mysqli_close($db);
?>