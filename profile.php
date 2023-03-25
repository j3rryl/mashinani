<?php
/* Displays user information and some useful messages */
session_start();

// Check if user is logged in using the session variable
if ( $_SESSION['logged_in'] != 1 ) {
  $_SESSION['message'] = "You must log in before viewing your profile page!";
  header("location: error.php");    
}
else {
    // Makes it easier to read
    $first_name = $_SESSION['first_name'];
    $last_name = $_SESSION['last_name'];
    $email = $_SESSION['email'];
    $active = $_SESSION['active'];
}
?>
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Welcome <?= $first_name.' '.$last_name ?></title>
  <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/font-awesome.css" rel="stylesheet"> 
<link rel="stylesheet" href="css/chocolat.css" type="text/css" media="screen">
<link href="css/easy-responsive-tabs.css" rel='stylesheet' type='text/css'/>
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" property="" />
<link rel="stylesheet" href="css/jquery-ui.css" />
<link href="css/styling.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/modernizr-2.6.2.min.js"></script>

<link href="//fonts.googleapis.com/css?family=Oswald:300,400,700" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Federo" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
</head>

<body>
    <!--header-->
    <div class="banner-top">
			<div class="social-bnr-agileits">
				<ul class="social-icons3">
								<li><a href="https://www.facebook.com/" class="fa fa-facebook icon-border facebook"> </a></li>
								<li><a href="https://twitter.com/" class="fa fa-twitter icon-border twitter"> </a></li>
								<li><a href="https://plus.google.com/u/0/" class="fa fa-google-plus icon-border googleplus"> </a></li> 
							</ul>
			</div>
			<div class="contact-bnr-w3-agile">
				<ul>
					<li><i class="fa fa-envelope" aria-hidden="true"></i><a href="mailto:info@example.com">mashinaniwaste@gmail.com</a></li>
					<li><i class="fa fa-phone" aria-hidden="true"></i>0703947052</li>	
					<li class="s-bar">
                    <h6>Welcome</h6>
                    <h6><?php echo $first_name.' '.$last_name; ?></h6>
              
                    <a href="index.php"><button class="button button-block btn-danger" name="logout"/>Log Out</button></a>
					</li>
                </ul>
                
			</div>
			<div class="clearfix"></div>
        </div>
        <!--navigation-->
        <div class="w3_navigation">
		<div class="container">
			<nav class="navbar navbar-default">
				<div class="navbar-header navbar-left">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<h1><a class="navbar-brand" href="index.php">Mashinani waste <span>collection</span><p class="logo_w3l_agile_caption">clean and serene</p></a></h1>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
					<nav class="menu menu--iris">
						<ul class="nav navbar-nav menu__list">
							<li class="menu__item menu__item--current"><a href="index.html" class="menu__link">Home</a></li>
							<li class="menu__item"><a href="#about" class="menu__link scroll">About</a></li>
							<li class="menu__item"><a href="#team" class="menu__link scroll">Team</a></li>

							<li class="menu__item"><a href="#services" class="menu__link scroll">services</a></li>
							<li class="menu__item"><a href="#contact" class="menu__link scroll">Contact Us</a></li>
						</ul>
					</nav>
				</div>
			</nav>

		</div>
	</div>
      </div>
<!--services-->
<div class="w3layouts-banner-top2 " id="first">
       
							<div class="container bg-grey">
								<div class="agileits-banner-info">
								<h4>Mashinani WASTE COLLECTION</h4>
									<h4>We mind your health</h4>
										<p>We love clean environment</p>
									
								</div>
														</div>
						</div>
				
</div>

	<div class="container" id="about" >
		<div class="advantages-main">
				<h3 class="title-w3-agileits">more</h3>
		   <div class="advantage-bottom">
			 <div class="col-md-6 advantage-grid left-w3ls wow bounceInLeft" data-wow-delay="0.3s">
			 	<div class="advantage-block ">
					<i class="fa fa-credit-card" aria-hidden="true"></i>
			 		<h4>About us </h4>
			 		<p>Mashinani Waste Management System is a system that is majorly concerned in proper collection and disposal of waste. The system entails management of the land around users by reducing land fills  caused by improper waste disposal. Together with you, the user, we can change the status of the environment from the current  one to a better looking one.</p>

			 	</div>
			 </div>
			 <div class="col-md-6 advantage-grid right-w3ls wow zoomIn" data-wow-delay="0.3s">
			 	<div class="advantage-block">
					<i class="fa fa-clock-o" aria-hidden="true"></i>
			 		<h4>The 3 R's</h4>
			 		<p>These are the  major backbone of a clean environment. They collectively stand for: Recycle, Reuse, Reduce. Recycle deals with  converting waste materials into new materials. Reuse entails using something again whether for its original purpose or to fulfill a different function. Reduce is the act of minimizing the amount of waste one produces in a certain period of time.</p>
			 	</div>
			 </div>
			 <div class="col-md-6 advantage-grid right-w3ls wow zoomIn" data-wow-delay="0.3s">
			 	<div class="advantage-block">
					<i class="fa fa-road" aria-hidden="true"></i>
			 		<h4>Our Routes</h4>

			 		<h5>Mashinani</h5>

			 		<p>Our Mashinani Service works within Nairobi CBD to ensure the cleaningless of the Central Bussiness District TIME: 9.00 A.M. – 5.00 P.M.(MON - SAT)</p>

			 		<h5>Kaskazini</h5>

			 		<p>Our Kaskazini Ervices work within Nairobi North  TIME: 9.00 A.M. – 5.00 P.M.(MON - SAT) that is Stima Plaza, Kolobot Rd, Kengen, Ojijo Rd, Muthithi Rd, Westlands Rd, Villa Rosa, Part of Parklands & Westlands, Swaminarayan TempleCity Mkt, Muthaiga Rd</p>

			 		<h5>Kusini</h5>

			 		<p>Our Kusini service works in the Southern regions TIME: 9.00 A.M. – 5.00 P.M.(MON - SAT) that is TIME: 9.00 A.M. – 5.00 P.M. :Kuguru Complex, Part of Road B, NAS, Chloride Exide, KobilPetrol Stn, Part of Enterprise Rd, KHE, Bhachu Industries </p>

			 		<h5>Magharibi</h5>

			 		<p>Our Magharibi service works from TIME: 9.00 A.M. – 5.00 P.M.(MON - SAT) around Nairobi west, Madaraka, and Lang'ata area </p>
			 	</div>
			 </div>
			 <div class="col-md-6 advantage-grid right-w3ls wow zoomIn" data-wow-delay="0.3s">
			 	<div class="advantage-block">
					<i class="fa fa-money" aria-hidden="true"></i>
			 		<h4>Our Pricing</h4>
			 		
						<h5> E-waste : Kes 100 per bag</h5>
						<hr>
						<h5>Hazardous : Kes 1000 per bag</h5>
						<hr>
						<h5>Bio-degredable : Kes 200 per bag</h5>
						<hr>
						<h5>School Waste : Kes 350 per bag</h5>
						<hr>
						<h5>Non-Recycable : Kes 700 per bag</h5>
						<hr>
						<h5>Institution waste : Kes 500 per bag</h5>
			 	</div>
			 </div>
			<div class="clearfix"> </div>
			</div>
		</div>
	</div>
</div>

<div class="plans-section" id="services">
				 <div class="container">
				 <h3 class="title-w3-agileits title-black-wthree">waste collection services</h3>
						<div class="priceing-table-main">
				 <div class="col-md-3 col-sm-6 price-grid">
					<div class="price-block agile">
						<div class="price-gd-top">
						<img src="images/r3.jpeg" alt=" " class="img-responsive" />
							<h4>household waste</h4>
						</div>
						<div class="price-gd-bottom">
							   <div class="price-list">
									
							</div>
							<div class="price-selet">
								
								<a href="admin/reservation2.php" >request service</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 price-grid ">
					<div class="price-block agile">
						<div class="price-gd-top">
						<img src="images/r4.jpeg" alt=" " class="img-responsive" /><br>
						<br>
							<h4>office waste</h4>
						</div>
						<div class="price-gd-bottom">
							<div class="price-list">
								
							</div>
							<div class="price-selet">
								
								<a href="admin/reservation2.php" >request service</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 price-grid lost">
					<div class="price-block agile">
						<div class="price-gd-top">
						<img src="images/r1.jpeg" alt=" " class="img-responsive" />
							<h4>schools waste</h4>
						</div>
						<div class="price-gd-bottom">
							<div class="price-list">
								
							</div>
							<div class="price-selet">
								
								<a href="admin/reservation2.php" >request service</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 price-grid wthree lost">
					<div class="price-block agile">
						<div class="price-gd-top ">
							<img src="images/r2.jpeg" alt=" " class="img-responsive" /><br><br>
							<h4>Hospital waste</h4>
						</div>
						<div class="price-gd-bottom">
							<div class="price-list">
								
							</div>
							<div class="price-selet">
								
								<a href="admin/reservation2.php" >request service</a>
							</div>
						</div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<div class="team" id="team">
	<div class="container">
			<h3 class="title-w3-agileits title-black-wthree">Meet Our Team</h3>
			
					<div class="resp-tabs-container">
					<div class="tab1 ">
						<div class="col-md-4 team-img-w3-agile">
						</div>
						<div class="col-md-4 team-Info-agileits">
							<h4>james shiraho</h4>
							<span>Manager</span>
							<p>we got an steemed team which deals with catering of customers to make sure that the services are delivered on time</p>
						<div class="social-bnr-agileits footer-icons-agileinfo">
							<ul class="social-icons3">
								<li><a href="#" class="fa fa-facebook icon-border facebook"> </a></li>
								<li><a href="#" class="fa fa-twitter icon-border twitter"> </a></li>
								<li><a href="#" class="fa fa-google-plus icon-border googleplus"> </a></li>
								<li><a href="#" class="fa fa-rss icon-border rss"> </a></li>
							</ul>
						</div>
						</div>
						<div class="clearfix"> </div>
					</div>
					
					</div>
					
					</div>
					</div>
			</div>
	</div>
</div>
<section class="contact-w3ls" id="contact">
	<div class="container">
		<div class="col-lg-6 col-md-6 col-sm-6 contact-w3-agile2" data-aos="flip-left">
			<div class="contact-agileits">
				<h4>Contact Us</h4>
				<p class="contact-agile2">Scontact for queriess</p>
				<form  method="post" name="sentMessage" id="contactForm" >
					<div class="control-group form-group">

                            <label class="contact-p1">query to address</label>
                            <input type="text" class="form-control" name="name" id="name" required >
                            <p class="help-block"></p>

                    </div>
                    <div class="control-group form-group">

                            <label class="contact-p1">Phone Number:</label>
                            <input type="tel" class="form-control" name="phone" id="phone" required >
							<p class="help-block"></p>

                    </div>
                    <div class="control-group form-group">

                            <label class="contact-p1">Email Address:</label>
                            <input type="email" class="form-control" name="email" id="email" required >
							<p class="help-block"></p>

                    </div>


                    <input type="submit" name="sub" value="Send Now" class="btn btn-primary">
				</form>
				<?php
				$con = mysqli_connect("localhost","root","","wastecollection") or die(mysql_error());
				if(isset($_POST['sub']))
				{
					$name =$_POST['name'];
					$phone = $_POST['phone'];
					$email = $_POST['email'];
					$approval = "Not Allowed";
					$sql = "INSERT INTO `contact`(`fullname`, `phoneno`, `email`,`cdate`,`approval`) VALUES ('$name','$phone','$email',now(),'$approval')" ;


					if(mysqli_query($con,$sql))
					echo"OK";

				}
				?>
			</div>
		</div>
		<div class="col-lg-6 col-md-6 col-sm-6 contact-w3-agile1" data-aos="flip-right">
			<h4>Connect With Us</h4>
			<p class="contact-agile1"><strong>Phone :</strong>+254 (65)222-44-55</p>
			<p class="contact-agile1"><strong>Email :</strong> Mashinaniwastecollectors@gmail.com</a></a></p>
			<p class="contact-agile1"><strong>Address :</strong> Nairobi lane ngala</p>

			<div class="social-bnr-agileits footer-icons-agileinfo">
				<ul class="social-icons3">
								<li><a href="#" class="fa fa-facebook icon-border facebook"> </a></li>
								<li><a href="#" class="fa fa-twitter icon-border twitter"> </a></li>
								<li><a href="#" class="fa fa-google-plus icon-border googleplus"> </a></li>

							</ul>
			</div>
			<iframe width="100%" height="600" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=biashara%20street+(Nairobi)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed">Kanairo</iframe>
		</div>
		<div class="clearfix"></div>
	</div>
</section>
<div class="arr-w3ls">
	<a href="#home" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
	</div>
<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>

<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src="js/index.js"></script>

</body>
</html>
