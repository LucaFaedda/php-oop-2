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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./css/style.css">
    <title>OOP-2</title>
</head>
<body>
    <div class="container">
        <div class="row my-5">
            <div class="col-12 text-center my-4">
                <h1 class="text-danger">Boolshop</h1>
            </div>
            <div class="col-12 d-flex flex-wrap justify-content-center ">
                <?php foreach($prodotti as $item){ ?>
                    <div class="card d-flex justify-content-around m-2 " style="width: 20rem;">
                        <div class="my-2 mx-1 pb-3 border-bottom">
                            <img src="<?php echo $item->immagine;?>" class="card-img-top immagine" alt="<?php $item->name ?>">
                        </div>
                        <div class="card-body">
                            <?php echo $item->getProduct();?>
                        </div>
                    </div>
                <?php }?>
            </div>
        </div>
    </div>
</body>
</html>