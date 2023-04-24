<!DOCTYPE html>
<html>
<head>
	<title>Admin Sign In</title>

</head>
<body>
	<div class="container">
		<form class="signin-form" action="includes/admin-login.inc.php" method="POST">
			<h2>Admin Sign In</h2>
			<label for="username">Username</label>
			<input type="text" id="username" name="username" placeholder="Enter your username">
			<label for="password">Password</label>
			<input type="password" id="password" name="password" placeholder="Enter your password">
			<button type="submit">Sign In</button>
		</form>
	</div>
</body>

<style>

* {
	margin: 0;
	padding: 0;
	box-sizing: border-box;
	font-size: 20px;
    font-family: Arial, Helvetica, sans-serif;
}

body {
	background-color: #f2f2f2;
}

.container {
	display: flex;
	justify-content: center;
	align-items: center;
	height: 100vh;
}



.signin-form {
	background-color: #fff;
	padding: 40px;
	border-radius: 10px;
	box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.3);
    text-align: center;
}

h2 {
	text-align: center;
	margin-bottom: 40px;
    font-size: 40px;
}

label {
	display: block;
	font-weight: bold;
	margin-bottom: 20px;
    font-size: 25px;
}

input[type="text"], input[type="password"] {
	width: 100%;
	padding: 20px;
	margin-bottom: 20px;
	border-radius: 5px;
	border: none;
}

button[type="submit"] {
	background-color: #4CAF50;
	color: #fff;
	padding: 20px 40px;
	border: none;
	border-radius: 5px;
	cursor: pointer;
	transition: all 0.3s ease;
}

button[type="submit"]:hover {
	background-color: #3e8e41;
}

</style>
</html>
