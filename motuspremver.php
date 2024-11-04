<?php

declare(strict_types=1);

$motDeviner = "Bouteille";
$compt = 0;
$essai = "";

echo "Première lettre du mot : " . $motDeviner[0] . "\n";
$nbLettres = strlen($motDeviner);

while ($compt < 6 && $motDeviner !== $essai) {
    echo "Devinez le mot en $nbLettres lettres (Tentative " . ($compt + 1) . "/6) : ";
    $essai = readline();

    // Vérifie si longueur ok
    if (strlen($essai) !== $nbLettres) {
        echo "Le nombre de lettres ne correspond pas.\n";
        $compt++;
        continue;
    }

    // Si le mot est correct
    if ($motDeviner === $essai) {
        echo "Bravo ! Vous avez deviné le mot.\n";
        break;
    } else {
        // Affiche les lettres ok
        $feedback = "";
        for ($i = 0; $i < $nbLettres; $i++) {
            if ($essai[$i] === $motDeviner[$i]) {
                $feedback .= $essai[$i]; // Lettre correcte à la bonne position
            } elseif (strpos($motDeviner, $essai[$i]) !== false) {
                $feedback .= strtolower($essai[$i]); // Lettre correcte mais mauvaise position
            } else {
                $feedback .= "_"; // Lettre incorrecte
            }
        }

        echo "Ressayez, voici un indice : $feedback\n";
        $compt++;
    }
}

if ($motDeviner !== $essai) {
    echo "Dommage ;) !!! vous avez atteint le nombre maximum de tentatives. Le mot à deviner était : $motDeviner\n";
}


























   /* declare(strict_types=1);

$motDeviner = "Bouteille";
$compt = 0;
$essai = "";

echo $motDeviner[0] . "\n";
$nbLettres = strlen($motDeviner);

while ($compt != 6 && $motDeviner !== $essai) {

	$sim =  similar_text($motDeviner, $essai);

    echo "Devinez le mot en $nbLettres lettres: ";

    $essai = readline();

    if ($motDeviner === $essai) {
        echo "Bravoooo!\n";
    } elseif ($nbLettres != strlen($essai)) {
        echo "Le nombre de lettres ne correspond pas.\n";
        $compt++;
    } else {
        $arr1[]=str_split($motDeviner);
        $arr2[]=str_split($essai);
        $diff= array_diff($arr1,$arr2);

        echo "Ressayez, c'est faux le nombre de lettres similiaires est: ".$diff.".\n";
        $compt++;
     
	}
}

if ($compt == 6) {
    echo "Dommage, vous avez atteint le nombre maximum de tentatives.\n";
}
*/
?>
