<!DOCTYPE html>

<html>
<head>
	<link href="style.css" rel="stylesheet" type="text/css">

	<title>Nouvel an Gendrin</title>
</head>

<body>
	<main>
		<div id="partieun">
		<form action="cible.php" method="post">
			<section>
				<label>Prénom :
					<br>
					<input name="prenom" type="text">
				</label>
				<br>
				<label>Nom :
					<br>
					<input name="nom" type="text">
				</label>
				<br>
				<label>Surnom (visible par tous) :
					<br>
					<input name="surnom" type="text">
				</label>
			</section>
		</div>
			<section>
				<select name="type_de_boisson" size="1">
					<option> Bière </option>
					<option> Vin </option>
					<option> Champagne </option>
					<option> Eau </option>
					<option> Café </option>
				</select> <input type="submit">
			</section>
		</form>
	</main>
</body>
</html>