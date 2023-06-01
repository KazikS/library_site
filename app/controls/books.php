<?php
include SITE_ROOT . "/app/database/db.php";

$errMsg = '';
$id = '';
$number = '';
$cipher = '';
$book_type = '';
$name = '';
$genre = '';
$publishing_house = '';
$publishing_year = '';
$quantity = '';
$image = '';
$author = '';
$annotation = '';

$allTopics = selectAll('topics');
$allBooks = selectAll('books');

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['add_book'])) {

    if(!empty($_FILES['image']['name'])){
        $imageName = time() . "_" . $_FILES['image']['name'];
        $fileTmpName = $_FILES['image']['tmp_name'];
        $destination = ROOT_PATH . "\assets\images\posts\\" . $imageName;

        $fileType = $_FILES['image']['type'];
        if(strpos($fileType, 'image') === false){
            $errMsg = 'Вы выюрали не изображение';
        }

        $result = move_uploaded_file($fileTmpName, $destination);

        if($result){
            $_POST['image'] = $imageName;
        }else{
            $errMsg = 'Ошибка загрузки изображения'; //ошибка move_upload_files
        }
    }else{
        $errMsg = 'Ошибка получения изображения'; //ошибка в форме заполнения
    }

    $number = trim($_POST['number']);
    $cipher = trim($_POST['cipher']);
    $book_type = trim($_POST['book-type']);
    $name = trim($_POST['name']);
    $genre = trim($_POST['genre']);
    $publishing_house = trim($_POST['publishing-house']);
    $publishing_year = trim($_POST['publishing-year']);
    $quantity = trim($_POST['quantity']);
    $author = trim($_POST['author']);
    $annotation = trim($_POST['annotation']);


    if ($number === '' || $cipher === '' || $book_type === '' || $name === '' || $genre === '' || $publishing_house === '' || $publishing_year === '' || $quantity === '' || $author === '') {
        $errMsg = 'Не все поля заполнены!';
    } else {

            $book = [
                'number' => $number,
                'cipher' => $cipher,
                'type' => $book_type,
                'name' => $name,
                'genre' => $genre,
                'pHouse' => $publishing_house,
                'pYear' => $publishing_year,
                'quantity' => $quantity,
                'image' => $_POST['image'],
                'author' => $author,
                'annotation' => $annotation,
            ];
            $bookInsert = insert('books', $book);
            $bookSelectOne = selectOne('topics', ['id' => $id]);
            header('location: ' . BASE_URL . 'admin/posts/index.php');

    }
} else {
    $id = '';
    $number = '';
    $cipher = '';
    $book_type = '';
    $name = '';
    $genre = '';
    $publishing_house = '';
    $publishing_year = '';
    $quantity = '';
    $author ='';
    $annotation = '';
}


$user_id = '';
$book_id = '';
$date_borrowed = '';
$date_returned = '';


if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['take_book'])) {
    echo "Take book";
}

