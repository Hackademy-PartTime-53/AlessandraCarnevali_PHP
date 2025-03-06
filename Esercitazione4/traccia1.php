<?php


class Person{
    public $name;
    public $surname;
    public $age;


    public function __construct( $nome, $cognome, $età )
    {

        $this->name = $nome;
        $this->surname = $cognome;
        $this->age = $età;
        //$this->introduceYou();
        
    }

      public function introduceYou(){
        echo"Ciao sono $this->name $this->surname, ed ho $this->age anni";
    }
   

}



//CREAZIONE NUOVA CLASSE: HARRY
class Harry extends Person{
       public $direct;

       public function __construct($nome, $cognome, $età, $dirigere)
       {
        
        parent::__construct($nome, $cognome, $età);

        $this->direct = $dirigere;

       }

       //PRIMO METODO DI PRESENTAZIONE
       /*public function introduceYou(){
        echo"Ciao sono $this->name $this->surname, ed ho $this->age anni e sono un $this->direct\n";}*/


        //SECONDO METODO DI PRESENTAZIONE
        public function introduceYou()
        {echo parent::introduceYou() . " e sono un $this->direct \n";
        }

}





//CREAZIONE NUOVA CLASSE: EVELYN
class Evelyn extends Person{
     public $act;
     public $oscar;

       public function __construct($nome, $cognome, $età, $recitare, $oscar)
       {

        parent::__construct($nome, $cognome, $età);

        $this->act = $recitare;
        $this->oscar = $oscar;
        
       }

       public function introduceYou(){
        echo parent:: introduceYou() . "sono un' $this->act e ho vinto un $this->oscar \n";
    
    }


}


//CREAZIONE NUOVA CLASSE: CELIA
class Celia extends Evelyn{
        public $Best_Actress;

        public function __construct($nome, $cognome, $età, $recitare, $oscar, $Miglior_Attrice)
        {
            
      parent::__construct($nome, $cognome, $età, $recitare, $oscar);

      $this->Best_Actress = $Miglior_Attrice;

        }


       public function introduceYou()
       { echo parent:: introduceYou() . "sono un' $this->act, ho vinto $this->oscar, come $this->Best_Actress \n";
       }

}






//CREAZIONE OGGETTI
$Harry = new Harry("Harry", "Cameron", 25, "Regista");
$Evelyn = new Evelyn("Evelyn", "Hugo", 18, "Attrice", "1 Oscar");
$Celia = new Celia("Celia", "St.James", 17, "Attrice", "3 Oscar", "Migliore attrice protagonista e non");

//RICHIAMO METODO DI PRESENTAZIONE
$Harry->introduceYou();
$Evelyn->introduceYou();
$Celia->introduceYou();
