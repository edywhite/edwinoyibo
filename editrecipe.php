
	<!doctype html>
<?php
session_start();?>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Edwin Oyibo </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Play:400,700" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="dashbord/css/bootstrap.min.css">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="dashbord/css/font-awesome.min.css">
    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href="dashbord/css/owl.carousel.css">
    <link rel="stylesheet" href="dashbord/css/owl.theme.css">
    <link rel="stylesheet" href="dashbord/css/owl.transitions.css">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="dashbord/css/animate.css">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="dashbord/css/normalize.css">
    <!-- meanmenu icon CSS
		============================================ -->
    <link rel="stylesheet" href="dashbord/css/meanmenu.min.css">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="dashbord/css/main.css">
    <!-- morrisjs CSS
		============================================ -->
    <link rel="stylesheet" href="dashbord/css/morrisjs/morris.css">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="dashbord/css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- metisMenu CSS
		============================================ -->
    <link rel="stylesheet" href="dashbord/css/metisMenu/metisMenu.min.css">
    <link rel="stylesheet" href="dashbord/css/metisMenu/metisMenu-vertical.css">
    <!-- calendar CSS
		============================================ -->
    <link rel="stylesheet" href="dashbord/css/calendar/fullcalendar.min.css">
    <link rel="stylesheet" href="dashbord/css/calendar/fullcalendar.print.min.css">
    <!-- summernote CSS
		============================================ -->
    <link rel="stylesheet" href="dashbord/css/summernote/summernote.css">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="dashbord/style.css">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="dashbord/css/responsive.css">
    
    <!-- dropzone CSS
		============================================ -->
    <link rel="stylesheet" href="dashbord/css/dropzone/dropzone.css">
  
    <!-- modernizr JS
		============================================ -->
    <script src="dashbord/js/vendor/modernizr-2.8.3.min.js"></script>
</head>
<body>
    
    <div class="left-sidebar-pro">
        <nav id="sidebar" class="">
            <div class="sidebar-header">
                <a href="home.php"><img class="main-logo" src="dashbord/img/logo/logo.png" alt="" /></a>
                <strong><img src="dashbord/img/logo/logosn.png" alt="" /></strong>
            </div>
            <div class="left-custom-menu-adp-wrap comment-scrollbar">
                <nav class="sidebar-nav left-sidebar-menu-pro">
                    <ul class="metismenu" id="menu1">
                        <li class="active">
                            <a class="has-arrow" href="home.php">
								   <span >Home</span>
								</a>
                          
                        </li>
                        <li>
                            <a class="has-arrow" href="#" aria-expanded="false"><i class="fa big-icon fa-envelope icon-wrap"></i> <span class="mini-click-non">Recipe</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="Inbox" href="postrecipe.php"><i class="fa fa-send sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro">Post</span></a></li>
                                <li><a title="View Mail" href="recipeedit.php"><i class="fa fa-cog sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro">Edit</span></a></li>
                                <li><a title="Compose Mail" href="recipedelete.php"><i class="fa fa-recycle sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro">Delete</span></a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="has-arrow" href="#" aria-expanded="false"><i class="fa big-icon fa-user icon-wrap"></i> <span class="mini-click-non">Members</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="Google Map" href="viewmember.php"><i class="fa fa-book sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro">View Members</span></a></li>
                                <li><a title="Data Maps" href="editmember.php"><i class="fa fa-cog sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro">Edit Members</span></a></li>
                                <li><a title="Pdf Viewer" href="deletemember.php"><i class="fa fa-recycle sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro">Delete Members</span></a></li>
                            </ul>
                        </li>
                        
                        <li>
                            <a class="has-arrow" href="#" aria-expanded="false"><i class="fa big-icon fa fa-cog icon-wrap"></i> <span class="mini-click-non">Settings</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="Bar Charts" href="profile.php"><i class="fa fa-user sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro">Profile</span></a></li>
                                <li><a title="Line Charts" href="changepassword.php"><i class="fa fa-cog sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro">Change Password</span></a></li>
                                <li><a title="Area Charts" href="editprofile.php"><i class="fa fa-book sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro">Edit Info</span></a></li>
                                 </ul>
                        </li>
                       
                        </ul>
                </nav>
            </div>
        </nav>
    </div>
    <!-- Start Welcome area -->
    <div class="all-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="logo-pro">
                        <a href="home.php"><img class="main-logo" src="img/logo/log.png" alt="" /></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-advance-area">
            <div class="header-top-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="header-top-wraper">
                                <div class="row">
                                    <div class="col-lg-1 col-md-0 col-sm-1 col-xs-12">
                                        <div class="menu-switcher-pro">
                                            <button type="button" id="sidebarCollapse" class="btn bar-button-pro header-drl-controller-btn btn-info navbar-btn">
													<i class="fa fa-bars"></i>
												</button>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-7 col-sm-6 col-xs-12">
                                        <div class="header-top-menu tabl-d-n">
                                            
                                        </div>
                                    </div>
                                    <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                        <div class="header-right-info">
                                            <ul class="nav navbar-nav mai-top-nav header-right-menu">
                                               
                                                <li class="nav-item">
                                                    <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
															<i class="fa fa-user adminpro-user-rounded header-riht-inf" aria-hidden="true"></i>
															<span class="admin-name"><?php echo $_SESSION['name'];?></span>
															<i class="fa fa-angle-down adminpro-icon adminpro-down-arrow"></i>
														</a>
                                                    <ul role="menu" class="dropdown-header-top author-log dropdown-menu animated zoomIn">
                                                       
                                                        <li><a href="profile.php"><span class="fa fa-user author-log-ic"></span>My Profile</a>
                                                        </li>
                                                        <li><a href="editprofile.php"><span class="fa fa-cog author-log-ic"></span>Settings</a>
                                                        </li>
                                                        <li><a href="logout.php"><span class="fa fa-lock author-log-ic"></span>Log Out</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
			<br>
			<br>
            <!-- Mobile Menu start -->
            <div class="mobile-menu-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="mobile-menu">
                                <nav id="dropdown">
                                    <ul class="mobile-menu-nav">
                                        <li><a data-toggle="collapse" data-target="#Charts" href="#">Home <span class="admin-project-icon adminpro-icon "></span></a>
                                            
                                        </li>
                                        <li>
                            <a class="has-arrow" href="#" aria-expanded="false"><i class="fa big-icon fa-envelope icon-wrap"></i> <span class="mini-click-non">Recipe</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="Inbox" href="postrecipe.php"><i class="fa fa-send sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro">Post</span></a></li>
                                <li><a title="View Mail" href="recipeedit.php"><i class="fa fa-cog sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro">Edit</span></a></li>
                                <li><a title="Compose Mail" href="recipedelete.php"><i class="fa fa-recycle sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro">Delete</span></a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="has-arrow" href="#" aria-expanded="false"><i class="fa big-icon fa-user icon-wrap"></i> <span class="mini-click-non">Members</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="Google Map" href="viewmember.php"><i class="fa fa-book sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro">View Members</span></a></li>
                                <li><a title="Data Maps" href="editmember.php"><i class="fa fa-cog sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro">Edit Members</span></a></li>
                                <li><a title="Pdf Viewer" href="deletemember.php"><i class="fa fa-recycle sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro">Delete Members</span></a></li>
                            </ul>
                        </li>
                        
                        <li>
                            <a class="has-arrow" href="#" aria-expanded="false"><i class="fa big-icon fa fa-cog icon-wrap"></i> <span class="mini-click-non">Settings</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="Bar Charts" href="profile.php"><i class="fa fa-user sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro">Profile</span></a></li>
                                <li><a title="Line Charts" href="changepassword.php"><i class="fa fa-cog sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro">Change Password</span></a></li>
                                <li><a title="Area Charts" href="editprofile.php"><i class="fa fa-book sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro">Edit Info</span></a></li>
                                 </ul>
                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Mobile Menu end -->
            <div class="breadcome-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcome-list">
                                <div class="row">
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- tinymce Start-->
        <div class="tinymce-area mg-tb-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="tinymce-single responsive-mg-b-30">
                            <div class="alert-title">
                                <h2>Edit Recipe</h2>
                                <p>Post a new recipe</p>
								
                            </div><form action="" method="post" enctype="multipart/form-data">
								
	<?php
	$id=$_GET['recipe'];
	?>
	<?php include ('db.php');
									$school= mysqli_query($db, "SELECT * FROM recipe WHERE id=$id");
				while($row=mysqli_fetch_array($school)){
					?>
							 <div class="row">
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                                                <label class="login2 ">Title</label><input type="hidden" class="form-control" name="id" value="<?php echo $id;?>"/>
																<input type="text" class="form-control" name="name" value="<?php echo $row['title']; ?>"/>
                                                            </div>
                                                          <br>
                                                          <br>
                                                          <br>
                                                          <br>
														 <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="login2 ">About</label>  <br> <textarea name="note" style=" width:100%">
							
					<?php echo $row['about']; ?>		</textarea>
                                                            </div>
                                                        </div>
														
															<br>
							                                         
                           
							<br>
							 <div class="row">
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
															<img class="main-logo" src="<?php echo $row['pics']; ?>" alt=""  width="20%"/><br>
				<label class="login2 ">File</label><input type="file" class="form-control" required name="file" value="<?php echo $row['pics']; } ?>" />
                                                            </div>
                                                          
                                                        </div>
        
							<button class="btn btn-sm btn-primary login-submit-cs" type="submit" name="save">Update</button>
                         
							 </div></form>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
      
    </div>

    <!-- jquery
		============================================ -->
    <script src="dashbord/js/vendor/jquery-1.11.3.min.js"></script>
    <!-- bootstrap JS
		============================================ -->
    <script src="dashbord/js/bootstrap.min.js"></script>
    <!-- wow JS
		============================================ -->
    <script src="dashbord/js/wow.min.js"></script>
    <!-- price-slider JS
		============================================ -->
    <script src="dashbord/js/jquery-price-slider.js"></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="dashbord/js/jquery.meanmenu.js"></script>
    <!-- owl.carousel JS
		============================================ -->
    <script src="dashbord/js/owl.carousel.min.js"></script>
    <!-- sticky JS
		============================================ -->
    <script src="dashbord/js/jquery.sticky.js"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="dashbord/js/jquery.scrollUp.min.js"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="dashbord/js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="dashbord/js/scrollbar/mCustomScrollbar-active.js"></script>
    <!-- metisMenu JS
		============================================ -->
    <script src="dashbord/js/metisMenu/metisMenu.min.js"></script>
    <script src="dashbord/js/metisMenu/metisMenu-active.js"></script>
    <!-- summernote JS
		============================================ -->
    <script src="dashbord/js/summernote/summernote.min.js"></script>
    <script src="dashbord/js/summernote/summernote-active.js"></script>
   
    <script src="dashbord/js/tab.js"></script>
    <!-- plugins JS
		============================================ -->
    <script src="dashbord/js/plugins.js"></script>
    <!-- main JS
		============================================ -->
    <script src="dashbord/js/main.js"></script>
	<?php
include_once('db.php');
if (isset($_POST['save'])){
	$title=$_POST['name'];
	$note=$_POST['note'];
	$id=$_POST['id'];
	
	$date=date('d/m/Y');
	move_uploaded_file($_FILES["file"]["tmp_name"],
      "img/" . $_FILES["file"]["name"]);
      $img="img/" . $_FILES["file"]["name"];
	  	$sql=mysqli_query($db, "UPDATE recipe SET title='$title', about='$note', pics='$img', date='$date' WHERE id='$id'")or die(mysqli_error);
echo '<script>alert("Recipe Edited");';
   echo 'window.location= "home.php";</script>';
}
	
	?>