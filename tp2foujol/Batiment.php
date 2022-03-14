<?php


  class   batiment implements BatiStructure
  {
 
    private String $nom; 
    private int $superficie;
    private int  $type;
    private int $nbEtage;
 

    public  static function batiment(String $Nom, int $Superficie ,String $Type,int $Etage )
    {
     $Nom=$nom;
     $Superficie=$superficie;
     $Type=$type;
     $Etage=$etage;

	
	}
 }
    function getNomnom(){
    return $this->Nomnom; 
} 

	function setNomnom($Nomnom){  
    $this->Nomnom = $Nomnom; 
} 

	function getSuperficiesuperficie(){ 
    return $this->Superficiesuperficie; 
} 

	function setSuperficiesuperficie($Superficiesuperficie){  
    $this->Superficiesuperficie = $Superficiesuperficie; 
} 

	function getTypetype(){ 
    return $this->Typetype; 
} 

 function setTypetype($Typetype){  
 $this->Typetype = $Typetype; 
} 
	function getEtageetage(){ 
    return $this->Etageetage; 
}
   function setEtageetage($Etageetage){  
   $this->Etageetage = $Etageetage; 
} 




?>