<?php

    include __DIR__.'/Models/Prodotto.php';
    include __DIR__.'/Models/Giocattolo.php';
    include __DIR__.'/Models/Cibo.php';
    include __DIR__.'/Models/Accessorio.php';


    //sezione Giochi

    $nobby = new Giocattolo('Nobby','3.71 Euro', '<i class="fa-solid fa-dog"></i> Cane','https://m.media-amazon.com/images/I/31MgbJi75aL._AC_SX450_/200/300/.jpg?w=250','Pollo in lattice per far divertire il tuo cane','Large 47 cm');
    $piuma = new Giocattolo('Asta con Piuma','4.99 Euro', '<i class="fa-solid fa-cat"></i> Gatto','https://m.media-amazon.com/images/I/318bQViJpML._AC_SY450_.jpg','Asta con Piuma in cima, agitala per non far ingrassare il tuo gatto','25 x 1 x 1 cm');
    $pietypet = new Giocattolo('PietyPet per Pappagallo','22.99 Euro', '<i class="fa-solid fa-kiwi-bird"></i> Uccello','https://m.media-amazon.com/images/I/71sm76+QR+L._AC_SY450_.jpg','Brillanti giocattoli di legno e suoni di campane frizzanti per attirare l\'attenzione del tuo amico','12 "* 14" / 30cm * 35cm');

    //sezione Cibo

    $royal_canin = new Cibo('Royal Canin','47.62 Euro', '<i class="fa-solid fa-dog"></i> Cane','https://m.media-amazon.com/images/I/61mmOAWbpWL._AC_SY450_.jpg','Crocchette','3kg');
    $royal_gattin = new Cibo('Royal Gattin','38.96 Euro', '<i class="fa-solid fa-cat"></i> Gatto','https://m.media-amazon.com/images/I/51Dtb9qk02L._AC_SY679_.jpg?w=250','Crocchette','3kg');
    $vermi_uccelli = new Cibo('EWL','32.95 Euro', '<i class="fa-solid fa-kiwi-bird"></i> Uccello','https://m.media-amazon.com/images/I/81RsK97o2DL._AC_SX466_.jpg','Vermi essicati','2kg');
    $mangime_pesci = new Cibo('Haquoss Marine Gran Gourmet','6.70 Euro', '<i class="fa-solid fa-fish-fins"></i> Pesce','https://m.media-amazon.com/images/I/61mFNEJsUNS._AC_SX466_.jpg','Granulato','80g');

    // sezione Accessori

    $groot = new Accessorio('SLOCME Thinking Groot','16.99 Euro', '<i class="fa-solid fa-fish-fins"></i> Pesce','https://m.media-amazon.com/images/I/71cGkHnA4NL._AC_SY355_.jpg','10P x 11L x 13H','Resina');
    $castello = new Accessorio('FEANDREA','49.99 Euro', '<i class="fa-solid fa-cat"></i> Gatto','https://m.media-amazon.com/images/I/71Q3RaQPr+L._AC_SX466_.jpg','30L x 3l x 118H','Pannello di Truciolato, Peluche, Sisal');

    $prodotti = [
        $nobby,
        $piuma,
        $pietypet,
        $royal_canin,
        $royal_gattin,
        $vermi_uccelli,
        $mangime_pesci,
        $groot,
        $castello
    ];

    // var_dump($prodotti);






    // var_dump($nobby);
    // var_dump($piuma);
    // var_dump($pietypet);
    // var_dump($royal_canin);
    // var_dump($royal_gattin);
    // var_dump($vermi_uccelli);
    // var_dump($mangime_pesci);
    // var_dump($grott);
    // var_dump($castello);
    

?>