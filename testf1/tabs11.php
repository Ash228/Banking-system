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
      <div class="topnav">
        <br><br>
        <div class="dropdown">
    <button class="dropbtn">Profile
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
       <a onclick="document.getElementById('id04').style.display='block'" >View Profile</a> 
        <a onclick="document.getElementById('id05').style.display='block'" >Edit profile</a>

        </div>
    </div> 
  <div class="dropdown">
    <button class="dropbtn">Employee
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
    <a onclick="document.getElementById('id06').style.display='block'" >Add new Employee</a> 
    <a onclick="document.getElementById('id07').style.display='block'" >Delete Employee</a> 
    <a onclick="document.getElementById('id08').style.display='block'" >Modify Employee Details</a> 
    </div>
  </div>  
  <div class="dropdown">
    <button class="dropbtn">Add/Remove/Modify Branch
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
    <a onclick="document.getElementById('id01').style.display='block'" >Add new Branch</a> 
    <a onclick="document.getElementById('id02').style.display='block'" >Delete Branch</a> 
    <a onclick="document.getElementById('id03').style.display='block'" >Assign Manager to Branch</a> 
    </div>
  </div>  
    <?php
        error_reporting(E_ALL ^ E_WARNING ^E_NOTICE);
          include 'dbcon.php';
          $adminid = $_SESSION['adminid'];
          $adminid = mysqli_real_escape_string($db, $adminid);
          $query = "SELECT * from admin where adminid='$adminid'" ;
          $result = mysqli_query($db, $query) or die('SQL Error: ' . mysqli_error($db));
          $row = mysqli_fetch_array($result);
        ?>
    </div>
      <div id="id04" class="modal">
        <?php
        error_reporting(E_ALL ^ E_WARNING ^E_NOTICE);
          include 'dbcon.php';
          $adminid = $_SESSION['adminid'];
          $adminid = mysqli_real_escape_string($db, $adminid);
          $query = "SELECT * from admin where adminid='$adminid'" ;
          $result = mysqli_query($db, $query) or die('SQL Error: ' . mysqli_error($db));
          $row = mysqli_fetch_array($result);
        ?>
      <form class="modal-content animate">
        <div class="imgcontainer">
          <span onclick="document.getElementById('id04').style.display='none'" class="close" title="Close">&times;</span>
        </div>
        <div class="container">
            <h6 style="text-align: center; font-size: 20px; ">View Profile</h6>

            <label for="id"><b>Administrator id</b></label><br>
            <input type="number" value="<?php echo "$row[0]"; ?>" name="id" disabled><br>

                <label for="name"><b>Name</b></label><br>
                <input type="text" value="<?php echo "$row[1]"; ?>" name="name" disabled><br>

                <label for="bdate"><b>Birth date</b></label><br>
                <input type="date" value="<?php echo "$row[3]"; ?>" name="bdate" disabled><br>

                <label for="phone"><b>Phone number</b></label><br>
                <input type="number" value="<?php echo "$row[4]"; ?>" name="phone" disabled><br>

                <label for="mail"><b>Email id</b></label><br>
                <input type="email" value="<?php echo "$row[5]"; ?>" name="mail"disabled><br>

                <label for="gender"><b>Gender</b></label><br>
                <input type="gender" value="<?php echo "$row[6]"; ?>" name="gender"disabled><br>

              </div>
              <div class="container" style="background-color:#f1f1f1">
                <button type="button" onclick="window.location.href= 'index.php'" class="cancelbtn">Logout</button>
              </div>
            </form>
          </div>
          <div id="id05" class="modal" >
          <form class="modal-content animate" method="POST" action="updateadmin.php">
            <div class="imgcontainer">
              <span onclick="document.getElementById('id05').style.display='none'" class="close" title="Close">&times;</span>
            </div>
            <div class="container">
                <h1 style="text-align: center; font-size: 20px; ">Edit Profile</h1>

                    <label for="name"><b>Name</b></label><br>
                    <input type="text" placeholder="Enter Name"oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="45" required name="name" ><br>

                    <label for="bdate"><b>Birth date</b></label><br>
                    <input type="date"  placeholder="Enter date of birth" name="bdate" required><br>
	
                    <label for="phone"><b>Phone number</b></label><br>
                    <input type="number" placeholder="Enter phone number" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="10" required name="phone" ><br>

                    <label for="mail"><b>Email id</b></label><br>
                    <input type="email" placeholder="Enter email id" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="35" required name="mail"><br>

                    <label for="gender"><b>Gender</b></label><br>
                    <input type="text" placeholder="gender" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="10" required name="gender" ><br>

                    <button type="submit" class="bu">Submit</button><button type="reset" class="bu">Reset</button>
                  </div>
                  <div class="container" style="background-color:#f1f1f1">
                    <button type="button" onclick="window.location.href= 'index.php'" class="cancelbtn">Logout</button>
                  </div>
                </form>
              </div>   
	    
      <div id="id01" class="modal">
        <form class="modal-content animate" method="POST" action="insertbranch.php">
          <div class="imgcontainer">
            <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close">&times;</span>
          </div>
          <div class="container">
            <h2 style="text-align: center; font-size: 20px; ">Add new Branch</h2>
            <label for="ifsc"><b>Branch IFSC </b></label><br>
            <input type="text" placeholder="Enter Branch IFSC" name="ifsc" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="13" required><br>

            <label for="name"><b>Name</b></label><br>
            <input type="text" placeholder="Enter full name" name="name" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="45" required><br>

            <label for="address"><b>Address</b></label><br>
            <input type="text" placeholder="Enter address" name="address" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="100" required><br>

            <label for="phone"><b>Phone number</b></label><br>
            <input type="number" placeholder="Enter phone number" name="phone" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="10" required><br>

            <label for="mail"><b>Email id</b></label><br>
            <input type="email" placeholder="Enter email address" name="mail" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="35" ><br>

            <label for="mgrid"><b>Manager id</b></label><br>
            <input type="number" placeholder="Enter the Employee id of the Manager" name="mgrid" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="10" required><br>

            <button type="submit" class="bu">Submit</button><button type="reset" class="bu">Reset</button>
            <br> <br>
            <p>
              Manager must be appointed after transfer to the branch
            </p>

          </div>
          <div class="container" style="background-color:#f1f1f1">
            <button type="button" onclick="window.location.href= 'index.php'" class="cancelbtn">Logout</button>
          </div>
        </form>

      </div>

      <div id="id02" class="modal">

        <form class="modal-content animate" method="POST" action="delbranch.php" >
          <div class="imgcontainer">
            <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close">&times;</span>
          </div>
          <div class="container">
            <h3 style="text-align: center; font-size: 20px; ">Delete Branch</h3>
            <label for="ifsc"><b>Branch IFSC </b></label><br>
            <input type="text" placeholder="Enter Branch IFSC" name="ifsc" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="13" required><br>

            <button type="submit" class="bu">Submit</button><button type="reset" class="bu">Reset</button>
            <br> <br>
          </div>
          <div class="container" style="background-color:#f1f1f1">
            <button type="button" onclick="window.location.href= 'index.php'" class="cancelbtn">Logout</button>
          </div>

        </form>
      </div>

        <div id="id06" class="modal">
        <form class="modal-content animate" method="POST" action="insertemp_admin.php">
          <div class="imgcontainer">
            <span onclick="document.getElementById('id06').style.display='none'" class="close" title="Close">&times;</span>
          </div>
          <div class="container">
            <h2 style="text-align: center; font-size: 20px; ">Add new Employee</h2>
            <label for="empid"><b>Employee id </b></label><br>
            <input type="number" placeholder="Enter Employee id" name="empid" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="10" required><br>

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
            
            <label for="role"><b>Role</b></label><br>
            <input type="text" placeholder="Enter role" name="role" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="20" required><br>

            <label for="salary"><b>Salary</b></label><br>
            <input type="number" placeholder="Enter Salary" name="salary" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="13" required><br>

            <label for="ifsc"><b>IFSC</b></label><br>
            <input type="text" placeholder="Enter Branch IFSC" name="ifsc" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="13" required><br>
            
            <button type="submit" class="bu">Submit</button><button type="reset" class="bu">Reset</button>

          </div>
          <div class="container" style="background-color:#f1f1f1">
            <button type="button" onclick="window.location.href= 'index.php'" class="cancelbtn">Logout</button>
          </div>
        </form>

      </div>

      <div id="id07" class="modal">

        <form class="modal-content animate" method="POST" action="delemp_admin.php" >
          <div class="imgcontainer">
            <span onclick="document.getElementById('id07').style.display='none'" class="close" title="Close">&times;</span>
          </div>
          <div class="container">
            <h3 style="text-align: center; font-size: 20px; ">Delete Employee</h3>
            <label for="empid"><b>Employee id</b></label><br>
            <input type="number" placeholder="Enter Employee id" name="empid" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="10" required><br>

            <button type="submit" class="bu">Submit</button><button type="reset" class="bu">Reset</button>
            <br> <br>
          </div>
          <div class="container" style="background-color:#f1f1f1">
            <button type="button" onclick="window.location.href= 'index.php'" class="cancelbtn">Logout</button>
          </div>

        </form>
        </div>

        <div id="id08" class="modal">

        <form class="modal-content animate" method="POST" action="modemp_admin.php" >
          <div class="imgcontainer">
            <span onclick="document.getElementById('id08').style.display='none'" class="close" title="Close">&times;</span>
          </div>
          <div class="container">
            <h3 style="text-align: center; font-size: 20px; ">Modify Employee Details</h3>
            <label for="empid"><b>Employee id </b></label><br>
            <input type="number" placeholder="*Enter Employee id" name="empid" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="10" required><br>

            <label for="name"><b>Name</b></label><br>
            <input type="text" placeholder="Enter full name" name="name" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="45" ><br>

            <label for="address"><b>Address</b></label><br>
            <input type="text" placeholder="Enter address" name="address" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="100" ><br>

            <label for="phone"><b>Phone number</b></label><br>
            <input type="number" placeholder="Enter phone number" name="phone" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="10" ><br>

            <label for="mail"><b>Email id</b></label><br>
            <input type="email" placeholder="Enter email address" name="mail" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="35" ><br>

            <label for="bdate"><b>Birth date</b></label><br>
            <input type="date" placeholder="Enter birth date" name="bdate" required><br>

            <label for="gender"><b>Gender</b></label><br>
            <input type="text" placeholder="Enter gender" name="gender" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="10" ><br>
            
            <label for="role"><b>Role</b></label><br>
            <input type="text" placeholder="Enter role" name="role" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="20" ><br>

            <label for="salary"><b>Salary</b></label><br>
            <input type="number" placeholder="Enter Salary" name="salary" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="13" ><br>

            <label for="ifsc"><b>IFSC</b></label><br>
            <input type="text" placeholder="Enter Branch IFSC" name="ifsc" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="13"><br>

            <button type="submit" class="bu">Submit</button><button type="reset" class="bu">Reset</button>
            <p>
              Enter the details you wish to modify(Employee id cannot be modified)
              * indicates required fields
            </p>

          </div>
          <div class="container" style="background-color:#f1f1f1">
            <button type="button" onclick="window.location.href= 'index.php'" class="cancelbtn">Logout</button>
          </div>

        </form>
        </div>

        <div id="id03" class="modal">

        <form class="modal-content animate" method="POST" action="assign_mgr.php" >
          <div class="imgcontainer">
            <span onclick="document.getElementById('id03').style.display='none'" class="close" title="Close">&times;</span>
          </div>
          <div class="container">
            <h3 style="text-align: center; font-size: 20px; ">Assign Manager to Branch</h3>
            
            <label for="empid"><b>Employee id</b></label><br>
            <input type="number" placeholder="Enter Employee id" name="empid" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="10" required><br>

            <label for="ifsc"><b>IFSC</b></label><br>
            <input type="text" placeholder="Enter Branch IFSC" name="ifsc" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="13" required><br>

            <button type="submit" class="bu">Submit</button><button type="reset" class="bu">Reset</button>
            <br> <br>
          </div>
          <div class="container" style="background-color:#f1f1f1">
            <button type="button" onclick="window.location.href= 'index.php'" class="cancelbtn">Logout</button>
          </div>

        </form>
        </div>

</body>
</html>
