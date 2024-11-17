<?php
    $title = 'Главная';
    include("blocks\\header.php");
?>

<h1>Главная</h1>

<?php
    $filename = 'texft.txt';
    $file = fopen("text.txt","r");
    $content = fread($file, filesize("text.txt"));
    echo file_exists($filename);
    fclose($file);
    echo fileperms(__FILE__);
?>
