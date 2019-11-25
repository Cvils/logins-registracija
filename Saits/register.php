<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Reģistrācija</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="header">
		<h2>Registrācija</h2>
	</div>
	
	<form method="post" action="register.php">

		<?php include('errors.php'); ?>

		<div class="input-group">
			<label>Lietotājvārds</label>
			<input type="text" name="username" value="<?php echo $username; ?>">
		</div>
		<div class="input-group">
			<label>Ēpasts</label>
			<input type="email" name="email" value="<?php echo $email; ?>">
		</div>
		<div class="input-group">
			<label>Parole</label>
			<input type="password" name="password_1">
		</div>
		<div class="input-group">
			<label>Apstiprini paroli</label>
			<input type="password" name="password_2">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="reg_user">Reģistrēties</button>
		</div>
		<p>
			Jau esi lietotājs? <a href="login.php">Pieraksties</a>
		</p>
	</form>
</body>
</html>