<?php
include "path.php";
include "app/controls/books.php";
$borrows = selectBorrowedBooksByUserID('books', 'borrowings');
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Библиотека</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/91b803d812.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;400;500;600;700&display=swap"
          rel="stylesheet">
</head>
<body>

<?php include("app/include/header.php"); ?>


<!--блок main-->

<div class="container">
    <div class="content row">
        <!--Main content-->
        <div class="main-content col-md-9 col-12">
            <h2>Арендованные книги</h2>
            <p>
                Для получения книги, обратитесь в библиотеку. Функция оформления онлайн-заказа и доставки находится в разработке
            </p>
            <p>
                Книга будет удалена из списка после ее возвращения
            </p>
            <div class="h-10"></div>
            <?php foreach ($borrows as $post): ?>
                <div class="post row">
                    <div class="img col-12 col-md-4">
                        <img src="<?=BASE_URL . "assets/images/posts/" . $post['image']?>" alt="<?=$post['name']?>" class="img-thumbnail">
                    </div>
                    <div class="post-text col-12 col-md-8">
                        <h3>
                            <?php if(strlen($post['nameOfBook']) > 100): ?>
                                <a href="<?=BASE_URL . "single.php?post=" . $post['book_id'];?>"><?=substr($post['nameOfBook'], 0, 120) . "..."?></a>
                            <?php else: ?>
                                <a href="<?=BASE_URL . "single.php?post=" . $post['book_id'];?>"><?=$post['nameOfBook']?></a>
                            <?php endif;?>
                        </h3>
                        <i class="far fa-user"><?=$post['author']?></i>
                        <i class="far fa-calendar"> Год издания: <?=$post['pYear']?></i>
                        <i class="far fa-calendar"> Дата аренды книги: <?=$post['date_borrowed']?></i>
                        <?php if(strlen($post['annotation']) > 199): ?>
                            <p class="preview-text"> <?=mb_substr($post['annotation'], 0, 1200, 'UTF-8') . "..."?></p>
                        <?php else: ?>
                            <p class="preview-text"> <?=$post['annotation']?></p>
                        <?php endif;?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        </div>
    </div>
</div>

<!--блок main-->

<!--footer-->
<?php include("app/include/footer.php"); ?>
<!--footer-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
</body>
</html>