<?php

		
		$conn = mysqli_connect("localhost", "root", "", "store");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		// Taking all 5 values from the form data(input)
		$idNo ='idNo';
		$Username = $_REQUEST['Username'];
		$Userlastname = $_REQUEST['Userlastname'];
		$Mobileno = $_REQUEST['Mobileno'];
		$Emailaddress = $_REQUEST['Emailaddress'];
		$Cmsusername = $_REQUEST['Cmsusername'];
		$Password = $_REQUEST['Password'];
		$Day = $_REQUEST['Day']; 
		$Month = $_REQUEST['Month'];
		$Year = $_REQUEST['Year'];
		$Male = $_REQUEST['Male'];

		
		// Performing insert query execution
		// here our table name is college
	$sql = "INSERT INTO signupinsert VALUES ('$idNo', '$Username', '$Userlastname','$Mobileno','$Emailaddress','$Cmsusername','$Password', '$Day','$Month','$Year','$Male')";
		
		if(mysqli_query($conn, $sql)){
			echo "<h3>data stored in a database successfully </h3>";

		echo nl2br("$idNo\n $Username\n $Userlastname\n $Mobileno\n $Emailaddress\n $Cmsusername\n $Password\n $Day\n  $Month\n $Year\n Male\n"  );

		} else{
			echo "ERROR:  Sorry $sql. "
				. mysqli_error($conn);
		}

		
		// Close connection
		mysqli_close($conn);
		?>
		<!DOCTYPE html>
		<html>
		
		<body>
		<a href="login.php"><font color="blue" size="25">click to login</font></a>
		</body>
		</html>