

//===============================TRACCIA 2 ================================

<?php


$sum = 0;
$count = 0;

$nums = [25, 30, 70, 80, 10, 33, 27, 9];

echo "Numeri pari trovati: ";

foreach($nums as $num){
    if($num%2==0){
        echo "$num";
       $sum+=$num;
        $count++;
    }
}

echo "\n";

$media = $sum/$count;

echo "La media dei numeri pari è: $media";

