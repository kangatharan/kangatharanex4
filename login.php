<?php  
	$usr = $_POST["usr"];
	$pwd = $_POST["pwd"];
	if($usr == "sajid" && $pwd == "sajid123")
	{
		$loginName = "Welcome Admin";
	}
	else
	{
		$loginName = "Login Failed";
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Login Page</title>	
			
	</head>
	<body>		
		
			<h1>Cloud Login Result</h1>
		
		<hr>
		
				<h2> <?php echo $loginName ?></h1>
			
		
		
	</body>
</html>


