
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Exercise 2</title>
</head>
<body>
    <main class="container">
        <form action="submit.php" method="post">
            <div class="mb-3">
                <input type="text" class="form-control" name="name" placeholder="Name" required />
            </div>
            <button type="submit" name="send" class="btn btn-success">Envoi</button> &nbsp;&nbsp;&nbsp;&nbsp;
            <a href="index.php" class="btn btn-link">Retour</a>
        </form>
    </main>
</body>
</html>