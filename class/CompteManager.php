<?php
class CompteManager
{
    private $depassementAutorise; // int
    private $depotInitial; // int
    private $comptes = []; // array[{compte}]
    

    public function __construct($depotInitial = 0, $depassementAutorise = 150){
        $this->depassementAutorise = $depassementAutorise;
        $this->depotInitial = $depotInitial;
    }

    public function ouvrirCompteClient($client, $conseiller, $solde = -1, $depassementAutorise = -1)
    {
        $soldeTemp;
        $depassementTemp;

        if ($solde === -1) {
            $soldeTemp=$this->depotInitial;
        }else{
            $soldeTemp=$solde;
        }
        if ($depassementAutorise === -1) {
            
            $depassementTemp = $this->depassementAutorise;
        } else {
            $depassementTemp = $depassementAutorise;
        }
        array_push($this->comptes, new Compte($soldeTemp, $client, $conseiller, $depassementTemp));
    }


    public function cloturerCompte($compte)
    {

    }
    public function operation($numCompte,$montant,$commentaire)
    {
        $this->comptes[$numCompte]->operation($montant, $commentaire);
    }

}