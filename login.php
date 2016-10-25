
<!DOCTYPE = html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Bootstrap 3, from LayoutIt!</title>

    <meta name="description" content="Source code generated using layoutit.com">
    <meta name="author" content="sugianto">

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<h3 class="text-center text-danger">
				Login Form
			</h3>
		</div>
	</div>
	<div class="row">
		<div class="col-md-4">
		</div>
		<div class="col-md-4">
			<form action="logincheck.php" method="POST">
				<div class="form-group">					 
					<label for="exampleInputEmail1">Username</label>
					<input class="form-control" id="exampleInputEmail1" type="text" name="nama" />
				</div>
				<div class="form-group">					 
					<label for="exampleInputPassword1">Password</label>
					<input class="form-control" id="exampleInputPassword1" type="password" name="pwd"/>
				</div>				
				<button type="submit" class="btn btn-default">Login</button>
			</form>
		
		</div>
		<div class="col-md-4">
		</div>
	</div>
</div>
</body>
</html>