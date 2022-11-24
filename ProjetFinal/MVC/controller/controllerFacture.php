<?php
require_once ("{$ROOT}{$DS}model{$DS}ModelFacture.php"); 
if(isset($_REQUEST['action']))	
$action = $_REQUEST['action'];
	else $action="readAll";	

switch ($action){
    case "readAll":
		if (isset($_REQUEST['recherche'])){
			$TAB=$_REQUEST['recherche'];
				$idf=$TAB[0];
				$idcF=$TAB[1];
				$date=$TAB[2];
	$pagetitle = "facture";
	$view = "readAll";
	   $tab_f = ModelFacture::RecheFacture($idf,$idcF,$date);
	require ("{$ROOT}{$DS}view{$DS}view.php");
	break;
}else{
	$pagetitle = "facture";
        $view = "readAll";
       	$tab_f = ModelFacture::getAll();
        require ("{$ROOT}{$DS}view{$DS}view.php");//"redirige" vers la vue
        break;
}

    
	
	case "delete":
		if(isset($_REQUEST['idf'])){
			$idf = $_REQUEST['idf'];
			$del = ModelFacture::select($idf);
			if($del!=null){
			$del->delete($idf);
			header('Location:index.php?controller=facture&action=readAll');
			}
		}
	    break;
		
	case "create":
		$pagetitle = "cree un facture";
		$view = "create";
		require ("{$ROOT}{$DS}view{$DS}view.php");
		break;
    	
	case "created":
		if(isset($_REQUEST['idf']) && isset($_REQUEST['ref']) && isset($_REQUEST['idcF']) && isset($_REQUEST['date_emis']) && isset($_REQUEST['serie']) && isset($_REQUEST['Remise']) && isset($_REQUEST['taxe']) && isset($_REQUEST['status'])&& isset($_REQUEST['paied'])){
            
            $idf=$_REQUEST['idf'];
            $referencF=$_REQUEST['ref'];
            $idcF=$_REQUEST['idcF'];
            $date_emis=$_REQUEST['date_emis'];
            $serie=$_REQUEST['serie'];
            $remise=$_REQUEST['Remise'];
            $taxe=$_REQUEST['taxe'];
            $status=$_REQUEST['status'];
            $paied=$_REQUEST['paied'];
			
            $recherche = ModelFacture::select($idf);
            
			if($recherche==null){
				$u = new ModelFacture($idf, $referencF,$idcF,$date_emis,$serie,$remise,$taxe,$status,$paied);	
				$tab = array(
                    "idf" =>$idf,
                    "ref" =>$referencF,
                    "idcf" =>$idcF,
                    "date" =>$date_emis,
                    "serie" =>$serie,
                    "remise" =>$remise,
                    "taxe" =>$taxe,
                    "status" =>$status,
                    "paied" =>$paied
				);				
				$u->insert($tab);
				header('Location:index.php?controller=facture&action=readAll');
			}	
		}
		break;


	case "update":
		if(isset($_REQUEST['idf'])){
			$idf = $_REQUEST['idf'];
			$up=ModelFacture::select($idf);
			if($up!=null){
				$pagetitle = "Modifier la facture";
				$view = "update";
				require ("{$ROOT}{$DS}view{$DS}view.php");			
			}
			
		}
		break;
		
		case "updated":
			if(isset($_REQUEST['idf']) && isset($_REQUEST['refrencF']) && isset($_REQUEST['idcF'])
		 && isset($_REQUEST['date_emis']) && isset($_REQUEST['serie']) && isset($_REQUEST['Remise']) && isset($_REQUEST['taxe'])
		 && isset($_REQUEST['status'])&& isset($_REQUEST['paied'])){
				$x = $_REQUEST['idf'];
			$tab = array(
			"idf"=>$_REQUEST['idf'],
			"referencF"=>$_REQUEST['refrencF'],
			"idcF"=>$_REQUEST["idcF"],
			"date_emis"=>$_REQUEST['date_emis'],
			"serie"=>$_REQUEST["serie"],
			"remise"=>$_REQUEST["Remise"],
			"taxe"=>$_REQUEST["taxe"],
			"status"=>$_REQUEST["status"],
			"paied"=>$_REQUEST["paied"]
					);
				$o = ModelFacture::select($x);
				if($o!=null){
				$u=ModelFacture::update($tab,$x);		
					
				header('Location:index.php?controller=facture&action=readAll');
				}
			}	
			break;


		}
		
?>
