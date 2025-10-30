<?php
    include("con.php");
    session_start();

    $nom=$_POST['nom'];
    $pwd=$_POST['pwd'];

    //function login($nom,$pwd){
        $sql="SELECT * FROM membre WHERE Nom='$nom' AND Pwd='$pwd'";
        $result=mysqli_query(dbconnect(),$sql);
        $valiny=[];

        if(mysqli_num_rows($result) > 0){
            $row=mysqli_fecth_assoc($result);
            $valiny[]=$row;
            $_SESSION['nom']=$valiny['Nom'];
            $_SESSION['pwd']=$valiny['Pwd'];
            
            //header('Location:../Pages/aff.php');
        }
        else{
            
        }

  //  }

?>