<html>
<head>
    <title>My first PHP Website</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</head>
<body>
<!--    <table border="1px" width="50%">-->
<!--    <tr>-->
<!--        <th>username</th>-->
<!--        <th>password</th>-->
<!--        <th>delete users</th>-->
<!--    </tr>-->
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">username</th>
            <th scope="col">password</th>
            <th scope="col">delete</th>
        </tr>
        </thead>
        <tbody>

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

//        print "<tr>";
//        print '<td align="center">' . $row['username'] . "</td>";
//        print '<td align="center">' . $row['password'] . "</td>";
        //print '<td align="center">' . '<a href="delete.php?username=' . $row["username"] . '">delete</a>' . "</td>";
//        print '<td align="center">' . '<form action="delete.php" method="post">
//                                        <input type="submit" value="del">
//                                        <input type="hidden" name="username" value="'. $row["username"].'">
//                                       </form>' . "</td>";
//        print "</tr>";
        print "<tr>";
        print '<th scope="row"></th>';
        print '<td align="center">' . $row['username'] . "</td>";
        print '<td align="center">' . $row['password'] . "</td>";
        print '<td align="center">' . '<form action="delete.php" method="post">
                                        <input type="submit" value="delete">
                                        <input type="hidden" name="username" value="'. $row["username"].'">
                                        </form>' . "</td>";
        print "</tr>";
    }
    ?>
        </tbody>
    </table>
    <a href="register.php" class="btn btn-primary">Click here to go on register page</a>
</body>
</html>

        
