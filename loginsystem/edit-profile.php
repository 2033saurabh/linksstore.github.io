<?php session_start();
include_once('includes/config.php');
if (strlen($_SESSION['id']==0)) {
  header('location:logout.php');
  } else{
//Code for Updation 
if(isset($_POST['update']))
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
$userid=$_SESSION['id'];
    $msg=mysqli_query($con,"update users set fname='$fname',lname='$lname',pname='$pname',puname='$puname',ppassword='$ppassword',plink='$plink',pname2='$pname2',puname2='$puname2',ppassword2='$ppassword2',plink2='$plink2',pname3='$pname3',puname3='$puname3',ppassword3='$ppassword3',plink3='$plink3',contactno='$contact' where id='$userid'");

if($msg)
{
    echo "<script>alert('Profile updated successfully');</script>";
       echo "<script type='text/javascript'> document.location = 'profile.php'; </script>";
}
}


    
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Edit Profile | Registration and Login System</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
      <?php include_once('includes/navbar.php');?>
        <div id="layoutSidenav">
          <?php include_once('includes/sidebar.php');?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        
<?php 
$userid=$_SESSION['id'];
$query=mysqli_query($con,"select * from users where id='$userid'");
while($result=mysqli_fetch_array($query))
{?>
                        <h1 class="mt-4"><?php echo $result['fname'];?>'s Profile</h1>
                        <div class="card mb-4">
                     <form method="post">
                            <div class="card-body">
                                <table class="table table-bordered">
                                   <tr>
                                    <th>First Name</th>
                                       <td><input class="form-control" id="fname" name="fname" type="text" value="<?php echo $result['fname'];?>" required /></td>
                                   </tr>
                                   <tr>
                                       <th>Last Name</th>
                                       <td><input class="form-control" id="lname" name="lname" type="text" value="<?php echo $result['lname'];?>"  required /></td>
                                   </tr>
                                   <tr>
                                       <th>Platform Name</th>
                                       <td><input class="form-control" id="pname" name="pname" type="text" value="<?php echo $result['pname'];?>"  required /></td>
                                   </tr>
                                   
                                   <tr>
                                       <th>Platform User Name</th>
                                       <td><input class="form-control" id="puname" name="puname" type="text" value="<?php echo $result['puname'];?>"  required /></td>
                                   </tr>
                                   <tr>
                                       <th>Platform Password</th>
                                       <td><input class="form-control" id="ppassword" name="ppassword" type="text" value="<?php echo $result['ppassword'];?>"  required /></td>
                                   </tr>
                                   <tr>
                                       <th>Platform Links</th>
                                       <td><input class="form-control" id="plink" name="plink" type="text" value="<?php echo $result['plink'];?>"  required /></td>
                                   </tr>
                                   
                                   <tr>
                                       <th>Platform Name 2</th>
                                       <td><input class="form-control" id="pname2" name="pname2" type="text" value="<?php echo $result['pname2'];?>"  required /></td>
                                   </tr>
                                   
                                   <tr>
                                       <th>Platform User Name</th>
                                       <td><input class="form-control" id="puname2" name="puname2" type="text" value="<?php echo $result['puname2'];?>"  required /></td>
                                   </tr>
                                   <tr>
                                       <th>Platform Password</th>
                                       <td><input class="form-control" id="ppassword2" name="ppassword2" type="text" value="<?php echo $result['ppassword2'];?>"  required /></td>
                                   </tr>
                                   <tr>
                                       <th>Platform Links</th>
                                       <td><input class="form-control" id="plink2" name="plink2" type="text" value="<?php echo $result['plink2'];?>"  required /></td>
                                   </tr>
                                   <tr>
                                       <th>Platform Name 3</th>
                                       <td><input class="form-control" id="pname3" name="pname3" type="text" value="<?php echo $result['pname3'];?>"  required /></td>
                                   </tr>
                                   
                                   <tr>
                                       <th>Platform User Name</th>
                                       <td><input class="form-control" id="puname3" name="puname3" type="text" value="<?php echo $result['puname3'];?>"  required /></td>
                                   </tr>
                                   <tr>
                                       <th>Platform Password</th>
                                       <td><input class="form-control" id="ppassword3" name="ppassword3" type="text" value="<?php echo $result['ppassword3'];?>"  required /></td>
                                   </tr>
                                   <tr>
                                       <th>Platform Links</th>
                                       <td><input class="form-control" id="plink3" name="plink3" type="text" value="<?php echo $result['plink3'];?>"  required /></td>
                                   </tr>
                                         <tr>
                                       <th>Contact No.</th>
                                       <td colspan="3"><input class="form-control" id="contact" name="contact" type="text" value="<?php echo $result['contactno'];?>"  pattern="[0-9]{10}" title="10 numeric characters only"  maxlength="10" required /></td>
                                   </tr>
                                   <tr>
                                       <th>Email</th>
                                       <td colspan="3"><?php echo $result['email'];?></td>
                                   </tr>
                               <tr>
                                       <th>mail</th>
                                       <td colspan="3"><?php echo $result['mail'];?></td>
                                   </tr>
                                     
                                        <tr>
                                       <th>Reg. Date</th>
                                       <td colspan="3"><?php echo $result['posting_date'];?></td>
                                   </tr>
                                   <tr>
                                       <td colspan="4" style="text-align:center ;"><button type="submit" class="btn btn-primary btn-block" name="update">Update</button></td>

                                   </tr>
                                    </tbody>
                                </table>
                            </div>
                            </form>
                        </div>
<?php } ?>

                    </div>
                </main>
          <?php include('includes/footer.php');?>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>
<?php } ?>
