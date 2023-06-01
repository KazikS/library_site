<?php
include("path.php");
include("app/controls/users.php");
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
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

<!--End header-->

<!--Register form-->
<div class="container reg_form">
    <form class="row justify-content-center" method="post" action="reg.php">
        <h2>Форма регистрации</h2>
        <div class="mb-3 col-12 col-md-4 error">
            <p>
                <?= $errMsg ?>
            </p>
        </div>
        <div class="w-100"></div>
        <div class="mb-3 col-12 col-md-4">
            <label for="formGroupExampleInput" class="form-label">Ваш логин</label>
            <input name="login" value="<?= $login ?>" type="text" class="form-control" id="formGroupExampleInput"
                   placeholder="Введите ваш логин">
        </div>
        <div class="w-100"></div>
        <div class="mb-3 col-12 col-md-4">
            <label for="exampleInputEmail1" class="form-label">Email</label>
            <input name="email" value="<?= $email ?>" type="email" class="form-control" id="exampleInputEmail1"
                   aria-describedby="emailHelp" placeholder="Введите ваш email">
            <div id="emailHelp" class="form-text">Мы никогда не передадим вашу электронную почту кому-либо еще.</div>
        </div>
        <div class="w-100"></div>
        <div class="row mb-3 col-md-5">
            <div class="col">
                <input name="name" value="<?= $name ?>" type="text" class="form-control" id="formGroupExampleInput"
                       placeholder="Ваше имя">
            </div>
            <div class="col">
                <input name="surname" value="<?= $surname ?>" type="text" class="form-control"
                       id="formGroupExampleInput" placeholder="Ваша фамилия">
            </div>
        </div>
        <div class="w-100"></div>
        <div class="row mb-3 col-md-5">
            <div class="col">
                <input name="phone" value="<?= $phone ?>" type="text" class="form-control" id="formGroupExampleInput"
                       placeholder="Номер телефона">
            </div>
            <div class="col">
                <input name="address" value="<?= $address ?>" type="text" class="form-control"
                       id="formGroupExampleInput" placeholder="Адрес">
            </div>
        </div>
        <div class="w-100"></div>
        <div class="mb-3 col-12 col-md-4">
            <label for="exampleInputPassword1" class="form-label">Пароль</label>
            <input name="passwd" type="password" class="form-control" id="exampleInputPassword1"
                   placeholder="Введите ваш пароль">
        </div>
        <div class="w-100"></div>
        <div class="mb-3 col-12 col-md-4">
            <label for="exampleInputPassword1" class="form-label">Повторите пароль</label>
            <input name="repeatpasswd" type="password" class="form-control" id="exampleInputPassword2"
                   placeholder="Повторите пароль">
        </div>
        <div class="w-100"></div>
        <div class="mb-3 col-12 col-md-4">
            <button type="submit" class="btn btn-secondary" name="button-reg">Зарегистрироваться</button>
            <a href="login.php">Войти</a>
        </div>
    </form>
</div>
<!--Register form-->

<!--footer-->
<?php include("app/include/footer.php"); ?>
<!--footer-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
</body>
</html>