<body>
    
    <div class="left-sidebar-pro">
        <nav id="sidebar" class="">
            <div class="sidebar-header">
                <a href="home.php"><img class="main-logo" src="dashbord/img/logo/log.png" alt="" /></a>
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
                        <a href="home.php"><img class="main-logo" src="img/logo/logo.png" alt="" /></a>
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