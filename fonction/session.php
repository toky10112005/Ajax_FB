<?php
session_start();
include("con.php");

$nom = $_POST['nom'];
$pwd = $_POST['pwd'];
try{
    $DBH=dbconnect();
  $STH = $DBH -> prepare("SELECT * FROM membre WHERE Nom=? AND Pwd=?");

    $STH->bindParam(1, $nom);
    $STH->bindParam(2, $pwd);

  $STH->execute();
  $STH->setFetchMode(PDO::FETCH_ASSOC);

  $row=$STH->fetch();

    if($row){
      $_SESSION['nom'] = $row['Nom'];
      $_SESSION['id'] = $row['id'];
    }
    else{
      $_SESSION['nom'] = "tsisy";
      $_SESSION['pwd'] = "tsisy";
    }
  }
  catch(PDOException $e) {
    error_log("Erreur de connexion: " . $e->getMessage());
    $_SESSION['login_error'] = "Erreur technique";
    echo "error";
}


?>