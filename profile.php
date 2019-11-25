<?php
session_start();
include('connect.php');
include 'header.php' ;
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Регистрация</title>
	<script src="..\js\jquery-1.8.2.min.js"></script>
	<script src="..\js\jquery.validate (1).js"></script>
	<script src="..\js\jquery.form (1).js"></script>
	<link rel="stylesheet" href="..\css\style.css">
	<link rel="stylesheet" href="..\css\reeset.css">
<script  charset="UTF-8" >
	$(document).ready(function() {
 $('#form-reg').validate({
  rules:
  {
    email:
    {
    email: true,
    required: true
    },
    login:
    {
    minlength:3,
	maxlength:20,
    required: true


    },
    name:
    {
    minlength:3,
	maxlength:20,
    required: true
    },
    password:
    {
    minlength:5,
	maxlength:15,
    required: true
    },
    lastname:
    {
    minlength:3,
	maxlength:20,
    required: true
    }

  },
  messages: {
    email: {
    email:"Не корректный email",
    required: "Укажите почту"
    },
     login: {
   required: "Укажите логин",
   minlength: "От 3 до 20 символов",
   maxlength: "От 3 до 20 символов"


    },
         name: {
   required: "Укажите имя",
   minlength: "От 3 до 20 символов",
   maxlength: "От 3 до 20 символов"
    },
         password: {
   required: "Укажите пароль",
   minlength: "От 5 до 15 символов",
   maxlength: "От 5 до 15 символов"
    },
         lastname: {
   required: "Укажите фамилию",
   minlength: "От 3 до 20 символов",
   maxlength: "От 3 до 20 символов"
    }
  },

  submitHandler: function(form){
  	$(form).ajaxSubmit({
  		success: function(data){
  			if(data==true)
  			{
  				$("#form-registration").fadeOut(300,function(){
  					$("#reg-messages").addClass("reg_messages_good").html("Вы успешно зарегистрированы");
  					$("#submit").hide();
  				});
  			}
  			else
  			{
  				$("#reg-messages").addClass("reg_messages_error").fadeIn(400).html(data);
  			}
  		}
  	});
  }
});
});
</script>

</head>
<body class="login">


	<section class="reg">
		<div class="text-reg">Регистрация</div>

	<form action="handler_reg.php" method="POST" id="form-reg" class="req">
		<p id ="reg-messages"></p>
		<div class="form-registration" id="form-registration">
			<div class="text-inp">
				<div class="text_label">Логин</div>
				<input type="text" name="login" class="form-control" placeholder="Введите логин" id="login">
			</div>
			<div class="text-inp">
				<div class="text_label">Пароль</div>
				<input type="password" name="password" class="form-control" placeholder="Введите пароль" id="password">
			</div>
			<div class="text-inp">
				<div class="text_label">Электронная почта</div>
				<input type="text" name="email" class="form-control" placeholder="Введите почту" id="email">
			</div>
			<div class="text-inp">
				<div class="text_label">Имя</div>
				<input type="text" name="name" class="form-control" placeholder="Введите имя" id="name">
			</div>
			<div class="text-inp">
				<div class="text_label">Фамилия</div>
				<input type="text" name="lastname" class="form-control" placeholder="Введите фамилию" id="lastname">
			</div>

			<input type="submit" name="submit" id="submit">

		</div>
	</form>
	</section>
</body>
</html>
