<?php

    class Giocattolo extends Prodotto{
        public $caratteristica;
        public $dimensione;


        public function __construct($name, $prezzo, $categoria, $immagine, $caratteristica, $dimensione){
            parent ::__construct($name, $prezzo, $categoria, $immagine);
            $this->caratteristica = $caratteristica;
            $this->dimensione = $dimensione;

        }

        public function getProduct(){
           return parent ::getProduct()."<p>".$this->caratteristica."<br>".$this->dimensione."</p>";
        }
    }

?>