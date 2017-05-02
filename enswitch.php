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

		switch ($points) {
			case 1:
				echo "Ce travail est nul!";
				break;
			case 2:
				echo "Ce travail est nul!";
				break;
			case 3:
				echo "Ce travail est nul!";
				break;
			case 4:
				echo "Ce travail est nul!";
				break;
			case 5:
				echo "Ce travail est nul!";
				break;
			case 6:
				echo "Ce travail n'est pas terrible";
				break;
			case 7:
				echo "Ce travail n'est pas terrible";
				break;
			case 8:
				echo "Ce travail n'est pas terrible";
				break;
			case 9:
				echo "Ce travail n'est pas terrible";
				break;
			case 10:
				echo "Tout juste!";
				break;
			case 11:
				echo "C'est pas mal";
				break;
			case 12:
				echo "C'est pas mal";
				break;
			case 13:
				echo "C'est pas mal";
				break;
			case 14:
				echo "C'est pas mal";
				break;				
			case 15:
				echo "Bravo!";
				break;
			case 16:
				echo "Bravo!";
				break;
			case 17:
				echo "Bravo!";
				break;
			case 18:
				echo "Bravo!";
				break;
			case 19:
				echo "Police! Arrêtez ce tricheur!";
				break;
			case 20:
				echo "Police! Arrêtez ce tricheur!";
				break;
			default:
				echo "Tu n'as aucun résultat valable. Pire que tout!";
			}
		}
	?>

		</h3>
	</body>
</html>