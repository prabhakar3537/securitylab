<html>

	<head>
		<title> Login </title>
		<style>
			html
			{
				background-color: black;
			}
			.loginbox
			{
				background-color: black;
				color: white;
				margin:25%;
			}
			.inbox
			{
				height:45px;
				width:250px;
			}
			.button
			{
				height:45px;
				width:100px;
			}
		</style>
	</head>
	<body>	
		<div class="loginbox">
			<form action="home.php" method="post">
				<input class="inbox" name="uname" type="text" placeholder="Enter Username">
				<br>
				<input class="inbox" name="pword" type="text" placeholder="Enter Password">
				<br>
				<input class="button" type="submit" value="Submit">
			</form>
		</div>
	</body>
</html>