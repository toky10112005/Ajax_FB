<?php
    function dbconnect()
    {
        $host="localhost";
        $dbname="Ajax_FB";
        $user="root";
        $pass="P@ssData";
     try{
         $DBH=new PDO("mysql:host=$host;dbname=$dbname",$user,$pass);

         //gestion des erreurs
        $DBH->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_SILENT );
        

         return $DBH;
     }
    catch(PDExeption$e){
         echo $e->getMessage();
     }
    }
?>