<?php
session_start();
require_once ("{$ROOT}{$DS}model{$DS}ModelUtilisateur.php"); 
if(isset($_REQUEST['action']))	
$action = $_REQUEST['action'];
	else $action="connect";	
	
switch ($action){
        case "connect":
                 session_start();
               
                    if(isset($_REQUEST["username"]) && !(empty($_REQUEST["username"])))
                    {
                        $login=$_REQUEST["username"];
                    }
                    else
                    {
                        die("ajouter votre login !!!");
                    }

                    if(isset($_REQUEST["password"]) && !(empty($_REQUEST["password"])))
                    {
                        $pass=MD5($_REQUEST["password"]);
                    }
                    else
                    {
                        die("donner votre mot de passe  !!!");
                    }  
                    
                        $nb=ModelUtilisateur::getConnect($login,$pass);
                        if($nb==0)
                        {
                            $_SESSION['test']="Mot de passe ou login incorrect !!!!!";
                           header('Location:index.php?controller=login');
                        }
                        else
                        {
                            $ligne=ModelUtilisateur::getAllUser($login,$pass);
                            if($ligne->role =='admin')
                            {
                                $_SESSION['role']='admin';
                                $_SESSION['nom']=$ligne->username;
                                header('Location:index.php?controller=home');
                                break;
                            
                            }
                            else
                            {
                                $_SESSION['role']='Employe';
                                $_SESSION['nom']=$ligne->username;
                                header('Location:index.php?controller=home');
                               break;
                                
                            }
                        }
                    break;

                    case "deconnecter":             
                        
                        unset($_SESSION['role']);
                        session_unset();
                        session_destroy();
                       

                        header('Location:index.php?controller=login');
                        break;
    }
    ?>