<table border="1px" width="50%">
    <tr>
        <th>username</th>
        <th>password</th>
        <th><del></del>ete users</th>
    </tr>
<?php
        $host = 'localhost'; //имя хоста, на локальном компьютере это localhost
        $user = 'root'; //имя пользователя, по умолчанию это root
        $password = ''; //пароль, по умолчанию пустой
        $db_name = 'first_db'; //имя базы данных
    //Соединяемся с базой данных используя наши доступы:
    $link = mysqli_connect($host, $user, $password, $db_name);

    //Устанавливаем кодировку (не обязательно, но поможет избежать проблем):
    mysqli_query($link, "SET NAMES 'utf8'");

    //Формируем тестовый запрос:
    $query = "SELECT * FROM users";

    //Делаем запрос к БД, результат запроса пишем в $result:
    $result = mysqli_query($link, $query);
    while( $row = mysqli_fetch_assoc($result) ) {
    //printf("%s (%s)<br>", $row['username'], $row['password']);
        print "<tr>";
        print '<td align="center">' . $row['username'] . "</td>";
        print '<td align="center">' . $row['password'] . "</td>";
        //print '<td align="center">' . '<a href="deletefromtable.php?username=' . $row["username"] . '">delete</a>' . "</td>";
        print '<td align="center">' . '<form action="deletefromtable.php" method="post">
                                        <input type="submit" value="del">
                                        <input type="hidden" name="username" value="' . $row["username"].'">
                                       </form>' . "</td>";
        print "</tr>";
}
?>
</table>

        
