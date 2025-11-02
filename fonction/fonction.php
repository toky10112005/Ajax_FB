<?php
include("con.php");
    function select($table_name,$condition){
        $conn=dbconnect();
        if($condition==""){
            $condition="1";
        }
        $sql="SELECT * FROM $table_name WHERE $condition";
        $result=mysqli_query($conn,$sql);
        $valiny=[];
        while($row=mysqli_fetch_assoc($result)){
            $valiny[]=$row;
        }
      //  mysqli_close($conn);
        return $valiny;
    }


    function insert($table_name,$colonnes,$values){
        $conn=dbconnect();
        $sql="INSERT INTO $table_name ($colonnes) VALUES ($values)";
        mysqli_query($conn,$sql);
        //mysqli_close($conn);
    }
?>