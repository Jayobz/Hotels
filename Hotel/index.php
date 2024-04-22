<?php
include('db.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>MijuHotel HOTEL</title>

<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Resort Inn Responsive , Smartphone Compatible web template , SamMijug, LG, Sony Ericsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>



<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/font-awesome.css" rel="stylesheet"> 
<link rel="stylesheet" href="css/chocolat.css" type="text/css" media="screen">
<link href="css/easy-responsive-tabs.css" rel='stylesheet' type='text/css'/>
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" property="" />
<link rel="stylesheet" href="css/jquery-ui.css" />
<link rel="stylesheet" href="css/style.css">
<script type="text/javascript" src="js/modernizr-2.6.2.min.js"></script>



<link href="//fonts.googleapis.com/css?family=Oswald:300,400,700" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Federo" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">


</head>
<body>


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
					<h1><a class="navbar-brand" href="index.php">Miju <span>Hotel</span><p class="logo_w3l_agile_caption">Your Dreamy Resort</p></a></h1>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
					<nav class="menu menu--iris">
						<ul class="nav navbar-nav menu__list">
							<li class="menu__item menu__item--current"><a href="" class="menu__link">Home</a></li>
							<li class="menu__item"><a href="#about" class="menu__link scroll">About</a></li>
							<li class="menu__item"><a href="#team" class="menu__link scroll">Team</a></li>
							<li class="menu__item"><a href="#gallery" class="menu__link scroll">Gallery</a></li>
							<li class="menu__item"><a href="#rooms" class="menu__link scroll">Rooms</a></li>
							<li class="menu__item"><a href="#contact" class="menu__link scroll">Contact Us</a></li>
						</ul>
					</nav>
				</div>
			</nav>

		</div>
	</div>
<!-- //header -->
		<!-- banner -->
	<div id="home" class="w3ls-banner">
		<!-- banner-text -->
		<div class="slider">
			<div class="callbacks_container">
				<ul class="rslides callbacks callbacks1" id="slider4">
					<li>
						<div class="w3layouts-banner-top">

							<div class="container">
								<div class="agileits-banner-info">
								<h4>Miju Hotel</h4>
									<h3>Welcome</h3>
										<p>Welcome to our hotels</p>
									<div class="agileits_w3layouts_more menu__item">
				<a href="#" class="menu__link" data-toggle="modal" data-target="#myModal">Learn More</a>
			</div>
								</div>	
							</div>
						</div>
					</li>
					<li>
						<div class="w3layouts-banner-top w3layouts-banner-top1">
							<div class="container">
								<div class="agileits-banner-info">
								<h4>Miju Hotel</h4>
									<h3>Stay with friends & families</h3>
										<p>Come & enjoy precious moment with us</p>
									<div class="agileits_w3layouts_more menu__item">
				<a href="#" class="menu__link" data-toggle="modal" data-target="#myModal">Learn More</a>
			</div>
								</div>	
							</div>
						</div>
					</li>
					<li>
						<div class="w3layouts-banner-top w3layouts-banner-top2">
							<div class="container">
								<div class="agileits-banner-info">
								<h4>Miju Hotel</h4>
								<h3>want luxurious vacation?</h3>
										<p>Get accommodation today</p>
									<div class="agileits_w3layouts_more menu__item">
											<a href="#" class="menu__link" data-toggle="modal" data-target="#myModal">Learn More</a>
										</div>
								</div>
							</div>
						</div>
					</li>
				</ul>
			</div>
			<div class="clearfix"> </div>
			<!--banner Slider starts Here-->
		</div>
		    <div class="thim-click-to-bottom">
				<a href="#about" class="scroll">
					<i class="fa fa-long-arrow-down" aria-hidden="true"></i>
				</a>
			</div>
	</div>	
	<!-- //banner --> 
<!--//Header-->
<!-- //Modal1 -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog">
						<!-- Modal1 -->
							<div class="modal-dialog">
							<!-- Modal content-->
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal">&times;</button>
										<h4>Miju  <span>Hotel</span></h4>
									
										<h5>We know what you love</h5>
										<p>Providing guests unique and enchanting views from their rooms with its exceptional amenities, makes Star Hotel one of bests in its kind.Try our food menu, awesome services and friendly staff while you are here.</p>
									</div>
								</div>
							</div>
						</div>
<!-- //Modal1 -->
<div id="availability-agileits">
<div class="col-md-12 book-form-left-w3layouts">
<div id="page-wrapper" >
<div id="page-inner">
 <div class="row">
		<div class="col-md-12">
			<h1 class="page-header">
				RESERVATION <small></small>
			</h1>
		</div>
	</div> 
	 
					 
<div class="row">
	
	<div class="col-md-5 col-sm-5">
		<div class="panel panel-primary">
			<div class="panel-heading">
				PERSONAL INFORMATION
			</div>
			<div class="panel-body">
			<form name="form" method="post">
				<div class="form-group">
								<label>Title*</label>
								<select name="title" class="form-control" required >
									<option value selected ></option>
									<option value="Dr.">Dr.</option>
									<option value="Miss.">Miss.</option>
									<option value="Mr.">Mr.</option>
									<option value="Mrs.">Mrs.</option>
									<option value="Prof.">Prof.</option>
									<option value="Rev .">Rev .</option>
									<option value="Rev . Fr">Rev . Fr .</option>
								</select>
				  </div>
				  <div class="form-group">
								<label>First Name</label>
								<input name="fname" class="form-control" required>
								
				   </div>
				   <div class="form-group">
								<label>Last Name</label>
								<input name="lname" class="form-control" required>
								
				   </div>
				   <div class="form-group">
								<label>Email</label>
								<input name="email" type="email" class="form-control" required>
								
				   </div>
				   <div class="form-group">
								<label>Nationality*</label>
								<label class="radio-inline">
									<input type="radio" name="nation"  value="Japanese" checked="">Japanese
								</label>
								<label class="radio-inline">
									<input type="radio" name="nation"  value="Non Japanese ">Non Japanese 
								</label>
			 
					</div>
					<?php

					$countries = array("Afghanistan", "Albania", "Algeria", "American Samoa", "Andorra", "Angola", "Anguilla", "Antarctica", "Antigua and Barbuda", "Argentina", "Armenia", "Aruba", "Australia", "Austria", "Azerbaijan", "Bahamas", "Bahrain", "Bangladesh", "Barbados", "Belarus", "Belgium", "Belize", "Benin", "Bermuda", "Bhutan", "Bolivia", "Bosnia and Herzegowina", "Botswana", "Bouvet Island", "Brazil", "British Indian Ocean Territory", "Brunei Darussalam", "Bulgaria", "Burkina Faso", "Burundi", "Cambodia", "Cameroon", "Canada", "Cape Verde", "Cayman Islands", "Central African Republic", "Chad", "Chile", "China", "Christmas Island", "Cocos (Keeling) Islands", "Colombia", "Comoros", "Congo", "Congo, the Democratic Republic of the", "Cook Islands", "Costa Rica", "Cote d'Ivoire", "Croatia (Hrvatska)", "Cuba", "Cyprus", "Czech Republic", "Denmark", "Djibouti", "Dominica", "Dominican Republic", "East Timor", "Ecuador", "Egypt", "El Salvador", "Equatorial Guinea", "Eritrea", "Estonia", "Ethiopia", "Falkland Islands (Malvinas)", "Faroe Islands", "Fiji", "Finland", "France", "France Metropolitan", "French Guiana", "French Polynesia", "French Southern Territories", "Gabon", "Gambia", "Georgia", "Germany", "Ghana", "Gibraltar", "Greece", "Greenland", "Grenada", "Guadeloupe", "Guam", "Guatemala", "Guinea", "Guinea-Bissau", "Guyana", "Haiti", "Heard and Mc Donald Islands", "Holy See (Vatican City State)", "Honduras", "Hong Kong", "Hungary", "Iceland", "India", "Indonesia", "Iran (Islamic Republic of)", "Iraq", "Ireland", "Israel", "Italy", "Jamaica", "Japan", "Jordan", "Kazakhstan", "Kenya", "Kiribati", "Korea, Democratic People's Republic of", "Korea, Republic of", "Kuwait", "Kyrgyzstan", "Lao, People's Democratic Republic", "Latvia", "Lebanon", "Lesotho", "Liberia", "Libyan Arab Jamahiriya", "Liechtenstein", "Lithuania", "Luxembourg", "Macau", "Macedonia, The Former Yugoslav Republic of", "Madagascar", "Malawi", "Malaysia", "Maldives", "Mali", "Malta", "Marshall Islands", "Martinique", "Mauritania", "Mauritius", "Mayotte", "Mexico", "Micronesia, Federated States of", "Moldova, Republic of", "Monaco", "Mongolia", "Montserrat", "Morocco", "Mozambique", "Myanmar", "Namibia", "Nauru", "Nepal", "Netherlands", "Netherlands Antilles", "New Caledonia", "New Zealand", "Nicaragua", "Niger", "Nigeria", "Niue", "Norfolk Island", "Northern Mariana Islands", "Norway", "Oman", "Pakistan", "Palau", "Panama", "Papua New Guinea", "Paraguay", "Peru", "Philippines", "Pitcairn", "Poland", "Portugal", "Puerto Rico", "Qatar", "Reunion", "Romania", "Russian Federation", "Rwanda", "Saint Kitts and Nevis", "Saint Lucia", "Saint Vincent and the Grenadines", "Samoa", "San Marino", "Sao Tome and Principe", "Saudi Arabia", "Senegal", "Seychelles", "Sierra Leone", "Singapore", "Slovakia (Slovak Republic)", "Slovenia", "Solomon Islands", "Somalia", "South Africa", "South Georgia and the South Sandwich Islands", "Spain", "Sri Lanka", "St. Helena", "St. Pierre and Miquelon", "Sudan", "Suriname", "Svalbard and Jan Mayen Islands", "Swaziland", "Sweden", "Switzerland", "Syrian Arab Republic", "Taiwan, Province of China", "Tajikistan", "Tanzania, United Republic of", "Thailand", "Togo", "Tokelau", "Tonga", "Trinidad and Tobago", "Tunisia", "Turkey", "Turkmenistan", "Turks and Caicos Islands", "Tuvalu", "Uganda", "Ukraine", "United Arab Emirates", "United Kingdom", "United States", "United States Minor Outlying Islands", "Uruguay", "Uzbekistan", "Vanuatu", "Venezuela", "Vietnam", "Virgin Islands (British)", "Virgin Islands (U.S.)", "Wallis and Futuna Islands", "Western Sahara", "Yemen", "Yugoslavia", "Zambia", "Zimbabwe");

					?>
					<div class="form-group">
								<label>Passport Country*</label>
								<select name="country" class="form-control" required>
									<option value selected ></option>
									<?php
									foreach($countries as $key => $value):
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
				RESERVATION INFORMATION
			</div>
			<div class="panel-body">
					<div class="form-group">
								<label>Type Of Room *</label>
								<select name="troom"  class="form-control" required>
									<option value selected ></option>
									<option value="Superior Room">SUPERIOR ROOM</option>
									<option value="Deluxe Room">DELUXE ROOM</option>
									<option value="Guest House">GUEST HOUSE</option>
									<option value="Single Room">SINGLE ROOM</option>
								</select>
				  </div>
				  <div class="form-group">
								<label>Bedding Type</label>
								<select name="bed" class="form-control" required>
									<option value selected ></option>
									<option value="Single">Single</option>
									<option value="Double">Double</option>
									<option value="Triple">Triple</option>
									<option value="Quad">Quad</option>
									<option value="None">None</option>
									
								 
								</select>
				  </div>
				  <div class="form-group">
								<label>No.of Rooms *</label>
								<select name="nroom" class="form-control" required>
									<option value selected ></option>
									<option value="1">1</option>
								  <!--  <option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
									<option value="5">5</option>
									<option value="6">6</option>
									<option value="7">7</option> -->
								</select>
				  </div>
				 
				 
				  <div class="form-group">
								<label>Meal Plan</label>
								<select name="meal" class="form-control"required>
									<option value selected ></option>
									<option value="Room only">Room only</option>
									<option value="Breakfast">Breakfast</option>
									<option value="Half Board">Half Board</option>
									<option value="Full Board">Full Board</option>
									
									
								 
								</select>
				  </div>
				  <div class="form-group">
								<label>Check-In</label>
								<input name="cin" type ="date" class="form-control">
								
				   </div>
				   <div class="form-group">
								<label>Check-Out</label>
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
				
						// $con=mysqli_connect("localhost","root","","hotel");
						$check="SELECT * FROM roombook WHERE email = '$_POST[email]'";
						$rs = mysqli_query($con,$check);
						$data = mysqli_fetch_array($rs, MYSQLI_NUM);
						if($data[0] > 1) {
							echo "<script type='text/javascript'> alert('User Already in Exists')</script>";
							
						}

						else
						{
							$new ="Not Conform";
							$newUser="INSERT INTO `roombook`(`Title`, `FName`, `LName`, `Email`, `National`, `Country`, `Phone`, `TRoom`, `Bed`, `NRoom`, `Meal`, `cin`, `cout`,`stat`,`nodays`) VALUES ('$_POST[title]','$_POST[fname]','$_POST[lname]','$_POST[email]','$_POST[nation]','$_POST[country]','$_POST[phone]','$_POST[troom]','$_POST[bed]','$_POST[nroom]','$_POST[meal]','$_POST[cin]','$_POST[cout]','$new',datediff('$_POST[cout]','$_POST[cin]'))";
							if (mysqli_query($con,$newUser))
							{
								echo "<script type='text/javascript'> alert('Your Booking application has been sent')</script>";
								
							}
							else
							{
								echo "<script type='text/javascript'> alert('Error adding user in database')</script>";
								
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
</div>

			<div class="clearfix"> </div>
</div>
<!-- banner-bottom -->	<div class="banner-bottom">
		<div class="container">	
			<div class="agileits_banner_bottom">
				<h3><span>Allow us to embrace you in the warmth of Japanese grace and indulge you in an experience tailored to elevate your senses.</span> Allow us to embrace you in the warmth of Japanese grace and indulge you in an experience tailored to elevate your senses.</h3>
			</div>
			<div class="w3ls_banner_bottom_grids">
				OGFOJGFO
			</div>
		</div>
	</div>


<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<!-- contact form -->
<script src="js/jqBootstrapValidation.js"></script>

<!-- /contact form -->	
<!-- Calendar -->
		<script src="js/jquery-ui.js"></script>
		<script>
				$(function() {
				$( "#datepicker,#datepicker1,#datepicker2,#datepicker3" ).datepicker();
				});
		</script>
<!-- //Calendar -->
<!-- gallery popup -->
<link rel="stylesheet" href="css/swipebox.css">
				<script src="js/jquery.swipebox.min.js"></script> 
					<script type="text/javascript">
						jQuery(function($) {
							$(".swipebox").swipebox();
						});
					</script>
<!-- //gallery popup -->
<!-- start-smoth-scrolling -->
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
<!-- start-smoth-scrolling -->
<!-- flexSlider -->
				<script defer src="js/jquery.flexslider.js"></script>
				<script type="text/javascript">
				$(window).load(function(){
				  $('.flexslider').flexslider({
					animation: "slide",
					start: function(slider){
					  $('body').removeClass('loading');
					}
				  });
				});
			  </script>
			<!-- //flexSlider -->
<script src="js/responsiveslides.min.js"></script>
			<script>
						// You can also use "$(window).load(function() {"
						$(function () {
						  // Slideshow 4
						  $("#slider4").responsiveSlides({
							auto: true,
							pager:true,
							nav:false,
							speed: 500,
							namespace: "callbacks",
							before: function () {
							  $('.events').append("<li>before event fired.</li>");
							},
							after: function () {
							  $('.events').append("<li>after event fired.</li>");
							}
						  });
					
						});
			</script>
		<!--search-bar-->
		<script src="js/main.js"></script>	
<!--//search-bar-->
<!--tabs-->
<script src="js/easy-responsive-tabs.js"></script>
<script>
$(document).ready(function () {
$('#horizontalTab').easyResponsiveTabs({
type: 'default', //Types: default, vertical, accordion           
width: 'auto', //auto or any width like 600px
fit: true,   // 100% fit in a container
closed: 'accordion', // Start closed if in accordion view
activate: function(event) { // Callback function if tab is switched
var $tab = $(this);
var $info = $('#tabInfo');
var $name = $('span', $info);
$name.text($tab.text());
$info.show();
}
});
$('#verticalTab').easyResponsiveTabs({
type: 'vertical',
width: 'auto',
fit: true
});
});
</script>
<!--//tabs-->
<!-- smooth scrolling -->
	<script type="text/javascript">
		$(document).ready(function() {
		/*
			var defaults = {
			containerID: 'toTop', // fading element id
			containerHoverID: 'toTopHover', // fading element hover id
			scrollSpeed: 1200,
			easingType: 'linear' 
			};
		*/								
		$().UItoTop({ easingType: 'easeOutQuart' });
		});
	</script>
	
	<div class="arr-w3ls">
	<a href="#home" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
	</div>
<!-- //smooth scrolling -->
<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
</body>
</html>


