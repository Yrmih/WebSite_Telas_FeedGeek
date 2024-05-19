<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> <!-- carrega como padrao do edge -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- responsividade -->
    <title>User login system</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/main.css">
    <link rel="shortcut icon" href="./img/favicon-16x16.png" type="image/x-icon">
    <script defer src="./js/script.js"></script>
    <style>
        /* yrmih ian: aqui eu alterei o css */
        .form-wrap {
            background-color: #ffffff;
            padding: 20px;
        }

        .form-wrap h1 {
            color: #000000;
        }

        .form-wrap p {
            color: #6c757d;
        }

        .form-wrap input[type="text"],
        .form-wrap input[type="password"] {
            border-color: #ced4da;
        }

        .form-wrap input[type="text"]:focus,
        .form-wrap input[type="password"]:focus {
            border-color: #4dabf7;
            box-shadow: 0 0 0 0.25rem rgba(0, 123, 255, 0.25);
        }

        .text-danger {
            color: #dc3545;
        }

        .form-check-input:checked {
            background-color: #007bff;
            border-color: #007bff;
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row min-vh-100 justify-content-center align-items-center">
            <div class="col-lg-5">
                <?php
                if (!empty($login_err)) {
                    echo "<div class='alert alert-danger'>" . $login_err . "</div>";
                }
                ?>
                <div class="form-wrap border rounded p-4">
                    <h1>Log In</h1>
                    <p>Please login to continue</p>
                    <!-- form starts here -->
                    <form action="login.php" method="post"> <!-- Valida login na mesma pagina -->
                        <div class="mb-3">
                            <label for="user_login" class="form-label">Email or username</label>
                            <input type="text" class="form-control" name="user_login" id="user_login" value="<?= $user_login; ?>">
                            <small class="text-danger"><?= $user_login_err; ?></small>
                        </div>

                        <div class="mb-2">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" name="user_password" id="password">
                            <small class="text-danger"><?= $user_password_err; ?></small>
                        </div>

                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="togglePassword">
                            <label for="togglePassword" class="form-check-label">Show Password</label>
                        </div>

                        <div class="mb-3">
                            <input type="submit" class="btn btn-primary form-control" name="submit" value="Entrar">
                        </div>

                        <p class="mb-0">Don't have an account ? <a href="./register.php">Sign Up</a></p>
                    </form>
                    <!-- form ends here -->
                </div>
            </div>
        </div>
    </div>
</body>

</html>
