<?php
session_start();
require_once "db-functions.php";

if(isset($_GET['action'])){
    switch($_GET['action']){
        case "update":
            if(isset($_POST['submit'.$_GET['id']])) {

                $name = filter_input(INPUT_POST, "name", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
                $price = filter_input(INPUT_POST, "price", FILTER_VALIDATE_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
                $sale = filter_input(INPUT_POST, "sale", FILTER_SANITIZE_NUMBER_INT);// utiliser  FILTER_SANITIZE_NUMBER_INT et non FILTER_VALIDATE_INT sinon ne fonctionne pas sur sale
                $bandwidth = filter_input(INPUT_POST, "bandwidth", FILTER_SANITIZE_NUMBER_INT);
                $onlinespace = filter_input(INPUT_POST, "onlinespace", FILTER_SANITIZE_NUMBER_INT);
                $support = filter_input(INPUT_POST, "support", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
                $domain = filter_input(INPUT_POST, "domain", FILTER_SANITIZE_NUMBER_INT);
                $hidden_fees = filter_input(INPUT_POST, "hidden_fees", FILTER_SANITIZE_FULL_SPECIAL_CHARS);

                if($name && ($price !== false && $price != null) && ($sale !== false && $sale != null) && ($bandwidth !== false && $bandwidth != null) && ($onlinespace !== false && $onlinespace != null) && ($support !== false && $support != null) && ($domain !== false && $domain != null) && ($hidden_fees !== false && $hidden_fees != null)) {
                    updateFunction($name,$price,$sale,$bandwidth,$onlinespace,$support,$domain,$hidden_fees,$_GET['id']);
                }
            }
            break;
        case "add":
            // if(isset($_GET['id']) && )
    }
}
header("Location:index.php");
die;