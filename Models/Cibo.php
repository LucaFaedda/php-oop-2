<?php

    class Cibo extends Prodotto{
        public $peso;
        public $tipologia;


        public function __construct($name, $prezzo, $categoria, $immagine, $tipologia, $peso){
            parent ::__construct($name, $prezzo, $categoria, $immagine);
            $this->tipologia = $tipologia;
            $this->peso = $peso;

        }

        public function getProduct(){
            return parent ::getProduct()."<h1>Cibo</h1>".$this->tipologia.$this->peso;
         }
    }

?>