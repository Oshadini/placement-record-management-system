<?
include('conn.php');
include('include.php');
?>

<html>
<head>
     <meta charset="utf-8">
     <title>Student Login</title>
	 <link rel="stylesheet" href="style.css">
</head>
<body>
<div class = "box">
    <h3>LOGIN</h3>
    <form method = "get" action = "login.php">
	<? include("errors.php");?>
	    <div class = "inputBox">
		    
		    <input type = "text" name = "txtEmail"  required =""><br>
			<label>ID</label>
		</div>	
		<div class = "inputBox">
		    
            <input type = "password" name = "password"   required =""><br>
			<label>Password</label>
		</div>	
        <input type = "submit" name = "login" value = "login">
		
		<p>Not yet registered? <a href = "register.php">Sign UP</a></p>
</form>
</div>
</body>
</html>
