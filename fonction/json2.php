<?php
include("fonction.php");
session_start();
    $coms=$_GET['coms'];

$conn = dbconnect();

    $table_name="commentaire";
    $colonnes="id_pub,id_membre,contenu,auteur";
    $values="'$_SESSION[id_pub]','$_SESSION[id]','$coms','$_SESSION[nom]'";
//$sql="INSERT INTO commentaire (id_pub,id_membre,contenu,auteur) VALUES ('$_SESSION[id]','$_SESSION[id]','$coms','$_SESSION[nom]')";
    
insert($table_name,$colonnes,$values);

   $valiny=[];
   $anarana="commentaire";
   $condition="id_pub='$_SESSION[id_pub]'";

   $valiny=select($anarana,$condition);

    echo json_encode($valiny);

mysqli_close($conn);
?>