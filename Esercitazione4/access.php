


<?php

class Animal{
    public $race;
    protected $color;
    private $family;


public function __construct($razza, $colore, $famiglia)

{
$this->race=$razza;
$this->color=$colore;
$this->family=$famiglia;
}

//Ritorno il colore che è in Protected solo per leggerlo
public function getColor()
{
    return $this->color;
}


// Per cambiare il colore che era in Protected
public function setColor($new_color){
       return $this->color=$new_color;
}



public function getFamily(){
     return $this->family;
}


public function setFamily($new_family){
         return $this->family = $new_family;
}


}









//CREAZIONE OGGETTI
$Animal1 = new Animal ("Carlino", "Beige", "Cani");








//PUBLIC

/*Stampa Carlino con chiave PUBLIC

echo $Animal1->race . "\n";

//Cambio la razza del cane
 $Animal1->race= "Bassotto";

 //Stampa razza del cane cambiata
echo $Animal1->race . "\n";*/



//PROTECTED

//NON SI PUO LEGGERE E NE MODIFICARE FUORI DALLA CLASSE.

//UNA VOLTA RITORNATO IL VALORE SI PUò FARE DOPO AVER DATO GET IN ANIMAL

//echo $Animal1->getColor();

//CAMBIO IL COLORE DOPO AVER DATO SET IN ANIMAL e STAMPO

/* echo $Animal1->setColor("Bianco");*/



//PRIVATE

//SI PUò LEGGERE SOLO ALL'INTERNO DELLA CLASSE STESSA. OVVIAMENTE FARE SEMPRE PRIMA GATE IN ANIMALE, COME PER PROTECTED. STESSA COSA FACNEDO IL SET PER MODIFICARE.

// ESEMPIO CON IL SET PRIVATE 

//echo $Animal1->setFamily("Molossoide");