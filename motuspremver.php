<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';
use TpMotus\Model\Classe\ListeMots;
use TpMotus\Model\Classe\AfficheMessage;
use TpMotus\Model\Classe\Motus;


/*TENTATIVE DE CODE MAIN AVEC JUSTE LES CLASSES ET FONCTIONS*/

$liste=new ListeMots();
$lemot=$liste->getMotRandom();
$affiche= new AfficheMessage();
$jeu=new Motus($liste,$affiche,$lemot);
$jeu->play();


/*
// Liste des mots
$mots = ["Bouteille", "Voiture", "Evangelion", "Clavier", "Montagne", "Chocolat", "Papillon", "Canard", "Cigarette", "JJK"];//--> faire une fonction qui donne une liste de mots aleatoirs

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
        $rep = "";
        for ($i = 0; $i < $nbLettres; $i++) {
            if ($essai[$i] === $motDeviner[$i]) {
                $rep .= $essai[$i]; // Lettre correcte à la bonne position
            } elseif (strpos($motDeviner, $essai[$i]) !== false) {
                $rep .= strtolower($essai[$i]); // Lettre ok mais position pas ok
            } else {
                $rep .= "_"; // Lettre pas ok
            }
        }

        echo "Ressayez, voici un indice : $rep\n";
        $compt++;
    }
}

if ($motDeviner !== $essai) {
    echo "Dommage ;) !!! Vous avez atteint le nombre maximum de tentatives. Le mot à deviner était : $motDeviner\n";
}

// faire une fonction  pour afficher message fail
//faire fonction pour afficher message ok
//faire fonction pour comparer les 2 mots (lettres par lettres)
//faire fonction pour  dire lettres bon endroit
//ajouter classes + ameliorer arborescence
*/
?>
