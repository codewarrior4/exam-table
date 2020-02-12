<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Timetable List | Manager</title>

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
    <link href="assets/css/lib/mmc-chat.css" rel="stylesheet" />
    <link href="assets/css/lib/sidebar.css" rel="stylesheet">
    <link href="assets/css/lib/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/lib/unix.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>

<?php include 'nav.php';
include 'header.php';
$level=$_GET['level'];
 $id=$_GET['id'];
 $title=$_GET['title'];
?>

    <!-- END chat Sidebar-->

    <div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8 p-0">
                        <div class="page-header">
                            <div class="page-title">
                                <h1>Dashboard</h1>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="col-lg-4 p-0">
                        <div class="page-header">
                            <div class="page-title">
                                <ol class="breadcrumb text-right">
                                    <li><a href="home.php">Dashboard</a></li>
                                    <li class="topics.php">Topics</li>
                                    <li class="active">Add timetable</li>
                                </ol>
                            </div>
                        </div>
                    </div> -->
                </div>
               

                <div class="main-content">
                   
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card alert">
                            <div class="card-header"><form>
                                <button class="btn btn-primary pull-right" onclick="window.print();"><i class="ti-print"></i>Print</button>
                                    <h4><?php echo $level ?>  Time table </h4>
                                </div>
                                <div class="card-body">
                                <table class="table table-responsive table-hover ">

                                <thead>
                                    <tr>
                                        <th> S/N</th>
                                        <th> Day</th>
                                        <th>Course Code</th>
                                        <th> Venue</th>
                                        <th> Time</th>
                                        <th> Hours</th>
                                        <th></th>
                                    
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                include 'connect.php';
                                $query=mysqli_query($mycon, "SELECT * FROM `ttable` where titleid='$id' and level='$level' and title='$title'  ");
                                    $count=1;
                                while ($row=mysqli_fetch_array($query))
                                {
                                    
                                ?>
                                    <tr>
                                    <td><?php echo $count++; ?></td>
                                    <td><?php echo $row['day']?></td> 
                                    <td><?php echo $row['code']?></td> 
                                    <td><?php echo $row['venue']?></td>

                                    <td><?php echo $row['time']?></td>  
                                    <td><?php echo $row['hours']?></td>  
                                    <td><a href="delete_course.php?id=<?php echo $row['id']?>" role="button"><i class="ti-trash"></i></td>    
                                
                                    </tr>
                                <?php } ?>
                                </tbody>
                                </table>
                                </div>
                            </div>
                                </form>
                        </div>
                    </div>
				</div>
    <script src="assets/js/lib/jquery.min.js"></script>
    <script src="assets/js/lib/jquery.nanoscroller.min.js"></script>
    <script src="assets/js/lib/sidebar.js"></script>
    <script src="assets/js/lib/bootstrap.min.js"></script>
    <script src="assets/js/lib/mmc-common.js"></script>
    <script src="assets/js/lib/mmc-chat.js"></script>
    <script src="assets/js/scripts.js"></script>





</body>

</html>
