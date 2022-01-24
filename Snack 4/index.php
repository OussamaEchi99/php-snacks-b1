<!-- ## Snack 4
Prendere un paragrafo abbastanza lungo, contenente diverse frasi. 
Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo. -->
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
        $text = 
            '
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Similique ipsam, quisquam accusamus debitis aut blanditiis illum molestias vel nesciunt corporis aperiam voluptatem mollitia sit et, alias nisi ea perspiciatis! Nemo.
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, mollitia deserunt reprehenderit impedit excepturi inventore sit, fugiat quod ipsa nisi neque ipsum voluptatem harum illum sint maiores commodi eius et.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas soluta assumenda modi tenetur vitae dolorum deleniti. Corporis, temporibus optio? Explicabo unde libero quo? Deserunt, reprehenderit. Earum dolores doloremque unde architecto!
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni eaque esse nobis vitae voluptas repellat sit, necessitatibus amet a aliquid non nam modi officia. Asperiores eos quaerat esse deleniti ipsum.
            ';
        $paragraph = [] ;
    
    ?>
    <p>
        
    </p>

    <p><?php ?></p>

    <?php $paragraph[] = explode('.', $text); ?>
    <?php  var_dump($paragraph); ?>
</body>
</html>

<!-- <?php ?> -->