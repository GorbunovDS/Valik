<?php

	include("connect.php");


$result = mysqli_query($conn,"SELECT * FROM users WHERE login='$login' and password='$password'");


          if (mysqli_num_rows($result)>0)
          {
            $row = mysqli_fetch_array($result);

            do
            {
              echo '


					'.$row['login'].'

              ';
            }
            while ( $row = mysqli_fetch_array($result));


          }

 ?>

