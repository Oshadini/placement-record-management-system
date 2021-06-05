<?
include('conn.php');


if(isset($_SESSION["txtEmail"])):
?>
       <h3> Welcome <? echo $_SESSION['txtEmail']; ?> </h3>
	    
		<?
		 $txtEmailN = $_SESSION['txtEmail'];
		 echo $txtEmailN;
		
		?>
		
	  <!-- <p><a href="main.php?logout='1'" style= "color: red;">Log Out</p>-->
<? endif ?>





<?












	
	

	
	
	$search_que = "select * from  basic_details where email_id = '$txtEmailN'";
	$res = mysqli_query($conn,$search_que);
	
$row=mysqli_fetch_row($res);
                $txtId=$row["0"];
	
				$txtEmail = $row['1'];
				$password = $row['2'];
				$txtFullName= $row['3'];
				$txtMobileNum = $row['4'];
				$txtAddrs = $row['5'];
				$dob  = $row['6'];
				$txtGender = $row['7'];
	
	
	
	if(isset($_GET['Update']))
{
	
	

	header("Location:student_profile_update.php?student_id=$txtId");
	
	
}

	
	



?>
<html>
<head>
     <meta charset="utf-8">
    <title>Student Profile</title>
	 <link rel="stylesheet" href="style.css">
</head>
<body>
<div class = "boxsp">
<h3> Student Profile</h3>
<form action = "student_profile.php" method= "get">
<!-- display validation errors here-->
<? include("errors.php");?>


	   <p><a href="main.php?logout='1'" style= "color: red;">Log Out</p>

	   
<?
if(isset($_SESSION["txtEmail"])):
?>
      <!-- <p> Welcome <? echo $_SESSION['txtEmail']; ?> </p>-->
	    
		<?
		  $txtEmailN = $_SESSION['txtEmail'];
		 // echo $txtEmailN;
		
		?>
		
	  <!-- <p><a href="main.php?logout='1'" style= "color: red;">Log Out</p>-->
<? endif ?>




<div class = "inputBox">
<input type = "text" name = "txtId" value = "<?  echo $txtId;?>"><br><label>Id Number</label>
</div>
<div class = "inputBox">
<input type = "text" name = "txtEmail" value = "<?  echo $txtEmail;?>"><br><label>Email</label>
</div>
<div class = "inputBox">
<input type = "text" name = "password"  value = "<?  echo $password;?>"><br><label>Password</label>
</div>

<div class = "inputBox">
<input type = "text" name = "txtFullName" value = "<?  echo $txtFullName;?>"><br><label>Full Name</label>
</div>
<div class = "inputBox">
<input type = "text" name = "txtMobileNum" value = "<?  echo $txtMobileNum;?>"><br><label>Contact Number</label>
</div>
<div class = "inputBox">
<input type = "text" name = "txtAddrs" value = "<?  echo $txtAddrs;?>"><br><label>Address</label>
</div>
<div class = "inputBox">
<input type = "date" name = "dob" value = "<?  echo $dob;?>" ><br><label>Date of Birth</label>
</div>
<div class = "inputBox">
<input type = "text" name = "txtGender" value = "<?  echo $txtGender;?>"><br><label>Gender</label>
</div>
<br>

  
<input type = "submit" name = "Update" value = "To Update">


 
</form>
</div>
</body>
</html>
