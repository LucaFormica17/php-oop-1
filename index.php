<?php
    class Movie{
        public $titolo;
        public $genere;
        public $data_uscita;
        public $durata;
        public $lingua_originale;
        public $yearsOld;

        function __construct($_titolo, $_genere, $_data_uscita){
            $this->titolo = $_titolo;
            $this->genere = $_genere;
            $this->data_uscita = $_data_uscita;
        }

        public function setYearsOld(){
            $this->yearsOld = 2024 - $this->data_uscita;
        }

        public function getYearsOld(){
            return $this->yearsOld;
        }
    }


    $film_1 = new Movie('Inception', 'Sci-fi', 2010);
    $film_1->durata = '2h 28min';
    $film_1->lingua_originale = 'Inglese';
    $film_1->setYearsOld();


    $film_2 = new Movie('Shutter Island', 'Thriller', 2010);
    $film_2->durata = '2h 18min';
    $film_2->lingua_originale = 'Inglese';
    $film_2->setYearsOld();


    echo "Titolo: ".$film_1->titolo.". Genere: ".$film_1->genere.". Durata: ".$film_1->durata.". Anno di uscita: ".$film_1->data_uscita.". Compie ".$film_1->yearsOld." anni. Lingua originale: ".$film_1->lingua_originale.".";

    echo "<br>";

    echo "Titolo: ".$film_2->titolo.". Genere: ".$film_2->genere.". Durata: ".$film_2->durata.". Anno di uscita: ".$film_2->data_uscita.". Compie ".$film_2->yearsOld." anni. Lingua originale: ".$film_2->lingua_originale.".";
?>