<?php  
session_start();  
if(!isset($_SESSION["user"]))
{
 header("location:index.php");
}
?> 

<?php
		if(!isset($_GET["rid"]))
		{
				
			 header("location:index.php");
		}
		else {
				$curdate=date("Y/m/d");
				include ('db.php');
				$id = $_GET['rid'];
				
				
				$sql ="Select * from waste_category where id = '$id'";
				$re = mysqli_query($con,$sql);
				while($row=mysqli_fetch_array($re))
				{
					$fname = $row['FName'];
					$lname = $row['LName'];
					$email = $row['Email'];
					$County = $row['County'];
					$Constituency = $row['Consistuency'];
					$Phone = $row['Phone'];
					$twaste = $row['twaste'];
					$nroom = $row['nroom'];
					
					$cin = $row['cin'];
					$cout = $row['cout'];
					$sta = $row['stat'];
					$days = $row['nodays'];
					
				
				
				}
					
					
				
		
	}
		
		
		
			?> 

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Administrator	</title>
    <!-- Bootstrap Styles-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FontAwesome Styles-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- Morris Chart Styles-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
    <!-- Custom Styles-->
    <link href="assets/css/custom-styles.css" rel="stylesheet" />
    <!-- Google Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>

<body>
    <div id="wrapper">
        <nav class="navbar navbar-default top-navbar" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="home.php"> <?php echo $_SESSION["user"]; ?> </a>
            </div>

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="usersetting.php"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        
                        <li class="divider"></li>
                        <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
        </nav>
        <!--/. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">

                    <li>
                        <a  href="home.php"><i class="fa fa-dashboard"></i> Status</a>
                    </li>
                   
                   
					
                    
                    <li>
                        <a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                    </li>
                    


                    
					</ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->
		
		
		

        <div id="page-wrapper">
            <div id="page-inner">


                
					
					
					<div class="col-md-8 col-sm-8">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                         user Entities
                        </div>
                        <hr>
                        <br>
                        <div class="panel-body">
							
							<div class="table-responsive">
                                <table class="table">
                                    <tr>
                                            <th>DESCRIPTION</th>
                                            <th>INFORMATION</th>
                                            
                                        </tr>
                                        <tr>
                                            <th>Name</th>
                                            <th><?php echo $fname;?> </th>
                                            
                                        </tr>
										<tr>
                                            <th>Email</th>
                                            <th><?php echo $email; ?> </th>
                                            
                                        </tr>
										<tr>
                                            <th>county </th>
                                            <th><?php echo $County; ?></th>
                                            
                                        </tr>
										<tr>
                                            <th>ward </th>
                                            <th><?php echo $Constituency;  ?></th>
                                            
                                        </tr>
										<tr>
                                            <th>Phone No </th>
                                            <th><?php echo $Phone; ?></th>
                                            
                                        </tr>
										<tr>
                                            <th>institution </th>
                                            <th><?php echo $twaste; ?></th>
                                            
                                        </tr>
										<tr>
                                            <th>No Of bags </th>
                                            <th><?php echo $nroom; ?></th>
                                            
                                        </tr>
										
										
										<tr>
                                            <th>date collection</th>
                                            <th><?php echo $cin; ?></th>
                                            
                                        </tr>
										<tr>
                                            <th>due date collection</th>
                                            <th><?php echo $cout; ?></th>
                                            
                                        </tr>
										
										<tr>
                                            <th>Status Level</th>
                                            <th><?php echo $sta; ?></th>
                                            
                                        </tr>
                                   
                                  
                                        
                                        
                                    
                                </table>
                            </div>
                        
					
							
                        </div>
                        <div class="panel-footer">
                            <form method="post">
										<div class="form-group">
														<label>Select the Confirmation</label>
														<select name="conf"class="form-control">
															<option value selected>	</option>
															<option value="Confirm">Confirm</option>
															
															
														</select>
										 </div>
							<input type="submit" name="submit" value="Confirm" class="btn btn-success">
							<?php
							if(isset($_POST['submit'])){
							$urb = "UPDATE `waste_category` SET `stat`='Confirm' WHERE id = '$id'";
							if(mysqli_query($con,$urb)){
								echo "<script type='text/javascript'>alert('Confirmed')</script>";
								echo "<meta http-equiv='refresh' content='0'>";


							}

							
							// if($st=="Confirm")
							// {
							// 		$urb = "UPDATE `waste_category` SET `stat`='$st' WHERE id = '$id'";
							// }

							}
							?>
							</form>
                        </div>
                    </div>
					</div>
					
					<!-- <?php
						$rsql ="select * from waste_collection";
						$rre= mysqli_query($con,$rsql);
						$r =0 ;
						$sc =0;
						$gh = 0;
						$sr = 0;
						$dr = 0;
						while($rrow=mysqli_fetch_array($rre))
						{
							$r = $r + 1;
							$s = $rrow['type'];
							$p = $rrow['place'];
							if($s=="Superior Room" )
							{
								$sc = $sc+ 1;
							}
							
							if($s=="Guest House")
							{
								$gh = $gh + 1;
							}
							if($s=="Single Room" )
							{
								$sr = $sr + 1;
							}
							if($s=="Deluxe Room" )
							{
								$dr = $dr + 1;
							}
							
						
						}
						?>
						
						<?php
						$csql ="select * from payment";
						$cre= mysqli_query($con,$csql);
						$cr =0 ;
						$csc =0;
						$cgh = 0;
						$csr = 0;
						$cdr = 0;
						while($crow=mysqli_fetch_array($cre))
						{
							$cr = $cr + 1;
							$cs = $crow['twaste'];
							
							if($cs=="Superior Room"  )
							{
								$csc = $csc + 1;
							}
							
							if($cs=="Guest House" )
							{
								$cgh = $cgh + 1;
							}
							if($cs=="Single Room" )
							{
								$csr = $csr + 1;
							}
							if($cs=="Deluxe Room" )
							{
								$cdr = $cdr + 1;
							}
							
						
						}
				
					?> -->
					
                        <!-- <div class="panel-footer">
                            
                        </div> -->
                    </div>
					</div>
                </div>
				
                </div>
				
				
				
				
         </div>
        </div>
    </div>
    <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- Bootstrap Js -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Metis Menu Js -->
    <script src="assets/js/jquery.metisMenu.js"></script>
    <!-- Morris Chart Js -->
    <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script>
    <!-- Custom Js -->
    <script src="assets/js/custom-scripts.js"></script>


</body>

</html>
<?php
						if(isset($_POST['co']))
						{	
							$st = $_POST['conf'];
							echo "<script type='text/javascript'>alert('hello')</script>";

							 
							
							if($st=="Confirm")
							{
									$urb = "UPDATE `waste_category` SET `stat`='$st' WHERE id = '$id'";

									
								// if($st=="NO" )
								// {
								// 	echo "<script type='text/javascript'> alert('Sorry! Not Available  ')</script>";
								// }
								// else if($st2 =="NO")
								// 	{
								// 		echo "<script type='text/javascript'> alert('Sorry! Not Available ')</script>";
										
								// 	}
								// 	else if ($st3 == "NO")
								// 	{
								// 		echo "<script type='text/javascript'> alert('Sorry! Not Available )</script>";
								// 	}
								// 		else if($st4=="NO")
								// 		{
								// 		echo "<script type='text/javascript'> alert('Sorry! Not Available ')</script>";
								// 		}


				
										
										/*else if( mysqli_query($con,$urb))
											{	
												//echo "<script type='text/javascript'> alert('Guest Room booking is Confirm')</script>";
												//echo "<script type='text/javascript'> window.location='home.php'</script>";
												 $twaste = 0;       
														if($twaste=="Superior Room")
														{
															twaste= 320;														
														}
														else if($twaste=="Deluxe Room")
														{
															twaste= 220;
														}
														else if($twaste=="Guest House")
														{
															twaste= 180;
														}
														else if($twaste=="Single Room")
														{
															twaste= 150;
														}
														
														
														
														
														 ;
															
															//echo "<script type='text/javascript'> alert('$count_date')</script>";
														$psql = "INSERT INTO `payment`(`id`, `fname`, `lname`, `twaste`, `tbed`, `nroom`, `cin`, `cout`, `noofdays`) VALUES ('$id','$fname','$lname','$twaste','$bed','$nroom','$cin','$cout','$ttot','$meal','$mepr','$btot','$fintot','$days')";
														
																												
															
														}*/
												
											}
									
                                        
							}	
					
			
									
							
						?>