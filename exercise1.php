<?php
// Start the session
session_start();

// Set session variables
$_SESSION["username"] = 'Yapeaud';
$_SESSION["password"] = 'A_zari_A';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>exercise 1</title>
</head>

<body>
    <h2 class="text-center">Enter Username and Password</h2>
    <div class="container form-signin">
        <?php
        $msg = '';

        if (isset($_POST['login']) && !empty($_POST['username']) && !empty($_POST['password'])) {
            if ($_POST['username'] ==  $_SESSION["username"] && $_POST['password'] ==  $_SESSION["password"]) {

                echo 'You have entered valid use name and password';
            } else {
                $msg = 'Wrong username or password';
            }
        }
        if (isset($_POST['logout'])) {

            unset($_SESSION["username"]);
            unset($_SESSION["password"]);

            echo 'You have cleaned session';
        }
        ?>
    </div>
    <main class="container">
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
            <h4 class="form-signin-heading"><?php echo $msg; ?></h4>
            <div class="mb-3">
                <input type="text" class="form-control" name="username" placeholder="username" required />
            </div>
            <div class="mb-3">
                <input type="password" class="form-control" name="password" placeholder="password" required />
            </div>
            <button type="submit" name="login" class="btn btn-success">Login</button>
            <button type="submit" name="logout" class="btn btn-link text-danger text-decoration-none">Logout</button>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="index.php" class="btn btn-link">Retour</a>
        </form>
    </main>
</body>

</html>