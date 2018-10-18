<?php

require ('../app/connexion.php');

$error = null;
$success = null;

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (!empty($_POST['firstName']) && !empty($_POST['lastName']) && !empty($_POST['email'])
        && !empty($_POST['password']) && !empty($_POST['passwordConfirm'])) {
        if (strlen($_POST['firstName']) <= 32 && strlen($_POST['firstName']) !== 0) {
            if (strlen($_POST['lastName']) <= 32 && strlen($_POST['lastName']) !== 0) {
                $success = "ok";
            } else {
                $error = "Last name should not be empty and must be under 32 characters.";
            }
        } else {
            $error = "First name should not be empty and must be under 32 characters.";
        }
    } else {
        $error = "All the inputs should be filled.";
    }

} else {
    $error = null;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/assets/bootstrap_4_1_3/css/bootstrap.min.css">

    <title>Log in !</title>
</head>
<body>
<div class="container mt-5">
    <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-6">
            <form method="post" action="">
                <div class="form-group">
                    <label for="firstName">First name :</label>
                    <input type="text" class="form-control" name="firstName" id="firstName" placeholder="Enter first name">
                </div>
                <div class="form-group">
                    <label for="lastName">Last name :</label>
                    <input type="text" class="form-control" name="lastName" id="lastName" placeholder="Enter last name">
                </div>
                <div class="form-group">
                    <label for="email">Email address :</label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="Enter email">
                </div>
                <div class="form-group">
                    <label for="password">Password :</label>
                    <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                </div>
                <div class="form-group">
                    <label for="passwordConfirm">Confirm your password :</label>
                    <input type="password" class="form-control" name="passwordConfirm" id="passwordConfirm" placeholder="Confirm your password">
                </div>

                <?php if (isset($error)) { ?>
                    <div class="alert alert-danger" role="alert">
                        <?php echo  $error; ?>
                    </div>
                <?php } ?>

                <?php if (isset($success)) { ?>
                    <div class="alert alert-success" role="alert">
                        <?php echo  $success; ?>
                    </div>
                <?php } ?>

                <button type="submit" name="signin" class="btn btn-primary">Sign in</button>
            </form>
            <a href="index.php">Log in</a>
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