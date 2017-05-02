<!DOCTYPE html>
<html>


	<body>

	<form method="get">
		<input type="radio" name="gender" value="H">Homme
		<input type="radio" name="gender" value="F">Femme<br>	
		<input type="submit" value="submit">
	</form>
	<br>

	<h3>

	<?php

	if (isset($_GET['gender'])) {
		$gender = $_GET['gender'];
	}

	if (isset($gender)) {
		
		$bonjour = ($gender == 'H') ? true : false;

		if ($bonjour) {
			echo "Bonjour monsieur";
		}
		else {
			echo "Bonjour madame";
		}
	}


	?>

		</h3>
	</body>
</html>