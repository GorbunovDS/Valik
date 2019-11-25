<?php
include("connect.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<script src="..\js\jquery-1.8.2.min.js"></script>
	<script src="..\js\jquery.validate (1).js"></script>
	<script src="..\js\jquery.form (1).js"></script>
	<script src="js\shop-script.js"></script>
	<link rel="stylesheet" href="css\style.css">
	<link rel="stylesheet" href="css\reeset.css">
</head>
<body>
	<div class="wrapper">
		<header class="header">
		<div class="menu">
			<ul>
				<li><a href="#" class="menu-link">+7(900)-127-47-23</a></li>
				<li><a href="#" class="menu-link">Отзывы</a></li>
				<li><a href="#" class="menu-link">Частые вопросы</a></li>
				<li><a href="#" class="menu-link">Условие оплаты</a></li>
			</ul>
		</div>

		<div class="search">
			<div class="logo">
				<ul>
					<li><a href="\index.php" class = logo-link>COMPWORLD</a></li>
				</ul>
			</div>

			<div class="poisk">
				<form action="#">
					<input type="text" id="poisk" >
					<input type="submit" id="but" value="Найти">
				</form>
			</div>

			<div class="imgs">

				<div class="img-t">
					<div class="img-features">
						<img src="img\ba.png" id="icon" alt="">
					</div>
					<div class="img-text">
						<a href="\basket.php" class = "search-link">Корзина</a>
					</div>
				</div>

				<div class="img-t">
					<div class="img-features">
						<img src="img\likes.png" alt="">
					</div>
					<div class="img-text">
						<a href="\likes.php" class = "search-link">Избранное</a>
					</div>
				</div>

				<div class="img-t">
					<div class="img-features">
						<img src="img\orders.png" alt="">
					</div>
					<div class="img-text">
						<a href="#" class = "search-link">Заказы</a>
					</div>
				</div>
				<div class="img-t">
					<div class="img-features">
						<img id="log" src="img\login.png" alt="">
					</div>
					<div class="img-text">
						<?php
						 session_start();
						if($_SESSION['auth'] == 'yes_auth')
						{
							echo '<a><p id="auth-user">'.$_SESSION['auth_name'].'</p></a>';
						}
						else
						{
							echo '<a id="search-link"  class = "search-link">Войти</a>';
						}

						 ?>
					</div>
				</div>
					</div>
			</div>

							<div class="auth">
			 		<form method="POST" class="form-auth">
						<div class="title-auth">Авторизация</div>
						<input class="form-auth-in" type="text" name="auth_login" placeholder="Введите login" id="auth_login">
						<input type="password" name="auth_password"  placeholder="Введите пароль" id="auth_password">
						<div class="but-reg">
							<p id="submit-auth"><a>Вход</a></p>
							<div class="text-registr"><a href="registration.php">Регистрация</a></div>
						</div>
						<div id="message-auth">Неверный логин или пароль</div>

					</form>
				</div>
				<div class="profile" id="profile">
			 		<a class="logout">Профиль</a>
			 		<a id="logout"class="logout">Выйти</a>
				</div>

		<hr align="center" width="100%" size="1" color="#2F4F4F" />
	</header>
 	</div>
	<section class="main">
		<div class="main-box">
				<div class="box_1">
					<div class="box_2-1">
							<?php

          $result = mysqli_query ($conn,"SELECT * FROM  categorys WHERE name_category ='notebooks' ");


          if (mysqli_num_rows($result)>0)
          {
            $row = mysqli_fetch_array($result);

            do
            {
              echo '

          <a href="\katalog\katalog.php?cats='.$row['name_category'].'&sort=price-asc"><img src="img\5.png"  height="235" width="600" alt=""></a>


              ';
            }
            while ( $row = mysqli_fetch_array($result));


          }



       ?>

					</div>
					<div class="box_2-1">

						<?php

          $result = mysqli_query ($conn,"SELECT * FROM  categorys WHERE name_category ='monitors' ");


          if (mysqli_num_rows($result)>0)
          {
            $row = mysqli_fetch_array($result);

            do
            {
              echo '

          <a href="\katalog\katalog.php?cats='.$row['name_category'].'&sort=price-asc"><img src="img\4.png"  height="235" width="600" alt=""></a>


              ';
            }
            while ( $row = mysqli_fetch_array($result));


          }



       ?>

					</div>
				</div>

			<div class="box_2">
				<div class="box_2-1">

						<a href="#"><img src="img\2.png"   alt=""></a>
				</div>
				<div class="box_2-1">

						<a href="#"><img src="img\1.png"   alt=""></a>
				</div>
				<div class="box_2-1">
						<a href="#"><img src="img\3.png"   alt=""></a>


				</div>
			</div>

		</div>
				<hr align="center" width="100%" size="1" color="#2F4F4F" />
	</section>



</body>
</html>