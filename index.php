<!DOCTYPE html>

<html>
<head>
	<link href="style.css" rel="stylesheet" type="text/css">

	<title>Nouvel an Gendrin</title>
</head>

<body>
	<main>
		<h1>Résèrve ta bière en compagnie de la famille gendrin !</h1>


		<form action="cible.php" method="post">
			<label>Prénom :
				<input name="prenom" type="text">
			</label>
			<label>Nom :
				<input name="nom" type="text">
			</label>
			<label>Surnom (visible par tous) :
				<input name="surnom" type="text">
			</label>
			<select name="type_de_boisson" size="1">
				<option> Bière </option>
				<option> Vin </option>
				<option> Champagne </option>
				<option> Eau </option>
				<option> Café </option>
			</select> <input type="submit">
		</form>
	</main>
</body>
</html>