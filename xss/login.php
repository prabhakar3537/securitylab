<?php
	$name = $_POST['uname'];
	$id = $_POST['pwd'];
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "login";
	$conn = new mysqli($servername, $username, $password,$dbname);
	$sql = "SELECT username,password FROM login WHERE username='$name'";
	$result = $conn->query($sql);
	$row=$result->fetch_assoc();
	echo $name;
	echo $id;
	$user_pass = $_POST['pwd'];
	$user_name = $row['username'];
	
	if(strcmp($user_pass,$row['password'])!=0) 
	{
		echo "Login failed";
	}
	else 
	{
		session_start();
		$_SESSION['USER_NAME'] = $user_name;
		$_SESSION['PASSWORD'] = $user_pass;
		echo "<head><meta http-equiv=\"Refresh\" content=\"0;url=home.php\"></head>";
	}
?>
