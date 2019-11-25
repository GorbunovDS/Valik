<?php 
	include("connect.php");

	$login = trim($_POST["login"]);

	$result = mysqli_query($conn,"SELECT Login FROM users WHERE Login = 'lolik' ");

	if(mysqli_num_rows($result)>0)
	{
		echo "false";
	}
	else
	{
		echo "true";
	}

 ?>