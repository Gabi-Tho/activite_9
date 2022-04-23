<?php
//create 1 array of numbers
//create 1 array of suites
//create empty deck
//COCKED THE DECK (CONCACTENATION HAPPENED)
//divide cards by 2 and insert new deck into new array (in order to shuffle)
//shuffle
//echo 52 cards sur web page in 4 rows and 13 cards
//create new shuffled deck

$cartes=[1,2,3,4,5,6,7,8,9,10,11,12,13];
$suites=["◇","♣","♥","♠"];
$deck=[];
//first card is carreau 1 and last card is pique 13
for($i = 0; $i < count($suites); ++$i){
    for($j = 0; $j < count($cartes); ++$j){
        $deck[] = $suites[$i]." ".$cartes[$j];
    }
}


$subDeck1 = array_slice($deck,0,26);
$subDeck2 = array_slice($deck,26,26);
$deckShuffled = [];
for ($i = 0; $i < count($subDeck1); ++$i){
    $deckShuffled[$i*2] = $subDeck1[$i];
    $deckShuffled[($i*2)+1] = $subDeck2[$i];
}

echo "<table>";
echo "<tr>";
for ($i = 0; $i < 13; ++$i){
    echo "<td>".$deckShuffled[$i]." ";
}
echo "</tr>";
echo "<tr>";
for ($i = 13; $i < 26; ++$i){
    echo"<td>". $deckShuffled[$i]." ";
}
echo "</tr>";
echo "<tr>";
for ($i = 26; $i < 39; ++$i){
    echo"<td>". $deckShuffled[$i]." ";
}
echo "</tr>";
echo "<tr>";
for ($i = 39; $i < 52; ++$i){
    echo"<td>". $deckShuffled[$i]." ";
}
echo "</tr>";
echo "</table>";




// $deckShuffled[$i*2] = $subDeck1[$i];
// $deckShuffled[($i*2)+1] = $subDeck2[$i];


// (o,x,o,x,o,x,o)






// 1 - 0 - 0 ( * 2 )
// 3 - 2 - 1
// 5 - 4 - 2
// 7 - 6 - 3

// 1 - 0
// 3 - 1
// 5 - 2
// 7 - 3

// $deckShuffled[1] = $subDeck2[0]

// $deckShuffled[3] = $subDeck2[1]

// $deckShuffled[5] = $subDeck2[2]

// $deckShuffled[7] = $subDeck2[3]


// $subDeck2 = array_slice($deck,26,26);
// for ($i = 0; $i < count($subDeck2); ++$i){
//     echo $subDeck2[$i]."<br>";
// }



// for ($i = 0; $i < count($deck); ++$i){
//     echo $deck[$i]."<br>";
// }


/*verifier et valider le contenu du deck en utlisant un boucle 

for($i=0; $i < count($deck); $i++){
    echo $deck[$i]."<br>";
}*/

// *deck=[carreau 1, carreau 2, carreau 3,]
// *deck=[($suite[$i])($cartes[$j]), carreau 2, carreau 3,]

// $subDeck1=[carreau 1, carreau 2, carreau 3] 
// subDeck1 contains the elements of $deck from 0 to 25
//$subDeck2=[coeur 1, coeur 2, coeur 3]
// subdeck2 contains the elements of $deck from 26 to 51



?>

