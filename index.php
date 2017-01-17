<!DOCTYPE html>

<html>
<head>
	<link href="style.css" rel="stylesheet" type="text/css">

	<title>Nouvel an Gendrin</title>
</head>

<body>
	<main>
		<h1>Résèrve ta bière en compagnie de la famille gendrin !</h1>
		<?php  
		    for ($i=1; $i <= 2017 ; $i++) {
		        echo '<div class="reservation">';
		        if ($i%3==0) {
		            echo '<img src="img/champagne.png" alt="champagne" class="biere">';
		        }
		        elseif ($i%5==0) {
		            echo '<img src="img/vin.png" alt="vin" class="biere">';
		        }
		        elseif ($i%7==0) {
		            echo '<img src="img/eau.png" alt="eau" class="biere">';
		        }
		        else{
		            echo '<img src="img/biere.png" alt="biere" class="biere">';
		        }
		        echo '<p>' . $i . '<br>Surnom</p>';
		        echo '</div>';
		    }
		?>
	</main>
</body>
</html>