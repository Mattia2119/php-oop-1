<?php

 class Movie {

    public $titolo;
    public $anno;
    public $genere;
    public $durata;

    public function __construct($titolo, $genere, $anno){
        $this -> titolo = $titolo;
        $this -> genere = $genere;
        $this -> anno = $anno;
    }

    public function setDurata($durata){
      if (is_numeric($durata) && $durata > 0) {
          $this -> durata = $durata;
      } else {
          echo "Valore non valido";
      }
    }
 }

 $starWars = new Movie('StarWars: Una Nuova Speranza', 'Fantascienza', 1977);
 $starWars -> setDurata(2);

 echo $starWars->titolo .'<br>';
 echo $starWars->anno .'<br>';
 echo $starWars->genere .'<br>';
 echo $starWars->durata .'h'.'<br><br>';

 $harryPotter = new Movie('Harry Potter & La Pietra Filosofale', 'Fantasy',2000);
 $harryPotter -> setDurata(2);

 echo $harryPotter->titolo .'<br>';
 echo $harryPotter->anno .'<br>';
 echo $harryPotter->genere .'<br>';
 echo $harryPotter->durata .'h';

 ?>