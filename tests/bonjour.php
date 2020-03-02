<!DOCTYPE html>
<html>
<head>
	<title>bonjour.php</title>
</head>
<body>
<?php 
if (isset($_GET['prenom']) && isset($_GET['nom']) && isset($_GET['repeter']))
{
	$_GET['repeter'] = (int)$_GET['repeter'];

	if ($_GET['repeter'] >= 1 && $_GET['repeter'] <= 100){
		for ($i = 0 ; $i < $_GET['repeter'] ; $i++){
			echo 'Bonjour ' . $_GET['prenom'] . ' ' . $_GET['nom'] . ' !<br />';
		}
	}
}else{
	echo "il faut renseigner un nom, un prenom et un nombre de repetition";
}


?>

</body>
</html>