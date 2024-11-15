<?php

namespace TpMotus\Model\Classe;
use TpMotus\Model\Classe\ListeMots;
use TpMotus\Model\Classe\AfficheMessage;
class Motus
{
    private ListeMots $mots;
    private AfficheMessage $afficheMessage;

    private string $motDeviner;

    private int $nbMaxEssais = 6;

    /**
     * @param \TpMotus\Model\Classe\ListeMots $mots
     * @param \TpMotus\Model\Classe\AfficheMessage $afficheMessage
     * @param string $motDeviner
     */
    public function __construct(\TpMotus\Model\Classe\ListeMots $mots, \TpMotus\Model\Classe\AfficheMessage $afficheMessage, string $motDeviner)
    {
        $this->mots = $mots;
        $this->afficheMessage = $afficheMessage;
        $this->motDeviner = $motDeviner;
    }

    private function donnerIndice(string $essai): string
    {
        $feedback = "";
        for ($i = 0; $i < strlen($this->motDeviner); $i++) {
            if ($essai[$i] === $this->motDeviner[$i]) {
                $feedback .= $essai[$i];
            } elseif (strpos($this->motDeviner, $essai[$i]) !== false) {
                $feedback .= strtolower($essai[$i]);
            } else {
                $feedback .= "_";
            }
        }
        return $feedback;

    }
    private function verifierLongueur(string $tentative, int $nbLettres): bool
    {
        if (strlen($tentative) !== $nbLettres) {
            echo "Le nombre de lettres ne correspond pas.\n";
            return false;
        }
        return true;
    }
    private function verifierMot(string $tentative): bool
    {
        return $tentative === $this->motDeviner;
    }
    public function play(): void
    {

        $essais = 0;
        $nbLettres = strlen($this->motDeviner);

        echo "La première lettre est : " . $this->motDeviner[0] . "\n";

        while ($essais < $this->nbMaxEssais) {
            echo "Devinez le mot en $nbLettres lettres (Tentative " . ($essais + 1) . "/{$this->nbMaxEssais}) : ";
            $tentative = strtoupper(trim(readline()));

            // Vérifie si  longueur OK
            if (!$this->verifierLongueur($tentative, $nbLettres)) {
                $essais++;
                continue;
            }

            // Vérifie si l e mot Ok
            if ($this->verifierMot($tentative)) {
                $this->afficheMessage->messageVictoire();
                return;
            }

            // Donne un indice et continue
            $indice = $this->donnerIndice($tentative);
            echo "Ressayez, voici un indice : $indice\n";
            $essais++;
        }

        $this->afficheMessage->messageEchec($this->motDeviner);
    }


}