<?php
// Creare un array $matches che contiene dei sotto-array, i quali rappresentano delle partite di basket.
// ogni partita avrà le seguenti caratteristiche:
// squadra di casa
// squadra ospite
// punti fatti dalla squadra di casa
// punti fatti dalla squadra ospite
// L'obbiettivo è stampare a schermo tutte le partite utilizzando questo schema:
// [squadra di casa] - [squadra ospite] | [punti squadra di casa] - [punti squadra ospite]
// ad esempio:
// Olimpia Milano - Cantù | 55 - 60

    $matches = [
        [
            "home" => "Olimpia Milano",
            "away" => "Cantù",
            "scoreHome" => "55",
            "scoreAway" => "60",
        ],
        [
            "home" => "Brindisi",
            "away" => "Virtus Bologna",
            "scoreHome" => "70",
            "scoreAway" => "80",
        ],
        [
            "home" => "Trento",
            "away" => "Dinamo Sassari",
            "scoreHome" => "65",
            "scoreAway" => "68",
        ],
        [
            "home" => "Reggiana",
            "away" => "Brescia",
            "scoreHome" => "70",
            "scoreAway" => "77",
        ],
        [
            "home" => "Venezia",
            "away" => "Cremona",
            "scoreHome" => "78",
            "scoreAway" => "75",
        ],

    //end array matches
    ];

    //ciclo for e stampa degli array contenuti in matches / ad ohni ciclo mada a capo con <br>
    for ($i=0; $i < count($matches); $i++) {
        echo ($matches[$i]["home"] . "-" . $matches[$i]["away"] . " | " . $matches[$i]["scoreHome"] . "-" . $matches[$i]["scoreAway"]) . "<br>";
    }


    // ---------------- alternativa utilizzando il ciclo for each --------------------------
    //The foreach construct provides an easy way to iterate over arrays. foreach works only on arrays and objects, and will issue an error when you try to use it on a variable with a different data type or an uninitialized variable. There are two syntaxes:

                                        // foreach (iterable_expression as $value)
                                        //     statement
                                        // foreach (iterable_expression as $key => $value)
                                        //     statement

    // cambio la struttura dell'array
    $matches = [
        "match1" => [
            "home" => "Olimpia Milano",
            "away" => "Cantù",
            "scoreHome" => "55",
            "scoreAway" => "60",
        ],
        "match2" => [
            "home" => "Brindisi",
            "away" => "Virtus Bologna",
            "scoreHome" => "70",
            "scoreAway" => "80",
        ],
        "match3" => [
            "home" => "Trento",
            "away" => "Dinamo Sassari",
            "scoreHome" => "65",
            "scoreAway" => "68",
        ],
        "match4" => [
            "home" => "Reggiana",
            "away" => "Brescia",
            "scoreHome" => "70",
            "scoreAway" => "77",
        ],
        "match5" => [
            "home" => "Venezia",
            "away" => "Cremona",
            "scoreHome" => "78",
            "scoreAway" => "75",
        ],
    ];

    foreach ($matches as $currentMatch) {
        echo $currentMatch ["home"] . " " . $currentMatch ["away"] . " " . " | " . " " .
        $currentMatch ["scoreHome"] . " " . $currentMatch ["scoreAway"] . "<br>" ;
    }

?>
