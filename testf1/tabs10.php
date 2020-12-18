<?php session_start(); 
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
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
    <body>
      <div class="sidenav">
        <br><br>
        <a onclick="document.getElementById('id04').style.display='block'" >View Profile</a> <br>
        <a onclick="document.getElementById('id05').style.display='block'" >Edit profile</a>  <br>
        <a onclick="document.getElementById('id01').style.display='block'" >Add new Customer</a> <br>
        <a onclick="document.getElementById('id02').style.display='block'" >Delete Customer</a>  <br>
        <a onclick="document.getElementById('id03').style.display='block'" >Add new Deposit</a>  <br>
        <a onclick="openNav()">Transaction Report</a> <br>
        <a href="loanrep.php">Loan Report</a><br>
        <a onclick="window.location.href = 'index.php';" >Logout</a>
      </div>
      <div id="id04" class="modal">
        <?php
        error_reporting(E_ALL ^ E_WARNING ^E_NOTICE);
          include 'dbcon.php';
          $empid = $_SESSION['empid'];
          $empid = mysqli_real_escape_string($db, $empid);
          $query = "SELECT * from employee where empid='$empid'" ;
          $result = mysqli_query($db, $query) or die('SQL Error: ' . mysqli_error($db));
          $row = mysqli_fetch_array($result);
        ?>
      <form class="modal-content animate">
        <div class="imgcontainer">
          <span onclick="document.getElementById('id04').style.display='none'" class="close" title="Close">&times;</span>
        </div>
        <div class="container">
            <h6 style="text-align: center; font-size: 20px; ">View Profile</h6>

            <label for="id"><b>Employee id</b></label><br>
            <input type="number" value="<?php echo "$row[0]"; ?>" name="id" disabled><br>

                <label for="name"><b>Name</b></label><br>
                <input type="text" value="<?php echo "$row[1]"; ?>" name="name" disabled><br>

                <label for="address"><b>Address</b></label><br>
                <input type="text" value="<?php echo "$row[2]"; ?>" name="address" disabled><br>

                <label for="phone"><b>Phone number</b></label><br>
                <input type="number" value="<?php echo "$row[3]"; ?>" name="phone" disabled><br>

                <label for="mail"><b>Email id</b></label><br>
                <input type="email" value="<?php echo "$row[4]"; ?>" name="mail"disabled><br>

                <label for="bdate"><b>Birth date</b></label><br>
                <input type="date" value="<?php echo "$row[6]"; ?>" name="bdate" disabled><br>

                <label for="gender"><b>Gender</b></label><br>
                <input type="text" value="<?php echo "$row[7]"; ?>" name="gender" disabled><br>

                <label for="role"><b>Role</b></label><br>
                <input type="text" value="<?php echo "$row[8]"; ?>" name="role" disabled><br>

                <label for="salary"><b>Salary</b></label><br>
                <input type="number" value="<?php echo "$row[9]"; ?>" name="salary" disabled><br>

                <label for="bank"><b>Branch IFSC</b></label><br>
                <input type="text" value="<?php echo "$row[10]"; ?>" name="bank" ><br>

              </div>
              <div class="container" style="background-color:#f1f1f1">
                <button type="button" onclick="window.location.href= 'index.php'" class="cancelbtn">Logout</button>
              </div>
            </form>
          </div>
          <div id="id05" class="modal" >
          <form class="modal-content animate" method="POST" action="updateemp.php">
            <div class="imgcontainer">
              <span onclick="document.getElementById('id05').style.display='none'" class="close" title="Close">&times;</span>
            </div>
            <div class="container">
                <h1 style="text-align: center; font-size: 20px; ">Edit Profile</h1>

                    <label for="name"><b>Name</b></label><br>
                    <input type="text" placeholder="Enter Name"oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="45" required name="name" ><br>

                    <label for="address"><b>Address</b></label><br>
                    <input type="text" placeholder="Enter Address" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="100" required name="address" ><br>

                    <label for="phone"><b>Phone number</b></label><br>
                    <input type="number" placeholder="Enter phone number" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="10" required name="phone" ><br>

                    <label for="mail"><b>Email id</b></label><br>
                    <input type="email" placeholder="Enter email id" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="35" required name="mail"><br>

                    <label for="bdate"><b>Birth date</b></label><br>
                    <input type="date"  placeholder="Enter date of birth" name="bdate" required><br>

                    <button type="submit" class="bu">Submit</button><button type="reset" class="bu">Reset</button>
                  </div>
                  <div class="container" style="background-color:#f1f1f1">
                    <button type="button" onclick="window.location.href= 'index.php'" class="cancelbtn">Logout</button>
                  </div>
                </form>
              </div>
      <div id="id01" class="modal">
        <form class="modal-content animate" method="POST" action="insertcust.php">
          <div class="imgcontainer">
            <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close">&times;</span>
          </div>
          <div class="container">
            <h2 style="text-align: center; font-size: 20px; ">Add new Customer</h2>
            <label for="custid"><b>Customer id </b></label><br>
            <input type="number" placeholder="Enter Customer id" name="custid" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="8" required><br>

            <label for="name"><b>Name</b></label><br>
            <input type="text" placeholder="Enter full name" name="name" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="45" required><br>

            <label for="address"><b>Address</b></label><br>
            <input type="text" placeholder="Enter address" name="address" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="100" required><br>

            <label for="phone"><b>Phone number</b></label><br>
            <input type="number" placeholder="Enter phone number" name="phone" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="10" required><br>

            <label for="mail"><b>Email id</b></label><br>
            <input type="email" placeholder="Enter email address" name="mail" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="35" ><br>

            <label for="bdate"><b>Birth date</b></label><br>
            <input type="date" placeholder="Enter birth date" name="bdate" required><br>

            <label for="gender"><b>Gender</b></label><br>
            <input type="text" placeholder="Enter gender" name="gender" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="10" required><br>

            <label for="accno"><b>Account number</b></label><br>
            <input type="number" placeholder="Enter account number" name="accno" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="13" required><br>

            <label for="balance"><b>Balance</b></label><br>
            <input type="number" placeholder="Enter balance" name="balance" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="10" required><br>

            <button type="submit" class="bu">Submit</button><button type="reset" class="bu">Reset</button>
            <br> <br>
            <p>
              Starting four digits of Account number should be ending four digits of IFSC
            </p>

          </div>
          <div class="container" style="background-color:#f1f1f1">
            <button type="button" onclick="window.location.href= 'index.php'" class="cancelbtn">Logout</button>
          </div>
        </form>

      </div>

      <div id="id02" class="modal">

        <form class="modal-content animate" method="POST" action="delcus.php" >
          <div class="imgcontainer">
            <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close">&times;</span>
          </div>
          <div class="container">
            <h3 style="text-align: center; font-size: 20px; ">Delete Customer</h3>
            <label for="custid"><b>Customer id</b></label><br>
            <input type="number" placeholder="Enter customer id" name="custid" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="8" required><br>

            <button type="submit" class="bu">Submit</button><button type="reset" class="bu">Reset</button>
            <br> <br>
          </div>
          <div class="container" style="background-color:#f1f1f1">
            <button type="button" onclick="window.location.href= 'index.php'" class="cancelbtn">Logout</button>
          </div>

        </form>
      </div>
      <div id="id03" class="modal fade">
        <form class="modal-content animate" method="POST" action="insertaccf.php" >
          <div class="imgcontainer">
            <span onclick="document.getElementById('id03').style.display='none'" class="close" title="Close">&times;</span>
          </div>
          <div class="container">
            <h4 style="text-align: center; font-size: 20px; ">Add new Deposit</h4>

            <label for="custid"><b>Customer id</b></label><br>
            <input type="number" placeholder="Enter customer id" name="custid" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="8" required><br>


			<label for="accno"><b>Period(years)</b></label><br>
            <input type="number" placeholder="Enter deposit period" name="period" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="2" required><br>
            
			<label for="balance"><b>Amount</b></label><br>
            <input type="number" placeholder="Enter balance" name="amount" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="10" required><br>

            <label for="roi"><b>Rate of Interest</b></label><br>
            <input type="number" placeholder="Enter balance" name="amount" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="10" required><br>

            <button type="submit" class="bu">Submit</button><button type="reset" class="bu">Reset</button>
            <br>
          </div>
          <div class="container" style="background-color:#f1f1f1">
            <button type="button" onclick="window.location.href= 'index.php'" class="cancelbtn">Logout</button>
          </div>

        </form>
      </div>

    <div id="myNav" class="overlay">

        <!-- Button to close the overlay navigation -->
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

        <!-- Overlay content -->
        <div class="overlay-content">
          <a href="empfullrep.php">Account Transaction Report</a>
          <a href="etday.php">Account Transactions in last 30 days</a>
          <a href="efday.php">Account Transactions in last 15 days</a>
		      <a href="edeprep.php">Interest Added to Deposits</a>
        </div>

    </div>

</body>
</html>
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
