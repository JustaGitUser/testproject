<html>
    <head>
        <title>My first PHP Website</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light p-3 mb-2 bg-info text-white">
            <span class="p-3 mb-2 bg-info text-white"><h2>Login page</h2></span>

            <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Click here to go back<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="register.php">go to register</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="show.delete.php">show table</a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <lable></lable>
                    <button class="btn btn-outline-success my-2 my-sm-0 p-3 mb-2 bg-danger text-white" type="submit">logout</button>
                </form>
            </div>
        </nav>

        <form action="checklogin.php" method="post">
            <div class="form-row align-items-center">
                <div class="col-auto">
                    <label class="sr-only" for="inlineFormInput">name</label>
                    <input type="text" class="form-control mb-2" id="inlineFormInput" name="username" placeholder="enter your name">
                </div>
                <div class="col-auto">
                    <label class="sr-only" for="inlineFormInputGroup">password</label>
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text">pass</div>
                        </div>
                        <input type="password" class="form-control" id="inlineFormInputGroup" name="password" placeholder="enter your password">
                    </div>
                </div>
                <div class="col-auto">
                    <button type="submit" class="btn btn-primary mb-2">login</button>
                </div>
            </div>
        </form>
    </body>
</html>
