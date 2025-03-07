<?php


class Continent {
  public $nameContinent;


  public function __construct($nomeContinente)
  {
    $this->nameContinent= $nomeContinente;
  }


  public function introduceYou(){
    echo "Mi trovo in $this->nameContinent, ";
  }

}


class Country extends Continent {
         public $nameCountry;

         public function __construct($nomeContinente, $nomePaese)
         {
        
          parent::__construct($nomeContinente);

          $this->nameCountry=$nomePaese;

         }


         public function introduceYou()
         {
          echo parent:: introduceYou() . "$this->nameCountry,";
         }

}


class Region extends Country {
        public $nameRegion;

        public function __construct($nomeContinente, $nomePaese, $nomeRegione)
        {
          parent::__construct($nomeContinente, $nomePaese);

          $this->nameRegion = $nomeRegione;
        }


        public function introduceYou()
        {
          echo parent:: introduceYou() . "$this->nameRegion,";
        }

}



class Province extends Region{
       public $nameProvince;

       public function __construct($nomeContinente, $nomePaese, $nomeRegione, $nomeProvincia)
       {
        parent::__construct($nomeContinente, $nomePaese, $nomeRegione);

        $this->nameProvince =$nomeProvincia;
       }

       public function introduceYou()
       {
        echo parent:: introduceYou() . "$this->nameProvince,";
       }

}


class City extends Region {
      public $nameCity;

      public function __construct($nomeContinente, $nomePaese, $nomeRegione, $nomeProvincia, $nomeCittà)
      {
        parent::__construct($nomeContinente, $nomePaese, $nomeRegione, $nomeProvincia);

        $this->nameCity = $nomeCittà;
      }


      public function introduceYou()
      {
        echo parent:: introduceYou() . "$this->nameCity,";
      }

}


class Street extends City{
    public $nameStreet;

    public function __construct($nomeContinente, $nomePaese, $nomeRegione, $nomeProvincia, $nomeCittà, $nomeStrada)
    {
      parent::__construct($nomeContinente, $nomePaese, $nomeRegione, $nomeProvincia, $nomeCittà);

      $this->nameStreet = $nomeStrada;
    }

     public function introduceYou()
     {
      echo parent:: introduceYou() . "$this->nameStreet,";
     }



}






//DICHIARAZIONE OGGETTI

$Continent = new Continent("Europa");
$Country = new Country("Europa","Italia");
$Region = new Region("Europa", "Italia", "Puglia");
$Province = new Province("Europa", "Italia", "Puglia", "BA");
$City = new City ("Europa", "Italia", "Puglia", "BA", "Bari");
$myLocation = new Street ("Europa", "Italia", "Puglia", "BA", "Bari", "San Giorgio Martire 2D");

$myLocation -> introduceYou();



