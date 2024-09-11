<?php
$suits = ["Hearts", "Diamonds", "Clubs", "Spades"];
$cardvalues = ["2"=>2, "3"=>3, "4"=>4, "5"=>5, "6"=>6, "7"=>7, "8"=>8, "9"=>9, "10"=>10, "J"=>10, "Q"=>10, "K"=>10, "A"=>11 ];

$deck = [];
foreach ($suits as $suit) {
    foreach ($cardvalues as $key => $value) {
        $deck[] = ["suit" => $suit, "value" => $key, "points" => $value];
    }
}
shuffle($deck);

$player_1_hand = [];
function deal($deck) {
    $player1=[];
    $player2=[];

    for ($i=0; $i < 2; $i++) { //<2 for two cards, so two loop  
        $player1[]=
            array_pop($deck);
        $player2[] =
            array_pop($deck);
    }

    return ['Player 1' => $player1, 'Player 2' => $player2];
}











