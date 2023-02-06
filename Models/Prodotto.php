<?php

    class Prodotto{
        public $name;
        public $prezzo;
        public $categoria;
        public $immagine;

        public function __construct($name, $prezzo, $categoria, $immagine){
            $this->name = $name;
            $this->prezzo = $prezzo;
            $this->categoria = $categoria;
            $this->immagine = $immagine;
        }

        public function getProduct(){
            return "<h3>".$this->categoria."</h3>"."<strong>Prezzo: </strong>".$this->prezzo;
        }
    
    }

?>