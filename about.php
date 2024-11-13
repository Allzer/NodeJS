
<?php
    $title = 'Про нас';
    require("blocks\\header.php");
?>
    <div class="container mt-2">
        <h1>Про нас</h1>
    
        <form action="check_post.php" method="get">
            <input type="text" name="username" placeholder="Введите имя" class="form-control"><br>
            <input type="text" name="email" placeholder="Введите email" class="form-control"><br>
            <input type="password" name="psw" placeholder="Введите пароль" class="form-control"><br>
            <textarea type="text" name="message" placeholder="Введите текст" class="form-control"></textarea><br>
            <input type="submit" value="Отправить" class="btn btn-success">
        </form>
    </div>

<?php
    require("blocks\\footer.php");
?>