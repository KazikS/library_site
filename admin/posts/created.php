<?php
include "../../path.php";
include "../../app/controls/books.php";
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
        <div class="row">
            <?php include "../../app/include/sidebar-admin.php"; ?>
            <div class="posts col-9">
                <div class="row title-table">
                    <h2>Добавление</h2>
                    <p>
                        <?= $errMsg ?>
                    </p>
                </div>
                <div class="row add-post">
                    <form action="created.php" method="post" enctype="multipart/form-data">
                        <div class="col">
                            <input name="number" type="text" class="form-control number" placeholder="Номер" aria-label="number">
                        </div>
                        <div class="col">
                            <input name="cipher" type="text" class="form-control cipher" placeholder="Шифр" aria-label="cipher">
                        </div>
                        <div class="col">
                            <input name="book-type" type="text" class="form-control book-type" placeholder="Тип книги" aria-label="book-type">
                        </div>
                        <div class="col">
                            <input name="name" type="text" class="form-control name" placeholder="Название" aria-label="name">
                        </div>
                        <div class="col">
                            <input name="publishing-house" type="text" class="form-control publishing-house" placeholder="Издательство" aria-label="publishing-house">
                        </div>
                        <div class="col">
                            <input name="publishing-year" type="text" class="form-control publishing-year" placeholder="Год издательтсва" aria-label="publishing-year">
                        </div>
                        <div class="col">
                            <input name="quantity" type="text" class="form-control quantity" placeholder="Количество" aria-label="quantity">
                        </div>
                        <div class="col">
                            <input name="author" type="text" class="form-control quantity" placeholder="Автор" aria-label="quantity">
                        </div>
                        <div class="col">
                            <label for="content" class="form-label"></label>
                            <textarea name="annotation" class="form-control" id="content" rows="6" placeholder="Аннотация"></textarea>
                        </div>
                        <div class="input-group col">
                            <input name="image" type="file" class="form-control" id="inputGroupFile02">
                            <label class="input-group-text" for="inputGroupFile02">Загрузить</label>
                        </div>
                        <select name="genre" class="form-select mb-2" aria-label="Default select example">
                            <option selected>Жанр не выбран</option>
                            <?php foreach ($allTopics as $key => $topic): ?>
                                <option value="<?=$topic['name']?>"><?=$topic['name']?></option>
                            <?php endforeach; ?>
                        </select>
                        <div class="col">
                            <button name="add_book" class="btn btn-primary" type="submit">Сохранить</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<?php include("../../app/include/footer.php"); ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
</body>
</html>