<!DOCTYPE html>
<head>
<meta charset="utf-8" content="width=device-width, initial-scale=1" />
<title>Spijk Beers - Admin Page</title>
<link rel="stylesheet" type="text/css" href="styling.css" />
</head>

<body>
  <div class="adminloginfields">
			<form class = "orderform" method="post">
    <label for="date">Username:</label><br>
    <input type="text" id="username" name="username" required><br>
    <label for="number">Password:</label><br>
    <input type="password" id="password" name="password" required><br>
		<input type="submit" name="adminsubmit" value="Login">
		<input type="submit" name="adminregister" value="Register">
	</form>
    </div>

	<?php include('adminfunctions.php');
	 ?>
