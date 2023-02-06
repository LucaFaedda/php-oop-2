<?php

    class Giocattolo extends Prodotto{
        public $caratteristica;
        public $dimensione;


        public function __constructor($name, $prezzo, $categoria, $immagine, $caratteristica, $dimensione){
            parent ::__constructor($name, $prezzo, $categoria, $immagine);
            $this->caratteristica = $caratteristica;
            $this->dimensione = $dimensione;

        }
    }

?>