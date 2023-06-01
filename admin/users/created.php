<?php
    session_start();
    include "../../path.php";

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
<body>

<?php include("../../app/include/adminHeader.php"); ?>

<div class="container">
    <?php include "../../app/include/sidebar-admin.php";?>
        <div class="posts col-9">
            <div class="button row">
                <a href="<?php echo BASE_URL . "admin/users/index.php"?>" class="col-3 btn btn-light">Редактировать</a>
            </div>
            <div class="row title-table">
                <h2>Создание пользователя</h2>

            </div>
            <div class="row add-post">
                <form action="created.php" method="post">
                    <div class="col">
                        <input name="login" type="text" class="form-control" id="formGroupExampleInput" placeholder="Логин">
                    </div>
                    <div class="col">
                        <input name="email"  type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">
                    </div>
                    <div class="col">
                        <input name="name" type="text" class="form-control" id="formGroupExampleInput" placeholder="Имя">
                    </div>
                    <div class="col">
                        <input name="surname" type="text" class="form-control" id="formGroupExampleInput" placeholder="Фамилия">
                    </div>
                    <div class="col">
                        <input name="phone" type="text" class="form-control" id="formGroupExampleInput" placeholder="Номер телефона">
                    </div>
                    <div class="col">
                        <input name="address" type="text" class="form-control" id="formGroupExampleInput" placeholder="Адрес">
                    </div>
                    <div class="mb-3 col-12 col-md-4">
                        <input name="passwd" type="password" class="form-control" id="exampleInputPassword1" placeholder="Пароль">
                    </div>
                    <div class="col">
                        <input name="repeatpasswd" type="password" class="form-control" id="exampleInputPassword2" placeholder="Подтверждение пароля">
                    </div>
                    <div class="col">
                        <select class="form-select" id="floatingSelect">
                            <option selected>Не админ</option>
                            <option value="1">Админ</option>
                        </select>
                    </div>
                    <div class="col">
                        <button class="btn btn-primary" type="submit">Создать</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>



<?php include("../../app/include/footer.php"); ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>