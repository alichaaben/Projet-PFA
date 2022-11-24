<?php
session_start();
require_once ("{$ROOT}{$DS}model{$DS}ModelUtilisateur.php"); 
if(isset($_REQUEST['action']))	
$action = $_REQUEST['action'];
	else $action="readAll";	

switch ($action){
    case "readAll":
	$pagetitle = "utilisateur";
        $view = "readAll";
       	$tab_U = ModelUtilisateur::getAll();
        require ("{$ROOT}{$DS}view{$DS}view.php");
        break;




	case "delete":
		if(isset($_REQUEST['username'])){
			$username =$_REQUEST['username'];
			$del = ModelUtilisateur::select($username);
			if($del!=null){
			$del->delete($username);
			header('Location:index.php?controller=utilisateur&action=readAll');
			}
		}
	    break;
		
	case "create":
		$pagetitle = "utilisateur";
		$view = "create";
		require ("{$ROOT}{$DS}view{$DS}view.php");
		break;
    	
	case "created":
			if(isset($_REQUEST['username']) && isset($_REQUEST['role']) &&isset($_REQUEST['password']) 
			&&isset($_REQUEST['numtel']) &&isset($_REQUEST['nom']) &&isset($_REQUEST['email'])){

            $username=$_REQUEST['username'];
            $role=$_REQUEST['role'];
            $password=$_REQUEST['password'];
			$numtel=$_REQUEST['numtel'];
			$nom=$_REQUEST['nom'];
			$email=$_REQUEST['email'];
           
			$recherche = ModelUtilisateur::select($username);
            
			if($recherche==null){
				$u = new ModelUtilisateur($username,$role,$password,$numtel,$nom,$email,$dateCreation);	
				$tab = array(

					"username"=>$username,
					"role"=>$role,
					"password"=>MD5($password),
					"numtel"=>$numtel,
					"nom"=>$nom,
					"email"=>$email,
					"datecreation"=>date("Y-m-d"),
				);				
				$u->insert($tab);
				header('Location:index.php?controller=utilisateur&action=readAll');
			}	
		}
		break;


	case "update":
		if(isset($_REQUEST['username'])){
			$username= $_REQUEST['username'];
			$up=ModelUtilisateur::select($username);
			if($up!=null){
				$pagetitle = "utilisateur";
				$view = "update";
				require ("{$ROOT}{$DS}view{$DS}view.php");			
			}
			
		}
		break;
		
		case "updated":
			if(isset($_REQUEST['username']) && isset($_REQUEST['role']) &&isset($_REQUEST['password']) 
			&&isset($_REQUEST['numtel']) &&isset($_REQUEST['nom']) &&isset($_REQUEST['email'])){

				$x = $_REQUEST['username'];
				
			$tab = array(
				"username"=>$_REQUEST['username'],
				"role"=>$_REQUEST['role'],
				"password"=>MD5($_REQUEST['password']),
				"numtel"=>$_REQUEST['numtel'],
				"nom"=>$_REQUEST['nom'],
				"email"=>$_REQUEST['email'],
				"datecreation"=>date("Y-m-d"),
					);
				$o = ModelUtilisateur::select($x);
				if($o!=null){
				$u=ModelUtilisateur::update($tab,$x);		
					
				header('Location:index.php?controller=utilisateur&action=readAll');
				}
			}	
			break;

			case "change":
						$pagetitle = "utilisateur";
						$view = "changepass";
						require ("{$ROOT}{$DS}view{$DS}view.php");			
				break;



				case "changed":
					if(isset($_REQUEST['username'])&& isset($_REQUEST['password']) && isset($_REQUEST['NewPass'])&& isset($_REQUEST['NewPass'])){
						$user= $_REQUEST['username'];
						
						$U = ModelUtilisateur::select($user);
						$pass=$_REQUEST['password'];
						$P= ModelUtilisateur::selectP($pass);
					
						if($U==NULL){
							$_SESSION['erreur-LP']="aucun utilisateur trouvé!!!!";
							header('Location:index.php?controller=utilisateur&action=change');
						}else if($P==0){
							$_SESSION['erreur-LP']="l' Ancien mot de passe incorrect!!!!";
							header('Location:index.php?controller=utilisateur&action=change');
						}else if(($_REQUEST['NewPass']==$_REQUEST['NewPass2'])){
									$nouveau=$_REQUEST['NewPass'];
									$tab = array(
										"username"=>$_REQUEST['username'],
										"password"=>$nouveau,
										);
										$u=ModelUtilisateur::update($tab,$user);			
										header('Location:index.php?controller=home');
							}else if(($_REQUEST['NewPass']!=$_REQUEST['NewPass2'])){
								$_SESSION['erreur-LP']="l' Ancien mot de passe incorrect!!!!";
								header('Location:index.php?controller=utilisateur&action=change');
							}
							
						break;
						
					
					}
							
					}
					
		

			
?>
