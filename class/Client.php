<?php

class Client extends Personne
{
  private $conseiller;

  public function __construct( $prenom, $nom, $conseiller)
  {
    parent::__construct( $prenom, $nom );
    $this->conseiller = $conseiller;
  }

  //Fonction magique qui permet de définir la chaine de caractère quand on fait un echo sur un objet.
  public function __toString()
  {
    return parent::__toString()."->Conseiller: ".$this->conseiller."<br>";
  }

}



