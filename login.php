<?php 
if($_SERVER['REQUEST_METHOD']=="POST"){
$Username=$_POST['Username'];
$Password=$_POST['Password'];
$con=mysqli_connect("localhost","root","","store");
$query="SELECT * FROM signupinsert where Username='$Username' and Password='$Password'";
$res=mysqli_query($con,$query);
$rows = mysqli_num_rows($res);
session_start();
 if($rows==1){
  header('location:loginsystem\indexx.php');
  $_SESSION['Username']=$Username;
  
 }
else{
  echo "INVALID USERNAME AND PASSWORD";
}
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>login</title>
	<link rel="stylesheet" type="text/css" href="cmsstyle.css">
	<style>
		.form{
   width: 100%;
 float:left;
  height:400px; 
  
}
		.create11{
   width: 109%;
 float:left;
  height:80px; 
}
		.invisible2{
   width: 26%;
 float:left;
  height:450px; 
  /*border: 1px solid #4CAF50;*/
}
.invisible1{
   width: 28%;
 float:left;
  height:450px; 
  /*border: 1px solid #4CAF50;*/
}
		.tenn{
        display: inline-block;
        background-color: #239B56;
        border-radius: 15px;
        border: 4px double #cccccc;
        color: #eeeeee;
        text-align: center;
        font-size: 29px;
        padding: 5px;
        width: 340px;
        transition: all 0.5s;
        cursor: pointer;
        margin: 5px;
        text-decoration: none;
      }

 .tenn:hover {
        background-color: #58D68D;
        
        color: black;
      }
.passwordboxx{
  width: 83%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid darkgray;
  border-radius: 9px;
  box-sizing: border-box;
}
.userid{
  width: 83%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid darkgray;
  border-radius: 9px;
  box-sizing: border-box;
}
      
.signupheader1{
  border-radius: 65px;
  /*background: #red;*/
  padding: 10px;
  width: 99%;
  height: 35px;
  margin-top: 0px;
  margin-bottom: 10px;
  margin-right: 80px;
  margin-left: 50px;
}
.pnal{
   width: 45%;
 float:left;
  height:261px; 
  background-color: ghostwhite;
border-radius: 25px;
}
.onlyheader{
   width: 100%;
 float:left;
  height:50px; }
  /*border: 1px solid #4CAF50;}*/
.createfont{
  color: black;
  font-family: verdana;
  font-size: 200%;
  margin-top: 25px;
  margin-bottom: 20px;
  margin-right: 80px;
  margin-left: 50px;
}
.link:visited {
  color: blue ;
}
.link:hover {
  color: hotpink;
}
.link:active {
  color: #2E86C1 blue;
}
.link{ text-decoration: none; }
.lg {text-decoration: none;}
	</style>
</head>
<body class="signupmain">
	<div class="signupheader1"><font class="createpagefont"><center><b>CMS</b></center></font></div>
		<div class="create11">
			<div class="invisible1">
				

			</div>
			<div class="pnal">
				<div class="onlyheader">
					<center><font class="createfont"><b>&nbsp;Login into CMS</b>
					</font></center></div><form method="POST" action="login.php">
					<div class="form">
						<center>
						<input type="box" name="Username" placeholder="Email-id" class="userid"><br>
						<input type="box" name="Password" placeholder="Password" class="passwordboxx"><br></center>
						</center>
							
						 <center><font color="white"   onMouseOver="this.style.color='black'" onMouseOut="this.style.color='white'"><button type="submit" class="tenn">login</font></button></center></form>
						 <center><a href="signup.php" class="link"><b>Create Account?<b></a></center>


					</div>
				</div>
			</div>
			<div class="invisible2">
				

			</div>

		</div>
	
</body>
</html>