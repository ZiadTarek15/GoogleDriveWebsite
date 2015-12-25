<html !DOCTYPE=html>
<head>
	<title>Academic Content</title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
	<style type="text/css">
	body{
		background-image: url("../images/Website-Design-Background.png");
		background-size: cover;
		background-position: bottom;
	}
	</style>
</head>
<body>
	<form method="post" action="../Controller/doSignIn.php">
		<input type ="text" name="email" placeholder ="Email Address" required><br>
		<input type ="password" name="password" placeholder="Password" required><br>

		<button type="submit">Sign In!!</button>
	</form>
	</body>
</html>