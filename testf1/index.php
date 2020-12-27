<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Raleway" />
    <link rel="stylesheet" type="text/css" href="s1.css" /> </head>

<body>
    <div class="sidenav"> <a style="font-szie:30px;"> Welcome!!</a>
        <br>
        <br>
        <br> <a onclick="document.getElementById('id01').style.display='block'">Login as Employee</a>
        <br>
        <br> <a onclick="document.getElementById('id02').style.display='block'">Login as Customer</a>
        <br>
        <br> </div>
    <div id="id01" class="modal">
        <form class="modal-content animate" method="POST" action="login1.php">
            <div class="imgcontainer"> <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close">&times;</span> <img src="emp.png" alt="Avatar" class="avatar"> </div>
            <div class="container">
                <label for="uname"><b>Username</b>
                </label>
                <input type="number" placeholder="Enter Employee id" name="uname" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="10" required>
                <label for="psw"><b>Password</b>
                </label>
                <input type="password" placeholder="Enter Password" name="psw" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="20" required>
                <button type="submit">Login</button>
                <button type="reset">Reset</button>
            </div>
            <div class="container" style="background-color:#f1f1f1">
                <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button> <span class="psw"><a onclick="document.getElementById('id03').style.display='block'" >Forgot password?</a></span> </div>
        </form>
    </div>
    <div id="id02" class="modal">
        <form class="modal-content animate" method="POST" action="login2.php">
            <div class="imgcontainer"> <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close">&times;</span> <img src="cust.jpg" alt="Avatar" class="avatar"> </div>
            <div class="container">
                <label for="usname"><b>Username</b>
                </label>
                <input type="number" placeholder="Enter Customer id" name="usname" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="8" required>
                <label for="psw"><b>Password</b>
                </label>
                <input type="password" placeholder="Enter Password" name="psw" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="20" required>
                <button type="submit">Login</button>
                <button type="reset">Reset</button>
            </div>
            <div class="container" style="background-color:#f1f1f1">
                <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button> <span class="psw"><a onclick="document.getElementById('id04').style.display='block'" >Forgot password?</a></span> </div>
        </form>
    </div>
    <div id="id03" class="modal">
        <form class="modal-content animate" method="POST" action="empfor.php">
            <div class="imgcontainer">
                <h1>Forgot Password</h1> <span onclick="document.getElementById('id03').style.display='none'" class="close" title="Close">&times;</span>
                <br>
                <br> </div>
            <div class="container">
                <label for="uname"><b>Username </b>
                </label>
                <input type="number" placeholder="Enter Username" name="uname" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="10" required>
                <label for="bdate"><b>Birth date</b>
                </label>
                <input type="date" placeholder="Enter birth date" name="bdate" required>
                <label for="psw"><b>Password</b>
                </label>
                <input type="password" placeholder="Enter password" name="psw" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="20" required>
                <label for="psw1"><b>Confirm Password</b>
                </label>
                <input type="password" placeholder="Re-enter password" name="psw1" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="20" required>
                <button type="submit">Submit</button>
                <button type="reset">Reset</button>
            </div>
        </form>
    </div>
    <div id="id04" class="modal">
        <form class="modal-content animate" method="POST" action="custfor.php">
            <div class="imgcontainer">
                <h1>Forgot Password</h1> <span onclick="document.getElementById('id04').style.display='none'" class="close" title="Close">&times;</span>
                <br>
                <br> </div>
            <div class="container">
                <label for="uname"><b>Username </b>
                </label>
                <input type="number" placeholder="Enter Username" name="uname" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="10" required>
                <label for="bdate"><b>Birth date</b>
                </label>
                <input type="date" placeholder="Enter birth date" name="bdate" required>
                <label for="psw"><b>Password</b>
                </label>
                <input type="password" placeholder="Enter password" name="psw" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="20" required>
                <label for="psw1"><b>Confirm Password</b>
                </label>
                <input type="password" placeholder="Re-enter password" name="psw1" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="20" required>
                <button type="submit">Submit</button>
                <button type="reset">Reset</button>
            </div>
        </form>
    </div>
</body>

</html>
