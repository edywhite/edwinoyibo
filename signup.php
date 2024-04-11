<?php
include_once('header.php');
 ?>
 <center><div class="contact-form-area" >
                <div class="row" >
				 <div class="col-12 col-md-3">
                        
                    </div>
                    <div class="col-12 col-md-6 item ">
                          
						  <h2 class="contact-form-title mb-30" >Sign Up </h2>
                            <!-- Contact Form -->
                            <form action=" " method="post">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="contact-name" placeholder="Name" name="name">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="contact-name" placeholder="Username" name="username">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" id="contact-name" placeholder="Password" name="password">
                                </div>
                                <div class="form-group">
                                    <select class="form-control" id="contact-name"name="post">
									<option></option>
									<option>Chef</option>
									<option>Culinary Enthusiast</option>
									<option>Other</option>
									
									</select>  </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" id="contact-email" placeholder="Email" name="email">
                                </div>
                                
                                <button type="submit" class="btn contact-btn" name="submit">Sign Up</button>
                            </form>
							
                        </div>
              
                </div>
            </div></center>
 <?php 
include_once('footer.php');
 ?>
<?php

	include_once('db.php');
	if(isset($_POST['submit'])){{
		$name=$_POST['name'];
		$username=$_POST['username'];
		$password=$_POST['password'];
		$post=$_POST['post'];
		$email=$_POST['email'];
		}
	
		
	$sql="INSERT INTO users(name, username, password, email, role, status)VALUES
	('$name', '$username', '$password', '$email', '$post', 'Active' )";
mysqli_query($db, $sql);
echo '<script>alert("Welcome");';
echo 'window.location= "home.php";</script>'; 
	}
	?>
	
