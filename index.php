<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="asset/css/bootstrap.min.css" />
		<link rel="stylesheet" href="asset/css/bootstrap-responsive.min.css" />
        <link rel="stylesheet" href="ujicoba/asset/css/matrix-login.css" />
        <link href="ujicoba/asset/font-awesome/css/font-awesome.css" rel="stylesheet" />
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
</head>
<body>
	<br/>
	<br/>
	<br/>
	<div align="center" class="login">
	<br/>
		<form action="aksilogin.php" method="post" onSubmit="return validasi()">
			<div>
				<label>Username:</label>
				<input class="form-control" type="text" name="username" id="username" />
			</div>
			<div>
				<label>Password:</label>
				<input class="form-control" type="password" name="password" id="password" />
			</div>			
			<div>
				<input type="submit" class="btn btn-success" value="Login" name="submit" class="tombol">
			</div>
		</form>
	</div>
</body>

<script type="text/javascript">
	function validasi() {
		var username = document.getElementById("username").value;
		var password = document.getElementById("password").value;		
		if (username != "" && password!="") {
			return true;
		}else{
			alert('Username dan Password harus di isi !');
			return false;
		}
	}
 
</script>
</html>