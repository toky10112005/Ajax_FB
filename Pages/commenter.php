<?php
    include("../fonction/fonction.php");
    session_start();
    $table="publication";
    $condition="id='$_SESSION[id_pub]'";
    $pub=select($table,$condition);    
    
   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>commentaire</title>
    <script type="text/javascript" src="../JS/commentaire.js"></script>
</head>
<body>
    <p><strong><?= $pub['0']['contenu']?></strong>,publier par <?= $pub['0']['auteur']?></p>


    <form id="myForm">
        <input type="text" name="coms" id="coms">
        <input type="button" value="Valider" onclick="submitForm()">
    </form>

    <div id="affichage"></div>
</body>
</html>