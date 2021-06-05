<?
include('conn.php');

include('include.php');

if(isset($_GET['profile']))
{
	header('location:student_profile.php');
	
}

if(isset($_GET['vacancyDe']))
{
	header('location:student_vacancies.php');
	
}

if(isset($_GET['messageVi']))
{
	header('location:student_message.php');
	
}






?>
<html>
<head>
    <meta charset="utf-8">
     <title>Student Home</title>
	 <link rel="stylesheet" href="style.css">
</head>
<body>
<div class = "boxsh">

<?
if(isset($_SESSION['success'])):
?>

       <h3>
       <? 
       echo $_SESSION['success'];
       unset($_SESSION['success']);
       ?>
       </h3>

<? endif ?>

<?
if(isset($_SESSION["txtEmail"])):
?>
       <h3> Welcome <? echo $_SESSION['txtEmail']; ?> </h3>
	    
	  <!-- <p><a href="main.php?logout='1'" style= "color: red;">Log Out</p>-->
<? endif ?>


<form>
<input type = "submit" name = "profile" value = "Profile">
<input type = "submit" name = "vacancyDe" value = "Vacancy Details">
<input type = "submit" name = "messageVi" value = "Message View">

<method>
</div>
</body>
</html>
