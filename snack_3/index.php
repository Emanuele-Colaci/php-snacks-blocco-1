<?php

    $posts = [
        '10/01/2019' => [
            [
                'title' => 'Primo Post',
                'author' => 'Mario Rossi',
                'text' => 'Questo è il primo post personalizzato.'
            ],
            [
                'title' => 'Secondo Post',
                'author' => 'Giulia Bianchi',
                'text' => 'Questo è il secondo post personalizzato.'
            ],
        ],
        '10/02/2019' => [
            [
                'title' => 'Terzo Post',
                'author' => 'Luca Verdi',
                'text' => 'Questo è il terzo post personalizzato.'
            ]
        ],
        '15/05/2019' => [
            [
                'title' => 'Quarto Post',
                'author' => 'Sara Neri',
                'text' => 'Questo è il quarto post personalizzato.'
            ],
            [
                'title' => 'Quinto Post',
                'author' => 'Marco Gialli',
                'text' => 'Questo è il quinto post personalizzato.'
            ],
            [
                'title' => 'Sesto Post',
                'author' => 'Anna Rossi',
                'text' => 'Questo è il sesto post personalizzato.'
            ]
        ],
        '20/07/2019' => [
            [
                'title' => 'Settimo Post',
                'author' => 'Paolo Verdi',
                'text' => 'Questo è il settimo post personalizzato.'
            ],
            [
                'title' => 'Ottavo Post',
                'author' => 'Laura Bianchi',
                'text' => 'Questo è l\'ottavo post personalizzato.'
            ],
        ],
        '01/12/2019' => [
            [
                'title' => 'Nono Post',
                'author' => 'Giovanni Rossi',
                'text' => 'Questo è il nono post personalizzato.'
            ]
        ]
    ];

    foreach ($posts as $date => $postArray) {
        echo '<div class="post-container">';
        echo '<h3>Data: ' . $date . '</h3>';
        echo '<div class="posts">';
        foreach ($postArray as $post) {
            echo '<div class="post">';
            echo '<h4>' . $post['title'] . '</h4>';
            echo '<p><strong>Autore:</strong> ' . $post['author'] . '</p>';
            echo '<p>' . $post['text'] . '</p>';
            echo '</div>';
        }
        echo '</div>';
        echo '</div>';
    }

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Snack 3</title>
        <style>
            body{
                font-family: Arial, sans-serif;
                padding: 20px;
            }

            .post-container{
                margin-bottom: 20px;
            }

            .post-container h3{
                margin-bottom: 5px;
                color: red;
            }
        </style>
    </head>
    <body>
        
    </body>
</html>
