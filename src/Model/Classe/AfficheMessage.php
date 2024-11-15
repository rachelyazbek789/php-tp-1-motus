<?php

namespace TpMotus\Model\Classe;
use TpMotus\Model\Classe\ListeMots;
class AfficheMessage
{

    public function premierMessage(string $lettre1): void
    {
        echo "La premier lettre est : $lettre1\n";
    }


    public function messageVictoire(): void
    {
        echo "Bravo!! Vous avez trouvé!! \n";
    }

    public function messageEchec(string $motDeviner): void
    {
        echo "Aie aie aie... Dommage vous avez perdu ;) Le mot à deviner était: $motDeviner \n";
    }

    public function afficherIndice(string $feedback): void {
        echo "Ressayez, voici un indice : $feedback\n";
    }

}