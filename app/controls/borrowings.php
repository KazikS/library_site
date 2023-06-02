<?php


$id = '';
$user_id = '';
$book_id = '';
$date_borrowed = '';
$date_returned = '';


if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['take_book'])) {
    $params = [
        $user_id = selectOne('users', ['id' => $id]),
        $book_id = selectOne('books', ['id' => $id]),
        $date_borrowed = date('Y-m-d'),
        ];
    test($params);
    exit();
    $taken = insert('borrowings', $params);
    $date_returned = '';
}



