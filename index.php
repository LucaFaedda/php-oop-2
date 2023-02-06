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
            <div class="col-12 d-flex flex-wrap">
                <?php foreach($prodotti as $item){ ?>
                    <div class="card m-5 p-2 d-flex justify-content-around" style="width: 18rem">
                        <div class="d-flex justify-content-center">
                            <img src="<?php echo $item->immagine;
                            ?>" class=" w-50" alt="...">

                        </div>
                        <div >
                            <?php echo $item->getProduct(); // metodo per poter stampare le informazioni. 
                            ?>
                        </div>
                    </div>
               <?php }?>
            </div>
        </div>
    </div>
</body>
</html>