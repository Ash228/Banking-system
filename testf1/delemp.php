 <?php
 session_start();
 error_reporting(E_ALL ^ E_WARNING ^ E_NOTICE);
include 'dbcon.php';
error_reporting(E_ALL ^ E_WARNING ^ E_NOTICE ^ E_STRICT);

$empid    = $_SESSION['empid'];
$empid    = mysqli_real_escape_string($db, $empid);

$result1 = mysqli_query($db, "SELECT ifsc FROM employee WHERE empid = '$empid'") or die('SQL Error: ' . mysqli_error($db));
$row1 = mysqli_fetch_array($result1);
$ifsc = $row1[0];
$ifsc = mysqli_real_escape_string($db, $ifsc);
echo "<script type=\"text/javascript\">alert(\"$empid\");</script>";
$empidd = mysqli_real_escape_string($db, $_POST['empidd']);
echo "<script type=\"text/javascript\">alert(\"$empidd\");</script>";
$result1 = mysqli_query($db, "SELECT ifsc FROM employee WHERE empid = '$empidd'") or die('SQL Error: ' . mysqli_error($db));
$row1 = mysqli_fetch_array($result1);
$ifsci = $row1[0];
$ifsci = mysqli_real_escape_string($db, $ifsci);
echo "<script type=\"text/javascript\">alert(\"$ifsc\");</script>";
echo "<script type=\"text/javascript\">alert(\"$ifsci\");</script>";
if($ifsc==$ifsci){
$sql    = "DELETE FROM employee WHERE empid='$empidd'";

if ($stmt = mysqli_prepare($db, $sql)) {
    mysqli_stmt_bind_param($stmt, "i",$empidd);
	$res=mysqli_stmt_execute($stmt);
	
    if (mysqli_stmt_affected_rows($stmt)==1){
		$msg = "Employee removed";
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
}}
else{
	$msg = "Employee does not belong to your branch";
	echo "<script type=\"text/javascript\">alert(\"$msg\");</script>";
	header("Refresh: 0,url=tabs10.php");
}
mysqli_close($db); 
?>