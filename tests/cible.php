<!DOCTYPE html>
<html>
<head>
	<title>cible.php</title>
</head>
<body>
	<?php  if (isset($_POST['pseudo'])){?>
		<p>Le nom entré est <?php echo htmlspecialchars($_POST['pseudo']); ?> !</p> <!-- ou utiliser strip_tags !-->
		<p>Si le nom est incorrecte <a href="formulaire.php">CLIQUE ICI</a> pour revenir au formulaire.</p>
	<?php }else{?>
		<p>Pseudo invalide <a href="formulaire.php">CLIQUE ICI</a> pour revenir au formulaire.</p>
		<p>Test de crack <script type="text/javascript">alert('Badaboum')</script></p>
	<?php }?>
</body>
</html>