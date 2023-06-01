<?php
include "app/database/db.php";

 $errMsg = '';

 function userAuth($user){
     $_SESSION['id'] = $user['id'];
     $_SESSION['login'] = $user['username'];
     $_SESSION['admin'] = $user['admin'];
     if($_SESSION['admin']){
         header('location: ' . BASE_URL . "admin/posts/index.php");
     }else{
         header('location: ' . BASE_URL);
     }
 }
//Код для регистрации
if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['button-reg'])){
    $admin = 0;
    $login = trim($_POST['login']);
    $email = trim($_POST['email']);
    $name = trim($_POST['name']);
    $surname = trim($_POST['surname']);
    $phone = trim($_POST['phone']);
    $address = trim($_POST['address']);
    $passwdF = trim($_POST['passwd']);
    $passwdS = trim($_POST['repeatpasswd']);


    if($login === '' || $email === '' ||$passwdF === ''){
        $errMsg = 'Не все поля заполнены!';
    }elseif (mb_strlen($login, 'UTF-8') < 2){
        $errMsg = 'Логин должен быть длиннее двух символов!';
    }elseif ($passwdF !== $passwdS){
        $errMsg = 'Пароли не совпадают!';
    }else{
        $existence = selectOne('users', ['email' => $email]);
        if(!empty($existence['email']) && $existence['email'] === $email){
            $errMsg = 'Эта почта уже зарегистрирована!';
        }else {
            $pass = password_hash($passwdF, PASSWORD_DEFAULT);
            $post = [
                'admin' => $admin,
                'username' => $login,
                'email' => $email,
                'password' => $pass,
                'name' => $name,
                'surname' => $surname,
                'phone' => $phone,
                'address' => $address,
            ];
            $id = insert('users', $post);
            $user = selectOne('users', ['id' => $id]);

            userAuth($user);
        }

    }
}else{
    $login = '';
    $email = '';
    $name = '';
    $surname = '';
    $phone = '';
    $address = '';
}
//Код для авторизации
if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['button-log'])){
    $email = trim($_POST['email']);
    $passwd = trim($_POST['password']);

    if( $email === '' ||$passwd === ''){
        $errMsg = 'Не все поля заполнены!';
    }else {
        $existence = selectOne('users', ['email' => $email]);
        if($existence && password_verify($passwd, $existence['password'])){
            userAuth($existence);
        }else{
            $errMsg = 'Повторите попытку';
        }
    }
}

