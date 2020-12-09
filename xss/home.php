<?php session_start(); 
	if(!$_SESSION['USER_NAME']) 
	{
			echo "Need to login";
	}
	else 
	{
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "login";

		$conn = new mysqli($servername, $username, $password,$dbname);
		if($_SERVER['REQUEST_METHOD'] == "POST") 
		{
			echo "Welcome!";
			$sql="update login set username='".$_POST['disp_name']."' where username='".$_SESSION['USER_NAME']."';";
			$result = $conn->query($sql);
			echo "Update Success";
		}
		else {
			if(strcmp($_SESSION['USER_NAME'],'admin')==0) {
				echo "Welcome admin<br><hr>";
				echo "List of user's are<br>";
				$sql = "select username from login where username!='admin'";
				$result = $conn->query($sql);

				if ($result->num_rows > 0) {
					while($row=$result->fetch_assoc()){
						#Vulnerable line
						echo" UserName: " . $row["username"]."<br>";
						#Prevention
						#echo "User Name: " . htmlspecialchars($row["username"])."<br>";
					}
				}
			}
			else {
				echo "<form name=\"tgs\" id=\"tgs\" method=\"post\" action=\"home.php\"> <br>";
				echo "Update name:<input type=\"text\" id=\"disp_name\" name=\"disp_name\" value=\"\"> <br>";
				echo "<input type=\"submit\" value=\"Update\"> <br>";
			}
		}
	}
?> 