<?php

declare(strict_types=1);

// Liste des mots
$mots = ["Bouteille", "Voiture", "Ordinateur", "Clavier", "Montagne", "Chocolat", "Papillon", "Canard", "Cigarette", "Téléphone"];

// Sélection aléatoire
$motDeviner = strtoupper($mots[array_rand($mots)]);
$compt = 0;
$essai = "";

echo "Première lettre du mot : " . $motDeviner[0] . "\n";
$nbLettres = strlen($motDeviner);

while ($compt < 6 && $motDeviner !== $essai) {
    echo "Devinez le mot en $nbLettres lettres (Tentative " . ($compt + 1) . "/6) : ";
    $essai = strtoupper(readline());

    // Vérifie si longueur correcte
    if (strlen($essai) !== $nbLettres) {
        echo "Le nombre de lettres ne correspond pas.\n";
        $compt++;
        continue;
    }

    // Si  mot ok
    if ($motDeviner === $essai) {
        echo "Bravo ! Vous avez deviné le mot.\n";
        break;
    } else {
        // Affiche  lettres ok+ feedbackk
        $feedback = "";
        for ($i = 0; $i < $nbLettres; $i++) {
            if ($essai[$i] === $motDeviner[$i]) {
                $feedback .= $essai[$i]; // Lettre correcte à la bonne position
            } elseif (strpos($motDeviner, $essai[$i]) !== false) {
                $feedback .= strtolower($essai[$i]); // Lettre ok mais position pas ok
            } else {
                $feedback .= "_"; // Lettre pas ok
            }
        }

        echo "Ressayez, voici un indice : $feedback\n";
        $compt++;
    }
}

if ($motDeviner !== $essai) {
    echo "Dommage ;) !!! Vous avez atteint le nombre maximum de tentatives. Le mot à deviner était : $motDeviner\n";
}

?>
