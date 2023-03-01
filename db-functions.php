<?php

function connexion(){
    try {
        $mysqlClient = new PDO('mysql:host=localhost;dbname=landing_page;charset=utf8','root',null, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
        return $mysqlClient;
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }
}

function find($query){
    $elementStatement = connexion()->prepare($query);
    $elementStatement->execute();
    $element = $elementStatement->fetch();
    return $element;
}

function findAll($query){
    $tableauStatement = connexion()->prepare($query);
    $tableauStatement->execute();
    $tableau = $tableauStatement->fetchAll();
    return $tableau;
}