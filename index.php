<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-commerce</title>

    <?php require_once("./data/db.php"); ?>

</head>
<body>
    
    <h1>Food</h1>

    <?php

        foreach ($foods as $food) {
            
            ?> 
            
                <div>
                    <h3>
                        [<?php echo $food -> getCategory() -> getName(); ?>]
                        <?php echo $food -> getName(); ?>
                    </h3>
                    <div>Peso: <?php echo $food -> getWeight() ?>Kg</div>
                    <div>Prezzo: <?php echo $food -> getPrice() ?>E</div>
                    <div>Data scadenza: <?php echo $food -> getExpireDate() ?></div>
                </div>
            
            <?php
        }

    ?>

    <h1> Toys </h1>

    <?php

        foreach ($toys as $toy) {
            
            ?> 
            
                <div>
                    <h3>
                        [<?php echo $toy -> getCategory() -> getName(); ?>]
                        <?php echo $toy -> getName(); ?>
                    </h3>
                    <div>Peso: <?php echo $toy -> getWeight() ?>Kg</div>
                    <div>Prezzo: <?php echo $toy -> getPrice() ?>E</div>
                    <div>Colore: <?php echo $toy -> getColor() ?></div>
                    <div>Eta' consigliata: <?php echo $toy -> getAge() ?></div>
                </div>
            
            <?php
        }

    ?>

</body>
</html>