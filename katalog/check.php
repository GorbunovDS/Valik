<?php 
include('connect.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Регистрация</title>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.js"></script> 
	<script src="http://malsup.github.com/jquery.form.js"></script> 
	<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.1/dist/jquery.validate.js"></script> 
	<link rel="stylesheet" href="..\css\style.css">
	<link rel="stylesheet" href="..\css\reeset.css">
<script  >
	$(document).ready(function() {
 $('#form-reg').validate({
  rules: 
  {
   
    login:
    {
    minlength:3,
	maxlength:20,
    required: true,
    remote: {	type:"post",
    			url: "check_login.php" }
    		}
  },
  messages: {
   
     login: {
   required: "Укажите логин",
   minlength: "От 3 до 20 символов",
   maxlength: "От 3 до 20 символов",
   remote: "Логин занят"
   }
  }
});
});
</script>
</head>
<body class="login">

	<section class="reg">
		<div class="text-reg">Регистрация</div>

	<form action="" method="POST" id="form-reg" class="req">
		<p id ="reg-messages"></p>
		<div class="form-registration">
			<div class="text-inp">
				<div class="text_label">Логин</div>
				<input type="text" name="login" class="form-control" placeholder="Введите логин" id="login">
			</div>


			<input type="submit" name="submit" id="submit">

		</div>		
	</form>
	</section>
</body>
</html>
