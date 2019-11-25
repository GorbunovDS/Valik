<?php

include("connect.php");

$error = array();

	$login=trim($_POST["login"]);
	$password =  trim($_POST["password"]);
	$name = trim($_POST['name']);
	$email = trim($_POST['email']);
	$lastname = trim($_POST["lastname"]);

if(strlen($login) < 5 or strlen($login) > 15)
{

	$error[] = "Логин должен быть от 5 до 15 символов";
}
else
{
	$result = mysqli_query($conn,"SELECT login FROM users WHERE login ='$login'");
	if (mysqli_num_rows($result)>0)
	{
		$error[] = "Логин занят";
	}
}

if (strlen($password) <7 or strlen($pass)>15) $error[] = "Укажите пароль от 7 до 15 символов! ";
if (strlen($lastname) <3 or strlen($pass)>20) $error[] = "Укажите фамилию от 3 до 20 символов! ";
if (strlen($name) <3 or strlen($pass)>15) $error[] = "Укажите имя от 7 до 15 символов! ";
if (strlen($password) <7 or strlen($pass)>15) $error[] = "Укажите пароль от 7 до 15 символов! ";


    if(!preg_match("/^([a-z0-9_\.-]+)@([a-z0-9_\.-]+)\.([a-z\.]{2,6})$/", trim($email))) $error[]
 = "Укажите корректный E-mail";

 if (count($error))
 {
 	echo implode('<br />',$error);
 }
 else
 {
 mysqli_query($conn,"INSERT INTO users(login,password,email,name,lastname) VALUES('".$login."','".$password."','".$email."','".$name."','".$lastname."')");
echo true;
 }
 ?>