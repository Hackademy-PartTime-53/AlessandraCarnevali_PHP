

//===================================TRACCIA 3================================


<?php


for($i = 1; $i <=100; $i ++){
    echo $i . "\n";

if($i%3==0&&$i%5==0){
    echo "HACKADEMY\n";


}elseif($i%5==0){
    echo "JAVASCRIPT\n";


}elseif($i%3==0){
    echo "PHP\n";

} else {

    echo"Nulla";
}

}


