<!DOCTYPE html>
<html>
<head>
	<title>formulaire.php</title>
</head>
<body>

	<form method="post" action="cible.php">
		<p> Ceci est le le formulaire a remplir </p>

		<label for="pseudo">Pseudo </label><input type="text" name="pseudo" value="expl: Fitz" /><br />
		<label for="password">Mot de Passe </label><input type="password" name="password" /><br />

		<select name="pays">
			<option value="choix1">France</option>
			<option value="choix2">Dans Le Cul D'une Vache</option>
			<option value="choix3" selected="selected">Chez ta mere</option>
		</select><br />

		<input type="checkbox" name="case1" id="case1" /><label for="case1">Je suis con</label><br />

		<input type="checkbox" name="case1" id="case2" checked="checked" /><label for="case2">Je suis trés con</label><br />

		<p>Tu aime la vodka ?</p>
		<input type="radio" name="vodka" value="oui" id="oui" checked="checked" /><label for="oui">Oui</label>
		<input type="radio" name="vodka" value="non" id="non" /><label for="non">Non</label>
		<input type="hidden" name="infovodka" value="OUI" /><br />

		<textarea name="message" rows="8" cols="45">Entrez ceci dans Pseudo pour crash le serv lol : "<script type="text/javascript">alert('Badaboum')</script>"</textarea><br />

		<input type="submit" name="Valider" />
	</form>

	<p>Formulaire, partie d'envoie du fichier</p>

	<form method="post" action="cible_file.php" enctype="multipart/form-data">
		<p>
			Formulaire d'envoie de fichier : <br />
			<input type="file" name="monfichier" /><br />
			<input type="submit" name="Envoyer le fichier"><br />
		</p>
	</form>

</body>
</html>