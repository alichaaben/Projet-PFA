<?php

require_once ("Model.php"); 

class ModelDevi extends Model{

    private $idD;
    private $date_emisD;
    private $qteD;
    private $remiseD;
    private $serieD;
    private $taxeD;
    private $referenceD;
    private $idcD;
  protected static $table = 'Devi';
  protected static $primary = 'idD';

   
  public function __construct($idD=NULL,$date_emisD=NULL,$qteD=NULL,$remiseD=NULL,$serieD=NULL,$taxeD=NULL,$referenceD=NULL,$idcD=NULL) {
    if (!is_null($idD) && !is_null($date_emisD) && !is_null($qteD)&& !is_null($remiseD) && !is_null($serieD)
    && !is_null($taxeD)&& !is_null($referenceD)&& !is_null($idcD)) {
        
        $this->idD=$idD;
        $this->date_emisD=$date_emisD;
        $this->qteD=$qteD;
        $this->remiseD=$remiseD;
        $this->serieD=$serieD;
        $this->taxeD=$taxeD;
        $this->referenceD=$referenceD;
        $this->idcD=$idcD;
     }
    }


 
    

    public function getIdD()
    {
       return $this->idD;
    }

    public function getDate_emisD()
    {
       return $this->date_emisD;
    }

    public function getQteD()
    {
       return $this->qteD;
    }

    public function getRemiseD()
    {
       return $this->remiseD;
    }

    public function getSerieD()
    {
       return $this->serieD;
    }

    
    public function getTaxeD()
    {
       return $this->taxeD;
    }

    public function getReferenceD()
    {
       return $this->referenceD;
    }



    public function getIdcD()
    {
       return $this->idcD;
    }

    


}
?>