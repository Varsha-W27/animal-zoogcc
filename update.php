<html>
<head>
<link href="bootstrap-5.3.3-dist/css/bootstrap.css" rel="stylesheet"
type="text/css" media="all"/>
<title> User_Update_Form </title>
   <meta charset="UTF-7">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
       body {
            font-family: Arial, sans-serif;
            background-color: #87CEEB;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 140vh;
            margin: 0;
        }
		
			
        .container {
            background-color:white;
            padding: 18px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 650px;
			height:900px
        }
        h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        label {
            display: block;
            margin: 10px 0 5px;
        }
        input[type="text"], input[type="email"], input[type="password"] {
            width: 100%;
            padding: 8px;
            margin: 5px 0 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            border: none;
            border-radius: 4px;
            color: white;
            font-size: 16px;
        }
        input[type="submit"]:hover {
            background-color: red;
        }
    </style>
	
</head>
<body>
<marquee bgcolor="white" height="80"> <img src="icon-10.png" /> <font color="#8BC34A">  Welcome To Zoofari - Zoo & Safari Park </font> </marquee>
<form action="update_user.php" method="post">
<div class="container">
<center>
<h4> Update Your Account </h4>
<img src="login.jfif" height="100" width="100" />
</center>
<br>
<img src="img1.png" height="20" width="20" /> &nbsp; <b> Full Name:</b>
<input type="text" style="width:450px;" name="fullname" placeholder="Full Name" />
<br>
<img src="img2.jfif" height="20" width="20" />&nbsp; <b> Email Id: </b>
<input type="text" style="width:450px;" pattern="[a-zA-Z0-9.%+]+@[a=zA-Z0-9..-]+9?:\.[a-zA_Z0-9.-]+)*$]" name="emailid" placeholder="Email Id" />
<br>
<img src="img3.png" height="20" width="20" />&nbsp;<b> Contact Number: </b>
<input type="text" style="width:450px;" pattern="[789][0-9]{9}" name="contact" placeholder="contact Number" />
<br>
<img src="img5.png" height="20" width="20" />&nbsp;<b> Password:</b>
<input type="password" style="width:450px;" name="password" placeholder="Password" />
<br>
<img src="img5.png" height="20" width="20" />&nbsp;<b> Confirm Password:</b>
<input type="password" style="width:450px;" name="cpassword" placeholder=" Confirm Password" />
<br>
<img src="image10.jpg" height="30" width="20" />&nbsp;<b> Enter Date:</b>
<input type="date" style="width:450px;" name="date"  />
<br>
<img src="img4.jfif" height="20" width="20" />&nbsp;<b> Address: </b>
<input type="text" style="width:450px;" name="address" placeholder="Address" />
<br>
<img src="img8.jpg" height="20" width="20" /> &nbsp; <b> City: </b>
<br>
<select name="city" id="city">
<option value="Belgavi"  selected> Belgavi </option>
<option value="Mumbai" selected> Mumbai </option>
<option value="Bengaluru" selected> Bengaluru </option>
<option value="Pune" selected> Pune </option>
<option value="Other" selected> Other </option>
<option value="city" selected> Plz Enter Your City </option>
</select>
<br>
<img src="img6.jpg" height="30" width="20" />&nbsp;<b> State: </b>
<br>
<select name="state" id="state" style="width:150px;">
<option value="Karnataka" selected> Karnataka </option>
<option value="Maharastra" selected> Maharashtra </option>
<option value="Andhra Pradesh" selected> Andhra Pradesh </option>
<option value="Bhihar" selected> Bihar </option>
<option value="Delhi" selected> Delhi </option>
<option value="Other" selected> Other </option>
</select>
<br>
<img src="img7.jfif" height="20" width="20" />&nbsp;<b> Country:</b>
<br>
<select name="country" id="country" style="width:150px;" >
<option value="India" selected> India </option>
<option value="Sri Lanaka" selected> Sri Lanka </option>
<option value="China" selected> China </option>
<option value="Other" selected> Other </option>
</select>
<br>
<br>
<center>
<button type="submit" class="btn btn-success">Update</button>
</form>
</center>
</body>

</html>
