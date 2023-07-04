<?php

    // Verifica se i parametri GET sono stati inviati
    if(isset($_GET['name']) && isset($_GET['mail']) && isset($_GET['age'])) {
        // Ottieni i valori dei parametri GET
        $name = $_GET['name'];
        $mail = $_GET['mail'];
        $age = $_GET['age'];

        // Verifica le condizioni richieste
        if(strlen($name) > 3 && strpos($mail, '@') !== false && strpos($mail, '.') !== false && is_numeric($age)) {
            echo "Accesso riuscito";
        }else{
            echo "Accesso negato";
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Snack 2</title>
        <style>
            body {
                font-family: Arial, sans-serif;
            }

            form {
                max-width: 300px;
                margin: 0 auto;
                padding: 20px;
                background-color: #f1f1f1;
                border: 1px solid #ccc;
                border-radius: 5px;
            }

            label {
                display: block;
                margin-bottom: 10px;
            }

            input[type="text"],
            input[type="email"],
            input[type="number"] {
                width: 100%;
                padding: 8px;
                margin-bottom: 10px;
                border: 1px solid #ccc;
                border-radius: 4px;
                box-sizing: border-box;
            }

            input[type="submit"] {
                background-color: #4CAF50;
                color: white;
                padding: 10px 15px;
                border: none;
                border-radius: 4px;
                cursor: pointer;
                font-weight: bold;
            }
        </style>
    </head>
    <body>
    <form action="" method="GET">
            <label for="name">Nome:</label>
            <input type="text" name="name" required><br>

            <label for="mail">Email:</label>
            <input type="email" name="mail" required><br>

            <label for="age">Età:</label>
            <input type="number" name="age" required><br>

            <input type="submit" value="Verifica Accesso">
        </form>
    </body>
</html>