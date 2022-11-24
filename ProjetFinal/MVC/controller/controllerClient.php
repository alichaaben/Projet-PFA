<?php
//@ini_set('display_errors', 'on');
require_once ("{$ROOT}{$DS}model{$DS}ModelClient.php"); 
if(isset($_REQUEST['action']))	
$action = $_REQUEST['action'];
	else $action="readAll";	

switch ($action){
    case "readAll":
		if (isset($_REQUEST['recherche'])){
			$TAB=$_REQUEST['recherche'];
				$idc=$TAB[0];
				$nom=$TAB[1];			
	$pagetitle = "client";
	$view = "readAll";
	   $tab_C = ModelClient::RecheClient($idc,$nom);
	require ("{$ROOT}{$DS}view{$DS}view.php");
	break;
}else{
	$pagetitle = "client";
        $view = "readAll";
       	$tab_C = ModelClient::getAll();
        require ("{$ROOT}{$DS}view{$DS}view.php");
        break;
}



	case "delete":
		if(isset($_REQUEST['idc'])){
			$idc = $_REQUEST['idc'];
			$del = ModelClient::select($idc);
			if($del!=null){
			$del->delete($idc);
			header('Location:index.php?controller=client&action=readAll');
			}
		}
	    break;
		
	case "create":
		$pagetitle = "cree un client";
		$view = "create";
		require ("{$ROOT}{$DS}view{$DS}view.php");
		break;
    	
	case "created":
		if(isset($_REQUEST['nomC']) && isset($_REQUEST['idc']) && isset($_REQUEST['pers_C'])&& isset($_REQUEST['email']) && isset($_REQUEST['adr_fac']) && isset($_REQUEST['adr_exp'])){
            
            $idc=$_REQUEST['idc'];
            $nom=$_REQUEST['nomC'];
            $email=$_REQUEST['email'];
            $adr_fac=$_REQUEST['adr_fac'];
            $adr_exp=$_REQUEST['adr_exp'];
            $pers_C=$_REQUEST['pers_C'];
			$recherche = ModelClient::select($idc);
            
			if($recherche==null){
				$u = new ModelClient($idc,$nom,$email,$adr_fac,$adr_exp,$pers_C);	
				$tab = array(
                    "idc" =>$idc,
                    "nom" =>$nom,
                    "email" =>$email,
                    "adresse_fac" =>$adr_fac,
                    "adresse_exp" =>$adr_exp,
                    "persone_contact" =>$pers_C
				);				
				$u->insert($tab);
				header('Location:index.php?controller=client&action=readAll');
			}	
		}
		break;


	case "update":
		if(isset($_REQUEST['idc'])){
			$idc = $_REQUEST['idc'];
			$up=ModelClient::select($idc);
			if($up!=null){
				$pagetitle = "Modifier le client";
				$view = "update";
				require ("{$ROOT}{$DS}view{$DS}view.php");			
			}
			
		}
		break;
		
		case "updated":
			if(isset($_REQUEST['idc']) && isset($_REQUEST['nom']) && isset($_REQUEST['email'])&& isset($_REQUEST['adr_fac']) && isset($_REQUEST['adr_exp']) && isset($_REQUEST['persone'])){
				$x = $_REQUEST['idc'];
				
			$tab = array(
			"idc"=>$_REQUEST["idc"],
			"nom"=>$_REQUEST["nom"],
			"email"=>$_REQUEST["email"],
			"adresse_fac"=>$_REQUEST["adr_fac"],
			"adresse_exp"=>$_REQUEST["adr_exp"],
			"personne_contact"=>$_REQUEST["persone"],
					);
				$o = ModelClient::select($x);
				if($o!=null){
				$u=ModelClient::update($tab,$x);		
					
				header('Location:index.php?controller=client&action=readAll');
				}
			}	
			break;


		}
		
?>
