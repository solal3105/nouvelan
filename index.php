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
			<p>
				<select name="type_de_boisson" size="1">
					<option>Bière</option>
					<option>Vin</option>	
					<option>Champagne</option>	
					<option>Eau</option>
					<option>Café</option>
				</select>
			</p>
			<p><input type="submit"/></p>
			
		</form>
	</main>
</body>
</html>