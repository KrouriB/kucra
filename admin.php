<?php
require_once('db-functions.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/50e50e8630.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
    <title>Admin Kucra</title>
</head>

<body>
    <section class="partie" id="admin">
        <h2>Update Princing</h2>
        <div id="adminprix">
            <?php
            $allPricing = selectAllPricing();
            $pricings = findAll($allPricing);
            foreach ($pricings as $pricing) {?>
                <div class="carteModif" id="carte<?=$pricing['id_pricing']?>">
                    <form class="formCarte" id="form<?=$pricing['id_pricing']?>">
                        <div class="uneModif">
                            <label for="name">Name :</label>
                            <input type="text" name="namesale" value="<?=$pricing['nom_pricing']?>">
                        </div>
                        <div class="uneModif">
                            <label for="price">Price :</label>
                            <input type="number" name="price" value="<?=$pricing['prix_pricing']?>">
                        </div>
                        <div class="uneModif">
                            <label for="sale">Sale :</label>
                            <input type="number" name="sale" value="<?=$pricing['pourcentage_reduction_pricing']?>">
                        </div>
                        <div class="uneModif">
                            <label for="bandwidth">Bandwidth :</label>
                            <input type="number" name="bandwidth" value="<?=$pricing['bandwidth_pricing']?>'">
                        </div>
                        <div class="uneModif">
                            <label for="onlinespace">Onlinespace :</label>
                            <input type="number" name="onlinespace" value="<?=$pricing['onlinespace_pricing']?>">
                        </div>
                        <div class="uneModif">
                            <label>Support :</label>
                            <div class="radioHori">
                                <?php echo ($pricing['support_pricing']) ?
                                    '<div> <input type="radio" name="sup_false" id="sup_false" checked> <label for="sup_false">No</label> </div>' .
                                    '<div> <input type="radio" name="sup_true" id="sup_true"> <label for="sup_true">Yes</label> </div>' :
                                    '<div> <input type="radio" name="sup_false" id="sup_false"> <label for="sup_false">No</label> </div>' .
                                    '<div> <input type="radio" name="sup_true" id="sup_true" checked> <label for="sup_true">Yes</label> </div>' ; ?>
                            </div>
                        </div>
                        <div class="uneModif">
                            <label for="">Domain :</label>
                            <input type="number" name="" value="<?=$pricing['domain_pricing']?>">
                        </div>
                        <div class="uneModif">
                            <label>Hidden Fees :</label>
                            <div class="radioHori">
                                <?php echo ($pricing['hidden_fees_pricing']) ?
                                    '<div> <input type="radio" name="" id="h_f_false" checked> <label for"h_f_false">No</label> </div>' .
                                    '<div> <input type="radio" name="" id="h_f_true"> <label for"h_f_true">Yes</label> </div>' :
                                    '<div> <input type="radio" name="" id="h_f_false"> <label for"h_f_false">No</label> </div>' .
                                    '<div> <input type="radio" name="" id="h_f_true" checked> <label for"h_f_true">Yes</label> </div>' ; ?>
                            </div>
                        </div>
                        <input type="submit" class="submitBtn" name="submit<?=$pricing['id_pricing']?>" value="Update">
                    </form>
                </div>
            <?php
            }
            ?>
        </div>
    </section>
</body>
<!-- <div class="carteModif" id="carteG">

    </div>
    <div class="carteModif" id="carteM">

    </div>
    <div class="carteModif" id="carteD">

    </div> 

<div class="uneModif"><label></label><input></div>
<div class="uneModif"><label></label><input></div>
<div class="uneModif"><label></label><input></div>
<div class="uneModif"><label></label><input></div>
<div class="uneModif"><label></label><input></div>
<div class="uneModif"><label></label><input></div>
<div class="uneModif"><label></label><input></div>
<div class="uneModif"><label></label><input></div>
<input type="submit">

-->
<!-- UPDATE pricing SET -->