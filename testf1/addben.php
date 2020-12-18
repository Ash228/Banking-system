 <?php
session_start();
include 'dbcon.php';
error_reporting(E_ALL ^ E_WARNING);

$custid = mysqli_real_escape_string($db, $_SESSION['custid']);
$taccno = mysqli_real_escape_string($db, $_POST['taccno']);
$ifsc   = mysqli_real_escape_string($db, $_POST['tifsc']);
$bname  = mysqli_real_escape_string($db, $_POST['bname']);

$result1 = mysqli_query($db, "SELECT ifsc FROM account WHERE accno = '$taccno'") or die('SQL Error: ' . mysqli_error($db));
$row1 = mysqli_fetch_array($result1);
if ($ifsc != $row1[0]) {
    $msg = "entered ifsc doesnt match account info";
    echo "<script type=\"text/javascript\">alert(\"$msg\");</script>";
    header("Refresh: 0,url=tabs1.php");
}
else {
	$sqli = "INSERT into beneficiary VALUES ('$taccno','$ifsc','$bname','$custid')";
	if ($stmti = mysqli_prepare($db, $sqli)) {
		mysqli_stmt_bind_param($stmti, "issi", $taccno, $ifsc, $bname, $custid);
    
		// Attempt to execute the prepared statement
		if (mysqli_stmt_execute($stmti)) {
			$msg = "Beneficiary added successfully";
			echo "<script type=\"text/javascript\">alert(\"$msg\");</script>";
			header("Refresh: 0,url=tabs1.php");
		} else {
			$msg = "ERROR: Could not execute query: $sql. " . mysqli_error($db);
			echo "<script type=\"text/javascript\">alert(\"$msg\");</script>";
			header("Refresh: 0,url=tabs1.php");
		}
	} else {
		$msg = "ERROR: Could not execute query: $sql. " . mysqli_error($db);
		echo "<script type=\"text/javascript\">alert(\"$msg\");</script>";
		header("Refresh: 0,url=tabs1.php");
	}
}
mysqli_stmt_close($stmti);
mysqli_close($db); 
?>