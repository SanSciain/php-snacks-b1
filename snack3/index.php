<?php

$posts = [

    '10/01/2019' => [
        [
            'title' => 'Post 1',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 1'
        ],
        [
            'title' => 'Post 2',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 2'
        ],
    ],
    '10/02/2019' => [
        [
            'title' => 'Post 3',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 3'
        ]
    ],
    '15/05/2019' => [
        [
            'title' => 'Post 4',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 4'
        ],
        [
            'title' => 'Post 5',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 5'
        ],
        [
            'title' => 'Post 6',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 6'
        ]
    ],
];

$keyDate = array_keys($posts);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Posts</h1>
    <?php
    for ($i = 0; $i < count($keyDate); $i++) {
        $currentDate = $posts[$keyDate[$i]];

    ?>
        <h2> <?php echo $currentDate ?></h2>
        <ul>
            <?php
            for ($j = 0; $j < count($currentDate); $j++) {
                $currentPost = $currentDate[$j];
            ?>
                <li>
                    Titolo: <?php echo $currentPost["title"] ?>
                    <br>
                    Autore: <?php echo $currentPost["author"] ?>
                    <br>
                    Testo: <?php echo $currentPost["text"] ?>
                </li>
            <?php
            }
            ?>
        </ul>
    <?php
    }

    ?>
</body>

</html>