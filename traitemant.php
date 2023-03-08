<?php
session_start();
if (isset($_GET['action'])){
    switch($_GET['action']){
        case "update":
            if (isset($_POST['submit'])) {

            }
            break;
    }
}
header("Location:index.php");
die;