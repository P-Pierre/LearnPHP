<!DOCTYPE html>
<html>
<head>
	<title>cinle_file.php</title>
</head>
<body>

<?php  
if (isset($_FILES['monfichier'])){

	$infosfichier = pathinfo($_FILES['monfichier']['name']);
	$extention_upload = $infosfichier['extension'];
	$extensions_autorisees = array('jpg','jpeg','gif','png');

	if ($_FILES['monfichier']['error'] != 0){
		echo "erreur d'envoie du fichier";
	}elseif ($_FILES['monfichier']['size'] > 1000000) {
		echo "fichier suppérieur à 1 000 000 octets, fichier refusé";
	}elseif (!in_array($extention_upload, $extensions_autorisees)) {
		echo "extension de fichier non autorisée";
	}else{
		//fichier validé
		//a améliorer => choisir soit même le nom avec un compteur par exemple (evite pb avec nom fichier ou espace)
		move_uploaded_file($_FILES['monfichier']['tmp_name'], 'uploads/' . basename($_FILES['monfichier']['name']));
		echo "L'envoie du fichier a bien été réalisé"; //fonctionnel => il faut créer le repertoir uploads
	}
}else{
	echo "aucun fichier envoyé";
}



?>
</body>
</html>