<?php
if ($_SERVER["REQUEST_METHOD"] == "POST")
	{
		include("connect.php");
		$login = trim($_POST["login"]);
		$password = trim($_POST["password"]);

		$result = mysqli_query($conn,"SELECT * FROM users WHERE login='$login' and password='$password'");
		if(mysqli_num_rows($result)>0)
			{

          		$row = mysqli_fetch_array($result);
          		session_start();
          		$_SESSION['auth'] = 'yes_auth';
          		$_SESSION['auth_pass'] = $row["password"];
          		$_SESSION['auth_login'] = $row["login"];
          		$_SESSION['auth_name'] = $row["name"];
          		$_SESSION['auth_lastname'] = $row["lastname"];
          		$_SESSION['auth_email'] = $row["email"];
          		echo true;
			}
			else
			{
				echo false;
			}
	}



 ?>
