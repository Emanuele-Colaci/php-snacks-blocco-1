<?php

    $partite = [
        [
            'squadra_casa' => 'Squadra A',
            'squadra_ospite' => 'Squadra B',
            'punti_casa' => rand(1, 100),
            'punti_ospite' => rand(1, 100)
        ],
        [
            'squadra_casa' => 'Squadra C',
            'squadra_ospite' => 'Squadra D',
            'punti_casa' => rand(1, 100),
            'punti_ospite' => rand(1, 100)
        ],
        [
            'squadra_casa' => 'Squadra E',
            'squadra_ospite' => 'Squadra F',
            'punti_casa' => rand(1, 100),
            'punti_ospite' => rand(1, 100)
        ],
    ];

    // Stampa le partite
    foreach ($partite as $partita) {
        echo $partita['squadra_casa'] . ' - ' . $partita['squadra_ospite'] . ' | ' . $partita['punti_casa'] . ' - ' . $partita['punti_ospite'] . '<br>';
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 1</title>
</head>
<body>
    
</body>
</html>
