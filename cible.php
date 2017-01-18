<!DOCTYPE html>

<html>
<head>
	<link href="style.css" rel="stylesheet" type="text/css">

	<title>Nouvel an Gendrin</title>
</head>

<?php $bdd = new PDO('mysql:host=localhost;dbname=nouvelan_table;charset=utf8', 'root', '');
$req = $bdd->prepare('INSERT INTO visiteurs(surnom,prenom,nom,type_de_boisson) VALUES(:surnom, :prenom, :nom, :type_de_boisson)');
$surnom=$_POST['surnom'];
$prenom=$_POST['prenom'];
$nom=$_POST['nom'];
$type_de_boisson=$_POST['type_de_boisson'];
$req->execute(array(
	'surnom' => $surnom,
	'prenom' => $prenom,
	'nom' => $nom,
	'type_de_boisson' => $type_de_boisson
	));

$reponse = $bdd->query('select * from visiteurs');   
header('Location: boissons.php');
?>
<body>
	<main>
		<h1>Résèrve ta bière en compagnie de la famille gendrin !</h1>
		<p>Prénom :<?php echo $_POST['prenom']; ?> </p>
		<p>Nom : <?php echo $_POST['nom']; ?> </p>
		<p>Surnom : <?php echo $_POST['surnom']; ?> </p>
		<p>type de conso : <?php echo $_POST['type_de_boisson']; ?> </p>
	</main>
</body>
</html>