<!DOCTYPE html>

<html>
<head>
	<link href="style.css" rel="stylesheet" type="text/css">

	<title>Nouvel an Gendrin</title>
</head>

<?php $bdd = new PDO('mysql:host=localhost;dbname=nouvelan_table;charset=utf8', 'root', '');


$reponse = $bdd->query('select * from visiteurs');
?>
<body>
	<main>
			<?php
				$i=1;
				while ($i<=2017)
				{
					$donnees = $reponse->fetch();
				    echo '<div class="reservation">';
				    if ($donnees['type_de_boisson']=='Champagne') {
				    	echo '<img src="img/champagne.png" alt="champagne" class="boisson">';
				    }
				    elseif ($donnees['type_de_boisson']=='Vin') {
				    	echo '<img src="img/vin.png" alt="vin" class="boisson">';
				    }
				    elseif ($donnees['type_de_boisson']=='Eau') {
				    	echo '<img src="img/eau.png" alt="eau" class="boisson">';
				    }
				    elseif ($donnees['type_de_boisson']=='Bière') {
				        echo '<img src="img/biere.png" alt="biere" class="boisson">';
				    }
				    elseif ($donnees['type_de_boisson']=='Café') {
				        echo '<img src="img/cafe.png" alt="cafe" class="boisson">';
				    }
				    else{
				       	echo '<img src="img/autre.png" alt="autre" class="boisson">';
				    }

					if (isset($donnees['surnom'])) {
						echo $donnees['ID'];
						echo $donnees['surnom'];
						echo ' ';
						echo '<br>';
					}
					else{
						echo $i . '  ';
						echo 'Surnom<br>';
					}

				    echo '</div>';
				    $i++;
		   		}
				$reponse->closeCursor();
		   	?>

	</main>
</body>
</html>