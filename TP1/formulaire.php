<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>formulaire.php</title>
</head>
<body>

<p>Bonjour, veuillez entrez le mot de passe approprié pour accéder à la page magique du turtur : </p>

<form method="post" action="secret.php">
	<p>
	<label for="password">Mot de Passe</label><input type="password" name="password">
	<input type="submit" name="envoyer">
	</p>
</form>

</body>
</html>