   <?php
   include ('userheader.php');
   ?> 
<!-- x-editor CSS
		============================================ -->
    <link rel="stylesheet" href="dashbord/css/editor/select2.css">
    <link rel="stylesheet" href="dashbord/css/editor/datetimepicker.css">
    <link rel="stylesheet" href="dashbord/css/editor/bootstrap-editable.css">
    <link rel="stylesheet" href="dashbord/css/editor/x-editor-style.css">  
<link rel="stylesheet" href="dashbord/css/data-table/bootstrap-table.css">
    <link rel="stylesheet" href="dashbord/css/data-table/bootstrap-editable.css">
    	
   <?php
   include ('userdashboard.php');
   ?> 
<div class="data-table-area mg-tb-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="sparkline13-list">
                            <div class="sparkline13-hd">
                                <div class="main-sparkline13-hd">
                                    <h1>Edit Members </h1>
                                </div>
                            </div>				<?php include ('db.php');
								$id=$_GET['member'];
									$school= mysqli_query($db, "SELECT * FROM users WHERE id='$id'");
				while($row=mysqli_fetch_array($school)){
					?>
					<form action="" method="post">
                            <div class="sparkline13-graph">
                                <div class="datatable-dashv1-list custom-datatable-overright">
                                  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                             <label class="login2 ">Name</label><input type="hidden" class="form-control" name="id" value="<?php echo $id;?>"/>
																<input type="text" class="form-control" name="name" value="<?php echo $row['name']; ?>"/>
                                                            </div>
															<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                             <label class="login2 ">Username</label>
											 <input type="text" class="form-control" name="username" value="<?php echo $row['username']; ?>"/>
                                                            </div>
															<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                             <label class="login2 ">Email</label>
																<input type="email" class="form-control" name="email" value="<?php echo $row['email']; ?>"/>
                                                            </div>
															<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                             <label class="login2 ">Role</label>
				
				<select name="name" class="form-control">
				<option><?php echo $row['role']; }?></option>
				<option>Chef</option>
				<option>Culinary Enthusiast</option>
				<option>Other</option>
				
				</select>
				
                                                            </div>
														
                               <br><br><br><br>
                                </div>	<br><br><p><input type="submit" value="Update" name="submit" /></p>
								
								</form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>   
   <?php
   include ('userfooter.php');
   ?>
    <script src="dashbord/js/data-table/bootstrap-table.js"></script>
    <script src="dashbord/js/data-table/tableExport.js"></script>
    <script src="dashbord/js/data-table/data-table-active.js"></script>
    <script src="dashbord/js/data-table/bootstrap-table-editable.js"></script>
    <script src="dashbord/js/data-table/bootstrap-editable.js"></script>
    <script src="dashbord/js/data-table/bootstrap-table-resizable.js"></script>
    <script src="dashbord/js/data-table/colResizable-1.5.source.js"></script>
    <script src="dashbord/js/data-table/bootstrap-table-export.js"></script>
    <!--  editable JS
		============================================ -->
    <script src="dashbord/js/editable/jquery.mockjax.js"></script>
    <script src="dashbord/js/editable/mock-active.js"></script>
    <script src="dashbord/js/editable/select2.js"></script>
    <script src="dashbord/js/editable/moment.min.js"></script>
    <script src="dashbord/js/editable/bootstrap-datetimepicker.js"></script>
    <script src="dashbord/js/editable/bootstrap-editable.js"></script>
    <script src="dashbord/js/editable/xediable-active.js"></script>
	<!-- Chart JS
		============================================ -->
    <script src="dashbord/js/chart/jquery.peity.min.js"></script>
    <script src="dashbord/js/peity/peity-active.js"></script>
    <!-- tab JS
		============================================ -->
    <script src="dashbord/js/tab.js"></script> 
	
		<?php
include_once('db.php');
if (isset($_POST['submit'])){
	$id=$_POST['id'];
	$name=$_POST['name'];
	$username=$_POST['username'];
	$email=$_POST['email'];
	$role=$_POST['role'];
	
	$date=date('d/m/Y');
		  	$sql=mysqli_query($db, "UPDATE users SET name='$name', username='$username', email='$email', role='$role' WHERE id='$id'")or die(mysqli_error);
echo '<script>alert("Member infomation Edited");';
   echo 'window.location= "home.php";</script>';
}
	
	?>