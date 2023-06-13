<?php
include "../../path.php";
include "../../app/controls/books.php"
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

    <link rel="stylesheet" href="../../assets/css/adminStyles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;400;500;600;700&display=swap"
          rel="stylesheet">
</head>
<body>

<?php include("../../app/include/adminHeader.php"); ?>

<div class="container">
    <?php include "../../app/include/sidebar-admin.php"; ?>
    <div class="posts col-9">
        <div class="button row">
            <a href="<?php echo BASE_URL . "admin/posts/created.php"; ?>" class="col-2 btn btn-success">Создать</a>
        </div>
        <div class="row title-table">
            <h2>Список книг</h2>
            <div class="id col-1">ID</div>
            <div class="name col-7">Название</div>
            <div class="author col">Автор</div>
        </div>
        <?php foreach ($allBooks as $key => $book): ?>
        <div class="row post">
            <div class="id col-1"><?=$key + 1;?></div>
            <div class="name col-7"><?=$book['nameOfBook'];?></div>
            <div class="author col"><?=$book['author'];?></div>
        </div>
        <?php endforeach; ?>
    </div>
</div>
</div>


<?php include("../../app/include/footer.php"); ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
</body>
</html>