<?php
session_start();

if (isset($_GET['action'])){
    switch($_GET['action']){
        case "update":
            if (isset($_POST['submit'])) {
                $name = filter_input(INPUT_POST, "name", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
                $price = filter_input(INPUT_POST, "price", FILTER_VALIDATE_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
                $sale = filter_input(INPUT_POST, "sale", FILTER_VALIDATE_INT);
                $bandwidth = filter_input(INPUT_POST, "bandwidth", FILTER_VALIDATE_INT);
                $onlinespace = filter_input(INPUT_POST, "onlinespace", FILTER_VALIDATE_INT);
                $support = filter_input(INPUT_POST, "support", FILTER_VALIDATE_INT);
                $domain = filter_input(INPUT_POST, "domain", FILTER_VALIDATE_INT);
                $hidden_fees = filter_input(INPUT_POST, "hidden_fees", FILTER_VALIDATE_INT);
                if($name && $price && $sale && $bandwidth && $onlinespace && $support && $domain && $hidden_fees){
                }
            }
            break;
    }
}
header("Location:index.php");
die;