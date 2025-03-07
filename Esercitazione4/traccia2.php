


<?php


class Vertebrato {
   public function __construct()
   {
    $this->stampaVertebrato();
   }

protected function stampaVertebrato(){
    echo "Sono un animale Vertebrato\n"
;}

}



class Sangue_Caldo extends Vertebrato{
    public function __construct()
    {
     parent::__construct();
     $this->stampaSangueCaldo();
    }
 
     protected function stampaSangueCaldo(){
     echo "Sono un animale a sangue caldo\n"
 ;}
}


class Sangue_freddo extends Vertebrato{
    public function __construct()
    {
     parent::__construct();
     $this->stampaSangueFreddo();
    }
 
     protected function stampaSangueFreddo(){
     echo "Sono un animale a sangue freddo \n"
 ;}
}


class Mammifero extends Sangue_Caldo{
    public function __construct()
    {
     parent::__construct();
     $this->stampaMammifero();
    }
 
     protected function stampaMammifero(){
     echo "Sono un mammifero \n";
}

}



class Uccello extends Sangue_Caldo{

    public function __construct()
    {
     parent::__construct();
     $this->stampaUccello();
    }
 
     protected function stampaUccello(){
     echo "Sono un uccello \n";
}

}




class Pesce extends Sangue_freddo{
    public function __construct()
    {
     parent::__construct();
     $this->stampaPesce();
    }
 
     protected function stampaPesce(){
     echo "Sono un pesce \n";
}
}




class Rettile extends Sangue_freddo{
    public function __construct()
    {
     parent::__construct();
     $this->stampaRettile();
    }
 
     protected function stampaRettile(){
     echo "Sono un rettile \n";
}
}



class Anfibio extends Sangue_freddo{
    public function __construct()
    {
     parent::__construct();
     $this->stampaAnfibio();
    }
 
     protected function stampaAnfibio(){
     echo "Sono un Anfibio \n";
}
}



$magikarp = new Pesce();






