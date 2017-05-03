<!DOCTYPE html>
<html>


	<body>

<!-- 	<form method="get">
		<input type="radio" name="gender" value="H">Homme
		<input type="radio" name="gender" value="F">Femme<br>	
		<input type="submit" value="submit">
	</form>
	<br>
	<br>
	<br>
	<br>
	<br> -->

	<h3>

<!-- 	<?php

	$family = ['David', 'Anne-Sophie', 'Felix'];
	print_r($family);

	?>
	<br>
	<?php

	$meals = ['Burger', 'Crovettes', 'Bolognaise'];
	print_r($meals);

	?>
	<br>
	<?php

	$movies = ['Batman', 'Fight Club', 'James Bond'];
	echo($movies[1]);

	?> -->
	<br>
	<?php



	// $felix = array (
	// 	'prenom' => 'Félix', 
	// 	'nom' => 'Vandervaeren',
	// 	'sexe' => 'homme',
	// 	'age' => 0.6,
	// 	'motivation' => 10,
	// 	'foot' => false,
	// 	'piano' => false,
	// 	'hobbies' => array(
	// 		'smiling',
	// 		'laughing',
	// 		'babeling'
	// 		)
	// 	);

	// $moi = array(
	// 	'prenom' => 'David',
	// 	'nom' => 'Vandervaeren',
	// 	'sexe' => 'homme',
	// 	'age' => 28,
	// 	'movitation' => 10,
	// 	'foot' => false,
	// 	'piano' => true,
	// 	'hobbies' => array(
	// 					'learning something new',
	// 					'running',
	// 					'reading',
	// 					'watching a good movie',
	// 					'cooking'
	// 					),
	// 	'son' => $felix,
	// 	);

	// $toi = array(
	// 	'prenom' => 'Anne-Sophie',
	// 	'nom' => 'Schwab',
	// 	'sexe' => 'femme',
	// 	'age' => 29,
	// 	'motivation' => 10,
	// 	'foot' => false,
	// 	'piano' => false,
	// 	'hobbies' => array(
	// 					'changing path',
	// 					'watching a good movie',
	// 					'taking care of people',
	// 					'sewing',
	// 					'cooking'
	// 					)
	// 	);


	// $vicky['hobbies'] = array_merge($moi['hobbies'], $toi['hobbies']);

	// echo '<pre>';
	// print_r($vicky);
	// echo '<pre>';

	// $vicky['hobbies'] = array_intersect($moi['hobbies'], $toi['hobbies']);
	// echo '<pre>';
	// print_r($vicky);
	// echo '<pre>';

	?>

	<?php

	$web_development = [
		'frontend' => [],
		'backend' => []
		];

	echo '<pre>';
	print_r($web_development);
	echo'<pre>';

	array_push($web_development['frontend'], 'xthml');

	echo '<pre>';
	print_r($web_development);
	echo'<pre>';

	array_push($web_development['backend'], 'Ruby on Rails');

	echo '<pre>';
	print_r($web_development);
	echo'<pre>';

	array_push($web_development['frontend'], 'CSS');

	echo '<pre>';
	print_r($web_development);
	echo'<pre>';

	array_push($web_development['frontend'], 'Flash');

	echo '<pre>';
	print_r($web_development);
	echo'<pre>';

	array_push($web_development['frontend'], 'Javascript');

	echo '<pre>';
	print_r($web_development);
	echo'<pre>';

	//
	$web_development['frontend'][0] = 'html';

	echo '<pre>';
	print_r($web_development);
	echo'<pre>';

	unset($web_development['backend'][0]);

	echo '<pre>';
	print_r($web_development);
	echo'<pre>';

	?>

		</h3>
	</body>
</html>