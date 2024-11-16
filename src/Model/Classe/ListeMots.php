<?php

namespace TpMotus\Model\Classe;

class ListeMots
{

    private array  $mots = ["Bouteille", "Skyrim", "Evangelion", "Clavier", "Titan", "Chocolat", "Papillon", "Ourson", "Cigarette", "Bombardier", "Slipknot", "Outlast","Mur", "Murre","Feu", "Spore","Ramen","Peluche","Catastrophe","Tsunami","Brochette","Leptospirose"];


    /**
     * @return array
     */
    public function getMots(): array
    {
        return $this->mots;
    }

    /*--------------------FNOCTION POUR AVOIR LE MOT RANDOM--------------------------------*/
    public function  getMotRandom(): string
    {
        $mots=$this->getMots();
        return ($mots[array_rand($mots)]);

    }

}