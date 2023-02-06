<?php

    include __DIR__.'/Models/Prodotto.php';
    include __DIR__.'/Models/Giocattolo.php';


    echo "<pre>";

    $prodotto  = new Prodotto('Cuccia', '54euro','cane','img');
    var_dump($prodotto);

    //sezione Giochi

    $nobby = new Giocattolo('Nobby','3.71 Euro', 'cane','https://m.media-amazon.com/images/I/31MgbJi75aL._AC_SX450_.jpg','Pollo in lattice per far divertire il tuo cane','Large 47 cm');
    $piuma = new Giocattolo('Asta con Piuma','4.99 Euro', 'gatto','https://m.media-amazon.com/images/I/318bQViJpML._AC_SY450_.jpg','Asta con Piuma in cima, agitala per non far ingrassare il tuo gatto','25 x 1 x 1 cm');


    var_dump($nobby);
    

?>