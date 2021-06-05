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



<html>
<head>
    <meta charset="utf-8">
     <title>Student Home</title>
	 <link rel="stylesheet" href="style.css">
</head>
<body>
<div class = "boxsp">

  <p><a href="main.php?logout='1'" style= "color: red;">Log Out</p>

<?
if(isset($_SESSION["txtEmail"])):
?>
       <!--<p> Welcome <? echo $_SESSION['txtEmail']; ?> </p>-->
	    
		<?
		  $txtEmailN = $_SESSION['txtEmail'];
		 // echo $txtEmailN;
		
		?>
		
	  <!-- <p><a href="main.php?logout='1'" style= "color: red;">Log Out</p>-->
<? endif ?>


<table  border='1' bgcolor="yellow" height="50%" width="100%">

<tr><th>From Name</th><th>To Name</th><th>Message Date</th><th>Message</th><th>View</th></tr>
<?


$sqla = "select student_id from  basic_details where email_id = '$txtEmailN'";
$idsqla_result = mysqli_query($conn,$sqla);
//echo $sqla;


	while($row = mysqli_fetch_array($idsqla_result))
	{
		echo "<br>";
		//echo $row[0];
		
		
		
	$sqlb= "select * from  student_message where student_id = $row[0]";
	$idsqlb_result = mysqli_query($conn,$sqlb);
	
		
		
		
		
	    while($Row2 = mysqli_fetch_row($idsqlb_result))
{
	echo "<tr>";
	echo "<td>".$Row2["2"]."</td>";
	echo "<td>".$Row2["3"]."</td>";
	echo "<td>".$Row2["4"]."</td>";
	echo "<td>".$Row2["5"]."</td>";
	echo "<td><a     href='student_message_view.php?msg_id=$Row2[0]'>View</a></td>";
	
	echo "</tr>";
	
	
}
			
		
		
		
	}










?>
</table>






</div>
</body>
</html>
