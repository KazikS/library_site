<?php include "path.php";
include "app/controls/books.php";

$post = selectOne('books', ['id' => $_GET['post']]);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/91b803d812.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
<?php include("app/include/header.php"); ?>


<!--блок main-->
<div class="container">
    <div class="content row">
        <!--Main content-->
        <div class="main-content col-md-9 col-12">
            <h2><?=$post['nameOfBook']?></h2>
            <div class="single_post row">
                <div class="img col-12">
                    <img src="<?=BASE_URL . "assets/images/posts/" . $post['image']?>" alt="" class="img-thumbnail">
                </div>
                <div class="info">
                    <i class="far fa-user"> <?=$post['author']?></i>
                    <i class="far fa-calendar"> Год издания <?=$post['pYear']?></i>
                </div>
                <div class="single_post-text col-12">
                    <h3>Аннотация</h3>
                    <p> <?=$post['annotation']?></p>
                </div>
            </div>
            <form action="single.php" method="post">
                <input name="id" value="<?=$_GET['post'];?>" type="hidden">
                <div class="col mb-4">
                    <button name="take-book" class="btn btn-secondary" type="submit">Взять книгу</button>
                </div>
            </form>
        </div>
        <!--Sidebar Content-->
        <div class="sidebar col-md-3 col-12">

            <div class="section search">
                <h3>Поиск</h3>
                <form action="#" method="post">
                    <input type="text" name="search-term" class="text-input" placeholder="Поиск...">
                </form>
            </div>

            <div class="section topics">
                <h3>Категории</h3>
                <ul>
                    <li><a href="#">Стихи</a></li>
                    <li><a href="#">Романы</a></li>
                    <li><a href="#">Фантастика</a></li>
                    <li><a href="#">Детектив</a></li>
                    <li><a href="#">Классика</a></li>
                </ul>
            </div>

        </div>
    </div>
</div>

<!--блок main-->

<!--footer-->
<?php include("app/include/footer.php"); ?>

<!--footer-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>