<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="/assets/favicon/favicon.ico">
    <link rel="shortcut icon" href="https://media.flaticon.com/img/favicon.ico">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/assets/bootstrap_4_1_3/css/bootstrap.min.css">

    <title>Log in !</title>
</head>
<body>
<div class="container mt-5">
    <div class="row">
        <div class="col-sm-3"></div>
                <div class="col-sm-6">
                    <form method="POST" action="">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address :</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password :</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                        </div>

                        <?php if (isset($errors)) { ?>
                            <div class="alert alert-danger" role="alert">
                                <?php echo  $errors; ?>
                            </div>
                        <?php } ?>

                        <?php if (isset($success)) { ?>
                            <div class="alert alert-success" role="alert">
                                <?php echo  $success; ?>
                            </div>
                        <?php } ?>

                        <button type="submit" class="btn btn-primary">Log in</button>
                    </form>
                    <a href="signin.php">Sign in</a>
                    <a href="#">Forgot your password ?</a>
                </div>
        <div class="col-sm-3"></div>
    </div>
</div>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="/assets/jquery/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="/assets/bootstrap_4_1_3/js/bootstrap.min.js"></script>
</body>
</html>