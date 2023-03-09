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

function updateFunction($name,$price,$sale,$bandwidth,$onlinespace,$support,$domain,$hidden_fees,$id){
    $query =   'UPDATE pricing
                SET nom_pricing = :name,
                    prix_pricing = :price,
                    pourcentage_reduction_pricing = :sale,
                    bandwidth_pricing = :bandwidth,
                    onlinespace_pricing = :onlinespace,
                    support_pricing = :support,
                    domain_pricing = :domain,
                    hidden_fees_pricing = :hidden_fees
                WHERE id_pricing = :id';
    $elementStatement = connexion()->prepare($query);
    $elementStatement->execute([
        "name" => $name,
        "price" => $price,
        "sale" => $sale,
        "bandwidth" => $bandwidth,
        "onlinespace" => $onlinespace,
        "support" => $support,
        "domain" => $domain,
        "hidden_fees" => $hidden_fees,
        "id" => $id,
    ]);
}

function addCompte($id){
    $query =   'UPDATE pricing
                SET compte_pricing = compte_pricing + 1
                WHERE id_pricing = :id';
    $elementStatement = connexion()->prepare($query);
    $elementStatement->execute(["id" => $id]);
}

function ajoutEmail($email){
    $query =   'INSERT INTO email (adresse_email)
                VALUES (:email)';
    $elementStatement = connexion()->prepare($query);
    $elementStatement->execute(["email" => $email]);
}

function getMessages(){
    if(isset( $_SESSION["message"])&& !empty( $_SESSION["message"])){
        $html = "<div id='message'><p>". $_SESSION["message"]."</p></div>";
        unset( $_SESSION["message"]);
        return $html;
    }
    return false;
}

?>