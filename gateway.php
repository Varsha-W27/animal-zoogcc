<style>/* style.css */

/* General styles */
body {
    font-family: 'Roboto', sans-serif;
    background: url('background.jpg') no-repeat center center fixed;
    background-size: cover;
    color: #333;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

.container {
    max-width: 600px;
    margin: 20px;
    padding: 20px;
    background-color: rgba(255, 255, 255, 0.9);
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    border-radius: 8px;
    text-align: center;
}

h1 {
    font-size: 2em;
    color: #37474f;
    margin-bottom: 20px;
}

h2 {
    font-size: 1.5em;
    color: #37474f;
    margin-bottom: 20px;
}

.payment-form {
    padding: 20px;
    text-align: left;
}

.payment-method {
    margin-bottom: 20px;
}

.payment-method label, .payment-details label {
    font-size: 1.1em;
    margin-bottom: 5px;
    color: #37474f;
}

.payment-method select, .payment-details input[type="text"], .payment-details select {
    width: calc(100% - 20px);
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
    font-size: 1em;
    color: #37474f;
}

input[type="submit"] {
    width: 100%;
    padding: 15px;
    background-color: #1e88e5;
    color: #ffffff;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-size: 1.2em;
    transition: background-color 0.3s ease;
}

input[type="submit"]:hover {
    background-color: #1565c0;
}

.payment-details {
    margin-top: 10px;
}
</style>
<?php
	include_once('connection.php');
	
	//session_start();
	//if(!isset($_SESSION['SESS']))
	{
		//echo"<script>alert('Login to access this page');
		//window.location = 'register.php';</script>";
	}
?>

<html>
<head>
<link href="bootstrap-5.3.3-dist/css/bootstrap.css" rel="stylesheet"
type="text/css" media="all"/>

<!-- css -->
<!--link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
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

<title>Payment Gateway</title>
<!-- for-mobile-apps -->

<!-- //for-mobile-apps -->
<link href="new/style.css" rel="stylesheet" type="text/css" media="all" />
<link href='//fonts.googleapis.com/css?family=Fugaz+One' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Alegreya+Sans:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,800,800italic,900,900italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="new/jquery.min.js"></script>
</head>
<body>
	<div class="main">
		<h1>Payment Form </h1>
		<div class="content">
			
			<script src="new/easyResponsiveTabs.js" type="text/javascript"></script>
					<script type="text/javascript">
						$(document).ready(function () {
							$('#horizontalTab').easyResponsiveTabs({
								type: 'default', //Types: default, vertical, accordion           
								width: 'auto', //auto or any width like 600px
								fit: true   // 100% fit in a container
							});
						});
						
					</script>
						<div class="sap_tabs">
							<div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
								<div class="pay-tabs">
									<h2>Select Payment Method</h2>
									  <ul class="resp-tabs-list">
										  <li class="resp-tab-item" aria-controls="tab_item-2" role="tab"><span><label class="pic2"></label>Debit Card</span></li>

										  <div class="clear"></div>
									  </ul>	
								</div>
								
								<div class="resp-tabs-container">														
									<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-3">	
										<div class="payment-info">
											
											<h3 class="pay-title">Dedit Card Info</h3>
										<form action="gateway1.php" method="post">
												<div class="tab-for">				
													<h5>NAME ON CARD</h5>
														<input type="text" name="cname" value="" required>
													<h5>CARD NUMBER</h5>													
														<input class="pay-logo" name="cardno" type="text"  placeholder="16 Digit" required="">
												</div>
												
												<div class="transaction">
													<div class="tab-form-left user-form">
														<h5>EXPIRATION</h5>
															<ul>
																<li>
																	<input type="number" name="date" class="text_box" type="text" value="6" min="1" required />	
																</li>
																<li>
																	<input type="number" name="month" class="text_box" type="text" value="1988" min="1" required />	
																</li>
																
															</ul>
													</div>
													<div class="tab-form-right user-form-rt">
														<h5>CVV NUMBER</h5>													
														<input type="text"  name="cvv" placeholder="3 Digit" required="" autocomplete="off"><br>
													</div><br>
													
													<?php
														/*include_once("db.php");	
														//session_start();
														$sql="select * from new_pass where usn='".$_SESSION['SESS']."'" ;
														//echo $sql;
														//echo $sql;
														$result1=mysqli_query($con,$sql);
														$result = mysqli_fetch_array($result1)
															*/		
													?>
													
												<div class="tab-for"><br>				
													<h5>Amount To Be Paid</h5>
														<input type="text" name="amt" readonly value="<?php echo $_POST['tot_amt'] ?>">
												</div>

												<input type="hidden" name="a1" readonly value="<?php echo $_POST['fn'] ?>">
												<input type="hidden" name="a2" readonly value="<?php echo $_POST['ln'] ?>">
												<input type="hidden" name="a3" readonly value="<?php echo $_POST['age'] ?>">
												<input type="hidden" name="a4" readonly value="<?php echo $_POST['gender'] ?>">
												<input type="hidden" name="a5" readonly value="<?php echo $_POST['mobile'] ?>">
												<input type="hidden" name="a6" readonly value="<?php echo $_POST['email'] ?>">
												<input type="hidden" name="b1" readonly value="<?php echo $_POST['ad1'] ?>">
												<input type="hidden" name="b2" readonly value="<?php echo $_POST['ad2'] ?>">
												<input type="hidden" name="b3" readonly value="<?php echo $_POST['city'] ?>">
												<input type="hidden" name="b4" readonly value="<?php echo $_POST['state'] ?>">
												<input type="hidden" name="b5" readonly value="<?php echo $_POST['country'] ?>">
												<input type="hidden" name="b6" readonly value="<?php echo $_POST['pincode'] ?>">
												<input type="hidden" name="c1" readonly value="<?php echo $_POST['datePicker'] ?>">
												<input type="hidden" name="c2" readonly value="<?php echo $_POST['adult_ticket'] ?>">
												<input type="hidden" name="c3" readonly value="<?php echo $_POST['child_ticket'] ?>">
												
												<input type="hidden" name="amt" readonly value="<?php echo $_POST['tot_amt'] ?>">

												<!--input type="hidden" name="mail" readonly value="<?php echo $_SESSION['SESS'] ?>"-->
												


												<div class="clear"></div>
												</div>
											<input type="submit" value="SUBMIT">
										</form>
									</div>	
								</div>
							</div>	
						</div>
					</div>
				</div>
		<p class="footer">Copyright © 2024 Payment Form . All Rights Reserved </p>
	</div>
</body>
</html>