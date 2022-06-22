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
    echo $basketball_matches[$i]["HomeTeam"] . " - " . $basketball_matches[$i]["AwayTeam"] . " | " . $basketball_matches[$i]["HomeScores"] . " - " . $basketball_matches[$i]["AwayScores"] . "<br>";
}
?>