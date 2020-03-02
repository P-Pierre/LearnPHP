<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Formulaire All In One</title>
</head>
<body>

	<?php
	if (!isset($_POST['password'])){
	?>
		<p>Bonjour, veuillez entrez le mot de passe approprié pour accéder à la page magique du turtur : </p>

		<form method="post" action="formulaireAllInOn.php">
			<p>
			<label for="password">Mot de Passe</label><input type="password" name="password">
			<input type="submit" name="envoyer">
			</p>
		</form>
	<?php
	}
	elseif (htmlspecialchars($_POST['password']) != 'kangourou') {
	?>
		<p>Le Mot de passe rentré préscédement est incorrecte veuillez re-essayer </p>

		<form method="post" action="formulaireAllInOn.php">
			<p>
			<label for="password">Mot de Passe</label><input type="password" name="password">
			<input type="submit" name="envoyer">
			</p>
		</form>
	<?php
	}else{
	?>
		<h1>Vous avez le bon mot de passe.</h1>
		<p>Le mot de passe du turtur est = <strong>"Ma BITE"</strong> <br /> Cliquez <a href="formulaireAllInOn.php">ICI</a>pour à la selection du mot de passe.</p>
	<?php
	}
	?>


</body>
</html>