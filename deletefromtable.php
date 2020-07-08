<?php
    $host = 'localhost'; //имя хоста, на локальном компьютере это localhost
    $user = 'root'; //имя пользователя, по умолчанию это root
    $password = ''; //пароль, по умолчанию пустой
    $db_name = 'first_db'; //имя базы данных

    //Соединяемся с базой данных используя наши доступы:
    $link = mysqli_connect('localhost', 'root', '','first_db');

    $query = "DELETE FROM users WHERE username = \"".$_POST["username"]."\";";


    if(mysqli_query($link, $query))
        header("Location: http://testproject/show.delete.php");
?>