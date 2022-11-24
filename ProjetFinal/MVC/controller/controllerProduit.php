<?php
require_once ("{$ROOT}{$DS}model{$DS}ModelProduit.php"); 
if(isset($_REQUEST['action']))	
$action = $_REQUEST['action'];
	else $action="readAll";	

switch ($action){
    case "readAll":
		if (isset($_REQUEST['recherche'])){
			$TAB=$_REQUEST['recherche'];
				$reference=$TAB[0];
				$description=$TAB[1];
                $dateCreation=$TAB[2];			
	$pagetitle = "Produit";
	$view = "readAll";
	   $tab_P = ModelProduit::RecheProduit($reference,$description,$dateCreation);
	require ("{$ROOT}{$DS}view{$DS}view.php");
	break;
}else{
		$pagetitle = "Produit";
        $view = "readAll";
       	$tab_P = ModelProduit::getAll();
        require ("{$ROOT}{$DS}view{$DS}view.php");
        break;
}



	case "delete":
		if(isset($_REQUEST['reference'])){
			$reference= $_REQUEST['reference'];
			$del = ModelProduit::select($reference);
			if($del!=null){
			$del->delete($reference);
			header('Location:index.php?controller=produit&action=readAll');
			}
		}
	    break;
		
	case "create":
		$pagetitle = "cree un produit";
		$view = "create";
		require ("{$ROOT}{$DS}view{$DS}view.php");
		break;
    	
	case "created":
		if(isset($_REQUEST['reference']) && isset($_REQUEST['cout_unitaire']) && isset($_REQUEST['description'])&& isset($_REQUEST['dateCreation'])){
            
            $reference=$_REQUEST['reference'];
            $cout_unitaire=$_REQUEST['cout_unitaire'];
            $description=$_REQUEST['description'];
            $dateCreation=$_REQUEST['dateCreation'];
            
			$recherche = ModelProduit::select($reference);
            
			if($recherche==null){
				$u = new ModelProduit($reference,$cout_unitaire,$description,$dateCreation);	
				$tab = array(
                    "reference" =>$reference,
                    "cout_unitaire" =>$cout_unitaire,
                    "description" =>$description,
                    "dateCreation" =>$dateCreation,
				);				
				$u->insert($tab);
				header('Location:index.php?controller=produit&action=readAll');
			}	
		}
		break;


	case "update":
		if(isset($_REQUEST['reference'])){
			$reference= $_REQUEST['reference'];
			$up=ModelProduit::select($reference);
			if($up!=null){
				$pagetitle = "Modifier le produit";
				$view = "update";
				require ("{$ROOT}{$DS}view{$DS}view.php");			
			}
			
		}
		break;
		
		case "updated":
			if(isset($_REQUEST['reference']) && isset($_REQUEST['cout_unitaire']) 
			&& isset($_REQUEST['description'])&& isset($_REQUEST['dateCreation'])){
				$x = $_REQUEST['reference'];
				
			$tab = array(
			"reference"=>$_REQUEST["reference"],
			"cout_unitaire"=>$_REQUEST["cout_unitaire"],
			"description"=>$_REQUEST["description"],
			"dateCreation"=>$_REQUEST["dateCreation"],
					);
				$o = ModelProduit::select($x);
				if($o!=null){
				$u=ModelProduit::update($tab,$x);		
					
				header('Location:index.php?controller=produit&action=readAll');
				}
			}	
			break;


		}
		
?>
