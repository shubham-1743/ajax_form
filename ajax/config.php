<?php
    $severname = "localhost";
    $username = "root";
    $password = "";
    $database = "ajax";

    $arr = new mysqli($severname, $username, $password, $database);

    if($arr->connect_error){
        die("Connection Faild" . $arr->connect_error);
    }
    // echo "Connection Successfully";
?>