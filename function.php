<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
	</head>


	<body>

	<h3>

	<?php



	// function maj1st($string){
	// 	$string = explode(' ', $string);
	// 	foreach($string as $word) {
	// 	 	echo strtoupper(substr($word, 0, 1));
	// 	 };
	// }

	// maj1st('In Code We Trust');

	// $liste = ["caecotrophie", "chaenichthys","microsphaera", "sphaerotheca"];


	// function caeke($string){
	// 	$nb = strpos($string, 'ae');
	// 	echo substr_replace($string, 'æ', $nb, 2);
	// }

	// foreach ($liste as $word) {
	// 	caeke($word);
	// 	echo '<br>';
	// }

	// $liste = ['cæcotrophie', 'chænichthys', 'microsphæra', 'sphærotheca'];


	// function caeke($string){
	// 	$nb = strpos($string, 'æ');
	// 	echo substr_replace($string, 'ae', $nb, 2);
	// }

	// foreach ($liste as $word) {
	// 	caeke($word);
	// 	echo '<br>';
	// }

	// function feedback($message, $classe = 'info'){
	// 	echo '<div class="' . $classe . '">' . $message . '</div';
	// }

	// echo feedback("adresse email incorrecte");

// Créateur de mots aléatoires

?>
<!-- <form method="get">
	<input type="submit" name="submit" value="generate">
</form>
 -->
<?php

// 	function alphagen($alphabet, $strlenalphabet){
// 			foreach ($alphabet as $letter) {
// 			$randl = rand(0, $strlenalphabet);
// 			$randletter = $alphabet[$randl];
// 			return $randletter;
// 			}
// 		}

// 		$alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
// 		$alphabet = str_split($alphabet);
// 		$strlenalphabet = count($alphabet) - 1 ;

// 	function wordgen(){
// 		$alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
// 		$alphabet = str_split($alphabet);
// 		$strlenalphabet = count($alphabet) - 1 ;
// 		$rand1 = rand(1,5);
// 		$rand2 = rand(7,15);

// 		for ($i = 0; $i < $rand1; $i++){
// 			$randletter = alphagen($alphabet, $strlenalphabet);
// 			echo $randletter;
// 		};
// 		?><br><?php
// 		for ($i = 0; $i < $rand2; $i++){
// 			$randletter = alphagen($alphabet, $strlenalphabet);
// 			echo $randletter;
// 		};		
// 	}

// if (isset($_GET['submit'])) {
// 	if ($_GET['submit'] == 'generate') {
// 		print_r(wordgen());
// 	}
// }

// echo strtolower("ARRÊTE DE CRIER JE N'ENTENDS PLUS RIEN!!!")

	// function volume_dun_cone($rayon, $hauteur){
	// 	$volume = $rayon * $rayon * 3.14 * $hauteur * (1/3);
	// 	echo "Le volume d'un cone de " . $rayon . ' de rayon et de ' . $hauteur . ' de hauteur est de ' . $volume ;
	// }

	// if (isset($_GET['rayon']) AND isset($_GET['hauteur'])){
	// 	$rayon = $_GET['rayon'];
	// 	$hauteur = $_GET['hauteur'];
	// 	volume_dun_cone($rayon, $hauteur);
	// }

?>
<!-- <p>
	<form>
		<input name="rayon" placeholder="rayon">
		<input name="hauteur" placeholder="hauteur">
		<input type="submit" name="calculer" value="submit">
	</form>
</p> -->


<?php
// Fonction pour renverser une chaine de caractères
	// function reverse_string($stringToReverse){
	// 	$stringToReverse = str_split($stringToReverse);
	// 	$stringlenght = count($stringToReverse) - 1;
	// 	$reversedString = [];
	// 	$letter = '';

	// 	for ($i = $stringlenght ; $i >= 0 ; $i-- ){
	// 		$letter = $stringToReverse[$i];
	// 		array_push($reversedString, $letter);
	// 	};
	// 	return implode($reversedString);

	// };

	// print_r(reverse_string('A LENVERS'));

// Buvons un coup ma serpette est perdue

	function buvonsuncoup(){
		$base = '<p>Buvons un coup ma serpette est perdue,<br>
					Mais le manche, mais le manche,<br>
					Buvons un coup ma serpette est perdue<br>
					Mais le manche est revenu.</p>';

				"Bavas a ca ma sarpata a parda,
				Ma la macha ma la macha
				Bavas a ca ma sarpata a parda
				Ma la macha a ravana.";

		$voyelles = array('oup', 'ons', 'ue', 'un', 'u', 'as', 'ais', 'ai', 'an', 'a', 'est', 'et', 'e');
		$substitutions = array('a', 'e', 'i', 'o', 'u', 'ou', 'é', 'è', 'oi', 'ui', 'oui', 'an', 'in', 'on', 'un', 'oin');
		$paroles = [];

		foreach ($substitutions as $replaced) {
			array_push($paroles, str_replace($voyelles, $replaced, $base));
		};
		return $paroles;
	};

	print_r(buvonsuncoup());


?>
		</h3>
	</body>
</html>