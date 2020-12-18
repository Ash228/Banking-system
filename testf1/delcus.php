 <?php
include 'dbcon.php';
error_reporting(E_ALL ^ E_WARNING ^ E_NOTICE ^ E_STRICT);
$custid = mysqli_real_escape_string($db, $_POST['custid']);
$sql    = "DELETE FROM customer WHERE custid='$custid'";
if ($stmt = mysqli_prepare($db, $sql)) {
    mysqli_stmt_bind_param($stmt, "i",$custid);
	$res=mysqli_stmt_execute($stmt);
    if (mysqli_stmt_affected_rows($stmt)==1){
		$msg = "Customer info along with related account and deposit is deleted";
		echo "<script type=\"text/javascript\">alert(\"$msg\");</script>";
		header("Refresh: 0,url=tabs10.php");
	} 
	else {
		$msg = "No such customer id exists";
		echo "<script type=\"text/javascript\">alert(\"$msg\");</script>";
		header("Refresh: 0,url=tabs10.php");
	}
}
else {
    $msg = "ERROR: Could not execute query: $sql. " . mysqli_error($db);
	echo "<script type=\"text/javascript\">alert(\"$msg\");</script>";
	header("Refresh: 0,url=tabs10.php");
}
mysqli_close($db); 
?>