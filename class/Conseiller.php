<?php

class Conseiller extends Personne
{
  private $nbClient = 0;

  public function __toString()
  {
    return parent::__toString().
            " Nb Client: ".$this->nbClient."<br>";
  }
}
