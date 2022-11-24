<?php

require_once ("Model.php"); 

class ModelCommande extends Model{

    private $id_comm;
    private $date_creation;
    private $idc;
    private $quantite;
    private $prix;
    private $reference;
  
    
  protected static $table = 'commande';
  protected static $primary = 'id_comm';
   
  public function __construct($id_comm=NULL,$date_creation=NULL,$idc=NULL,$quantite=NULL,$prix=NULL,$reference=NULL) {
    if (!is_null($id_comm) && !is_null($date_creation) && !is_null($idc)&& !is_null($quantite)&& !is_null($prix)&& !is_null($reference)) {
     $this->id_comm=$id_comm;
     $this->date_creation=$date_creation;
     $this->idc=$idc;
     $this->quantite=$quantite;
     $this->prix=$prix;
     $this->reference=$reference;
     }
    }


 
    

    public function getId_comm()
    {
       return $this->id_comm;
    }

    public function getDate()
    {
       return $this->date_creation;
    }

    public function getIdc()
    {
       return $this->idc;
    }
    
    public function getQt()
    {
       return $this->quantite;
    }

    public function getPrix()
    {
       return $this->prix;
    }
    
    public function getRef()
    {
       return $this->reference;
    }

}
?>