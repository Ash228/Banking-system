<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Raleway" />
    <link rel="stylesheet" type="text/css" href="s1.css" />
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>Banking System</title>
</head>

<body>
    <div class="w3-container" style="background-color: rgb(25, 172, 216);">
        <div class='w3-twothird heading'>
            <p>Banking System</p>
        </div>
        <div class='w3-bar w3-third nav w3-large'>
            <a onclick="document.getElementById('aboutUs').style.display='block'" class='w3-bar-item w3-right about-us'>About Us</a>
        </div>
    </div>
    <div class='w3-container w3-padding-row' style="margin-top: 40px;">
        <div class="sidenav w3-container w3-half w3-center" style="position:relative; padding-top:110px;">
            <!--<div class="w3-container">
                <img class="w3-image" src="cust.jpg" style="height:200px;width:150px">
            </div>-->
            <div onclick="document.getElementById('id01').style.display='block'" class='w3-third w3-card-4 w3-padding w3-round-xlarge' style="top:25%; margin-right:20px;margin-left:100px; margin-bottom:10px; cursor:pointer">
                <img class="w3-image" src="emp.png" style="height:200px;width:150px"><br/>
                <a class='w3-center'>Login as Employee</a><br/>
            </div>
            <div onclick="document.getElementById('id02').style.display='block'"class="w3-third w3-card-4 w3-padding w3-round-xlarge" style="top:25%; cursor:pointer;">
                <img class="w3-image w3-margin-left" src="cust.jpg" style="height:200px;width:150px"><br/>
                <a class='w3-center'>Login as Customer</a><br/>
            </div>
        </div>
        <div class="w3-container w3-right" style="width:45%;">
            <img src='login-bg1.jpg' width="600px" height="500px" style="border-left:black;"/>
        </div>
    </div>
    <div class="w3-container w3-animate-opacity w3-half w3-container" id="aboutUs" style="display: none;">
        <p class="w3-large"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud 
            exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor 
            in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur 
            sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est
            laborum.
        </p>
    </div>

    <div id="id01" class="modal">

        <form class="modal-content animate" method="POST" action="login1.php">
            <div class="imgcontainer">
                <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close">&times;</span>
                <img src="emp.png" alt="Avatar" class="avatar">
            </div>

            <div class="container">
                <label for="uname"><b>Username</b></label>
                <input type="number" placeholder="Enter Employee id" name="uname" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="10" required>

                <label for="psw"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="psw" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"maxlength="20" required>

                <button type="submit">Login</button><button type="reset">Reset</button>
            </div>

            <div class="container" style="background-color:#f1f1f1">
                <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
                <span class="psw"><a onclick="document.getElementById('id03').style.display='block'" >Forgot password?</a></span>
            </div>
        </form>
    </div>

    <div id="id02" class="modal">

        <form class="modal-content animate" method="POST" action="login2.php">
            <div class="imgcontainer">
                <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close">&times;</span>
                <img src="cust.jpg" alt="Avatar" class="avatar">
            </div>

            <div class="container">
                <label for="usname"><b>Username</b></label>
                <input type="number" placeholder="Enter Customer id" name="usname" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="8" required>

                <label for="psw"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="psw" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="20" required>

                <button type="submit">Login</button><button type="reset">Reset</button>
            </div>

            <div class="container" style="background-color:#f1f1f1">
                <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>
                <span class="psw"><a onclick="document.getElementById('id04').style.display='block'" >Forgot password?</a></span>
            </div>
        </form>
    </div>
	
	<div id="id03" class="modal">
        <form class="modal-content animate" method="POST" action="empfor.php">
			<div class="imgcontainer">
				<h1>Forgot Password</h1>
                <span onclick="document.getElementById('id03').style.display='none'" class="close" title="Close">&times;</span>
				<br><br>
            </div>
			
			<div class="container">
				<label for="uname"><b>Username </b></label>
				<input type="number" placeholder="Enter Username" name="uname" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="10" required>
			
				<label for="bdate"><b>Birth date</b></label>
				<input type="date" placeholder="Enter birth date" name="bdate" required>
			
				<label for="psw"><b>New Password</b></label>
				<input type="password" placeholder="Enter password" name="psw" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="20" required>
			
				<label for="psw1"><b>Confirm Password</b></label>
				<input type="password" placeholder="Re-enter password" name="psw1" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="20" required>
			
				<button type="submit">Submit</button><button type="reset">Reset</button>
			</div>
		</form>
	</div>
	
	<div id="id04" class="modal">
        <form class="modal-content animate" method="POST" action="custfor.php">
			<div class="imgcontainer" style="cursor: pointer;">
				<h1>Forgot Password</h1>
                <span onclick="document.getElementById('id04').style.display='none'" class="close" title="Close">&times;</span>
				<br><br>
            </div>
			
			<div class="container">
				<label for="uname"><b>Username </b></label>
				<input type="number" placeholder="Enter Username" name="uname" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="10" required>
			
				<label for="bdate"><b>Birth date</b></label>
				<input type="date" placeholder="Enter birth date" name="bdate" required>
			
				<label for="psw"><b>New Password</b></label>
				<input type="password" placeholder="Enter password" name="psw" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="20" required>
			
				<label for="psw1"><b>Confirm Password</b></label>
				<input type="password" placeholder="Re-enter password" name="psw1" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="20" required>
			
				<button type="submit">Submit</button><button type="reset">Reset</button>
			</div>
		</form>
	</div>
</body>

</html>
