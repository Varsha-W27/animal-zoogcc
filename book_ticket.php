<?php
	include_once('connection.php');
	
	session_start();
	if(!isset($_SESSION['SESS']))
	{
		echo"<script>alert('Login to access this page');
		window.location = 'register.php';</script>";
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
<!-- bootstrap-css -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!--// bootstrap-css -->
<!-- css -->
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
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<![endif]-->
</head>
<body>
	<!-- banner -->
	<div class="banner">
		<div class="header">
			<div class="container">
				<div class="header-left">
					<div class="w3layouts-logo">
						<h1>
							<a href="user_dashboard.php"><img src="img/icon/icon-10.png">&nbsp;Zoofari<span>- Zoo Management</span></a>
						</h1>
					</div>
				</div>
			<!--	<div class="header-right">
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
						<!--	<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
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
									<!-- <li><a href="logout.php">Logout</a></li>  -->
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
			$sql="select * from ticket_price where category='child'";
			//echo $sql;
			$result1=mysqli_query($con,$sql);
			$result=mysqli_fetch_array($result1);
		?>

		<div class="row padding_zero margin_top">
			<div class="col-md-6" align="center">
				<div class="black_bg" class="color:">
					Child
				</div>
				<div class="row">
				<div class="col-md-4">
					<img src="img/child.png" />
				</div>
				<div class="col-md-8">
				<div class="margin_top transparent_bg" align="center" style="border-bottom:1px solid gray; width:80%; margin-bottom:2% ;padding-bottom:2%;padding-top:5%; ">
					<p class="ticket_p">
						Above 5 Age - Below 10 Age
					</p>
				</div>
				<div class="transparent_bg" align="center" style="width:80%; margin-bottom:2%;padding-bottom:2%;">
					<p class="ticket_p">
						Rs. <span style="font-size:36px;"><?php echo $result[2] ?></span>
					</p>
					<br /><br />
					<a href="zootickets.php" class="btn btn-success" target="_blank" >Buy</a>
				</div>
				</div>
				</div>
			</div>
			
			<?php 
				include_once("connection.php");
				$sql1="select * from ticket_price where category='adult'";
				//echo $sql;
				$result11=mysqli_query($con,$sql1);
				$result111=mysqli_fetch_array($result11);
			?>
			
			<div class="col-md-6" align="center">
				<div class="black_bg">
					Adult
				</div>
				<div class="row">
				<div class="col-md-8">
				<div class="margin_top transparent_bg" align="center" style="border-bottom:1px solid gray; width:80%; margin-bottom:2% ;padding-bottom:2%;padding-top:5%; ">
					<div>
						<p class="ticket_p">
							Above 10 Age
						</p>

					</div>
				</div>
				<div class="transparent_bg" align="center" style="width:80%; margin-bottom:2%;padding-bottom:2%;">
					<p class="ticket_p">
						Rs. <span style="font-size:36px;"><?php echo $result111[2] ?></span>
					</p>
					<br /><br />
					<a href="zootickets.php" class="btn btn-success" target="_blank" >Buy</a>
				</div>
				</div>
				<div class="col-md-4">
					<img src="img/adults.png" />
				</div>
				</div>
			</div>
		</div>

	
	
	
	
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