<?php

    class Accessorio extends Prodotto{
        public $dimensione;
        public $materiale;

        public function __construct($name, $prezzo, $categoria, $immagine, $dimensione, $materiale ){
            parent ::__construct($name, $prezzo, $categoria, $immagine);
            $this->dimensione = $dimensione;
            $this->materiale = $materiale;


        }

        public function getProduct(){
            return parent ::getProduct()."<h1>Accessorio</h1>".$this->dimensione.$this->materiale;
         }
    }

?>