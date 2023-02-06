<?php

    include __DIR__.'/Models/Prodotto.php';
    include __DIR__.'/Models/Giocattolo.php';
    include __DIR__.'/Models/Cibo.php';


    echo "<pre>";

    $prodotto  = new Prodotto('Cuccia', '54euro','cane','img');
    var_dump($prodotto);

    //sezione Giochi

    $nobby = new Giocattolo('Nobby','3.71 Euro', 'cane','https://m.media-amazon.com/images/I/31MgbJi75aL._AC_SX450_.jpg','Pollo in lattice per far divertire il tuo cane','Large 47 cm');
    $piuma = new Giocattolo('Asta con Piuma','4.99 Euro', 'gatto','https://m.media-amazon.com/images/I/318bQViJpML._AC_SY450_.jpg','Asta con Piuma in cima, agitala per non far ingrassare il tuo gatto','25 x 1 x 1 cm');

    //sezione Cibo

    $royal_canin = new Cibo('Royal Canin','47.62 Euro', 'cane','https://m.media-amazon.com/images/I/61mmOAWbpWL._AC_SY450_.jpg','Crocchette','3kg');
    $royal_gattin = new Cibo('Royal Gattin','38.96 Euro', 'gatto','https://m.media-amazon.com/images/I/51Dtb9qk02L._AC_SY679_.jpg','Crocchette','3kg');
    $vermi_uccelli = new Cibo('EWL','32.95 Euro', 'uccello','https://m.media-amazon.com/images/I/81RsK97o2DL._AC_SX466_.jpg','Vermi essicati','2kg');
    $mangime_pesci = new Cibo('Haquoss Marine Gran Gourmet','6.70 Euro', 'pesce','https://m.media-amazon.com/images/I/61mFNEJsUNS._AC_SX466_.jpg','Granulato','80g');



    var_dump($nobby);
    var_dump($piuma);
    var_dump($royal_canin);
    var_dump($royal_gattin);
    var_dump($vermi_uccelli);
    var_dump($mangime_pesci);
    

?>