<?php
    session_start();
    $username = ($_POST['username']);
    $userpassword = ($_POST['password']);

    $link = mysqli_connect('localhost', 'root', '','first_db');
    $query = mysqli_query($link,"SELECT * from users WHERE username='$username'"); //Query the users table if there are matching rows equal to $username
    $exists = mysqli_num_rows($query); //Checks if username exists
    $table_users = "";
    $table_password = "";
    if($exists > 0) //IF there are no returning rows or no existing username
    {
        ///////////////////
        if ($row = mysqli_fetch_assoc($query)) {
            $table_users = $row['username']; // the first username row is passed on to $table_users, and so on until the query is finished
            $table_password = $row['password']; // the first password row is passed on to $table_users, and so on until the query is finished

            if (($username == $table_users) && ($userpassword == $table_password)) // checks if there are any matching fields
            {
                if ($userpassword == $table_password) {
                    $_SESSION['user'] = $username; //set the username in a session. This serves as a global variable
                    header("location: index.php"); // redirects the user to the authenticated home page
                }
            }
            else {
                Print '<script>alert("Incorrect Password!");</script>'; //Prompts the user
                Print '<script>window.location.assign("login.php");</script>'; // redirects to login.php
            }
        }
    }
    else {
        Print '<script>alert("Incorrect Username!");</script>'; //Prompts the user
        Print '<script>window.location.assign("login.php");</script>'; // redirects to login.php
    }

        //////////////////
//        while($row = mysqli_fetch_assoc($query)) //display all rows from query
//        {
//            $table_users = $row['username']; // the first username row is passed on to $table_users, and so on until the query is finished
//            $table_password = $row['password']; // the first password row is passed on to $table_users, and so on until the query is finished
//        }
//        if(($username == $table_users) && ($userpassword == $table_password)) // checks if there are any matching fields
//        {
//            if($userpassword == $table_password)
//            {
//                $_SESSION['user'] = $username; //set the username in a session. This serves as a global variable
//                header("location: home.php"); // redirects the user to the authenticated home page
//            }
//        }
//        else
//        {
//            Print '<script>alert("Incorrect Password!");</script>'; //Prompts the user
//            Print '<script>window.location.assign("login.php");</script>'; // redirects to login.php
//        }
//    }
//    else
//    {
//        Print '<script>alert("Incorrect Username!");</script>'; //Prompts the user
//        Print '<script>window.location.assign("login.php");</script>'; // redirects to login.php
//    }
?>
