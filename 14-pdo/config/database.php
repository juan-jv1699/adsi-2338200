<?php
    try {
        $conex = new PDO("mysql:host=$host;dbname=$name_db",$user,$key);
        $conex->exec('set names utf8');
        echo "Connection Succesfully!";
    } catch (PDOException $e) {
        echo "Connection Error".$e->getMessage();
    }