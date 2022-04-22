<?php
//create 1 array of numbers
//create 1 array of suites
//shuffle the decks 
//divide cards by 2 and insert new deck into new array
//alternate using modulo 
//echo 52 cards sur web page in 4 rwos and 13 cards

$cartes=[1,2,3,4,5,6,7,8,9,10,11,12,13];
$suites=["carreau","trefle","coeur","pique"];
$deck=[];
//first card is carreau 1 and last card is pique 13
for($i = 0; $i < count($suites); ++$i){
    for($j = 0; $j < count($cartes); ++$j){
        $deck[] = $suites[$i]."g".$cartes[$j];
        echo $deck[$j]; 
    }
 
}

echo $deck;


// *deck=[carreau 1, carreau 2, carreau 3,]
// *deck=[($suite[$i])($cartes[$j]), carreau 2, carreau 3,]

?>

