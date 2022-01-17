
<!-- DEFINIRE CLASSE Film:
    Attributi:
    - titolo
    - sottotiolo
    - regista

    Metodi:
    - costruttore che accetta titolo
    - getFullTitle: 
        Se sottotitolo presente:
        restituisce "titolo: sottotitolo" 
        Se sottotiolo assente:
        restituisce "titolo" 
- __toString: 
Se regista presente:
restituisce "fullTitle | regista"
    Se regista assente:
restituisce "fullTitle | ???"

    UTILIZZO OGGETTI Film:

    Generare 3 istanze della classe Film:
    - uno con solo il titolo
    - uno con titolo e sottotitolo
    - uno con titolo, sottotiolo e regista
    Stampare tutti gli oggetti tramite toString (implicito)
    
RISULTATO ATTESO:

    Matrix | ???
    Fantozzi 2: il ritorno di fantozzi | ???
    Peter Pan: il ritorno all'isola che non c'e' | Robin Budd -->

<?php

    class Movies {

        public $titlle;

        public $subtitle;

        public $director;

        public function __construct($title){
            
            $this -> title = $title;
        }

        public function getFullTitle(){
            if ($this -> subtitle <> ""){
                return $this -> title . ": " . $this -> subtitle;
            } else {
                return $this -> title;
            }
        }

        public function __toString(){
            if ($this -> director <> ""){
                return $this -> getFullTitle() . " | " . $this -> director;
            } else {
                return $this -> getFullTitle() . " | " . "???";
            }
        }
    }


    $movie1 = new Movies("Matrix");

    $movie2 = new Movies("Fantozzi 2");

    $movie3 = new Movies("Peter Pan");

    /* inizializziamo la variabile dei sottotitoli */

    $movie1 -> subtitle = "";

    $movie2 -> subtitle = "il ritorno di Fantozzi";

    $movie3 -> subtitle = "il ritorno all'isola che non c'è";

    /* inizializziamo la variabile dei registi */

    $movie1 -> director = "";

    $movie2 -> director = "";

    $movie3 -> director = "Robin Budd";

    echo $movie1 . "<br>";

    echo $movie2 . "<br>";

    echo $movie3 . "<br>";

?>
     