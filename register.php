
<html>
    <head>
        <title>My first PHP Website</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    </head>
    <body>
        <h2>Registration Page</h2>
        <form action="register.php" method="POST">
            Enter Username: <input type="text" name="username" required="required" /> <br/>
            Enter password: <input type="password" name="password" required="required" /> <br/>
           <input type="submit" value="Register"/>
        </form>

        <nav class="navbar navbar-light bg-light">
            <form class="form-inline">
                <a href="index.php" class="btn btn-outline-success">Click here to go back</a>
                <a href="show.delete.php" class="btn btn-sm btn-outline-secondary">Click here to see the table</a>
            </form>
        </nav>

    </body>
</html>

<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $username = $_POST['username'];
    $userpassword = $_POST['password'];
    $bool = true;

    $host = 'localhost'; //имя хоста, на локальном компьютере это localhost
    $user = 'root'; //имя пользователя, по умолчанию это root
    $password = ''; //пароль, по умолчанию пустой
    $db_name = 'first_db'; //имя базы данных

    $link = mysqli_connect('localhost', 'root', '','first_db');
        if (!$link) { die('Could not connect: ' . mysqli_error()); }
    echo 'Connected successfully';

    $sql = "INSERT INTO users (username,password) VALUES ('$username','$userpassword')";

        if (mysqli_query($link, $sql)) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($link);
        }
        mysqli_close($link);

}
?>