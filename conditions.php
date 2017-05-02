<!DOCTYPE html>
<html>


	<body>

	<form method="get">
		<input name="age" placeholder="Quel est ton âge?"><br>
		<input type="radio" name="gender" value="H">Homme
		<input type="radio" name="gender" value="F">Femme<br>
		<label>Parles-tu anglais?
			<input type="radio" name="lang" value="Eng">Yes
			<input type="radio" name="lang" value="NoEng" checked>Non<br>
		</label>		
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

	if ($_GET['lang'] == 'Eng') {
		$eng = true;
	}

	if ($age < 12) {
		if ($gender == 'H'){
			if ($eng) {
				echo "Hello boy!";
			}
			else {
				echo "Salut petit garçon!";
			}
		}
		if ($gender == 'F'){
			if ($eng) {
				echo "Hello girl!";
			}
			else {
				echo "Salut petite fille!";
			}
		}
	}
	elseif ($age > 11 AND $age < 19) {
		if ($gender == 'H'){
			if ($eng) {
				echo "Hello teenage boy!";
			}
			else {
				echo "Salut l'adolescent!";
			}
		}
		if ($gender == 'F'){
			if ($eng) {
				echo "Hello young lady!";
			}
			else {
				echo "Salut l'adolescente!";
			}
		}
	}	
	elseif ($age > 18 AND $age < 115) {
		if ($gender == 'H'){
			if ($eng) {
				echo "Hello Sir!";
			}
			else {
				echo "Bonjour monsieur!";
			}
		}
		if ($gender == 'F'){
			if ($eng) {
				echo "Hello Mam'!";
			}
			else {
				echo "Bonjour madame!";
			}
		}	
	}
	elseif ($age > 114) {
		if ($gender == 'H'){
			if ($eng) {
				echo "Hello old chap!";
			}
			else {
				echo "Salut le vieux";
			}
		}
		if ($gender == 'F'){
			if ($eng) {
				echo "Hello milady!";
			}
			else {
				echo "Salut la vieille";
			}
		}	
	}
	?>

		</h3>
	</body>
</html>