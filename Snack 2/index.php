<!-- ## Snack 2
Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione)
che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola
e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $name = $_GET['name'];
    $age = $_GET['age'];
    $email = $_GET['email'];
    $name_length = strlen($name);
    $email_check_dominion = strpos($email, '@');
    $email_check_dot = strpos($email, '.');
    $age_check_number = is_numeric($age);
    ?>

    <?php if ($name_length > 3 && $email_check_dominion && $email_check_dot && $age_check_number) {?>
        <h1>Accesso riuscito</h1>
    <?php } else {?>
        <h1>Accesso negato</h1>
    <?php }?>
</body>
</html>

<?php ?>