<?php
require_once ("{$ROOT}{$DS}model{$DS}ModelCommande.php"); 
if(isset($_REQUEST['action']))	
$action = $_REQUEST['action'];
	else $action="readAll";	

switch ($action){
    case "readAll":
		if (isset($_REQUEST['recherche'])){
			$TAB=$_REQUEST['recherche'];
				$id_comm=$TAB[0];
				 $idc=$TAB[1];
				$date=$TAB[2];
	$pagetitle = "commande";
	$view = "readAll";
	   $tab_Co = ModelCommande::RecheCommande($id_comm,$idc,$date);
	require ("{$ROOT}{$DS}view{$DS}view.php");
	break;
}else{
	$pagetitle = "commande";
        $view = "readAll";
       	$tab_Co = ModelCommande::getAll();
        require ("{$ROOT}{$DS}view{$DS}view.php");
        break;
}



	case "delete":
		if(isset($_REQUEST['id'])){
			$id_comm =$_REQUEST['id'];
			$del = ModelCommande::select($id_comm);
			if($del!=null){
			$del->delete($id_comm);
			header('Location:index.php?controller=commande&action=readAll');
			}
		}
	    break;
		
	case "create":
		$pagetitle = "cree un commande";
		$view = "create";
		require ("{$ROOT}{$DS}view{$DS}view.php");
		break;
    	
	case "created":
		if(isset($_REQUEST['id_comm']) && isset($_REQUEST['date_creation']) && isset($_REQUEST['idc'])){
            
            $id_comm=NULL;
            $date_creation=$_REQUEST['date_creation'];
            $idc=$_REQUEST['idc'];
			$quantite=$_REQUEST['quantite'];
			$prix=$_REQUEST['prix'];
			$reference=$_REQUEST['reference'];
           
			$recherche = ModelCommande::select($id_comm);
            
			if($recherche==null){
				$u = new ModelCommande($id_comm,$date_creation,$idc,$quantite,$prix,$reference);	
				$tab = array(
                    "id_comm" =>$id_comm,
                    "date_creation" =>$date_creation,
                    "idc" =>$idc,
					"quantite"=>$quantite,
					"prix"=>$prix,
					"reference"=>$reference,
				);				
				$u->insert($tab);
				header('Location:index.php?controller=commande&action=readAll');
			}	
		}
		break;


	case "update":
		if(isset($_REQUEST['id'])){
			$id_comm = $_REQUEST['id'];
			$up=ModelCommande::select($id_comm);
			if($up!=null){
				$pagetitle = "commande";
				$view = "update";
				require ("{$ROOT}{$DS}view{$DS}view.php");			
			}
			
		}
		break;
		
		case "updated":
			if(isset($_REQUEST['id_comm']) && isset($_REQUEST['date_creation']) && isset($_REQUEST['idc'])&& isset($_REQUEST['quantite'])&& isset($_REQUEST['prix'])&& isset($_REQUEST['reference'])){
				$x = $_REQUEST['id_comm'];
				
			$tab = array(
			"id_comm"=>$_REQUEST["id_comm"],
			"date_creation"=>$_REQUEST["date_creation"],
			"idc"=>$_REQUEST["idc"],
			"quantite"=>$_REQUEST['quantite'],
			"prix"=>$_REQUEST['prix'],
			"reference"=>$_REQUEST['reference'],
					);
				$o = ModelCommande::select($x);
				if($o!=null){
				$u=ModelCommande::update($tab,$x);		
					
				header('Location:index.php?controller=commande&action=readAll');
				}
			}	
			break;


		}
		
?>
