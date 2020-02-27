<?php /**/ ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Mon titre</title>
</head>
<body>
	<header> </header>

	<?php include("menu.php"); ?>
	<?php //phpinfo()
		$age_de_moi = 23;
		echo "j'ai $age_de_moi ans <br />";
		echo 'j\'ai' . $age_de_moi . 'ans';


		$coordonnees = array (
    		'prenom' => 'François',
    		'nom' => 'Dupont',
    		'adresse' => '3 Rue du Paradis',
    		'ville' => 'Marseille');

		echo '<pre>';
		print_r($coordonnees);
		echo '</pre>';

		if (array_key_exists('nom', $coordonnees))
		{
		    echo 'La clé "nom" se trouve dans les coordonnées !<br />';
		}

		if (array_key_exists('pays', $coordonnees))
		{
		    echo 'La clé "pays" se trouve dans les coordonnées !<br />';
		}

		if (in_array('Marseille', $coordonnees))
		{
		    echo 'La valeur "Marseille" se trouve dans les coordonnees !<br />';
		}


		$fruits = array ('Banane', 'Pomme', 'Poire', 'Cerise', 'Fraise', 'Framboise');

		echo '<pre>';
		print_r($fruits);
		echo '</pre>';

		$position = array_search('Fraise', $fruits);
		echo '"Fraise" se trouve en position ' . $position . '<br />';

		$position = array_search('pamplemousse', $fruits);

		if ($position == NULL){
			echo '"pamplemousse" non trouvé<br />';
		} else{
			echo '"pamplemousse" se trouve en position ' . $position;
		}
	?>

	<footer id="pied_de_page">
    	<p>Copyright moi, tous droits réservés</p>
    </footer>
</body>
</html>