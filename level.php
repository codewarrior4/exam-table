<?php 
  include 'connect.php';
  ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Level | Manager</title>

	<!-- ================= Favicon ================== -->
    <!-- Standard -->
    <link rel="shortcut icon" href="http://placehold.it/64.png/000/fff">
    <!-- Retina iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="144x144" href="http://placehold.it/144.png/000/fff">
    <!-- Retina iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="114x114" href="http://placehold.it/114.png/000/fff">
    <!-- Standard iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="72x72" href="http://placehold.it/72.png/000/fff">
    <!-- Standard iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="57x57" href="http://placehold.it/57.png/000/fff">

	<!-- Styles -->
    <link href="assets/css/lib/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/css/lib/themify-icons/themify-icons.css">
    <link href="http://zebratheme.com/html/fooadmin/assets/css/lib/datatable/dataTables.bootstrap.min.css" rel="stylesheet" />
    <link href="http://zebratheme.com/html/fooadmin/assets/css/lib/datatable/buttons.bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/lib/mmc-chat.css" rel="stylesheet" />
    <link href="assets/css/lib/sidebar.css" rel="stylesheet">
    <link href="assets/css/lib/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/lib/unix.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">


</head>

<body>

<?php include 'nav.php';
include 'header.php';
$level=$_GET['level'];?>

    <!-- END chat Sidebar-->

    <div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8 p-0">
                        <div class="page-header">
							<div class="page-title">
								<h1>Dashboard </h1>
							</div>
						</div>
                    </div>
                    <div class="col-lg-4 p-0">
                        <div class="page-header">
							<div class="page-title">
								<ol class="breadcrumb text-right">
									<li><a href="home.php">Dashboard</a></li>
									<li class="active">Topics</li>
								</ol>
							</div>
						</div>
                    </div>
                </div>
				<div class="main-content">
					<div class="row">
						<div class="col-lg-12">
							<div class="card alert">
								<div class="card-header">
                                    <h4><?php echo $level ?> Computer Science  Exam Timetable </h4>
                                    <?php include 'modal/set_title.php'?>
									<div class="card-header-right-icon">
                                    <ol class="breadcrumb text-right">

											<li class="card-close">
                                                <button  data-toggle="modal" data-target="#add_folder">
                                                    <i class="ti-plus"></i>
                                                    Create New Timetable </button>
                                            </li>
                                         
										</ol>
                                    </div>
                                    
								</div>
								<div class="bootstrap-data-table-panel">
									Title
                                    <?php
                                     $select_query = "SELECT  *  FROM `Exam_table` where level='$level' ";
                                    $my_select = mysqli_query($mycon, $select_query);
                                       while($data = mysqli_fetch_array($my_select))
                                       {
                                           $title=$data['title'];
                                           $id=$data['id'];
                                           $level=$data['level'];
                                      ?>
											<div class="row">
                                                <div class="col-lg-12">
                                                    <div class=" panel panel-primary alert">    
                                                        <div class="panel-header">
                                                            <?php echo $title ?> 
                                                            
                                                            <a style="margin-left:10px;" href="delete.php?title=<?php echo $title?>&id= <?php echo $id?>"class="btn btn-primary btn-sm pull-right">Delete</a>

                                                            <a style="margin-left:10px;" href="list.php?title=<?php echo $title?>&id= <?php echo $id?>&level=<?php echo $level ?>" class="btn btn-primary btn-sm pull-right">List</a>

                                                            <a href="set.php?level=<?php echo $level?>&id=<?php echo $id?>&title=<?php echo $title?>" role="button" class=" btn btn-primary btn-sm pull-right">Prepare</a> 
                                                            
                                                           
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                                
                                          
                                                
											</tr>
                                  <?php  } ?>
										
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
            </div>
        </div>
    </div>
    <script src="assets/js/lib/jquery.min.js"></script><!-- jquery vendor -->
    <script src="assets/js/lib/jquery.nanoscroller.min.js"></script><!-- nano scroller -->
    <script src="assets/js/lib/sidebar.js"></script><!-- sidebar -->
    <script src="assets/js/lib/bootstrap.min.js"></script><!-- bootstrap -->

    <script src="assets/js/lib/data-table/datatables.min.js"></script>
    <script src="http://zebratheme.com/html/fooadmin/assets/js/lib/data-table/dataTables.bootstrap.min.js"></script>
    <script src="assets/js/lib/data-table/dataTables.buttons.min.js"></script>
    <script src="http://zebratheme.com/html/fooadmin/assets/js/lib/data-table/buttons.bootstrap.min.js"></script>
    <script src="assets/js/lib/data-table/jszip.min.js"></script>
    <script src="assets/js/lib/data-table/pdfmake.min.js"></script>
    <script src="assets/js/lib/data-table/vfs_fonts.js"></script>
    <script src="assets/js/lib/data-table/buttons.html5.min.js"></script>
    <script src="assets/js/lib/data-table/buttons.print.min.js"></script>
    <script src="assets/js/lib/data-table/buttons.colVis.min.js"></script>
    <script src="assets/js/lib/data-table/datatables-init.js"></script>


    <script src="assets/js/lib/mmc-common.js"></script>
    <script src="assets/js/lib/mmc-chat.js"></script>
    <script src="assets/js/scripts.js"></script><!-- scripit init-->

	<script type="text/javascript">
$(document).ready(function() {
    $('#bootstrap-data-table-export').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    } );
} );
	</script>




</body>

</html>
