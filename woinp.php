<!DOCTYPE html>
<html>


	<body>

	<form method="get">
		<select name="points">
			<option value="1">1</option>
			<option value="2">2</option>		
			<option value="3">3</option>		
			<option value="4">4</option>		
			<option value="5">5</option>		
			<option value="6">6</option>		
			<option value="7">7</option>		
			<option value="8">8</option>		
			<option value="9">9</option>		
			<option value="10">10</option>		
			<option value="11">11</option>		
			<option value="12">12</option>		
			<option value="13">13</option>
			<option value="14">14</option>		
			<option value="15">15</option>		
			<option value="16">16</option>		
			<option value="17">17</option>		
			<option value="18">18</option>		
			<option value="19">19</option>		
			<option value="20">20</option>
		</select>
		<input type="submit" value="submit">
	</form>
	<br>

	<h3>

	<?php

	if (isset($_GET['points'])) {
		$points = $_GET['points'];

		if ($points >= 1 AND $points <= 3 ) {
			echo "Ce travail est nul!";
		}
		elseif ($points >= 6 AND $points <= 9 ) {
			echo "Ce travail n'est pas terrible";
		}
		elseif ($points == 10) {
			echo "Tout juste!";
		}
		elseif ($points >= 11 AND $points <= 14 ) {
			echo "C'est pas mal";
		}
		elseif ($points >= 15 AND $points <= 18 ) {
			echo "Bravo!";
		}
		elseif ($points >= 19 AND $points <= 20 ) {
			echo "Police! Arrêtez ce tricheur!";
		}
	}
	?>

		</h3>
	</body>
</html>