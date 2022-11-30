<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>signup</title>
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
		.ten{
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
      }

 .ten:hover {
        background-color: #58D68D;
        
        color: black;
      }
 .male{
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
  height:541px; 
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
.already:visited {
  color: blue ;
}
.already:hover {
  color: hotpink;
}
.already:active {
  color: #2E86C1 blue;
}
.already{ text-decoration: none; }
	</style>
</head>
<body class="signupmain">
	<div class="signupheader1"><font class="createpagefont"><center><b>CMS</b></center></font></div>
		<div class="create11">
			<div class="invisible1">
				

			</div>
			<div class="pnal">
				<div class="onlyheader">
					<center><font class="createfont"><b>&nbsp;Create A New Account</b>
					</font></center></div>
					<div class="form"><form action="signupinsert.php" method="post">
						<center><input type="box" name="Username" placeholder="User name" class="usernamebox" required >&nbsp; &nbsp;<input type="box" name="Userlastname" placeholder="Surname" class="surnamebox" required><br>
						<input type="box" name="Mobileno" placeholder="Mobile no." class="mobliebox" maxlength="10" onkeypress="return validateNumber(event)" required>&nbsp; &nbsp; <input type="email" id="email" name="Emailaddress" placeholder="Email Adderss" class="emailbox" required><br>
						<input type="text" name="Cmsusername" placeholder="CMS Name. EX.Facebook/Saurabh" class="csmname" required><br>

						<input type="Password"  id="Password" name="Password" placeholder="Password" class="passwordbox"  maxlength="8" required><br></center>

						<font color="lightslategray" size="4">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Date of birth</font><br>
						<center><input type="text" name="Day" placeholder="Day" class="dobday" maxlength="2"  required> &nbsp;<input type="text" name="Month" placeholder="Month" class="dobmonth" maxlength="2" required> &nbsp;<input type="text" name="Year" placeholder="Year" class="dobyear" maxlength="4" required><br></center>
						<font color="lightslategray" size="4">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Gender</font><br>
						<center><input type="text" name="Male" placeholder="Male/Female" class="male" required><br></center>
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;read all terms & conditions<input type="checkbox" name="checkbox" required><br>
						 <center><a href="home.php"><font color="white" onMouseOver="this.style.color='black'" onMouseOut="this.style.color='white'"><button type="submit" class="ten">signup</font></button></a></center></form>
						 <a href="login.php" class="already"><center><b>Already Have An Account?</b></center></a>


					</div>
				</div>
			</div>
			<div class="invisible2">
				

			</div>

		</div>
	
</body><script>
function validateNumber(e) {
            const pattern = /^[0-9]$/;

            return pattern.test(e.key )
        }</script>
</html>