<header class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-4">
                <h1>
                    <a href="<?php echo BASE_URL?>">Библиотека</a>
                </h1>
            </div>
            <nav class="col-8">
                <ul>
                    <li><a href="<?php echo BASE_URL?>">Главная</a></li>
                    <li><a href="#">О нас</a></li>
                    <li><a href="<?php echo BASE_URL . "/borrowedBooks.php"?>">Книги читателя</a></li>
                    <li>
                        <?php if(isset($_SESSION['id'])): ?>
                            <a href="#">
                                <i class="fa fa-user"></i>
                                <?php echo $_SESSION['login'] ?>
                            </a>
                            <ul>
                                <?php if($_SESSION['admin']): ?>
                                <li><a href="<?php echo BASE_URL . "admin/posts/index.php"?>">Админ панель</a></li>
                                <?php endif; ?>
                                <li><a href="<?php echo BASE_URL . "logout.php"; ?>">Выход</a></li>
                            </ul>
                        <?php else: ?>
                            <a href="<?php echo BASE_URL . "login.php"; ?>">
                                <i class="fa fa-user"></i>
                                Вход
                            </a>
                            <ul>
                                <li><a href="<?php echo BASE_URL . "reg.php"; ?>">Регистрация</a></li>
                            </ul>
                        <?php endif;?>

                    </li>
                </ul>
            </nav>
        </div>
    </div>
</header>