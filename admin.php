<?php
session_start();
ob_start();
// require "fonction.php";
require_once('db-functions.php');
?>

<section class="partie" id="admin">
    <h2>Update Princing</h2>
    <div id="adminprix">
        <?php
        $allPricing = selectAllPricing();
        $pricings = findAll($allPricing);
        foreach ($pricings as $pricing) {?>
            <div class="carteModif" id="carte<?=$pricing['id_pricing']?>">
                <!-- <form  action="traitemant.php?acion=update&id=<?=/*$pricing['id_pricing']*/?>" methode="post" class="formCarte" id="form<?=/*$pricing['id_pricing']*/?>"> -->
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
                        <input type="number" name="bandwidth" value="<?=$pricing['bandwidth_pricing']?>">
                    </div>
                    <div class="uneModif">
                        <label for="onlinespace">Onlinespace :</label>
                        <input type="number" name="onlinespace" value="<?=$pricing['onlinespace_pricing']?>">
                    </div>
                    <div class="uneModif">
                        <label>Support :</label>
                        <div class="radioHori">
                            <?php echo ($pricing['support_pricing']) ?
                                '<div> <input type="radio" name="support" id="sup_false" checked> <label for="support">No</label> </div>' .
                                '<div> <input type="radio" name="support" id="sup_true"> <label for="support">Yes</label> </div>' :
                                '<div> <input type="radio" name="support" id="sup_false"> <label for="support">No</label> </div>' .
                                '<div> <input type="radio" name="support" id="sup_true" checked> <label for="support">Yes</label> </div>' ; ?>
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
                                '<div> <input type="radio" name="hidden_fees" id="h_f_false" checked> <label for="hidden_fees">No</label> </div>' .
                                '<div> <input type="radio" name="hidden_fees" id="h_f_true"> <label for="hidden_fees">Yes</label> </div>' :
                                '<div> <input type="radio" name="hidden_fees" id="h_f_false"> <label for="hidden_fees">No</label> </div>' .
                                '<div> <input type="radio" name="hidden_fees" id="h_f_true" checked> <label for="hidden_fees">Yes</label> </div>' ; ?>
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

<?php
    $content = ob_get_clean();
    $titre="Admin Kukra";
    require "template.php";
?>

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