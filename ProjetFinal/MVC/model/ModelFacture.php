<?php

require_once ("Model.php"); 

class ModelFacture extends Model{

    private $idf;
    private $referencF;
    private $idcF;
    private $date_emis;
    private $serie;
    private $remise;
    private $taxe;
    private $status;
    private $paied;
  protected static $table = 'Facture';
  protected static $primary = 'idf';
  protected static $idC='idcF';
  protected static $date='date_emis';
   
  public function __construct($idf=NULL, $referencF=NULL,$idcF=NULL,$date_emis=NULL,$serie=NULL,$remise=NULL,$taxe=NULL,$status=NULL,$paied=NULL) {
    if (!is_null($idf) && !is_null($referencF) && !is_null($idcF)&& !is_null($date_emis) && !is_null($serie)&& !is_null($remise)&& !is_null($taxe)&& !is_null($status)&& !is_null($paied)) {
        $this->idf=$idf;                                         
        $this->referencF=$referencF;
        $this->idcF=$idcF;
        $this->date_emis=$date_emis;
        $this->serie=$serie;
        $this->remise=$remise;
        $this->taxe=$taxe;
        $this->status=$status;
        $this->paied=$paied;
     }
    }


 
    

    public function getIdf()
    {
       return $this->idf;
    }

    public function getRef()
    {
       return $this->referencF;
    }

    public function getIdcF()
    {
       return $this->idcF;
    }

    public function getDate()
    {
       return $this->date_emis;
    }

    public function getSerie()
    {
       return $this->serie;
    }

    public function getRemise()
    {
       return $this->remise;
    }

    public function getTaxe()
    {
       return $this->taxe;
    }
    
    public function getStatus()
    {
       return $this->status;
    }

    public function getPaied()
    {
       return $this->paied;
    }




}
?>