<?php 
session_start(); 
if($_SESSION['status'] != "Active") 
{
    header("location:  index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Raleway" />
  <link rel="stylesheet" type="text/css" href="s3.css" />
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
  body{
    background-image : url('business-data.png');
    background-repeat : no-repeat;
    background-attachment: fixed;
    background-size: 60% 90%;
    background-position : bottom right;
  }
  </style>
	<script>
		/* Open when someone clicks on the span element */
		function openNav() {
			document.getElementById("myNav").style.width = "100%";
		}

		/* Close when someone clicks on the "x" symbol inside the overlay */
		function closeNav() {
			document.getElementById("myNav").style.width = "0%";
		}
	</script>
  <style>
  body{
    background-image : url('business-data.png');
    background-repeat : no-repeat;
    background-attachment: fixed;
    background-size: 50% 90%;
    background-position : bottom right;
  }
  </style>
</head>
<body>

<div class="topnav">
  <a onclick="document.getElementById('id01').style.display='block'" >Account Info</a>
  <a onclick="document.getElementById('id03').style.display='block'" >Deposit Info</a>
  <script>/*<a onclick="document.getElementById('id05').style.display='block'" >View Profile</a>
  <a onclick="document.getElementById('id02').style.display='block'" >Update Info</a> */</script>
  <div class="dropdown">
    <button class="dropbtn">Profile<i class="fa fa-caret-down"></i></button>
    <div class="dropdown-content">
      <a onclick="document.getElementById('id05').style.display='block'" >View Profile</a>
      <a onclick="document.getElementById('id02').style.display='block'" >Update Profile</a>
    </div>
  </div>
  <div class="dropdown">
    <button class="dropbtn">Reports<i class="fa fa-caret-down"></i></button>
    <div class="dropdown-content"> 
      <a href="fullrep.php">Account Transaction Report</a> 
      <a href="tday.php">Account Transactions in last 30 days</a> 
      <a href="fday.php">Account Transactions in last 15 days</a> 
      <a href="deprep.php">Interest Added to Deposits</a> 
      <a href="loans.php">Active Loans</a> 
    </div>
  </div>
  <a onclick="document.getElementById('id06').style.display='block'" >Add Beneficiary</a>
  <a onclick="document.getElementById('id04').style.display='block'" >Funds Transfer</a> 
  <a onclick="window.location.href = 'logout.php';"class="w3-right">Logout</a>
</div>

<div class="w3-row">
  <div class="w3-col w3-container m4 l3 w3-blue" style="max-width: 340px">
  <?php
    error_reporting(E_ALL ^ E_WARNING ^E_NOTICE);
    include 'dbcon.php';
    $custid = $_SESSION['custid'];
    //prevent mysql injection
    $custid= stripcslashes($custid);
    $custid = mysqli_real_escape_string($db, $custid);
    $query = "SELECT c.name, c.phone, c.gender, b.name, a.blocked from customer c, branch b, account a
              WHERE c.custid='$custid' and a.custid='$custid' and b.ifsc=a.ifsc";
    $result = mysqli_query($db, $query) or die('SQL Error: ' . mysqli_error($db));
    $row1 = mysqli_fetch_array($result);
    $query = "SELECT idloan from loan where custid='$custid'";
    $result = mysqli_query($db, $query) or die('SQL Error: ' . mysqli_error($db));
    $row2 = mysqli_fetch_array($result);
    $query = "SELECT iddeposit from deposits where custid='$custid'";
    $result = mysqli_query($db, $query) or die('SQL Error: ' . mysqli_error($db));
    $row3 = mysqli_fetch_array($result);
    mysqli_close($db);
  ?>

  <br>
  <?php if(strcmp($row1[2], "Male")==0) { echo '<img src="male.jpg" alt="profile" class="w3-center" style="padding-left:60px">'; }
        else { echo '<img src="female.jpg" alt="profile" class="w3-center" style="padding-left:60px">';} ?><br><br>
  <table class="w3-right-align"> 
    <tr>
      <td>Name:</td>
      <td><?php echo "$row1[0]" ?></td>
    </tr>
    <tr> 
      <td>Phone: </td>
    <td><?php echo "$row1[1]" ?></td>
    </tr>
    <tr>
      <td>Branch: </td>
      <td><?php echo "$row1[3]" ?></td>
    <tr>
      <td>Account status: </td>
      <td><?php if($row1[4]==0) { echo 'Open'; } else { echo 'Blocked'; } ?></td>
    </tr>
    <tr>
      <td>Deposit status: </td>
      <td><?php if($row3[0]==null) { echo 'Inactive'; } else { echo 'Active'; } ?></td>
    </tr>
    <tr>
      <td>Loan status: </td>
      <td><?php if($row2[0]==null) { echo 'Inactive'; } else { echo 'Active'; } ?></td>
  </table>
</div>
</div>
<div id="id03" class="modal">
  <?php
    error_reporting(E_ALL ^ E_WARNING ^E_NOTICE);
    include 'dbcon.php';
    $custid = $_SESSION['custid'];
	  $depid = $_SESSION['depid'];
    //prevent mysql injection
    $custid= stripcslashes($custid);
    $custid = mysqli_real_escape_string($db, $custid);
    $query = "select * from deposits where custid='$custid' and iddeposit='$depid'" ;
    $result = mysqli_query($db, $query) or die('SQL Error: ' . mysqli_error($db));
    $row = mysqli_fetch_array($result);
    mysqli_close($db);
  ?>

  <form class="modal-content animate">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id03').style.display='none'" class="close" title="Close">&times;</span>
    </div>
    <div class="container">
      <h2 style="text-align: center; font-size: 20px; ">Details of your deposit</h2>
      <label><b>Customer id</b></label><br>
      <input type="number" value="<?php echo "$row[4]"; ?>" disabled><br>

      <label><b>Deposit ID</b></label><br>
      <input type="number" value= "<?php echo "$depid"; ?>" disabled><br>

      <label><b>Amount</b></label><br>
      <input type="number" value= "<?php echo "$row[5]"; ?>" disabled><br>

		  <label><b>Period(years)</b></label><br>
      <input type="number" value= "<?php echo "$row[1]"; ?>" disabled><br>
	  
      <label><b>Interest</b></label><br>
      <input type="text"value= "<?php echo "$row[2]";echo "%"; ?>" disabled><br>

      <label><b>IFSC</b></label><br>
      <input type="text" value= "<?php echo "$row[3]";?>" disabled><br>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="window.location.href= 'index.php'" class="cancelbtn">Logout</button>
    </div>

  </form>
</div>

<div id="id01" class="modal">
  <?php
    error_reporting(E_ALL ^ E_WARNING ^E_NOTICE);
    include 'dbcon.php';
    $custid = $_SESSION['custid'];
    $accno = $_SESSION['accno'];
	
    //prevent mysql injection
    $custid= stripcslashes($custid);
    $accno= stripcslashes($accno);

    $custid = mysqli_real_escape_string($db, $custid);
    $accno = mysqli_real_escape_string($db, $accno);
    $query = "select balance, interest,ifsc from account where custid=$custid and accno=$accno" ;
    $result = mysqli_query($db, $query) or die('SQL Error: ' . mysqli_error($db));
    $row = mysqli_fetch_array($result);
    mysqli_close($db);
  ?>
  <form class="modal-content animate">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close">&times;</span>
    </div>
    <div class="container">
      <h2 style="text-align: center; font-size: 20px; ">Details of your account</h2>
      <label><b>Customer id</b></label><br>
      <input type="number" value="<?php echo "$custid"; ?>" disabled><br>

      <label><b>Account number</b></label><br>
      <input type="number" value= "<?php echo "$accno"; ?>" disabled><br>

      <label><b>Balance</b></label><br>
      <input type="number" value= "<?php echo "$row[0]"; ?>" disabled><br>

      <label><b>Interest</b></label><br>
      <input type="text"value= "<?php echo "$row[1]";echo "%"; ?>" disabled><br>

      <label><b>IFSC</b></label><br>
      <input type="text" value= "<?php echo "$row[2]";?>" disabled><br>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="window.location.href= 'index.php'" class="cancelbtn">Logout</button>
    </div>

  </form>
</div>

<div id="id05" class="modal">
  <?php
  error_reporting(E_ALL ^ E_WARNING ^E_NOTICE);
    include 'dbcon.php';
    $custid = $_SESSION['custid'];
    //prevent mysql injection
    $custid= stripcslashes($custid);

    $custid = mysqli_real_escape_string($db, $custid);
    $query = "SELECT * from customer where custid='$custid'" ;
    $result = mysqli_query($db, $query) or die('SQL Error: ' . mysqli_error($db));
    $row = mysqli_fetch_array($result);
  ?>
<form class="modal-content animate">
  <div class="imgcontainer">
    <span onclick="document.getElementById('id05').style.display='none'" class="close" title="Close">&times;</span>
  </div>
  <div class="container">
      <h6 style="text-align: center; font-size: 20px; ">View Profile</h6>

          <label for="name"><b>Name</b></label><br>
          <input type="text" value="<?php echo "$row[1]"; ?>" name="name" disabled><br>

          <label for="address"><b>Address</b></label><br>
          <input type="text" value="<?php echo "$row[2]"; ?>" name="address" disabled><br>

          <label for="phone"><b>Phone number</b></label><br>
          <input type="number" value="<?php echo "$row[3]"; ?>" name="phone" disabled><br>

          <label for="mail"><b>Email id</b></label><br>
          <input type="email" value="<?php echo "$row[4]"; ?>" name="mail" disabled><br>

          <label for="bdate"><b>Birth date</b></label><br>
          <input type="date" value="<?php echo "$row[5]"; ?>" name="bdate" disabled><br>
		  
		  <label for="gender"><b>Gender</b></label><br>
          <input type="text" value="<?php echo "$row[7]"; ?>" name="bdate" disabled><br>

        </div>
        <div class="container" style="background-color:#f1f1f1">
          <button type="button" onclick="window.location.href= 'index.php'" class="cancelbtn">Logout</button>
        </div>
      </form>
    </div>
<div id="id02" class="modal">

  <form class="modal-content animate" method="POST" action="updatecust.php" >
    <div class="imgcontainer">
      <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close">&times;</span>
    </div>
    <div class="container">
        <h3 style="text-align: center; font-size: 20px; ">Update Your Details</h3>

          <label for="name"><b>Name</b></label><br>
          <input type="text" name="name" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="45"><br>

          <label for="address"><b>Address</b></label><br>
          <input type="text" name="address" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="100" ><br>

          <label for="phone"><b>Phone number</b></label><br>
          <input type="number" name="phone" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="10" minlength = "10" ><br>

          <label for="email"><b>Email id</b></label><br>
          <input type="email" name="email" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="35" ><br>

          <label for="bdate"><b>Birth date</b></label><br>
          <input type="date" name="bdate" ><br>
		  
		  <label for="bdate"><b>Gender</b></label><br>
          <input type="text" name="gender" ><br>

          <button type="submit" class="bu">Submit</button><button type="reset" class="bu">Reset</button>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="window.location.href= 'index.php'" class="cancelbtn">Logout</button>
    </div>

  </form>
</div>

<div id="id06" class="modal">
  <form class="modal-content animate" method="POST" action="addben.php" >
    <div class="imgcontainer">
      <span onclick="document.getElementById('id06').style.display='none'" class="close" title="Close">&times;</span>
    </div>
    <div class="container">
      <h5 style="text-align: center; font-size: 20px; ">Add Beneficiary</h5>
      <br>
	 
      <label for="taccno"><b>Account number</b></label><br>
      <input type="number" placeholder="Enter account number" name="taccno" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="13" minlength="13" required ><br>

		<label for="tifsc"><b>IFSC</b></label><br>
      <input type="text" placeholder="Enter branch IFSC" name="tifsc" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="11" minlength="11" required><br>
	  
      <label for="bname"><b>Beneficiary Name</b></label><br>
      <input type="text" placeholder="Enter beneficiary name" name="bname" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="10" required><br>

      <button type="submit" class="bu">Submit</button><button type="reset" class="bu">Reset</button>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="window.location.href= 'index.php'" class="cancelbtn">Logout</button>
    </div>

  </form>
</div>
<div id="id04" class="modal">
	  
	  <?php
    error_reporting(E_ALL ^ E_WARNING ^E_NOTICE);
    include 'dbcon.php';
    $custid = $_SESSION['custid'];
    $custid= stripcslashes($custid);
    $custid = mysqli_real_escape_string($db, $custid);
	$query="select * from beneficiary where custid='$custid'";
    $result=mysqli_query($db,$query)  or die('SQL Error: ' . mysqli_error($db));
	$opt="<label for='t1accno'><b>Select beneficiary</b></label><br><select name='t1accno'><option value='none' selected disabled hidden>Select an Option</option> ";
	while($row=mysqli_fetch_assoc($result)){
		$opt.="<option value='{$row['taccno']}'>{$row['bname']}</option>";
	}
	$opt.="</select>";

  ?>
  <form class="modal-content animate" method="POST" action="trans.php" >
    <div class="imgcontainer">
      <span onclick="document.getElementById('id04').style.display='none'" class="close" title="Close">&times;</span>
    </div>
    <div class="container">
      <h5 style="text-align: center; font-size: 20px; ">Transfer</h5>
      <br>
	<?php echo $opt;?>
  <br><b>OR</b><br><br>
      <label for="taccno"><b>Account number</b></label><br>
      <input type="number" placeholder="Enter account number" name="taccno" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="13" minlength="13"><br>

		<label for="tifsc"><b>IFSC</b></label><br>
      <input type="text" placeholder="Enter branch IFSC" name="tifsc" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="11" minlength="11"><br>
	  
      <label for="amount"><b>Amount</b></label><br>
      <input type="number" placeholder="Enter amount" name="amount" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="10" required><br>

		<label for="mpin"><b>MPIN</b></label>
        <input type="password" placeholder="Enter MPIN" name="mpin" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"maxlength="4" minlength="4" required>
     
	 <button type="submit">Submit</button>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="window.location.href= 'index.php'" class="cancelbtn">Logout</button>
    </div>

  </form>
</div>


    <!-- The overlay -->
<div id="myNav" class="overlay">

  <!-- Button to close the overlay navigation -->
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

  <!-- Overlay content -->
  <div class="overlay-content">
    <a href="fullrep.php">Account Report</a>
    <a href="tday.php">Account Report Last 30 days</a>
    <a href="fday.php">Account Report Last 15 days</a>
	<a href="deprep.php">Deposit Interest Report</a>
  </div>

</div>


</body>
</html>
