<?php
require_once ("Model.php"); 

class ModelClient extends Model{

    private $idc;
    private $nom;
    private $email;
    private $adresse_exp;
    private $adresse_fac;
    private $personne_contact;
    
  protected static $table = 'client';
  protected static $primary = 'idc';
   
  public function __construct($idc=NULL,$nom=NULL,$email=NULL,$adresse_exp=NULL,$adresse_fac=NULL,$personne_contact=NULL) {
    if (!is_null($idc) && !is_null($nom) && !is_null($email)&& !is_null($adresse_exp) && !is_null($adresse_fac)&& !is_null($personne_contact)) {
     $this->idc=$idc;
     $this->nom=$nom;
     $this->email=$email;
     $this->adresse_exp=$adresse_exp;
     $this->adresse_fac=$adresse_fac;
     $this->personne_contact=$personne_contact;
     }
    }


 
    

    public function getIdc()
    {
       return $this->idc;
    }

    public function getNom()
    {
       return $this->nom;
    }

    public function getEmail()
    {
       return $this->email;
    }

    public function getAdress_exp()
    {
       return $this->adresse_exp;
    }

    public function getAdress_fac()
    {
       return $this->adresse_fac;
    }

    public function getPersone()
    {
       return $this->personne_contact;
    }




}
?>