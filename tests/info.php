<?php session_start() ?>
<?php setcookie('pseudo', 'Fitz', time() + 7*24*3600, null, null, false, true); ?>
<?php setcookie('mabite', '80cm', time() + 7*24*3600, null, null, false, true); ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Mon titre</title>
</head>
<body>
	<header> </header>
	<?php include("menu.php"); ?>
	<?php $_SESSION['UnTruc'] = 'pas net'; ?>
	<?php //phpinfo()
		$age_de_moi = 23;
		echo "j'ai $age_de_moi ans <br />";
		echo 'j\'ai' . $age_de_moi . 'ans<br />';


		$coordonnees = array (
    		'prenom' => 'François',
    		'nom' => 'Dupont',
    		'adresse' => '3 Rue du Paradis',
    		'ville' => 'Marseille');

		echo $coordonnees['adresse']. '<br />';

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

	<pre>
	<?php
	print_r($_SERVER);
	?>
	</pre>

	<pre>
	<?php
	print_r($_SESSION);
	?>
	</pre>

	<pre>
	<?php
	print_r($_COOKIE);
	?>
	</pre>


	<?php
	// 1 : on ouvre le fichier
	$monfichier = fopen('compteur.txt', 'r+');

	// 2 : on fera ici nos opérations sur le fichier...
	$pages_vues = fgets($monfichier); // On lit la première ligne (nombre de pages vues)
	$pages_vues += 1; // On augmente de 1 ce nombre de pages vues
	fseek($monfichier, 0); // On remet le curseur au début du fichier
	fputs($monfichier, $pages_vues); // On écrit le nouveau nombre de pages vues


	// 3 : quand on a fini de l'utiliser, on ferme le fichier
	fclose($monfichier);

	echo '<p>Cette page a été vue ' . $pages_vues . ' fois !</p>';
	?>

	<footer id="pied_de_page">
    	<p>Copyright moi, tous droits réservés</p>
    </footer>
    <!-- session_destroy() !-->
</body>
</html>