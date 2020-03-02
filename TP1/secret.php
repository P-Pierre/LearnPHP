<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>secret.php</title>
</head>
<body>

<?php 
$invalid = false;

if (isset($_POST['password'])){
	if (htmlspecialchars($_POST['password']) == 'kangourou'){
?>
		<h1>Vous avez le bon mot de passe.</h1>
		<p>Le mot de passe du turtur est = <strong>"Ma BITE"</strong> <br /> Cliquez <a href="formulaire.php">ICI</a>pour retourner à la page de formulaire.</p>
<?php
	}else{
		$invalid = true;
	}
}else{
	$invalid = true;
}
if ($invalid){
?>

<p>Mauvais mot de passe #TODO gérer le retour auto <br /> Cliquez <a href="formulaire.php">ICI</a>pour retourner à la page de formulaire.</p>

<?php
}
?>


</body>
</html>