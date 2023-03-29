<?php
    $localhost = "localhost";
    $username = "root";
    $password = "";
    $dbname = "recommendation";
    
    $con = new mysqli($localhost,$username,$password,$dbname);
    if(!$con ){
        echo "DataBase Is Not Connected!";
    }
    session_start();

?>