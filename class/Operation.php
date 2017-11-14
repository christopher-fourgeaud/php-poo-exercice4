<?php
class Operation{
    private $montant; // int
    private $sens; // debit ou credit
    private $commentaire; // string
    private $date; // date

    public function __construct($montant, $commentaire){
        if ($montant < 0) {
            $this->sens = "debit";
        }else {
            $this->sens = "credit";
        }
        $this->commentaire = $commentaire;
        $this->montant = $montant;
        $this->date = date("j-m-Y");
    }
}