<?php
$suits = ["Hearts", "Diamonds", "Clubs", "Spades"];
$cardvalues = ["2"=>2, "3"=>3, "4"=>4, "5"=>5, "6"=>6, "7"=>7, "8"=>8, "9"=>9, "10"=>10, "J"=>10, "Q"=>10, "K"=>10, "A"=>11 ];

$deck = [];
foreach ($suits as $suit)
{
    foreach ($cardvalues as $key => $value)
    {
        $deck[] = ["suit" => $suit, "value" => $key, "points" => $value];
    }
}

shuffle($deck);


$player1=[];
$player2=[];

$player1[] = array_pop($deck);
$player1[] = array_pop($deck);

$player2[] = array_pop($deck);
$player2[] = array_pop($deck);


$player1card1 = $player1[0];
$p1sum = $player1card1['points'];
$player1card2 = $player1[1];
$p1sum += $player1card2['points'];
//echo $p1sum;

$player2card1 = $player2[0];
$p2sum = $player2card1['points'];
$player2card2 = $player2[1];
$p2sum += $player2card2['points'];
//echo $p2sum;

var_dump($p2sum);var_dump($p1sum);

if (($p1sum>21) && ($p2sum>21)) {
    echo "Draw";
}

elseif (($p1sum == $p2sum) && ($p1sum <= 21)){
    echo "Draw";
}

elseif ($p2sum>$p1sum && ($p1sum <= 21)) {
    echo "player 2 wins";
}
else {
    echo "player 1 wins";
}

if (($p2sum>21) && ($p1sum<=21)) {}
    echo "player 1 wins";
}

elseif (($p2sum > 21) && ($p1sum <= 21)) {
    echo "player 2 wins";
}
