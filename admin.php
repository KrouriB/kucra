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
            $allPricing = 'SELECT * FROM pricing';
			$pricings = findAll($allPricing);
			foreach ($pricings as $pricing){
				$display = '';
				$display .= '<div class="carteModif" id="carte'.$pricing['id_pricing'].'"><form class="formCarte" id="form'.$pricing['id_pricing'].'">';
                $display .= '<div class="uneModif"><label>Name :</label><input type="text" value="'.$pricing['nom_pricing'].'"></div>';
                $display .= '<div class="uneModif"><label>Price :</label><input type="number" value="'.$pricing['prix_pricing'].'"></div>';
                $display .= '<div class="uneModif"><label>Sale :</label><input type="number" value="'.$pricing['pourcentage_reduction_pricing'].'"></div>';
                $display .= '<div class="uneModif"><label>Bandwidth :</label><input type="number" value="'.$pricing['bandwitdh_pricing'].'"></div>';
                $display .= '<div class="uneModif"><label>Onlinespace :</label><input type="number" value="'.$pricing['onlinespace_pricing'].'"></div>';
                $display .= '<div class="uneModif"><label>Support :</label><div class="radioHori">';
                $display .= ($pricing['support_pricing']) ? '<div><input type="radio" id="sup_false" checked><label for="sup_false">No</label></div><div><input type="radio" id="sup_true"><label for="sup_true">Yes</label></div></div>' : '<div><input type="radio" id="sup_false"><label for="sup_false">No</label></div><div><input type="radio" id="sup_true" checked><label for="sup_true">Yes</label></div></div>' ;
                $display .= '</div><div class="uneModif"><label>Domain :</label><input type="number" value="'.$pricing['domain_pricing'].'"></div>';
                $display .= '<div class="uneModif"><label>Hidden Fees :</label><div class="radioHori">';
                $display .= ($pricing['hidden_fees_pricing']) ? '<div><input type="radio" id="h_f_false" checked><label for"h_f_false">No</label></div><div><input type="radio" id="h_f_true"><label for"h_f_true">Yes</label></div></div>' : '<div><input type="radio" id="h_f_false"><label for"h_f_false">No</label></div><div><input type="radio" id="h_f_true" checked><label for"h_f_true">Yes</label></div></div>' ;
                $display .= '</div><input type="submit" class="submitBtn" value="Update">';
                $display .= '</form></div>';
                echo $display;
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
