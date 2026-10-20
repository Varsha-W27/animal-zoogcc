<html>
<head>
<link href="bootstrap-5.3.3-dist/css/bootstrap.css" rel="stylesheet"
type="text/css" media="all"/>
<style>

.navbar {
            width: 100%;
            background-color: #8BC34A;
            color: #fff;
            padding: 10px;
            text-align: center;
        }
	</style>
</head>
<body>

    <div class="navbar">
        <h1> <img src=\animal-zoogcc\img\icon\icon-10.png > &nbsp; Zoofari -<small> Zoo & Safari Park </small></h1>
		<br>
		<img src=\animal-zoogcc\img\img9.jpg width="100"/> 
		</div>
<center>
<br>

<form action="update_food.php" method="post" >
<br>
<h4>  Add New Food Item </h4>	<p>

<b> <h5>  Name of Food:- </h5> </b>
<input type="text" class="form-control" name="food" placeholder="Food Name" style="width:300px;" aria-label="Food name">
<br>
<b><h5>Monthly Quantity:- </h5> </b> 
<input type="text" class="form-control" placeholder="Quantity" name="quantity" style="width:300px;" aria-label="quantity">
<br><b> <h5>  Yearly Qunatity:- </h5> </b> 
<input type="text" class="form-control" name="year" placeholder="Yearly Qunatity" style="width:300px;" aria-label="Year">
<br>
<b> <h5>  Date Of Arrival:- </h5> </b> 
<input type="date" class="form-control" name="date" placeholder="Date of Arrival" style="width:300px;" aria-label="date">
<br>
<button type="submit" class="btn btn-success"style="width:100px;">Add</button>
</form>
</div>
</center>
</html>

