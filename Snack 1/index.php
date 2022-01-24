<!-- ## Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario.
Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa
e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 -->

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
    $match = [
        [
            'guest' => 'Denver Nuggets',
            'home' => 'Minnesota Timberwolves',
            'points_team_guest' => 10,
            'points_team_home' => 7
        ],
        [
            'guest' => 'Oklahoma City Thunder',
            'home' => 'Portland Trail Blazers',
            'points_team_guest' => 21,
            'points_team_home' => 14
        ],
        [
            'guest' => 'Utah Jazz',
            'home' => 'Chicago Bulls',
            'points_team_guest' => 15,
            'points_team_home' => 22
        ],
    ];
?>

<?php for ($i=0; $i < count($match); $i++) { ?>
    <?php $this_match = $match[$i]; ?>
    <div>
        <h2><?php echo $this_match['guest']; ?> vs <?php echo $this_match['home']; ?></h2>
        <span><?php echo $this_match['guest']; ?> : <?php echo $this_match['points_team_guest']; ?> points</span>
        <span>||</span>
        <span><?php echo $this_match['home']; ?> : <?php echo $this_match['points_team_home']; ?> points</span>
    </div>
    <?php } ?>

</body>
</html>

<?php ?>