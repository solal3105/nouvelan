<!DOCTYPE html>

<html>
<head>
	<link href="style.css" rel="stylesheet" type="text/css">

	<title>Nouvel an Gendrin</title>
</head>

<?php $bdd = new PDO('mysql:host=localhost;dbname=nouvelan_table;charset=utf8', 'root', '');
$reponse = $bdd->query('select * from visiteurs');

while ($donnees = $reponse->fetch())
{
echo $donnees['ID'];
echo $donnees['nom'];
echo $donnees['prenom'];
echo $donnees['surnom']; 
echo $donnees['numero']; 
echo $donnees['email'];
}

$reponse->closeCursor();
?>
<body>
	<main>
		<h1>Résèrve ta bière en compagnie de la famille gendrin !</h1>
		<p>Prénom :<?php echo $_POST['prenom']; ?> </p>
		<p>Nom : <?php echo $_POST['nom']; ?> </p>
		<p>Surnom : <?php echo $_POST['surnom']; ?> </p>
	</main>
</body>
</html>