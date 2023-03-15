<?php
session_start();
require_once "db-functions.php";

if (isset($_GET['action'])) {
    switch ($_GET['action']) {
        case "update":
            if (isset($_POST['submit' . $_GET['id']])) {

                $name = filter_input(INPUT_POST, "name", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
                $price = filter_input(INPUT_POST, "price", FILTER_VALIDATE_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
                $sale = filter_input(INPUT_POST, "sale", FILTER_SANITIZE_NUMBER_INT); // utiliser  FILTER_SANITIZE_NUMBER_INT et non FILTER_VALIDATE_INT sinon ne fonctionne pas sur sale
                $bandwidth = filter_input(INPUT_POST, "bandwidth", FILTER_SANITIZE_NUMBER_INT);
                $onlinespace = filter_input(INPUT_POST, "onlinespace", FILTER_SANITIZE_NUMBER_INT);
                $support = filter_input(INPUT_POST, "support", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
                $domain = filter_input(INPUT_POST, "domain", FILTER_SANITIZE_NUMBER_INT);
                $hidden_fees = filter_input(INPUT_POST, "hidden_fees", FILTER_SANITIZE_FULL_SPECIAL_CHARS);

                if ($name && ($price !== false && $price != null) && ($sale !== false && $sale != null) && ($bandwidth !== false && $bandwidth != null) && ($onlinespace !== false && $onlinespace != null) && ($support !== false && $support != null) && ($domain !== false && $domain != null) && ($hidden_fees !== false && $hidden_fees != null)) {
                    updateFunction($name, $price, $sale, $bandwidth, $onlinespace, $support, $domain, $hidden_fees, $_GET['id']);
                }
            }
            header("Location:admin.php");
            die;
        case "add":
            if (isset($_GET['id'])) {
                $pricings = findAll(selectAllPricing());
                addCompte($_GET['id']);
                $_SESSION['message'] = "Un abonnement " . $pricings[$_GET['id']]['nom_pricing'] . " a bien été ajouté";
                header("Location:index.php#n7");
                die();
            }
            break;
        case "subscribe":
            if (isset($_POST['emailSubmit'])) {
                $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
                ajoutEmail($email);
                $_SESSION['message'] = "Votre email " . $email . " a bien été ajouté";
            }
            break;
        case "deleteCompte":
            if (isset($_GET['id'])) {
                $pricings = findAll(selectAllPricing());
                viderCompte($_GET['id']);
                header("Location:admin.php");
                die;
            }
            break;
        case "viderEmail":
            viderBDDemail();
            break;
    }
}
header("Location:index.php");
die;
