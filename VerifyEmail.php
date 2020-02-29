<!DOCTYPE html>
<html>
<head>
	<title>Verify Email</title>
</head>
<body>
<center>
	<form name="verify" method="POST" action="FinalRegister.php">
		<div class="form-group">
			<input type="text" class="form-control" name="code" placeholder="Verify Code" required>
		</div>
		<button class="btn btn-success" name="register">Register<i class="fa fa-send"></i></button>
		<input type="reset" name="clear" value="clear">
	</form>
</center>
</body>
</html>