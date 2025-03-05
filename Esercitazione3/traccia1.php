<?php

//Creazione Classe
class Company{

public $name;
public $location;
public $tot_employees;
public $avg_salary;
public static $counter = 0;


//Creazione costrutto
public function __construct($nome, $luogo, $dipendenti, $salario){

    $this->name = $nome;
    $this->location = $luogo;
    $this->tot_employees = $dipendenti;
    $this->avg_salary = $salario;
    //Invoco la funzione stampa info
    $this-> stampaInfo();
    //Metto il self per tenere conto delle istanze
    self::$counter++;

}

//Creazione metodo di stampa frase
public function stampaInfo(){
    if($this->tot_employees >0){
        echo " L'ufficio $this->name con sede in $this->location ha ben $this->tot_employees dipendenti ed uno stipendio di $this->avg_salary euro. \n ";
    } else {
        echo " L'ufficio $this->name con sede in $this->location non ha dipendenti. \n ";
    }
}

//Creazione metodo collegato al self counter
public static function howManyCompany(){
    echo " Al momento ci sono " . self::$counter . " compagnie \n ";
}

}



//Creazione 5 Istanze
Company::howManyCompany();
$Company1 = new Company (" Aulab ", " Italia ", 50, 2000);
$Company2 = new Company ("SunsetStudios", "Los Angeles", 300, 3000);
$Company3 = new Company ("Columbia", "Georgia", 400, 4000);
$Comoany4 = new Company ("Paramount", "Texas", 0, 3500);
$Company5 = new Company ("Universal", "California", 3000, 4000);
Company::howManyCompany();



