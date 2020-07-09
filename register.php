
<html>
    <head>
        <title>My first PHP Website</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="p-3 mb-2 bg-info text-white"><h1>
                <small class="text-muted"><span class="text-dark">you can</span></small>
                register
                <small class="text-muted"><span class="text-dark">here</span></small>
            </h1></div>

<!--        <form action="register.php" method="POST">-->
<!--            Enter Username: <input type="text" name="username" required="required" /> <br/>-->
<!--            Enter password: <input type="password" name="password" required="required" /> <br/>-->
<!--           <input type="submit" value="Register"/>-->
<!--        </form>-->

        <form action="register.php" method="POST">
            <div class="form-row align-items-center">
                <div class="col-auto">
                    <label class="sr-only" for="inlineFormInput">username</label>
                    <input type="text" class="form-control mb-2" id="inlineFormInput" placeholder="your name" name="username" required="required">
                </div>
                <div class="col-auto">
                    <label class="sr-only" for="inlineFormInputGroup">password</label>
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text">pass</div>
                        </div>
                        <input type="password" name="password" required="required" class="form-control" id="inlineFormInputGroup" placeholder="password">
                    </div>
                </div>
                <div class="col-auto">
                    <button type="submit" class="btn btn-primary mb-2">register</button>
                </div>
            </div>
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

        $query = "SELECT * FROM users";
        $result = mysqli_query($link, $query);
        while( $row = mysqli_fetch_assoc($result) ) {
            $table_users = $row['username']; // the first username row is passed on to $table_users, and so on until the query is finished
		    if($username == $table_users) // checks if there are any matching fields
		    {
		        $bool=false;
                show_alert();
                break;
		    }
        }
        if ($bool) {
            $sql = "INSERT INTO users (username,password) VALUES ('$username','$userpassword')";
            mysqli_query($link, $sql);
        }

//        $sql = "INSERT INTO users (username,password) VALUES ('$username','$userpassword')";

//        if (mysqli_query($link, $sql)) {
//            echo "New record created successfully";
//        } else {
//            echo "Error: " . $sql . "<br>" . mysqli_error($link);
        }
//        mysqli_close($link);


    function show_alert (){
        Print '<div class="alert alert-warning alert-dismissible fade show" role="alert">';
        Print '<strong>Holy guacamole!</strong> this name is already taken.';
        Print '<button type="button" class="close" data-dismiss="alert" aria-label="Close">';
        Print '<span aria-hidden="true">&times;</span>';
        Print '</button>';
        Print '</div>';
    }
?>