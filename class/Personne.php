<?php

class Personne
{
  //Propriété d'objet
  protected $id;
  protected $nom;
  protected $prenom;

  //Propriété de classe
  public static $prochainId = 1;

  public function __construct($prenom, $nom)
  {
    $this->id = self::$prochainId++;
    $this->prenom = $prenom;
    $this->nom = $nom;
  }

  public function __toString()
  {
    return get_class($this).": Id: ".$this->id.
          " Prenom:".$this->prenom.
          " Nom: ".$this->nom;
  }

  public static function getProchainId()
  {
    return self::$prochainId;
  }
}
