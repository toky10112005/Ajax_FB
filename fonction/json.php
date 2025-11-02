<?php
include("con.php");
session_start();
    $pub=$_GET['pub'];

    error_log($pub);
$conn = dbconnect();
$sql="INSERT INTO publication (id_membre,contenu,auteur) VALUES ('$_SESSION[id]','$pub','$_SESSION[nom]')";

function requete($requete, $connexion){
    return mysqli_query($connexion, $requete);
}

requete($sql, $conn);

    $sql2="SELECT * FROM publication WHERE id_membre='$_SESSION[id]' ORDER BY id DESC";

    $resultat=mysqli_query($conn,$sql2);
    $valiny=[];

    while($row=mysqli_fetch_assoc($resultat)){
        $valiny[]=$row;
    }

    echo json_encode($valiny);

mysqli_close($conn);
?>