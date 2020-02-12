 <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>New Project Topic | Manager</title>

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
include 'header.php';?>

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
                    <div class="col-lg-4 p-0">
                        <div class="page-header">
                            <div class="page-title">
                                <ol class="breadcrumb text-right">
                                    <li><a href="home.php">Dashboard</a></li>
                                    <li class="topics.php">Topics</li>
                                    <li class="active">Add timetable</li>
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
                                    <h4>Time table Preparation</h4>
                                </div>
                                <div class="card-body">
                                    <div class="basic-form">
                                        <form method ="POST" action="add_topic.php">
                                           <div class="row">
                                                <div class="col-lg-6">
                                                     <div class="form-group">
                                                     <select name="day" class="form-control" >
                                                   <option selected disabled> Select Day</option>
                                                   <option value="Monday">Monday</option>
                                                   <option value="Tuesday">Tuesday</option>
                                                   <option value="Wednesday">Wednesday</option>
                                                   <option value="Thursday">Thursday</option>
                                                   <option value="Friday">Friday</option>
                                                   <option value="Saturday">Saturday</option>
                                                   </select>
                                                     </div>
                                                     </div>
                                                     <div class="col-lg-6">
                                                     <div class="form-group">
                                                    <input type="date" name="date" class="form-control input-default " placeholder="date" >
                                                     </div>
                                                     </div>
                                                
                                                 <div class=" col-lg-6">                                                    <div class="form-group">
                                                    <input type="text" name="code" class="form-control input-default " placeholder=" Course-code" >
                                                     </div>
                                                 </div>
                                           </div>
                                           <div class="row">
                                               
                                                 <div class="col-lg-6">
                                                 <div class="form-group">
                                                    <input type="text" name="time" class="form-control input-default " placeholder=" time" >
                                                     </div>
                                                 </div>
                                                 <div class=" col-lg-6">
                                                <div class="form-group">
                                                    <input type="text" name="venue" class="form-control input-default " placeholder=" venue" >
                                                     </div>
                                                </div>
                                           
                                                 <div class="  col-lg-6">
                                                     <div class="form-group">
                                                   <select name="level" class="form-control" >
                                                   <option selected disabled> Select student level</option>
                                                   <option value="NDI">NDI</option>
                                                   <option value="NDII">NDII</option>
                                                   <option value="HNDI">HNDI</option>
                                                   <option value="HNDII">HNDII</option>
                                                   </select>
                                                     </div>
                                                 </div>
                                          
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                <input type="submit" value="Prepare" name="prepare" class="btn btn-success" >
                                                </div>
                                                </div>
                                             </div>
                                          <?php

                                            include 'connect.php';
                                             if(isset($_POST['prepare']))
                                             {
                                                 $day=$_POST['day'];
                                                 $date=$_POST['date'];
                                                 $date2 = $day .","." ". $date;
                                                 $code=$_POST['code'];
                                                 $time=$_POST['time'];
                                                 $venue=$_POST['venue'];                                                
                                                 $level=$_POST['level'];                                                
                                                
                                              if (!empty($day) && (!empty($code)) && (!empty($time))&& (!empty($venue))&& (!empty($level)) && (!empty($date)) )
                                              {
                                               
                                                $query_insert= mysqli_query($mycon,"INSERT INTO exam_table (id,day,code,time,venue,level)
                                                        VALUES
                                                        ('','$date2','$code','$time','$venue','$level') ");

                                                        if ($query_insert)
                                                        {
                                                         echo  '<script>alert("Course succesfully added")</script>';

                                                        }

                                                        else 
                                                        {
                                                            echo mysqli_error($query_insert);
                                                        }
                                                    }

                                              
                                              else
                                              {
                                                  echo  '<script>alert("Fill up the fields completely");</script>';
                                              }

                                             }
                                        ?>
                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div><!-- /# column -->
                    </div>
				</div><!-- /# main content -->
            </div><!-- /# container-fluid -->
        </div><!-- /# main -->
    </div><!-- /# content wrap -->
    <script src="assets/js/lib/jquery.min.js"></script><!-- jquery vendor -->
    <script src="assets/js/lib/jquery.nanoscroller.min.js"></script><!-- nano scroller -->
    <script src="assets/js/lib/sidebar.js"></script><!-- sidebar -->
    <script src="assets/js/lib/bootstrap.min.js"></script><!-- bootstrap -->
    <script src="assets/js/lib/mmc-common.js"></script>
    <script src="assets/js/lib/mmc-chat.js"></script>
    <script src="assets/js/scripts.js"></script><!-- scripit init-->





</body>

</html>
