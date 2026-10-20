<html>
<head>
<link href="bootstrap-5.3.3-dist/css/bootstrap.css" rel="stylesheet"
type="text/css" media="all"/>
<style>
		.container {
            background-color:white;
            padding: 18px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 900px;
			height:800px
        }
</style>
</head>
<body>
<form action="add_animal_det.php" method="post">
<center>
<br> <br>
<div class="container">
<h5><font color="green"> ADD ANIMAL DETAILS</font> </h5>
<br>
  <div class="row">
  <div class="col">
  <b> Animal Name</b>
    <input type="Text" class="form-control" placeholder="Animal Name" name="animal_name" aria-label="animal_name">
  </div>
<br>
<br><p><p>
<div class="row">
  <div class="col">
<b>  Name Of Species </b>
    <input type="text" class="form-control" placeholder="Name Of Species" name="name" aria-label="Name Of Species">
  </div>
  <p>
  <br>
  <div class="col">
    <label for="inputState" class="form-label"><b>Status</b></label>
    <select name="Status" class="form-select">
      <option value="Alive">Alive</option>
	  <option value="Dead">Dead</option>
      </select>
  </div>
 </div>
  </p>
 
  <br>
  <div class="row">
  <div class="col">
  <b> Date </b>
    <input type="date" class="form-control" placeholder="Date Of Arrival" name="date" aria-label="date">
  </div>
  <div class="col">
    <label for="inputState" class="form-label"><b>Gender</b></label>
    <select name="gender" class="form-select">
      <option value="male">Male</option>
	  <option value="female">Female</option>
      </select>
  </div>
 </div>
 <br>
<br><p>
<div class="row">
  <div class="col">
<b>Add Animal Information</b>
<textarea name="info" class="form-control" placeholder="Animal Information"  aria-label="info"></textarea>
</div>
<div class="col">
 <b>Upload Animal Photo<b>
<br>
<input type="file" name="fileupload" accept="image/*" >
</div>
</div>
 <p><center>
<button type="submit" class="btn btn-success" style="width:300px;"><h5> Submit </h5></button>
</center>
</div>
</form>
</body>
</html>