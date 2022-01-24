<!-- Utilizzare questo array: https://pastebin.com/CkX3680A.
Stampiamo il nostro array mettendo gli insegnanti in un rettangolo grigio e i PM in un rettangolo verde. -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php 
        $db = [
            'teachers' => [
                [
                    'name' => 'Michele',
                    'lastname' => 'Papagni'
                ],
                [
                    'name' => 'Fabio',
                    'lastname' => 'Forghieri'
                ]
            ],
            'pm' => [
                [
                    'name' => 'Roberto',
                    'lastname' => 'Marazzini'
                ],
                [
                    'name' => 'Federico',
                    'lastname' => 'Pellegrini'
                ]
            ]
        ];
    ?>

    <div class="container">
        <div class="teachers">
            <h1>Teachers</h1>
            <ul>
            <?php for ($i=0; $i < 1; $i++) { ?>
                <?php $teachers = $db[teachers]; ?>
                <?php for ($k=0; $k < count($teachers); $k++) {?>
                    <?php $this_teacher = $teachers[$k]; ?>
                    <li><?php echo $this_teacher['name']; ?> <?php echo $this_teacher['lastname']; ?></li>
                <?php }?>
            <?php }?>
            </ul>
        </div>
        <div class="pms">
            <h1>PM</h1>
            <ul>
            <?php for ($i=0; $i < 1; $i++) { ?>
                <?php $pms = $db[pm]; ?>
                <?php for ($k=0; $k < count($pms); $k++) {?>
                    <?php $this_pm = $pms[$k]; ?>
                    <li><?php echo $this_pm['name']; ?> <?php echo $this_pm['lastname']; ?></li>
                <?php }?>
            <?php }?>
            </ul>
        </div>
    </div>
</body>
</html>

<!-- <?php ?> -->