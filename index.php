<?php
    $title = 'Главная';
    include("blocks\\header.php");
?>

<h1>Главная</h1>

<?php
    $lis = [4,5,6,7,87,9];
    unset($lis[1]);
    $lis = array_values($lis);
    print_r($lis);
?>
