<?


include('conn.php');



?>
<html>
<head>
     <meta charset="utf-8">
    <title>Student Registration Form</title>
	 <link rel="stylesheet" href="style.css">
</head>
<body>
<div class = "box3">
<h3> Student Registration</h3>
<form action = "register.php" method= "get">
<!-- display validation errors here-->
<? include("errors.php");?>
<div class = "inputBox">
<input type = "text" name = "txtEmail" value = "<?if(!empty($txtEmail)) echo $txtEmail?>"><br><label>Email</label>
</div>
<div class = "inputBox">
<input type = "password" name = "pass1"><br><label>Type Password</label>
</div>
<div class = "inputBox">
<input type = "password" name = "pass2"><br><label>Confirm Password</label>
</div>
<div class = "inputBox">
<input type = "text" name = "txtFullName" value = "<?if(!empty($txtFullName)) echo $txtFullName?>" ><br><label>Full Name</label>
</div>
<div class = "inputBox">
<input type = "text" name = "txtMobileNum" value = "<?if(!empty($txtMobileNum)) echo $txtMobileNum?>"><br><label>Contact Number</label>
</div>
<div class = "inputBox">
<input type = "text" name = "txtAddrs" value = "<?if(!empty($txtAddrs)) echo $txtAddrs?>"><br><label>Address</label>
</div>
<div class = "inputBox">
<input type = "date" name = "dob"  value = "<?if(!empty($dob)) echo $dob?>"><br><label>Date of Birth</label>
</div>
<div class = "inputBox">
<input type = "text" name = "txtGender" value = "<?if(!empty($txtGender)) echo $txtGender?>"><br><label>Gender</label>
</div>


  
<input type = "submit" name = "submit" value = "Register">
<br>
<p>
Already registered? <a href = "login.php"> Sign In </a>
</p>  
  
</form>
</div>
</body>
</html>
