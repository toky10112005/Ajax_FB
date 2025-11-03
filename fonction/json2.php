<?php
include("fonction.php");
session_start();
    $coms=$_GET['coms'];



    $table_name="commentaire";
    $colonnes="id_pub,id_membre,contenu,auteur";
    $values=array($_SESSION['id_pub'],$_SESSION['id'],$coms,$_SESSION['nom']);
//$sql="INSERT INTO commentaire (id_pub,id_membre,contenu,auteur) VALUES ('$_SESSION[id]','$_SESSION[id]','$coms','$_SESSION[nom]')";
    $param="?,?,?,?";
insert($table_name,$colonnes,$values,$param);

  
   $anarana="commentaire";
   $condition="id_pub='$_SESSION[id_pub]'";
    $plus="";
   $valiny=select($anarana,$condition,$plus);

    echo json_encode($valiny);


?>