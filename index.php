
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Authentication | Project</title>

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
    <link href="assets/css/lib/themify-icons.css" rel="stylesheet">
    <link href="assets/css/lib/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/lib/unix.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
</head>

<body class="bg-primary">

	<div class="unix-login">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-lg-offset-3">
					<div class="login-content">
						<div class="login-logo">
							<a href="#"><span> Mapoly Exam Timetable</span></a>
						</div>
						<div class="login-form">
							<h4>Authentication Page</h4>
							<form method="POST">
								<div class="form-group">
									<label>Staff ID</label>
									<input type="text" class="form-control" placeholder="username"  name="username" required>
								</div>
								<div class="form-group">
									<label>Password</label>
									<input type="password" class="form-control" placeholder="Password" name="password">
								</div>
								<input type="submit" value="submit" name="login" class="btn btn-primary btn-flat m-b-30 m-t-30">

							</form>
              <p style="background-color:red;">
                <?php
                include 'connect.php';


                if (isset($_POST['login']))
                {
                  $username=$_POST['username'];
                  $password=$_POST['password'];


                  if (!empty($username) && !empty($password))
                  {
                  $query_select=mysqli_query($mycon,"SELECT id from admin  where username='".$username."' and password ='".$password."'  ");

                    if ($query_select)
                      {
                        $id=mysqli_fetch_array($query_select);
                        $sessionid=$id['id'];
                        // echo $sessionid;

                        $query_num=mysqli_num_rows($query_select);
                        if ($query_num==0)
                        {
                          echo '<script>alert("Username or password do not match the datebase");</script>';
                        }

                        else
                        {
                          $_SESSION['sessionid']=$sessionid;
                          echo '<script>alert("Admin Login Successful");</script>';
                          echo '<script>window.location="home.php";</script>';                          
                        }
                      }

                      else 
                      {
                        echo mysqli_error($query_select);
                      }
                  }
                  
                  else 
                  {
                    echo '<script>alert("FIelds cannot appear blank");</script>';
                  }

                }

  ?>
              </p>

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

</body>

</html>
