<!DOCTYPE html>
<html>


	<body>

	<?php
	/*	Si l'heure est entre 05h00 et 9h00 du matin, affiche "Bonjour!".
	Si l'heure est entre 9h01 et 12h00, affiche "Bonne journée!".
	Si l'heure est entre 12h01 et 16h00, affiche "Bon après-midi!".
	Si l'heure est entre 16h01 et 21h00, affiche "Bonne soirée!".
	Si l'heure est entre 21h01 et 04h59, affiche "Bonne nuit!".
	*/

	$hour = date('H');
	$minute = date('i');

	if ($hour > 5 AND $hour < 9) {
		echo "Bonjour!";
	}
	elseif ($hour > 9 AND $hour < 12) {
		echo "Bonne journée!";
	}
	elseif ($hour > 12 AND $hour < 16) {
		echo "Bonne après-midi!";
	}
	elseif ($hour > 16 AND $hour < 21) {
		echo "Bonne soirée!";
	}
	elseif ($hour >  21 OR $hour < 5) {
		echo "Bonne nuit!";
	}

	?>

	</body>


</html>