<?php
    session_start();

    if($_SESSION['nom'] == "tsisy" || $_SESSION['pwd'] == "tsisy"){
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
    <script type="text/javascript" src="../JS/publication.js"></script>
</head>
<body>
    <h1>Bienvenue, <?= $_SESSION['nom']?></h1>

    <form id="pubForm">
        <input type="text" name="pub" id="pub">
        <input type="button" value="Publier" onclick="submitForm()">
    </form>
    <div id="affichage"></div>
   
</body>
</html>