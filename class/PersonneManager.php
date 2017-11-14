<?php

class PersonneManager
{
  private $personnes = [];

  //Singleton ( La classe ne peut être instanciée qu'une fois)
  //Pour cela on crée une propriété de classe ( static ) qui contiendra l'instance unique
  //On donne accès à cette propriete par un getter de classe: getInstance
  //On bloque la possibilité de faire un new en rendant __construct privé
  //On bloque la possibilité de cloner l'objet en rendant __clone privé
  private static $instance;


  public static function getInstance()
  {
    if( !self::$instance )
    {
      echo "Personne Manager crée. <br>";
      self::$instance = new PersonneManager();
    }

    return self::$instance;
  }

  private function __construct()
  {
  }

  private function __clone()
  {
  }

  //Fabrique
  public function addConseiller($prenom, $nom)
  {
    $conseiller = new Conseiller($prenom, $nom);

    array_push($this->personnes, $conseiller);

    return $conseiller;
  }

  public function addClient($prenom, $nom, $conseiller)
  {
    $client = new Client($prenom, $nom, $conseiller);
    array_push($this->personnes, $client) ;

    return $client;
  }
}
