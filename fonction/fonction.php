<?php
include("con.php");

    function select($table_name,$condition,$plus){
        $BDH=dbconnect();
            if($condition==""){
                 $condition="1";
            }

        $STH=$BDH -> prepare("SELECT * FROM $table_name WHERE $condition $plus");

        //$STH -> bindParam(1,$condition);

        $STH->execute();
        $STH->setFetchMode(PDO::FETCH_ASSOC);

        $valiny=[];
        while($row=$STH->fetch()){
            $valiny[]=$row;
        }
        return $valiny;

    }


//$values=array(val1,val2...valn);
    function insert($table_name,$colones,$values,$param){
        $BDH=dbconnect();
        $STH=$BDH -> prepare("INSERT INTO $table_name($colones) VALUES($param)");
        $STH ->execute($values);
    }
?>