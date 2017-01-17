<!DOCTYPE html>

<html>
<head>
	<link href="style.css" rel="stylesheet" type="text/css">

	<title>Nouvel an Gendrin</title>
</head>

<?php $bdd = new PDO('mysql:host=localhost;dbname=nouvelan_table;charset=utf8', 'root', '');
$reponse = $bdd->query('select * from visiteurs');

/*$i=0;
while ($i<=2017)
{

	$donnees = $reponse->fetch();
	if (isset($donnees['ID'])) {
		echo $donnees['ID'];
		echo $donnees['surnom'];
		echo ' ';
		echo '<br>';
	}
	else{
		echo $i . '  ';
		echo 'Surnom<br>';

	}
	$i++;

}*/
?>
<body>
	<main>
		<h1>Résèrve ta bière en compagnie de la famille gendrin !</h1>
		<p>Prénom :<?php echo $_POST['prenom']; ?> </p>
		<p>Nom : <?php echo $_POST['nom']; ?> </p>
		<p>Surnom : <?php echo $_POST['surnom']; ?> </p>

			<?php
				$i=1;
				while ($i<=2017)
				{
					$donnees = $reponse->fetch();
					if (isset($donnees['ID'])) {
						$assigne=1;
					}
					else{$assigne=0;}
				    echo '<div class="reservation">';
				    if ($i%3==0) {
				        if ($assigne==1) { echo '<img src="img/champagne.png" alt="champagne" class="boisson" class="gris">'; }
				        else{echo '<img src="img/champagne.png" alt="champagne" class="boisson">';}
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