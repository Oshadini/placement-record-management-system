<?

session_start();
$conn = mysqli_connect("localhost","root","","ssp_db");

//echo "connected";
$pass1 = "";
$pass2 = "";
$txtFullName = "";
$txtMobileNum = "";
$txtAddrs = "";
$dob = "";
$txtGender = "";
$errors = array();
if(isset($_GET['submit']))
{
	   		    $txtEmail = ($_GET["txtEmail"]); 			  
			    $pass1 = ($_GET["pass1"]);
		        $pass2= ($_GET["pass2"]);
	
	   		    $txtFullName = ($_GET["txtFullName"]); 			  
			    $txtMobileNum =  ($_GET["txtMobileNum"]);
		        $txtAddrs= ($_GET["txtAddrs"]);

	   		    $dob = ($_GET["dob"]); 			  
			    $txtGender =  ($_GET["txtGender"]);
		        


echo $txtEmail;				
	            //ensure that form fields are filled properly
	            if(empty($txtEmail))
				{
					array_push($errors,"Email is required");
				}
	
				if(empty($pass1))
				{
					array_push($errors,"Password is required");
				}
			
				if(empty($pass2))
				{
					array_push($errors,"Confirm password is required");
				}
				
				if($pass1 != $pass2)
				{
					array_push($errors,"The passwords do not match");
				}

             	 
				//if there are no errors, save the user data to the database
				if(count($errors) == 0)
				{
					$password = md5($pass1);
					$ins1 = "Insert Into basic_details(email_id,password,full_name,mobile_number,address,dob,gender) values ('$txtEmail','$password','$txtFullName','$txtMobileNum','$txtAddrs','$dob','$txtGender')";
					mysqli_query($conn,$ins1);
					
					$_SESSION['txtEmail'] = $txtEmail;
					$_SESSION['success'] = "You are now logged in";
					header('location:student_home.php');//direct to home page
				}	
				
				
  //echo $ins1;				
}		


//log user in from login page

if(isset($_GET['login']))
{
	
		   		$txtEmail = ($_GET["txtEmail"]); 			  
			    $password = ($_GET["password"]);
	
	
		        if(empty($txtEmail))
				{
					array_push($errors,"Email is required");
				}
	
				if(empty($password))
				{
					array_push($errors,"Password is required");
				}
			
			
			
				if(count($errors) == 0)
				{
					$password = md5($password);//encrypting password before comparing with the value in database
					$query = "select * from basic_details where email_id = '$txtEmail' and password = '$password'";
					$result = mysqli_query($conn,$query);
					
					echo $query;
					if(mysqli_num_rows($result) == 1)
					{
						//log user in 
						
					$_SESSION['txtEmail'] = $txtEmail;
					$_SESSION['success'] = "You are now logged in";
					header('location:student_home.php');//direct to home page
						
					}else
						
					{
					
					array_push($errors, "wrong username password combination");
					//header('location:login.php');

					
					}
	            }
				
}



//logout

if(isset($_GET['logout']))
{
	session_destroy();
	unset($_SESSION['txtEmail']);
	header('location:login.php');	
}

?>

