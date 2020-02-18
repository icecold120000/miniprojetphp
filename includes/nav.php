<ul>
	<li><a href="./index.php">Accueil</a></li>
	<li><a href="./contact.php">Contact</a></li>
	<li><a href="./contacts.php">Liste des contacts</a></li>
	<li>
		<?php 
			echo "Bienvenue " .$_SESSION['user']['prenom'].' '.$_SESSION['user']['nom']; 
			// $session est une tableau
			// clé user qui contient le tableau
			// clé prenom qui contient Quentin

		?>	
	</li>


</ul>