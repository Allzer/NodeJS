<?php
    session_start();
    ob_start();
    $title = 'Главная';
    include("blocks\\header.php");
?>

<h1>Главная</h1>

<?php
    $user = "Denis";
    // setcookie("user_name", $user, time() + 180);
    // print_r($_COOKIE);
    // echo $_COOKIE['user_name'];

    $_SESSION['user_name'] = $user;


?>
