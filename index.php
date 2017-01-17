<!DOCTYPE html>

<html>
<head>
	<link href="style.css" rel="stylesheet" type="text/css">

	<title>Nouvel an Gendrin</title>
</head>

<body>
	<main>
		<h1>Résèrve ta bière en compagnie de la famille gendrin !</h1>

		<form action="cible.php" method="POST">
			<p><label>Prénom :<input type="text" name="prenom" /></label></p>
			<p><label>Nom :<input type="text" name="nom" /></label></p>
			<p><label>Surnom (visible par tous) :<input type="text" name="surnom" /></label></p>
			<p><input type="submit"/></p>
			
		</form>
		<?php  
		    for ($i=1; $i <= 2017 ; $i++) {
		    	while ($donnees = $reponse->fetch())
				{
					if ($i==$donnees['ID'])
					{
						echo $donnees['surnom'];
					}
				}

			    echo '<div class="reservation">';
			    if ($i%3==0) {
			        echo '<img src="img/champagne.png" alt="champagne" class="boisson">';
			    }
			    elseif ($i%5==0) {
			        echo '<img src="img/vin.png" alt="vin" class="boisson">';
			    }
			    elseif ($i%7==0) {
			        echo '<img src="img/eau.png" alt="eau" class="boisson">';
			    }
			    else{
			        echo '<img src="img/biere.png" alt="biere" class="boisson">';
			    }
			    echo '<p>' . $i . '<br>Surnom</p>';
			    echo '</div>';
		    }
		?>
	</main>
</body>
</html>