<!DOCTYPE html>
<html>


	<body>

	<form method="get">
		<input name="age" placeholder="Quel est ton âge?"><br>
		<input type="radio" name="gender" value="H">Homme
		<input type="radio" name="gender" value="F">Femme<br>	
		<input type="submit" value="submit">
	</form>
	<br>

	<h3>

	<?php

	if (isset($_GET['age'])) {
		$age = $_GET['age'];
	}

	if (isset($_GET['gender'])) {
		$gender = $_GET['gender'];
	}

	if (isset($gender) AND isset($age)) {
		if ( $age <= 40 AND $age >=21 AND $gender = 'F' ) {
			$OK = true;
		}
		else {
			$OK = false;
		}
	}

		if ($OK)
		{
			echo "Bonjour et bienvenue parmis nous!";
		}w

		if (!$OK)
		{
			echo "Désolé. Vous ne remplissez pas les critères de conditions";
		}


	?>

		</h3>
	</body>
</html>