<html>
<head><title>Login</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</head>
<body>
<?php
	if(isset($_GET['error'])){ ?>
		<div class="alert alert-danger" role="alert">
			<?= $_GET['error'] ?>
		</div>
	<?php }
?>

<?php
	if(isset($_GET['success'])){ ?>
		<div class="alert alert-success" role="alert">
			<?= $_GET['success'] ?>
		</div>
	<?php }
?>
<form action='' method='post'>
	<label>Username:<input name='username' type='text' /></label><br>
	<label>Password:<input name='password' type='password' /></label><br>
	<input type='submit' name='action' value='Login' />
</form>

</body>
</html>