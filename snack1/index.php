<?php
$matches = [
    [
        "homeTeam" => "Milano",
        "visitingTeam" => "Cantù",
        "homeScore" => 92,
        "visitingScore" => 53,
    ],
    [
        "homeTeam" => "Messina",
        "visitingTeam" => "Catania",
        "homeScore" => 100,
        "visitingScore" => 69,
    ],
    [
        "homeTeam" => "Roma",
        "visitingTeam" => "Bologna",
        "homeScore" => 62,
        "visitingScore" => 73,
    ],
    [
        "homeTeam" => "Parma",
        "visitingTeam" => "Benevento",
        "homeScore" => 87,
        "visitingScore" => 86,
    ],
];
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
    <ul>
        <?php
        for ($i = 0; $i < count($matches); $i++) {
            $currentMatch = $matches[$i];
        ?>
            <li>
                <?php echo $currentMatch["homeTeam"]; ?>
                -
                <?php echo $currentMatch["visitingTeam"]; ?>
                |
                <?php echo $currentMatch["homeScore"]; ?>
                -
                <?php echo $currentMatch["visitingScore"]; ?>
            </li>
        <?php } ?>
    </ul>
</body>

</html>