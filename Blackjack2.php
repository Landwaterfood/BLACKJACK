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
while()
//$player_2_hand = [];










