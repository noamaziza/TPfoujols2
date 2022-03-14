<?php
 class Immeuble extends batiment{

 private bool $ascenseur ;
    private  int $nbAppartement ;
    private bool $garage;
 

    public  static function batiment( bool $Garage,String $Nom, int $Superficie ,String $Type,int $Etage, bool $Ascenseur,bool $appartement )
    {
     $Nom=$nom;
     $Superficie=$superficie;
     $Type=$type;
     $Etage=$etage;
     $Ascenseur=false;
     $Appartement=false;
     $Garage=$garage;

	
	}

 }


	function getGaragegarage() { 
 		return $this->Garagegarage; 
	} 

	function setGaragegarage($Garagegarage) {  
		$this->Garagegarage = $Garagegarage; 
	} 

	function getAscenseurfalse() { 
 		return $this->Ascenseurfalse; 
	} 
 

	function getAppartementfalse() { 
 		return $this->Appartementfalse; 
	} 

?>