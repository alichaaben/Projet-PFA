<?php

require_once ("Model.php"); 

class ModelProduit extends Model{

    private $reference;
    private $cout_unitaire;
    private $description;
    private $dateCreation;
   
  protected static $table = 'produit';
  protected static $primary = 'reference';

   
  public function __construct($reference=NULL,$cout_unitaire=NULL,$description=NULL,$dateCreation=NULL) {
    if (!is_null($reference) && !is_null($cout_unitaire) && !is_null($description)&& !is_null($dateCreation) ) {
       
        $this->reference=$reference;
        $this->cout_unitaire=$cout_unitaire;
        $this->description=$description;
        $this->dateCreation=$dateCreation;
     }
    }


 
    

    public function getReference()
    {
       return $this->reference;
    }

    public function getCout()
    {
       return $this->cout_unitaire;
    }

    public function getDescri()
    {
       return $this->description;
    }

    public function getDateC()
    {
       return $this->dateCreation;
    }

}
?>