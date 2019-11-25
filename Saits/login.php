<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Pieslēgšanās</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<div class="header">
		<h2>Pieslēgties MegaBitWEB</h2>
	</div>
	
	<form method="post" action="login.php">

		<?php include('errors.php'); ?>

		<div class="input-group">
			<label>Lietotājvārds</label>
			<input type="text" name="username" >
		</div>
		<div class="input-group">
			<label>Parole</label>
			<input type="password" name="password">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="login_user">Pieslēgties</button>
		</div>
		<p>
			Nēesi lietotājs? <a href="register.php">Piereģistrēties</a>
		</p>
	</form>


</body>
</html>