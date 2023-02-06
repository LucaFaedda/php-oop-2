<?php

    class Accessorio extends Prodotto{
        public $dimensione;
        public $materiale;

        public function __construct($name, $prezzo, $categoria, $immagine, $dimensione, $materiale ){
            parent ::__construct($name, $prezzo, $categoria, $immagine);
            $this->dimensione = $dimensione;
            $this->materiale = $materiale;


        }

         //sovrascrivo il metodo di prodotto

        public function getProduct(){
            return parent ::getProduct()."<p><strong>Descrizione: </strong>".$this->dimensione."<br>"."<strong>Dimensione: </strong>".$this->materiale."</p>";

         }
    }

?>