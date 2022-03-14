<?php
 class Maison  extends batiment implements BatiHome  {

    private bool $garage ;
    private bool $cheminee;
    
   
       public  static function batiment(String $Nom, int $Superficie ,String $Type,int $Etage, bool $cheminee )
       {
        $Nom=$nom;
        $Superficie=$superficie;
        $Type=$type;
        $Etage=$etage;
        $cheminee=false;
        $garage=false;    
       }
    }
	function getGaragefalse() { 
 		return $this->garagefalse; 
	} 
	function getChemineefalse() { 
 		return $this->chemineefalse; 
	} 
?>