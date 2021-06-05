<?
include("conn.php");
$student_id=$_GET['student_id'];//attd_id received from the href tag from student_det_report

echo $student_id;

$sql="select * from basic_details where student_id=$student_id";
$row=mysqli_query($conn,$sql);
$res=mysqli_fetch_row($row);
$txtId=$res["0"];
$txtEmail=$res["1"];
$password=$res["2"];
$txtFullName=$res["3"];
$txtMobileNum=$res["4"];
$txtAddrs=$res["5"];
$dob=$res["6"];
$txtGender=$res["7"];


//*******************************Form handler[all in one]
//it is in all in on form
if(isset($_GET["Update"]))
{
     $studentt_id=$_GET['student_id'];
	 echo $studentt_id;
     $mail = $_GET['txtEmail'];
	 $pass = $_GET['password'];
	 $fname = $_GET['txtFullName'];
      $mobile = $_GET['txtMobileNum'];
 $addrs = $_GET['txtAddrs'];
  $dob = $_GET['dob'];
   $gen = $_GET['txtGender'];

	//echo 
	$upd="update basic_details set email_id='$mail', password='$pass',full_name= '$fname', mobile_number='$mobile', address='$addrs', dob='$dob', gender='$gen' where student_id=$studentt_id";
	echo $upd;
	mysqli_query($conn,$upd);
	//header("Location:student_report_det.php?selid=$lect_id&selcid=$course_id");
	
}

	





?>




<html>
<head>
     <meta charset="utf-8">
    <title>Admin Student Profile</title>
	 <link rel="stylesheet" href="style.css">
</head>
<body>


<div class = "boxsp">
<h3> Student Profile Update</h3>
<form action = "admin_profile_update.php" method= "get">
<!-- display validation errors here-->
<?// include("errors.php");
echo "<input type='hidden' name='student_id' value='$student_id'>";
?>




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
<input type = "submit" name = "Update" value = "Update">

 
</form>
</div>

</body>

</html>
