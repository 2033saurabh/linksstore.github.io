<?php session_start();
require_once('includes/config.php');

//Code for Registration 
if(isset($_POST['submit']))
{
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $pname=$_POST['pname'];
    $puname=$_POST['puname'];
    $ppassword=$_POST['ppassword'];
    $plink=$_POST['plink'];
    

   

    $pname2=$_POST['pname2'];
    $puname2=$_POST['puname2'];
    $ppassword2=$_POST['ppassword2'];
    $plink2=$_POST['plink2'];

     $pname3=$_POST['pname3'];
    $puname3=$_POST['puname3'];
    $ppassword3=$_POST['ppassword3'];
    $plink3=$_POST['plink3'];

    $contact=$_POST['contact'];
    $email=$_POST['email'];
    $mail=$_POST['mail'];
    $password=$_POST['password'];
$sql=mysqli_query($con,"select id from users where email='$email'");
$row=mysqli_num_rows($sql);
if($row>0)
{
    echo "<script>alert('Email id already exist with another account. Please try with other email id');</script>";
} else{
    $msg=mysqli_query($con,"insert into users(fname,lname,pname,puname,ppassword,plink,pname2,puname2,ppassword2,plink2,pname3,puname3,ppassword3,plink3,email,mail,password,contactno) values('$fname','$lname','$pname','$puname','$ppassword','$plink', '$pname2','$puname2','$ppassword2','$plink2', '$pname3','$puname3','$ppassword3','$plink3','$email','$mail','$password','$contact')");

if($msg)
{
    echo "<script>alert('Registered successfully');</script>";
    echo "<script type='text/javascript'> document.location = 'login.php'; </script>";
}
}
}
?><!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>User Signup | Registration and Login System</title>
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
  <script type="text/javascript">
function checkpass()
{
if(document.signup.password.value!=document.signup.confirmpassword.value)
{
alert(' Password and Confirm Password field does not match');
document.signup.confirmpassword.focus();
return false;
}
return true;
} 

</script>

    </head>
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-7">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header">
<h2 align="center">Enter your links or basic detail</h2>
<hr />
    <h3 class="text-center font-weight-light my-4">Enter Here</h3></div>
                                    <div class="card-body">
<form method="post" name="signup" onsubmit="return checkpass();">

<div class="row mb-3">



<div class="col-md-6">
<div class="form-floating mb-3 mb-md-0">
<input class="form-control" id="fname" name="fname" type="text" placeholder="Enter your first name" required />
<label for="inputFirstName">First name</label>
</div>
</div>
                                                
<div class="col-md-6">
<div class="form-floating">
<input class="form-control" id="lname" name="lname" type="text" placeholder="Enter your last name" required />
 <label for="inputLastName">Last name</label>
</div>
</div>
</div>

<div class="form-floating mb-3">
<input class="form-control" id="pname" name="pname" type="text" placeholder="Platform Name" required />
<label for="inputEmail">Platform Name</label>
</div>

<div class="form-floating mb-3">
<input class="form-control" id="puname" name="puname" type="text" placeholder="Platform User Name" required />
<label for="inputEmail">Platform User Name</label>
</div>
<div class="form-floating mb-3">
<input class="form-control" id="ppassword" name="ppassword" type="text" placeholder="Platform Password" required />
<label for="inputEmail">Platform Password</label>
</div>
<div class="form-floating mb-3">
<input class="form-control" id="plink" name="plink" type="text" placeholder="Platform Link" required />
<label for="inputEmail">Platform Links</label>
</div>

<div class="form-floating mb-3">
<input class="form-control" id="pname2" name="pname2" type="text" placeholder="Platform Name2" required />
<label for="inputEmail">Platform Name 2</label>
</div>

<div class="form-floating mb-3">
<input class="form-control" id="puname2" name="puname2" type="text" placeholder="Platform User Name" required />
<label for="inputEmail">Platform User Name</label>
</div>
<div class="form-floating mb-3">
<input class="form-control" id="ppassword2" name="ppassword2" type="text" placeholder="Platform Password" required />
<label for="inputEmail">Platform Password</label>
</div>
<div class="form-floating mb-3">
<input class="form-control" id="plink2" name="plink2" type="text" placeholder="Platform Link" required />
<label for="inputEmail">Platform Links</label>
</div>

<div class="form-floating mb-3">
<input class="form-control" id="pname3" name="pname3" type="text" placeholder="Platform Name3" required />
<label for="inputEmail">Platform Name 3</label>
</div>

<div class="form-floating mb-3">
<input class="form-control" id="puname3" name="puname3" type="text" placeholder="Platform User Name" required />
<label for="inputEmail">Platform User Name</label>
</div>
<div class="form-floating mb-3">
<input class="form-control" id="ppassword3" name="ppassword3" type="text" placeholder="Platform Password" required />
<label for="inputEmail">Platform Password</label>
</div>
<div class="form-floating mb-3">
<input class="form-control" id="plink3" name="plink3" type="text" placeholder="Platform Link" required />
<label for="inputEmail">Platform Links</label>
</div>
<div class="form-floating mb-3">
<input class="form-control" id="email" name="email" type="email" placeholder="phpgurukulteam@gmail.com" required />
<label for="inputEmail">Email address</label>
</div>
 
<div class="form-floating mb-3">
<input class="form-control" id="mail" name="mail" type="mail" placeholder="phpgurukulteam@gmail.com" required />
<label for="inputEmail">Email</label>
</div>

<div class="form-floating mb-3">
<input class="form-control" id="contact" name="contact" type="text" placeholder="1234567890" required pattern="[0-9]{10}" title="10 numeric characters only"  maxlength="10" required />
<label for="inputcontact">Contact Number</label>
</div>
        


<div class="row mb-3">
<div class="col-md-6">
 <div class="form-floating mb-3 mb-md-0">
<input class="form-control" id="password" name="password" type="password" placeholder="Create a password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" title="at least one number and one uppercase and lowercase letter, and at least 6 or more characters" required/>
<label for="inputPassword">Password</label>
</div>
</div>
                                                

<div class="col-md-6">
<div class="form-floating mb-3 mb-md-0">
<input class="form-control" id="confirmpassword" name="confirmpassword" type="password" placeholder="Confirm password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" title="at least one number and one uppercase and lowercase letter, and at least 6 or more characters" required />
<label for="inputPasswordConfirm">Confirm Password</label>
</div>
</div>
</div>
                                            

<div class="mt-4 mb-0">
<div class="d-grid"><button type="submit" class="btn btn-primary btn-block" name="submit">Create Account</button></div>
</div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center py-3">
 <div class="small"><a href="login.php"></a></div>
  <div class="small"><a href="index.php"></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
         <?php include_once('includes/footer.php');?>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
