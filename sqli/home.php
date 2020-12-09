<html>
<?php
$servername = "localhost";
$conn = new mysqli($servername, "root", "","login");
if(!$conn)
{
	echo "Unable to connect- Connection failed :(";
	die('Cannot connect: '.mysqli_connect_error());
}
$username=$_POST['uname'];
$password=$_POST['pword'];
//$username=mysqli_real_escape_string($conn, $_POST['uname']);
//$password=mysqli_real_escape_string($conn, $_POST['pword']);
$sql="select * from login where username='".$username."' and password='".$password."';";
$resultset=mysqli_query($conn,$sql) or die ("Could not execute SQL querry");
$user = mysqli_fetch_assoc($resultset);
if(empty($user)){
	 exit("Error: Invlid Username or Password");
}
?>
	<head>
		<title> Login </title>
		<style>
			html{
				background-color: black;
			}
			.box1
			{
				background-color: black;
				color: white;
				margin:25%;
				text-align: center;
			}
		</style>
	</head>

	<body>
		
		<div class="box1">
			<p class="note"><?php echo "Welcome, ".$username." :)";?></p>
		</div>
		
	</body>

</html>