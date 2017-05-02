<!DOCTYPE html>
<html>


	<body>

	<?php

		$temperature  = 34; // Joue avec cette valeur pour tester ton script.

		if( $temperature > 21 ) {
		  // code à exécuter si la condition est TRUE
		  $vetement_du_jour = "T-shirt";
		  
		  }elseif ( $temperature > 10 ){
		    $vetement_du_jour = "Pull-over";

		 } else {
		   // code à exécuter si toutes les conditions précédentes sont FALSE
		   $vetement_du_jour = "Pull-over, écharpe et bonnet";
		 }
		 
		 echo $vetement_du_jour;


	?>

	</body>


</html>