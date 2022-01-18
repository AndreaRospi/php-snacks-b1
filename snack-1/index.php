<?php 
$partita = [
    [
    "squadraCasa" => "Chiacago Bulls",
    "puntiCasa" => 98,
    "squadraOspite" => "Boston Celtics",
    "puntiOspite" => 92,
    ],
    [
    "squadraCasa" => "Cheveland Cavaliers",
    "puntiCasa" => 102,
    "squadraOspite" => "Golden State Warriors",
    "puntiOspite" => 112,
    ],
    [
    "squadraCasa" => "Los Angeles Lakers",
    "puntiCasa" => 115,
    "squadraOspite" => "Detroit Pistons",
    "puntiOspite" => 113,
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
    <h2>Partite Giocate</h2>
    <?php
    for($i = 0; $i < count($partita); $i++){
    echo "<div>"{$partita[$i]["sqaudraCasa"]} . "-" {$partita[$i]["sqaudraOspite"]} "</div>"
}
    ?>

</body>
</html>
