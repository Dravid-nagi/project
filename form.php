<?php
session_start();
extract($_REQUEST);

$con = mysqli_connect('localhost','root','','quiz');
	

if(isset($sub))
{

$q = " select * from users where name = '$user' and  password ='$pass' ";

$result = mysqli_query($con,$q);

$row = mysqli_num_rows($result);

if($row){
	$_SESSION['username']=$user;
header('location:categ.php');	
}
	else{
	header('location:index.html');
}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>LOGIN HERE</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	 <link href="https://fonts.googleapis.com/css?family=Montserrat|Open+Sans" rel="stylesheet">
<!-- 
	 font-family: 'Montserrat', sans-serif; 
	font-family: 'Open Sans', sans-serif;
	-->

</head>
<body style = "background-image: url('background.jpg') ">

	<div class="container">
		<h1 class="text-center"> Welcome to Quiz World </h1><br>

		<div class="row">
			
			<div class="col-lg-12">
				<div class="card">
					<h4 class="card-header text-center"> Login Form </h4>
					<br>
					<form  method="post">
						<div class="form-group">
							<label for="name"> Username: </label>
							<input type="text" name="user" id="user" class="form-control">
						</div>
						<div class="form-group">
							<label for="pass "> Password: </label>
							<input type="password" name="pass" id="pass" class="form-control">
						</div>
						<button class="btn btn-success d-block m-auto" name="sub" type="submit"> Submit </button>
					</form>
				
				</div>
			</div>

		
				</div>
			</div>

</body>
</html>