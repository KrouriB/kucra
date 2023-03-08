<?php

function connexion(){
    try {
        $mysqlClient = new PDO('mysql:host=localhost;dbname=landing_page_brice;charset=utf8','root',null, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
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

function selectAllPricing(){
    $query = 'SELECT * FROM pricing';
    return $query;
}

function selectPricing(string $column){
    $query = 'SELECT $column FROM pricing';
    return $query;
}

// function update(array $table){
//     $query = "UPDATE pricing
//                 SET $table['nom_pricing'] = $_SESSION['pricing'][$_GET['id']]['name'],
//                     $table['prix_pricing'] =  $_SESSION['pricing'][$_GET['id']]['price'] ,
//                     $table['pourcentage_reduction_pricing'] =  $_SESSION['pricing'][$_GET['id']]['sale'] ,
//                     $table['bandwidth_pricing'] =  $_SESSION['pricing'][$_GET['id']]['bandwidth'] ,
//                     $table['onlinespace_pricing'] =  $_SESSION['pricing'][$_GET['id']]['onlinespace'] ,
//                     $table['support_pricing'] =  $_SESSION['pricing'][$_GET['id']]['support'] ,
//                     $table['domain_pricing'] =  $_SESSION['pricing'][$_GET['id']]['domain'] ,
//                     $table['hidden_fees_pricing'] =  $_SESSION['pricing'][$_GET['id']]['hidden_fees']";
//     return $query;
// }


?>