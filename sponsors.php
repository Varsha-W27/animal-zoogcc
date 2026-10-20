<html>
<head>
<link href="bootstrap-5.3.3-dist/css/bootstrap.css" rel="stylesheet"
type="text/css" media="all"/>
<style>
		
		.container{
		height:1200px;
		width:800px;
		background-color:white;
		font-size:20px;
	}
</style>
</head>
<body>
<form action="sponsers_and_adoption.php" method="post"> 
<br>
<br>
<center> <img src="icon-10.png"><h5><font color="#397420"> Zoogenix</h5> </font>
<FONT COLOR="#397420"><h4> Sponsors And Animal Adoption Form </h4></font>
</center>
<div class="container">
<div class="mb-3">
  <label for="formGroupExampleInput" class="form-label">Name</label>
  <input type="text" class="form-control" name="name" style="width:700px;" placeholder="Name"required>
</div>
<div class="mb-3"> 
  <label for="formGroupExampleInput2" class="form-label">Email</label>
  <input type="text" class="form-control" name="email" style="width:700px;" placeholder="Email"required>
</div>
<div class="mb-3">
  <label for="formGroupExampleInput2" class="form-label">Contact</label>
  <input type="text" class="form-control" name="contact" style="width:700px;" placeholder="contact"required>
</div>
<hr> </hr>
<div class="mb-3">
  <label for="formGroupExampleInput" class="form-label">Donate Food</label>
  <input type="text" class="form-control" name="food" style="width:700px;" placeholder="Name Of Food"required>
</div>
<div class="mb-3">
  <label for="formGroupExampleInput" class="form-label">Qunatity</label>
  <input type="text" class="form-control" name="qunatity" style="width:700px;" placeholder="Quantity Of Food"required>
</div>
<br>
<hr> </hr>
Want To Donate Money
<br>
 <div class="col-md-4">
    <label for="inputpayemt" class="form-label">For Online</label>
    <select name="mode" class="form-select" style="width:700px;">
      <option value="gpay">Gpay</option>
      <option value="phone_pay">Phone Pay</option>
	  <option value="paytm">Paytm</option>
    </select>
</form>
</div>
<br>
WITH CARD
<br>
 <div class="col-md-4">
    <label for="inputpayemt" class="form-label">Select Card</label>
	<br>
    <select name="card" class="form-select" style="width:700px;">
      <option value="debit_card">Debit card</option>
      <option value="ATM">ATM </option>
	  <option value="Rupey_card">Rupey Card</option>
    </select>
</form>
</div>
<br>
<div class="mb-3">
  <label for="formGroupExampleInput2" class="form-label">Enter Amount</label>
  <br>
  <input type="text" class="form-control" name="amount"  style="width:700px;" placeholder="Enter Pin"required>
</div>
<div class="mb-3">
  <label for="formGroupExampleInput2" class="form-label">Enter Expiry Date</label>
  <br>
  <input type="text" class="form-control" name="date" style="width:700px;" placeholder="Expiry Date"required>
</div>
<br>
<div class="mb-3">
  <label for="formGroupExampleInput2" class="form-label">Enter CVV</label>
  <br>
  <input type="text" class="form-control" name="pin" maxlength="4" style="width:700px;" placeholder="Enter CVV"required>
</div>
<br>
<button type="submit" class="btn btn-success"style="width:200px;" style="height:100px;">Submit</button>
</form>
</html>