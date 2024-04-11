<?php 
include_once('header.php');
 ?>
 <center><div class="contact-form-area" >
                <div class="row" >
				 <div class="col-12 col-md-3">
                        
                    </div>
                    <div class="col-12 col-md-6 item ">
                          
						  <h2 class="contact-form-title mb-30" >Login </h2>
                            <!-- Contact Form -->
                            <form action=" " method="post">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="contact-name" placeholder="Username" name="username" required>
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" id="contact-name" placeholder="Password" name="password" required>
                                </div>
                             
                                
                                <button type="submit" class="btn contact-btn" name="login">Login</button>
                            </form>
							
                        </div>
              
                </div>
            </div></center>
 <?php 
include_once('footer.php');
 ?>
 			<?php 
include('db.php');

if(isset ($_POST['login']))
{
	$user=$_POST['username'];
	$pass=$_POST['password'];


if (!empty($user) && !empty ($pass)){

$querylogin=mysqli_query($db, "SELECT * FROM users WHERE username='$user' AND password='$pass'")or die(mysqli_error);}
if(mysqli_num_rows($querylogin))
{
$row=mysqli_fetch_array($querylogin);
$_SESSION['name']=$row['name'];
$_SESSION['username']=$row['username'];
$_SESSION['email']=$row['email'];
$status=$row['status'];


if($status=='Active'){
	echo '<script>alert("Welcome '.$_SESSION['name'].', always Remember to Log-Out");';
   echo 'window.location= "home.php";</script>';
}

}
else
{
echo '<center><b style="color:red;"><h3>Invalid User Details</h3></b></center>';
}}

?>
