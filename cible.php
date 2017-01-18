<!DOCTYPE html>

<html>
	<?php 
	if(!empty($_POST['surnom']))
	{
		$bdd = new PDO('mysql:host=localhost;dbname=nouvelan_table;charset=utf8', 'root', '');
		$req = $bdd->prepare('INSERT INTO visiteurs(surnom,prenom,nom,type_de_boisson) VALUES(:surnom, :prenom, :nom, :type_de_boisson)');
		$surnom=htmlspecialchars($_POST['surnom']);
		$prenom=htmlspecialchars($_POST['prenom']);
		$nom=htmlspecialchars($_POST['nom']);
		$type_de_boisson=htmlspecialchars($_POST['type_de_boisson']);
		$req->execute(array(
			'surnom' => $surnom,
			'prenom' => $prenom,
			'nom' => $nom,
			'type_de_boisson' => $type_de_boisson
		));
		$reponse = $bdd->query('select * from visiteurs');
		header('Location: boissons.php');
	}
	else
	{
		echo 'Le champ surnom est vide !';
		echo '<a href="index.php" > Retour à l\'acceuil</a>';
	}
	?>
</html>