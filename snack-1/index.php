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
// Print all matches in format: Home Team - Away Team | Home Scores - Away Scores
for ($i = 0; $i < count($basketball_matches); $i++) {
    $results = $basketball_matches[$i];
    echo $results["HomeTeam"]." - ".$results["AwayTeam"]." | ".$results["HomeScores"]." - ".$results["AwayScores"]."<br>";
}

?>