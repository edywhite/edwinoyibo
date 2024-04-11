  

 <?php 
include_once('header.php');
include_once('db.php');

 ?>

    <!-- ****** Header Area Start ****** -->
    <header class="header_area">
        <div class="container">
            <div class="row">
                <!-- Logo Area Start -->
                <div class="col-12">
                    <div class="logo_area text-center">
                        <a href="index.php" class="yummy-logo">Edwin Oyibo</a>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <nav class="navbar navbar-expand-lg">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#yummyfood-nav" aria-controls="yummyfood-nav" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars" aria-hidden="true"></i> Menu</button>
                        <!-- Menu Area Start -->
                        <div class="collapse navbar-collapse justify-content-center" id="yummyfood-nav">
                            <ul class="navbar-nav" id="yummy-nav">
                                <li class="nav-item active">
                                    <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                                </li>
                                
                                <li class="nav-item">
                                    <a class="nav-link" href="#">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Contact</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ****** Header Area End ****** -->
	
    <!-- ****** Single Blog Area Start ****** -->
    <section class="single_blog_area section_padding_80">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-8">
                    <div class="row no-gutters">

                        <!-- Single Post -->
                        <div class="col-10 col-sm-11">
						
						        
   
                                
						
                            <div class="single-post">
                               
                          <!-- Post Content -->
                                <div class="post-content">
                               <?php
include_once('db.php');
if (isset($_GET['search'])){
	$search=$_GET['search'];
	
					  $school= mysqli_query($db, "SELECT * FROM recipe WHERE title= '$search' ");
				while($row=mysqli_fetch_array($school)){
					  ?>      
                                <a href="readmore.php?more=<?php echo $row['id']; ?>" >
                                        <h3 class="post-headline">                   
<?php echo $row['title'] .' | Posted'.$row['date'] ; ?> </h3>
                                    </a>  
           <?php }}?>                       

                                </div>                        

                            </div>
				


                           


                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
	
	