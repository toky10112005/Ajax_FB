<?php
include("fonction.php");
session_start();
    $pub=$_GET['pub'];

// $conn = dbconnect();
// $sql="INSERT INTO publication (id_membre,contenu,auteur) VALUES ('$_SESSION[id]','$pub','$_SESSION[nom]')";

$table_name="publication";
$colonnes="id_membre,contenu,auteur";
$values = array($_SESSION['id'], $pub, $_SESSION['nom']);
$param="?,?,?";
insert($table_name,$colonnes,$values,$param);

// function requete($requete, $connexion){
//     return mysqli_query($connexion, $requete);
// }

// requete($sql, $conn);

$table_name2="publication";
$condition="";
$plus="ORDER BY id DESC";
$valiny=select($table_name2,$condition,$plus);

    // $sql2="SELECT * FROM publication  ORDER BY id DESC";

    // $resultat=mysqli_query($conn,$sql2);
    // $valiny=[];

    // while($row=mysqli_fetch_assoc($resultat)){
    //     $valiny[]=$row;
    // }

    echo json_encode($valiny);

?>