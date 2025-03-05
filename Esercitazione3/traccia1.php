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
$Company1 = new Company ("Aulab", " Italia ", 50, 2000);
$Company2 = new Company ("SunsetStudios", "Los Angeles", 300, 3000);
$Company3 = new Company ("Columbia", "Georgia", 400, 4000);
$Comoany4 = new Company ("Paramount", "Texas", 0, 3500);
$Company5 = new Company ("Universal", "California", 3000, 4000);
Company::howManyCompany();



//Creazione 5 istanze con readline

/*$name1 = readline("Inserisci un nome fra: Aulab, SunsetStudio, Paramount, Columbia, Universal");
$location1 = readline("Inserisci una location fra: Italia, Los Angeles, Georgia, Texas, California");
$dipendenti1 = readline("Inserisci un numero di dipendeti fra: 50, 300, 400, 0, 3000");
$salario1 = readline("Inserisci un salario fra: 2000, 3000, 4000, 3500, 4000");
$Company1 = new Company ($name1, $location1, $dipendenti1, $salario1);

Company::howManyCompany();

$name2 = readline("Inserisci un nome fra: Aulab, SunsetStudio, Paramount, Columbia, Universal");
$location2 = readline("Inserisci una location fra: Italia, Los Angeles, Georgia, Texas, California");
$dipendenti2 = readline("Inserisci un numero di dipendeti fra: 50, 300, 400, 0, 3000");
$salario2 = readline("Inserisci un salario fra: 2000, 3000, 4000, 3500, 4000");
$Company2 = new Company ($name2, $location2, $dipendenti2, $salario2);

Company::howManyCompany();

$name3 = readline("Inserisci un nome fra: Aulab, SunsetStudio, Paramount, Columbia, Universal");
$location3 = readline("Inserisci una location fra: Italia, Los Angeles, Georgia, Texas, California");
$dipendenti3 = readline("Inserisci un numero di dipendeti fra: 50, 300, 400, 0, 3000");
$salario3 = readline("Inserisci un salario fra: 2000, 3000, 4000, 3500, 4000");
$Company3 = new Company ($name3, $location3, $dipendenti3, $salario3);

Company::howManyCompany();

$name4 = readline("Inserisci un nome fra: Aulab, SunsetStudio, Paramount, Columbia, Universal");
$location4 = readline("Inserisci una location fra: Italia, Los Angeles, Georgia, Texas, California");
$dipendenti4 = readline("Inserisci un numero di dipendeti fra: 50, 300, 400, 0, 3000");
$salario4 = readline("Inserisci un salario fra: 2000, 3000, 4000, 3500, 4000");
$Company4 = new Company ($name4, $location4, $dipendenti4, $salario4);

Company::howManyCompany();

$name5 = readline("Inserisci un nome fra: Aulab, SunsetStudio, Paramount, Columbia, Universal");
$location5 = readline("Inserisci una location fra: Italia, Los Angeles, Georgia, Texas, California");
$dipendenti5 = readline("Inserisci un numero di dipendeti fra: 50, 300, 400, 0, 3000");
$salario5 = readline("Inserisci un salario fra: 2000, 3000, 4000, 3500, 4000");
$Company5 = new Company ($name5, $location5, $dipendenti5, $salario5);

Company::howManyCompany();*/

















