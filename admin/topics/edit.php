<?php
session_start();
include "../../path.php";
include "../../app/controls/topics.php";
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Библиотека</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/91b803d812.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="../../assets/css/adminStyles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<div>

    <?php include("../../app/include/adminHeader.php"); ?>

    <div class="container">
        <div class="row">
            <?php include "../../app/include/sidebar-admin.php";?>
            <div class="posts col-9">
                <div class="button row">
                    <a href="<?php echo BASE_URL . "admin/topics/index.php"?>" class="col-3 btn btn-light">Редактировать</a>
                </div>
                <div class="row title-table">
                    <h2>Обновить категорию</h2>
                </div>
                <div class="row add-post">
                    <div class="mb-12 col-12 col-md-12 error">
                        <p>
                            <?=$errMsg?>
                        </p>
                    </div>
                    <form action="edit.php" method="post">
                        <input name="id" value="<?=$id;?>" type="hidden">
                        <div class="col">
                            <input name="name" value="<?=$name;?>" type="text" class="form-control" placeholder="Название категории" aria-label="Название категории">
                        </div>
                        <div class="col">
                            <label for="content" class="form-label">Описание категории</label>
                            <textarea name="description" class="form-control" id="content" rows="6"><?=$description;?></textarea>
                        </div>

                        <div class="col">
                            <button name="topic-edit" class="btn btn-primary" type="submit">Обновить</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include("../../app/include/footer.php"); ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>