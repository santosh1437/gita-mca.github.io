<!DOCTYPE html>
<html>
<head>
	<title></title>
	<!-- <link rel="stylesheet" type="text/css" href="bootstrap.css"> -->
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
	<div>
		<div class="text-center text-success"><h1>Registration form</h1></div>
		<div class="row mt-5">
			<div class="col-lg-6 text-center">
		<form action=" signin2.php" method="GET" class="w-50 bg-warning ml-auto">
		<div class="text-white">	<h3>signin form</h3></div>
			<label>Username</label>
			<input type="text" name="uname"><br><br>
			<label>Password</label>
			<input type="text" name="pwd"><br><br>
			<input type="submit" name="submit1" value="signin" class="btn btn-primary"><br><br>
			</div>
		</form>
			<div class="col-lg-6 text-center">
		<form action="signin1.php" method="GET" class="bg-success w-50 ">
			<h3>Login form</h3>
			<label>Username</label>
			<input type="text" name="uname"><br><br>
			<label>Password</label>
			<input type="text" name="pwd"><br><br>
			<input type="submit" name="submit2" value="login" class="btn btn-primary "><br><br>
			</div>
		</form>
		</div>
	</div>
	</div>

	

</body>
</html>