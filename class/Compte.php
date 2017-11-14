<?php
class Compte
{
    private $numero; // int
    private static $prochainNumero = 0;
    private $solde; // int
    private $operations = []; // array[{operation}]
    private $client; // {client}
    private $conseiller; // {conseiller}
    private $depassementAutorise; // int
    private $bloquer = false;

    public function __construct($solde, $client, $conseiller, $depassementAutorise)
    {
        $this->numero = self::$prochainNumero++;
        $this->solde = $solde;
        $this->client = $client;
        $this->conseiller = $conseiller;
        $this->depassementAutorise = $depassementAutorise;
    }
    public function operation($montant, $commentaire)
    {
        if ($this->bloquer === false) {
            array_push($this->operations, new Operation($montant, $commentaire));
            $this->solde += $montant;
        } else {
            return "Compte bloqué";
        }
    }
    public function bloquer()
    {
        $this->bloquer = true;
    }
    public function debloquer()
    {
        $this->bloquer = false;
    }
}