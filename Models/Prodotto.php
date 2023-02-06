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

        //scrivo un metodo che mi permette di stamapre tutte le informazioni in comune

        public function getProduct(){
            return "<h2 class='text-danger'>".$this->name."</h2>"."<h3>".$this->categoria."</h3>"."<strong>Prezzo: </strong>".$this->prezzo;
        }

    
    }

?>