<?php
//Set an array that contains basket matches
$basketball_matches = [
    //$basketball_matches contains match info (Home Team, Away Team and their respective score) as associative array
    [
        'HomeTeam' => 'Olimpia Milano',
        'AwayTeam' => 'Virtus Bologna',
        'HomeScores' => 77,
        'AwayScores' => 62,
    ],
    [
        'HomeTeam' => 'Venezia',
        'AwayTeam' => 'Gran Canaria',
        'HomeScores' => 72,
        'AwayScores' => 83,
    ],
    [
        'HomeTeam' => 'Trento',
        'AwayTeam' => 'VL Pesaro',
        'HomeScores' => 88,
        'AwayScores' => 74,
    ],
    [
        'HomeTeam' => 'Valencia',
        'AwayTeam' => 'Brescia',
        'HomeScores' => 79,
        'AwayScores' => 53,
    ],
];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack-1</title>
</head>

<body>
    <div>
        <ul>
        <!-- Print all matches in format: Home Team - Away Team | Home Scores - Away Scores -->
            <?php for ($i = 0; $i < count($basketball_matches); $i++) : $results = $basketball_matches[$i]; ?>
                <li><?= "{$results["HomeTeam"]} - {$results["AwayTeam"]} | {$results["HomeScores"]} - {$results["AwayScores"]}"; ?></li>
            <?php endfor; ?>
        <!-- /Print all matches in format: Home Team - Away Team | Home Scores - Away Scores -->
        </ul>
    </div>
</body>

</html>