<?php
include("../connect.php");
$sorting = $_GET["sort"];
$cats = trim($_GET['cats']);
switch ($sorting)
{
  case 'price-asc';
  $sorting = 'price ASC';
  $sort_name = 'От дешевых к дорогим';
    break;

  case 'price-desc';
  $sorting = 'price DESC';
  $sort_name = 'От дорогих к дешевым';
    break;

  case 'popular';
  $sorting = 'count DESC';
  $sort_name = 'Популярные';
    break;

  case 'news';
  $sorting = 'dateadd DESC';
  $sort_name = 'Новинки';
    break;

  case 'brand';
  $sorting = 'brand';
  $sort_name = 'По алфавиту';
    break;

  default:
  $sorting = 'id DESC';
  $sort_name = 'Нет сортировки';
    break;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
    <script src="..\js\jquery-1.8.2.min.js"></script>
  <script type="text/javascript" src="../js/shop-script.js"></script>
  <link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="../css/reeset.css">
  <link rel="stylesheet" href="../css/katalog.css">
</head>
<body>
    <?php include '../header.php' ?>
  <section class = "katalog">
    <div class="sort">
      <ul id="optional-list">
      <li>Сортировать:</li>
      <?php  echo '; <li><a id="select-sort" >'.$sort_name.'</a>
      <ul id="sorting-list">
        <li><a href="katalog.php?cats='.$cats.'&sort=price-asc">От дешевых к дорогим</a></li>
        <li><a href="katalog.php?cats='.$cats.'&sort=price-desc">От дорогих к дешевым</a></li>
        <li><a href="katalog.php?cats='.$cats.'&sort=popular">Популярное</a></li>
        <li><a href="katalog.php?cats='.$cats.'&sort=news">Новинки</a></li>
        <li><a href="katalog.php?cats='.$cats.'&sort=brand">От А до Я</a></li>
      </ul>
      </li>'
      ?>
      </ul>
    </div>
    <div class="main-katalog">

      <?php

          $result = mysqli_query ($conn,"SELECT * FROM  product,categorys WHERE categorys.id =  product.category_id AND name_category = '$cats'  ORDER BY $sorting");


          if (mysqli_num_rows($result)>0)
          {
            $row = mysqli_fetch_array($result);

            do
            {
              echo '


                <div class="product-wrap">
                 <div class="product-item">
                  <img src="'.$row["img"].'">
                  <div class="product-buttons">
                    <a href="" class="button">В корзину</a>
                  </div>
                </div>
                <div class="product-title">
                   <a href="">'.$row["title"].'</a>
                   <span class="product-price">'.$row["price"].' р </span>
                  </div>
                </div>




              ';
            }
            while ( $row = mysqli_fetch_array($result));


          }



       ?>

    </div>
  </section>
<script>

</script>
</body>


