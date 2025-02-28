<?php

//=================================TRACCIA1=========================


$users =[

    ["name" => "Davide", "Cognome" => "Cariola", "Genere" => "Uomo"],
    ["name" => "Maria", "Cognome" => "Pascoli", "Genere" => "Donna"],
    ["name" => "Luca", "Cognome" => "Ariota", "Genere" => "NB"]

];

foreach($users as $user){
    if($user["Genere"] == "Donna"){
        echo "Buongiorno Signora {$user["name"]} {$user["Cognome"]} \n";
      
    } elseif($user["Genere"] == "Uomo"){
        echo "Buongiorno Signore {$user["name"]} {$user["Cognome"]}\n";

    } elseif($user["Genere"] == "NB") {
        echo "Buongiorno {$user["name"]} {$user["Cognome"]}\n";

    } else{
        "Buongiorno";
    }

}




