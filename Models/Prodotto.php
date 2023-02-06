<?php

    class Prodotto{
        public $name;
        public $prezzo;
        public $categoria;
        public $immagine;

        public function __constructor($name, $prezzo, $categoria, $immagine){
            $this-> name = $name;
            $this -> prezzo = $prezzo;
            $this -> categoria = $categoria;
            $this -> immagine = $immagine;
        }
    
    }

?>