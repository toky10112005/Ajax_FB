<?php
    session_start();

    if($_SESSION['nom'] == "tsisy" || $SESSION['pwd'] == "tsisy"){
        header("Location: index.php?error=1");
        session_destroy();
        exit();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aff</title>
</head>
<body>
    <h1><?= $_SESSION['nom']?></h1>
    <h1><?= $_SESSION['pwd']?></h1>
</body>
</html>