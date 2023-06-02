<?php include("path.php") ?>
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


  <!--блок main-->
  <div class="container">
    <div class="content row">
      <!--Main content-->
      <div class="main-content col-md-9 col-12">
        <div class="single_post row">
          <div class="single_post-text col-12">
            <h2>Курсовой проект по предмету Базы Данных</h2>
            <p>Наш сайт представляет собой проект курсовой работы</p>
            <p>Здесь вы можете посмотреть список имеющихся книг в библиотеке </p>
            <p>А так же посмотреть список арендованных вами книг </p>
          </div>
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