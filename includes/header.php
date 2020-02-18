<?php
	session_start();
	$prenom = if(isset($_POST['prenom']))
	{
		$prenom = $_POST['prenom'];
	}else{
		$prenom = 'invité';
	}

	$prenom = if(isset($_POST['nom']))
	{
		$nom = $_POST['nom'];
	}else{
		$nom = 'invité';
	}

?>
 
<!DOCTYPE html>

<?php
	include('./traitement/changement_couleur.php');
?>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="projet.css">
	<title><?php echo $titre; ?></title>
	<style>
		.erreur {
			color: #FF0000;
		}

		.sombre {
			color: #FFF;
			background-color: #000;
		}
	</style>
</head>

<body class="<?php echo $couleur; ?>">
	<header>
		<nav><?php require_once('./includes/nav.php'); ?>
		</nav>
	</header>