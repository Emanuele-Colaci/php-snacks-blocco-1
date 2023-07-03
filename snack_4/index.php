<?php

    $numbers = array();

    while(count($numbers) < 15){
        $randomNumber = rand(1, 100);
        
        if(!in_array($randomNumber, $numbers)){
            $numbers[] = $randomNumber;
        }
    }

    var_dump($numbers);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 4</title>
</head>
<body>
    
</body>
</html>
