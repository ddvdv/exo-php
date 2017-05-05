<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
	</head>


	<body>

	<h3>

	<?php

//Factoriel
	// function factoriel($number){
	// 	$factor = $number;
	// 	$number = $number - 1;

	// 	for ($number; $number > 0 ; $number--){
	// 		 $factor = $factor * $number;
	// 	}
	// 	return $factor;
	// }
	// echo factoriel(5);

//Prime number
	// function prime($number){
	// 	$prime = true;
	// 	$factor = $number;
	// 	$number = $number - 1;
	// 	$result = 1;


	// 	for ($number; $number > 1; $number--){
	// 		$result = $factor % $number;
	// 		if ($result == 0){
	// 			$prime = false;
	// 		}
	// 	};

	// 	if ($prime == true){
	// 		echo $factor . ' est un nombre premier';
	// 	}
	// 	else {
	// 		echo $factor . " n'est pas un nombre premier";
	// 	}
	// }

	// prime(17);

//Reverse string
	// function reverseString($stringToReverse){
	// 	$stringToReverse = str_split($stringToReverse);
	// 	$nbLetter = count($stringToReverse) - 1;
	// 	$reversedString = [];

	// 	for ($nbLetter; $nbLetter >= 0; $nbLetter--) {
	// 		$letter = $stringToReverse[$nbLetter];
	// 		array_push($reversedString, $letter);
	// 	}
	// 	$reversedString = implode('',$reversedString);
	// 	return $reversedString;
	// }

	// print_r(reverseString('testooo'));

// Algo de tri
	function tri($aTrier){
		$postTri = [];
		$smaller = true;
		foreach ($aTrier as $nb) {
			foreach ($aTrier as $compared) {
				if ($nb > $compared){
					$smaller = false;
				}
			}
			if ($smaller == true){
				echo $nb;
				array_push($postTri, $nb);
			}
		}
		return $postTri;
	}

	$aTrier = [3, 1, 5, 3, 7, 9, 0];
	print_r(tri($aTrier));

//To Lower Case
	?>
		</h3>
	</body>
</html>