<?php
	include_once('connection.php');
	
	//session_start();
	///if(!isset($_SESSION['SESS']))
	{
		///echo"<script>alert('Login to access this page');
		//window.location = 'register.php';</script>";
	}
?>

<!DOCTYPE html>
<html>
<head>
<link href="bootstrap-5.3.3-dist/css/bootstrap.css" rel="stylesheet"
type="text/css" media="all"/>
<title>Zoo /management</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css 
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" /-->


<!--// bootstrap-css -->
<!-- css 
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
<!--// css -->
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<!-- font -->
<link href='//fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
<link href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700italic,700,400italic,300italic,300' rel='stylesheet' type='text/css'>
<!-- //font -->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script> 




</script>

</head>
<body>
	<!-- banner -->
	<div class="banner">
		<div class="header">
			<div class="container">
				<div class="header-left">
					<div class="w3layouts-logo">
						<h1>
							<a href="index.php">Animal Care and <span>Zoo Management</span></a>
						</h1>
					</div>
				</div>
				<div class="header-right">
					<div class="top-nav">
						<nav class="navbar navbar-default">
								<div class="navbar-header">
									<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
										<span class="sr-only">Toggle navigation</span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
									</button>
								</div>
							<!-- Collect the nav links, forms, and other content for toggling -->
							<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
								<ul class="nav navbar-nav">
									<li><a href="user_dashboard.php">Home</a></li>
									<li><a  href="animal_data_view.php">Animal Data</a></li>
									<li><a  href="animal_adoption_view.php">Animal Adoption</a></li>
									<li><a  href="animal_medical_view.php">Medical Facilities</a></li>
									<li><a class="active" href="book_ticket.php">Ticket Booking</a></li>
									<li><a href="adopt.php">Adoption </a></li>
									<li><a href="sponsor.php">Sponsor </a></li>	
									<!--<li class=""><a href="#" class="dropdown-toggle hvr-bounce-to-bottom" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Codes<span class="caret"></span></a>
										<ul class="dropdown-menu">
											<li><a class="hvr-bounce-to-bottom" href="icons.html">Icons</a></li>
											<li><a class="hvr-bounce-to-bottom" href="typography.html">Typography</a></li>          
										</ul>
									</li>-->								
									<!--<li><a href="gallery.html">Gallery</a></li>
									<li><a href="blog.html">Blog</a></li>-->
									<li><a href="logout.php">Logout</a></li>
								</ul>	
								<div class="clearfix"> </div>
							</div>	
						</nav>		
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>		
	</div>
<br>	
	
<?php 
	include_once("connection.php");
	$sql="select * from ticket_price where category='adult'";
	//echo $sql;
	$result1=mysqli_query($con,$sql);
	$result=mysqli_fetch_array($result1);
?>

<?php 
	
	include_once("connection.php");

	$sql="select * from ticket_price where category='adult'";
	$result1=mysqli_query($con,$sql);
	$result=mysqli_fetch_array($result1);

	$sql1="select * from ticket_price where category='child'";
	$result11=mysqli_query($con,$sql1);
	$result111=mysqli_fetch_array($result11);

echo "<script>
	function cal_total()
	{
		var a1,a2,t1,t2,totall

		a1 = document.getElementById('adult_ticket').value;	
		a2 = document.getElementById('child_ticket').value;	

		
		if(a1=='')
		{
			a1=0;
		}
		
		if(a2=='')
		{
			a2=0;
		}

		var t1=parseFloat(a1) * ".$result[2].";
		var t2=parseFloat(a2) * ".$result111[2].";
		totall=parseFloat(t1)+ parseFloat(t2);
		
		document.getElementById('tot_amt').value=totall;
		//alert(totall);
		
	}
</script>";
?>
	
	
<div class="container" style="margin-bottom:30px;">
	<!--<div class="row form-group">
		<div class="col-xs-12">
			<ul class="nav nav-pills nav-justified thumbnail setup-panel">
				<li id="li1" class="active"><a>
					<h4 class="list-group-item-heading">Step 1</h4>
					<p class="list-group-item-text">Fill Personal Information</p>
				</a></li>
				<li id="li2" class=""><a>
					<h4 class="list-group-item-heading">Step 2</h4>
					<p class="list-group-item-text">Select Your Ticket</p>
				</a></li>
				<li id="li3" class=""><a>
					<h4 class="list-group-item-heading">Step 3</h4>
					<p class="list-group-item-text">Terms and Conditions</p>
				</a></li>
			</ul>
		</div>
	</div> -->
<form action="gateway.php" method="post">	
	<div id="step1" class="row setup-content">
		<div class="col-xs-12">
			<div id="alert1" class="hidden" role="alert">Please fill all required fields!</div>
			<div id="alert2" class="hidden" role="alert"></div>
			<div id="alert3" class="hidden" role="alert"></div>
			<div id="alert4" class="hidden" role="alert"></div>
			<div class="col-md-12 well">

			
				<div>
					<div class="row">
						<div class="col-lg-6">
							<div class="form-group" id="fnGroup">
								<label>First Name</label>                                             
								<input name="fnTextBox" type="text" id="fnTextBox" class="form-control" placeholder="Required Field" required class="" pattern="[a-zA-Z\s]+"/><span id="fnSpan"  title="letters only"></span>
							</div>
						</div>
						<div class="col-lg-6" >
							<div class="form-group" id="lnGroup">
								<label>Last Name</label>
								<input name="lnTextBox" type="text" id="lnTextBox" class="form-control" placeholder="Required Field" required class="" pattern="[a-zA-Z\s]+"/><span id="lnSpan"  title="letters only"></span>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6">
							<div class="form-group" id="ageGroup">
								<label>Age</label>
								<input name="ageTextBox" type="text" id="ageTextBox" class="form-control" placeholder="Required Field" required pattern="^\d{2}$" title="2 numeric characters only"/><span id="ageSpan" class="" ></span>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="form-group">
								<label>Gender</label>
								<div>
									<label class="radio-inline">
										<input id="maleRadioButton" type="radio" name="gender" value="Male" checked="checked" /> Male
									</label>                                                
									<label class="radio-inline">
										<input id="femaleRadioButton" type="radio" name="gender" value="Female" /> Female
									</label>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
							<div class="col-lg-6">
								<div class="form-group" id="mobileGroup">
									<label>Contact Number</label>
									<input name="mobileTextBox" type="text" id="mobileTextBox" class="form-control" placeholder="Required Field" required pattern="^\d{10}$" title="10 numeric characters only"/><span id="mobileSpan" class="">
								</div>
							</div>
							<div class="col-lg-6">
								<div class="form-group" id="emailGroup">
									<label>Email</label>
									<input name="emailTextBox" type="email" id="emailTextBox" class="form-control" placeholder="Required Field" required/><span id="emailSpan" class=""></span>
								</div>
							</div>
					</div>
					<div class="row">
						<div class="col-lg-6">
							<div class="form-group">
								<label>Address Line 1</label>
								<input name="ad1TextBox" type="text" id="ad1TextBox" class="form-control" placeholder="Optional Field" />
							</div>
						</div>
						<div class="col-lg-6">
							<div class="form-group">
								<label>Address Line 2</label>
								<input name="ad2TextBox" type="text" id="ad2TextBox" class="form-control" placeholder="Optional Field" />
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6">
							<div class="form-group" id="cityGroup">
								<label>City</label>
								<input name="cityTextBox" type="text" id="cityTextBox" class="form-control" placeholder="Required Field" required/><span id="citySpan" class="" pattern="[a-zA-Z\s]+" title="letters only"></span>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="form-group">
								<label>State</label>
								<input name="stateTextBox" type="text" id="stateTextBox" class="form-control" placeholder="Optional Field"pattern="[a-zA-Z\s]+" title="letters only" />
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6">
							<div class="form-group">
								<label>Country</label>
								<input name="countryTextBox" type="text" id="countryTextBox" class="form-control" placeholder="Optional Field"pattern="[a-zA-Z\s]+" title="letters only" />
							</div>
						</div>
						<div class="col-lg-6">
							<div class="form-group">
								<label>Pincode</label>
								<input name="pincodeTextBox" type="text" id="pincodeTextBox" class="form-control" placeholder="Optional Field" pattern="^\d{6}$" title="6 numeric characters only"/>
							</div>
						</div>
					</div>                                                                                     
					<div class="row">
						<div class="col-lg-6">
							<div class="form-group"  id="dateGroup">
								<label >Date of visit</label>
								<input name="datePicker" type="text" id="datePicker" class="form-control" readonly="readonly" placeholder="Required Field" /><span id="dateSpan" class=""></span>
							</div>     
						</div>
					</div>  
				</div>

			<?php 
				include_once("connection.php");
				$sql="select * from ticket_price where category='adult'";
				//echo $sql;
				$result1=mysqli_query($con,$sql);
				$result=mysqli_fetch_array($result1);
			?>
				
				
				<div id="collapseOne" class="panel-collapse collapse in">
					<div class="panel-body">
						<div class="col-md-4">	
							<div class="price-header bg-primary featured green">
								<h3>Adult</h3>
							</div>
							<ul class="list-group features">
								<li class="list-group-item"><strong>Price:<?php echo $result[2] ?> &#8377;</strong></li>
								<li class="list-group-item choose">		
									<div class="quantity">
										Select Quantity: <input type="number" name="adult_ticket" id="adult_ticket" />
									</div>
								</li>
							</ul>
						</div>

			<?php 
				include_once("connection.php");
				$sql1="select * from ticket_price where category='child'";
				//echo $sql;
				$result11=mysqli_query($con,$sql1);
				$result111=mysqli_fetch_array($result11);
			?>
						
				<div class="col-md-4">	
					<div class="price-header bg-primary featured  green">
						<h3>Child (5-12 years)</h3>
					</div>
					<ul class="list-group features">
					<li class="list-group-item"><strong>Price: <?php echo $result111[2] ?> &#8377;</strong></li>
						<li class="list-group-item choose">		  
							<div class="quantity">
								Select Quantity: <input type="number" name="child_ticket" id="child_ticket" />
							</div>
						</li>
					</ul>
				</div>
						
				<div class="col-md-4">	
					<div class="price-header bg-primary featured  green">
						<h3>Total Amount To Be Paid</h3>
					</div>
					<ul class="list-group features">
					<li class="list-group-item"><strong>Grand Total</strong></li>
						<li class="list-group-item choose">		  
							<div class="quantity">
								 <input type="text" id="tot_amt" name="tot_amt"  readonly/>
							</div>
						</li>
					</ul>
				</div>	
						
					<input type="button" value="Calculate" id="formNextButton" class="btn btn-primary btn-md pull-right" onclick="cal_total()"/>
				</div>
			</div>
		</div>

			<input type="submit" name="formNextButton" value="Book Ticket" id="formNextButton" class="btn btn-warning btn-md" />
        </div>     
	</div>
</form>	
</div>
	
	
<link rel="stylesheet" href="http://code.jquery.com/ui/1.9.1/themes/base/jquery-ui.css" />
<script src="http://code.jquery.com/jquery-1.8.2.js"></script>
<script src="http://code.jquery.com/ui/1.9.1/jquery-ui.js"></script>	

<script>
	$( function() {
		$( "#datePicker" ).datepicker({
			minDate: 0
		});
	});
</script>

	
	<!-- //copyright -->
<script src="js/responsiveslides.min.js"></script>
<script src="js/SmoothScroll.min.js"></script>
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
	<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() 
		{
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
<!-- //here ends scrolling icon -->
</body>	
</html>