<?php
session_start();
include("con.php");

$nom = $_POST['nom'];
$pwd = $_POST['pwd'];

$sql = "SELECT * FROM membre WHERE Nom='$nom' AND Pwd='$pwd'";
$result = mysqli_query(dbconnect(), $sql);

if(mysqli_num_rows($result) > 0){
    $row = mysqli_fetch_assoc($result); 
    
    $_SESSION['nom'] = $row['Nom']; 
    $_SESSION['pwd'] = $row['Pwd'];
    
    echo "Connexion réussie"; 
} else {
    
    $_SESSION['nom'] = "tsisy";
    $_SESSION['pwd'] = "tsisy";

    echo "Identifiants incorrects"; 
}
?>