<?php

require_once ("Model.php"); 

class ModelUtilisateur extends Model{

  private $username;
  private $role;
  private $password;
  private $numtel;
  private $nom;
  private $email;
  private $dateCreation;
  
  protected static $table = 'utilisateur';
  protected static $primary = 'username';
   
  public function __construct($username=NULL,$role=NULL,$password=NULL,$numtel=NULL,$nom=NULL,$email=NULL,$dateCreation=NULL) {
    if (!is_null($username) && !is_null($role) && !is_null($password) && !is_null($numtel) && !is_null($nom) && !is_null($email) && !is_null($dateCreation)) {
      $this->username = $username;
      $this->role= $role;
      $this->password = $password;
      $this->numtel= $numtel;
      $this->nom = $nom;
      $this->email = $email;
      $this->dateCreation = $dateCreation;
     }
  } 
 public function getUser() {
       return $this->username;  
  }
  public function getRole() {
    return $this->role;  
}
 

public function getPass() {
  return $this->password;  
}

public function getNumtel() {
  return $this->numtel;  
}

public function getNom() {
  return $this->nom;  
}

public function getEmail() {
  return $this->email;  
}

public function getDate() {
  return $this->dateCreation;  
}


}
?>
