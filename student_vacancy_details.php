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
$vac_id=$_GET['vac_id'];
echo $vac_id;

$sql="select * from vacancy_availability where vacancy_id=$vac_id";
$row=mysqli_query($conn,$sql);
$res=mysqli_fetch_row($row);

$student_id=$res["1"];
$company_name=$res["2"];
$position=$res["3"];
$application_deadline=$res["4"];
$vacancy_availability=$res["5"];


?>
<html>
<head>
     <meta charset="utf-8">
    <title>Student Vacancy Details</title>
	 <link rel="stylesheet" href="style.css">
</head>
<body>
<div class = "boxsp">
<h3> Student Vacancy Details</h3>
<form action = "student_vacancy_details.php" method= "get">
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
<input type = "text" name = "txtVId" value = "<?  echo $vac_id;?>"><br><label>Vacancy Id Number</label>
</div>

<div class = "inputBox">
<input type = "text" name = "txtId" value = "<?  echo $student_id;?>"><br><label>Id Number</label>
</div>
<div class = "inputBox">
<input type = "text" name = "txtCompanyName" value = "<? echo $company_name?>"><br><label>Company Name</label>
</div>
<div class = "inputBox">
<input type = "text" name = "txtPosition"  value = "<?echo  $position;?>"><br><label>Position</label>
</div>

<div class = "inputBox">
<input type = "text" name = "deadline" value = "<?echo $application_deadline?>"><br><label>Deadline</label>
</div>
<div class = "inputBox">
<input type = "text" name = "txtAvailability" value = "<?echo $vacancy_availability?>"><br><label>Availability</label>
</div>


  
<!--<input type = "submit" name = "searchsvd" value = "Search">-->

 
</form>
</div>
</body>
</html>
