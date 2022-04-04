<?php
    function connect(){
        return new PDO("mysql:host=localhost;dbname=dbdev", 'root', 'ppc123', [
           PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ 
        ]);
    }
?>