<!-- ?php
    session_start();
include("../fonction/fonction.php");
    if($_SESSION['nom'] == "tsisy" || $_SESSION['pwd'] == "tsisy"){
        header("Location: index.php?error=1");
        session_destroy();
        exit();
    }
$nom_table="publication";
$condition="";
$plus="ORDER BY id DESC";
$valiny=select($nom_table,$condition,$plus);

?> -->

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aff</title>
    <script type="text/javascript" src="../JS/publication.js"></script>
</head>
<body>
    <h1>Bienvenue, ?= $_SESSION['nom']?></h1>

    <form id="pubForm">
        <input type="text" name="pub" id="pub">
        <input type="button" value="Publier" onclick="submitForm()">
    </form>
    <div id="affichage">
        ?php
           foreach($valiny as $val){
                ?>
                <div>
                    <p>?= $val['contenu']?></p>
                    <p>?= $val['date_pub']?></p>
                   <a href="../fonction/traitement_coms.php?id_pub=?= $val['id']?>"><button>Valider</button></a>
                </div>
             ?php   
           }
        ?>
    </div>
   
</body>
</html> -->
<?php 

session_start();
    include("../fonction/fonction.php");
 if($_SESSION['nom'] == "tsisy" || $_SESSION['pwd'] == "tsisy"){
        header("Location: index.php?error=1");
        session_destroy();
        exit();
    }

    $nom_table="publication";
    $condition="";
    $plus="ORDER BY id DESC";
    $valiny=select($nom_table,$condition,$plus);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>H</title>
</head>
<body>
    <h1>Bienvenue,<?= $_SESSION['nom']?></h1>

    <form id="pubForm">
        <input type="text" name="pub" id="pub">
        <input type="button" value="Publier" onclick="submitForm()">
    </form>

     <div id="affichage">
        <?php
           foreach($valiny as $val){
                ?>
                <div>
                    <p><?= $val['contenu']?></p>
                    <p><?= $val['date_pub']?></p>
                   <a href="../fonction/traitement_coms.php?id_pub=<?= $val['id']?>"><button>Valider</button></a>
                </div>
             <?php   
           }
        ?>
    </div>
             <script type="text/javascript" src="../JS/publication.js"></script>
</body>
</html>