<?php
session_start();
include('db.php');
$first_name = $_SESSION['first_name'];
$last_name = $_SESSION['last_name'];
$email = $_SESSION['email'];

?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Order Services section</title>
	<!-- Bootstrap Styles-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FontAwesome Styles-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- Custom Styles-->
    <link href="assets/css/custom-styles.css" rel="stylesheet" />
     <!-- Google Fonts-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">

                    <li>
                        <a  href="../profile.php"><i class="fa fa-home"></i> Homepage</a>
                    </li>
                    
					</ul>

            </div>

        </nav>
       
        <div id="page-wrapper" >
            <div id="page-inner">
			 <div class="row">
                    <div class="col-md-12">
                        <h1> Client Information <small></small>
                        </h1>
                    </div>
                </div> 
                 <br>
                 <hr>
                                 
            <div class="row">
               
                <div class="col-md-5 col-sm-5">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            PERSONAL INFORMATION
                        </div>
                        <div class="panel-body">
						<form name="form" method="post">
                            
							  <div class="form-group">
                                            <label>First Name</label>
                                            <input name="fname" class="form-control" required value="<?php echo $first_name ?>" >
                                            
                               </div>
							   <div class="form-group">
                                            <label>Last Name</label>
                                            <input name="lname" class="form-control" required value="<?php echo $last_name; ?>">
                                            
                               </div>
							   <div class="form-group">
                                            <label>Email</label>
                                            <input name="email" type="email" class="form-control" required value="<?php echo $email?>" >
                                            
                               </div>
							   <div class="form-group">
                                            <label>County</label>
                                            <label class="radio-inline">
                                                <input type="radio" name="County"  value="Nairobi" checked="" required="<?php echo $County?>">Nairobi
                                            </label>
                                            
                         
                                </div>
								<?php

								$Consistuency = array("kajiado","embakasi","kangemi","bururburu","madaraka","lang'ata","kibera","siwaka","ruiru","kibera","kinoo","kayole","kasarani","regen");

								?>
								<div class="form-group">
                                            <label>Consistuency</label>
                                            <select name="Constituency" class="form-control" required="<?php echo $Consistuency?>">
												<option Value selected ></option>
                                                <?php
												foreach($Consistuency as $key => $value):
												echo '<option value="'.$value.'">'.$value.'</option>'; //close your tags!!
												endforeach;
												?>
                                            </select>
								</div>
								<div class="form-group">
                                            <label>Phone Number</label>
                                            <input name="phone" type ="text" class="form-control" required>
                                            
                               </div>
							   
                        </div>
                        
                    </div>
                </div>
                
                  
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                          Customer Information
                        </div>
                        <div class="panel-body">
								<div class="form-group">
                                <label>Waste Category </label>
                                            <select name="Category"  class="form-control">
												<option value selected ></option>
                                                <option value="office waste">Office Waste</option>
                                                <option value="kitchen refuse">Kitchen Refuse</option>
												<option value="recycling waste">Recycable Waste</option>
												<option value="market waste">Market Waste</option>
                                            </select>        
                              </div>
							  <div class="form-group">
                                            <label>Waste Type</label>
                                            <select name="twaste" class="form-control" required>
												<option value selected ></option>
                                                <option value="e-waste">E-waste</option>
                                                <option value="hazardous">Hazardous</option>
												<option value="biodegredable">Bio-degredable</option>
                                                <option value="kitchen refuse">Kitchen Refuse</option>
												<option value="nonbiodegredable">Non-biodegredable</option>
                                                
                                             
                                            </select>
                              </div>
							  <div class="form-group">
                                            <label>No of bags</label>
                                            <select name="nroom" class="form-control" required>
												<option value selected ></option>
                                                <option value="1">1</option>
                                               <option value="2">2</option>
												<option value="3">3</option>
												<option value="4">4</option>
												<option value="5">5</option>
												<option value="6">6</option>
												<option value="7">7</option> 
                                            </select>
                              </div>
							 
							 
							  <div class="form-group">
                                            <label>Description</label>
                                            <select name="Description" class="form-control">
												<option value selected ></option>
                                                <option value="sorted">Sorted</option>
                                                <option value="unsorted">Unsorted</option>
                                                
                                             
                                            </select>
                              </div>
							  <div class="form-group">
                                            <label>Collection date</label>
                                            <input name="cin" type ="date" class="form-control">
                                            
                               </div>
							   <div class="form-group">
                                            <label>Date Due for collection</label>
                                            <input name="cout" type ="date" class="form-control">
                                            
                               </div>
                       </div>
                        
                    </div>
                </div>
				
				
                <div class="col-md-12 col-sm-12">
                    <div class="well">
                        <h4>HUMAN VERIFICATION</h4>
                        <p>Type Below this code <?php $Random_code=rand(); echo$Random_code; ?> </p><br />
						<p>Enter the random code<br /></p>
							<input  type="text" name="code1" title="random code" />
							<input type="hidden" name="code" value="<?php echo $Random_code; ?>" />
						<input type="submit" name="submit" class="btn btn-primary">
						<?php
							if(isset($_POST['submit']))
							{
							$code1=$_POST['code1'];
							$code=$_POST['code']; 
							if($code1!="$code")
							{
							$msg="Invalide code"; 
							}
							else
							{
							
									$con=mysqli_connect("localhost","root","","wastecollection");
									$check="SELECT * FROM waste_category WHERE email = '$_POST[email]'";
									$rs = mysqli_query($con,$check);
									$data = mysqli_fetch_array($rs, MYSQLI_NUM);
									if($data[0] > 1) {
										echo "<script type='text/javascript'> alert('User Already in Exists')</script>";
										
									}

									else
									{
                                        $cin =  strtotime($_POST['cin']);
                                        $cout =  strtotime($_POST['cout']);
                                        $days_between = ceil(abs($cout - $cin) / 86400);

										$new ="Not Confirm";
										$newUser="INSERT INTO `waste_category`(`FName`, `LName`, `Email`, `County`, `Consistuency`, `Phone`, `twaste`, `cin`, `cout`,`stat`,`nodays`,`nroom`) VALUES ('$_POST[fname]','$_POST[lname]','$_POST[email]','$_POST[County]','$_POST[Constituency]','$_POST[phone]', '$_POST[twaste]', '$_POST[cin]','$_POST[cout]', '$_POST[Description]', '$days_between', '$_POST[nroom]' )";

                                        
                                        // echo $newUser;
                                        // exit;
										if (mysqli_query($con,$newUser))
										{
											echo "<script type='text/javascript'> alert('Your application has been sent')";
                                            echo "<meta http-equiv='refresh' content='0'>";
											
										}
										else
										{
                                            echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
											//echo "<script type='text/javascript'> alert('Error adding user in database')</script>";
											
										}
									}

							$msg="Your code is correct";
							}
							}
							?>
                    
						</form>
							
                    </div>
                </div>
            </div>
           
                
                </div>
                    
            
				
					</div>
			 <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- Bootstrap Js -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Metis Menu Js -->
    <script src="assets/js/jquery.metisMenu.js"></script>
      <!-- Custom Js -->
    <script src="assets/js/custom-scripts.js"></script>
    
   
</body>
</html>
