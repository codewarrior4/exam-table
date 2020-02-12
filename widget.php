<?php 

include 'connect.php';
$query_nd1=mysqli_query($mycon,"SELECT count(level) as id from exam_table where level= 'Nd1' ");
$query_nd2=mysqli_query($mycon,"SELECT count(level) as id from exam_table where level='Nd2' ");
$query_hnd1=mysqli_query($mycon,"SELECT count(level) as id from exam_table where level='Hnd1' ");
$query_hnd2=mysqli_query($mycon,"SELECT count(level) as id from exam_table where level='Hnd2' ");
$row=mysqli_fetch_array($query_nd1);
$data=mysqli_fetch_array($query_nd2);
$me = mysqli_fetch_array($query_hnd1);
$you = mysqli_fetch_array($query_hnd2);

?>

<div class="row">
						<div class="col-lg-12">
							<div class="row">
							<a href="level.php?level=ND1">	
								<div class="col-lg-6">
									<div class="card p-0">
										<div class="stat-widget-three">
											<div class="stat-icon bg-primary p-48">
												<i class="ti-star"></i>
											</div>
											<div class="stat-content p-30">
												<div class="stat-digit"> <a href="level.php?level=ND1"> NDI </a></div>

										
												<div class="stat-digit"><a href="level.php?level=ND1"><?php echo $row['id'];?></a></div>
												
											</div>
										
										</div>
									</div>
								</div>
							</a>
								
							<a href="level.php?level=ND2">
								<div class="col-lg-6">
									<div class="card p-0">
										<div class="stat-widget-three">
											<div class="stat-icon bg-warning p-48">
												<i class="ti-user"></i>
											</div>
											<div class="stat-content p-30">
												<div class="stat-digit"><a href="level.php?level=ND2"> NDII </a></div>
										
												<div class="stat-digit"><a href="level.php?level=ND2"><?php  echo $data['id'];?></a></div>
												
											</div>
										
										</div>
									</div>
								</div>
							</a>

						<div class="col-lg-12">
								<div class="row">
								<a href="level.php?level=HND1">
								
									<div class="col-lg-6">
										<div class="card p-0">
											<div class="stat-widget-three">
												<div class="stat-icon bg-warning p-48">
													<i class="ti-user"></i>
												</div>
												<div class="stat-content p-30">
													<div class="stat-digit"><a href="level.php?level=HND1"> HNDI </a></div>
											
													<div class="stat-digit"><a href="level.php?level=HND1"><?php  echo $me['id'];?></a></div>
													
												</div>
											
											</div>
										</div>
									</div>
								</a>
								
								<a href="level.php?level=HND2">
									<div class="col-lg-6">
										<div class="card p-0">
											<div class="stat-widget-three">
												<div class="stat-icon bg-warning p-48">
													<i class="ti-user"></i>
												</div>
												<div class="stat-content p-30">
													<div class="stat-digit"><a href="level.php?level=HND1">HNDII </a></div>
											
													<div class="stat-digit"><a href="level.php?level=HND1"><?php  echo $you['id'];?></a></div>
													
												</div>
											
											</div>
										</div>
									</div>
								</a>				
								</div>
                            
							</div>
						</div>
                    </div>