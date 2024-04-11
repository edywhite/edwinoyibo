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
                                    <h1>Edit Recipes<span class="table-project-n"> Posted</span> </h1>
                                </div>
                            </div>
                            <div class="sparkline13-graph">
                                <div class="datatable-dashv1-list custom-datatable-overright">
                                   
                                    <table  data-toggle="table" data-pagination="true"   >
                                        <thead>
                                            <tr>
                                                <th >Title</th>
                                                <th  >Note</th>
                                                <th  >Picture</th>
												<th >Date</th>
												
                                            </tr>
                                        </thead>
                                        <tbody>
										<?php include ('db.php');
									$school= mysqli_query($db, "SELECT * FROM recipe");
				while($row=mysqli_fetch_array($school)){
					?>
                                            <tr>
                                               
                                                <td><a href="editrecipe.php?recipe=<?php echo $row['id']; ?>"> <?php echo $row['title']; ?></a></td>
                                                <td><?php echo $row['about']; ?></td>
												<td><center><img class="main-logo" src="<?php echo $row['pics']; ?>" alt=""  width="10%"/></center></td>
												<td><?php echo $row['date']; ?></td>
                                                
                                                </td>
                                            </tr>
				<?php }?>
                                        </tbody>
                                    </table>
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
	