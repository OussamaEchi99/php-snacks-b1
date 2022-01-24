<!-- ## Snack 3
Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 3</title>
</head>
<body>
    <?php 
        $numbers = [];
    ?>
    <?php while (count($numbers) < 15) {?>
        <?php $random_number = rand(1, 100); ?>
        <?php if (in_array($random_number, $numbers) === false) {?>
            <span><?php echo $random_number; ?></span>
            <?php $numbers[] = $random_number; ?>
        <?php } ?>
    <?php } ?>
    <?php var_dump($numbers);?>
</body>
</html>

<?php ?>