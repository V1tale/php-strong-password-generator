<?php
include __DIR__ . "/functions.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <!-- STYLE -->
    <link rel="stylesheet" href=" ./css/style.css">
</head>
<body>
    <main>
        <div class="container">
            <form action="index.php" method="GET">
                <label class="" for="get-length">Di quanti caratteri vuoi che sia lunga la tua password?:</label>
                <input  class="form-control" type="number" id="get-length" name="number">
                <button class="btn btn-primary">Invia</button>
            </form>
            <div class="result">
                <h2>Ecco la tua password: <?php echo $randomNumbers ?></h2>
                <?php echo $alert ?>
            </div>
        </div>
    </main>
</body>
</html>