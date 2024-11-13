<?php
    $name = $_POST['username'];
    $email = $_POST['email'];
    $_POST['psw'] = sha1($_POST['psw']);
    $password = $_POST['psw'];

    if ($name == '') {
        echo 'Не ввели имя пользователя';
    } elseif (strlen($name) <= 1) {
        echo 'Такого имени не существует';
    } else {
        header('Location: index.php');
        exit;
    }
  
?>