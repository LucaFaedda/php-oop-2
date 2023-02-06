<?php

    include __DIR__.'/database.php';


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>OOP-2</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12  m-5">
                <?php foreach($prodotti as $item){ ?>
                    <div class="card" style="width: 18rem;">
                        <img src=" <?php echo $item->$immagine;
                        ?>" class="card-img-top" alt="...">
                        <div class="card-body ">
                            <h5 class="card-title"><?php echo $item->name;
                            ?></h5>
                            <p><?php echo "Categoria: ".$item->categoria."<br>"."Prezzo: ".$item->prezzo;
                            ?></p>
                            <p class="card-text"><?php if($item->caratteristica){
                                echo $item->caratteristica;

                            }
                            else{
                                echo $item->peso;
                            };
                            ?></p>
                        </div>
                    </div>
               <?php }?>
            </div>
        </div>
    </div>
</body>
</html>