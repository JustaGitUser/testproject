
<html>
    <head>
        <title>My first PHP Website</title>
    </head>
    <body>
        <h2>Registration Page</h2>
        <a href="index.php">Click here to go back</a><br/><br/>
        <form action="register.php" method="POST">
            Enter Username: <input type="text" name="username" required="required" /> <br/>
            Enter password: <input type="password" name="password" required="required" /> <br/>
           <input type="submit" value="Register"/>
        </form>
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
if (!$link) {
    die('Could not connect: ' . mysqli_error());
}
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