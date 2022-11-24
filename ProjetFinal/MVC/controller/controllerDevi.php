


<?php

require_once ("{$ROOT}{$DS}model{$DS}ModelDevi.php"); 
if(isset($_REQUEST['action']))	
$action = $_REQUEST['action'];
	else $action="readAll";	

switch ($action){
    case "readAll":
		if (isset($_REQUEST['recherche'])){
			$TAB=$_REQUEST['recherche'];
				$idD=$TAB[0];
				$idcD=$TAB[1];
				$date_emisD=$TAB[2];
	$pagetitle ="devi";
	$view = "readAll";
	   $tab_D = ModelDevi::RecheDevi($idD,$idcD,$date_emisD);
	require ("{$ROOT}{$DS}view{$DS}view.php");
	break;
}else{
	$pagetitle = "devi";
        $view = "readAll";
       	$tab_D = ModelDevi::getAll();
        require ("{$ROOT}{$DS}view{$DS}view.php");
        break;
}

    
	
	case "delete":
		if(isset($_REQUEST['idD'])){
			$idD= $_REQUEST['idD'];
			$del = ModelDevi::select($idD);
			if($del!=null){
			$del->delete($idD);
			header('Location:index.php?controller=devi&action=readAll');
			}
		}
	    break;
		
	case "create":
		$pagetitle = "cree un Devi";
		$view = "create";
		require ("{$ROOT}{$DS}view{$DS}view.php");
		break;
    	
	case "created":
            if (isset($_REQUEST['idD']) && isset($_REQUEST['date_emisD']) && isset($_REQUEST['qteD'])&& isset($_REQUEST['remiseD']) && isset($_REQUEST['serieD'])
            && isset($_REQUEST['taxeD'])&& isset($_REQUEST['referenceD'])&& isset($_REQUEST['idcD'])) {   
            
            
            $idD=$_REQUEST['idD'];
            $date_emisD=$_REQUEST['date_emisD'];
            $qteD=$_REQUEST['qteD'];
            $remiseD=$_REQUEST['remiseD'];
            $serieD=$_REQUEST['serieD'];
            $taxeD=$_REQUEST['taxeD'];
            $referenceD=$_REQUEST['referenceD'];
            $idcD=$_REQUEST['idcD'];
			
            $recherche = ModelDevi::select($idD);
            
			if($recherche==null){
				$u = new ModelDevi($idD,$date_emisD,$qteD,$remiseD,$serieD,$taxeD,$referenceD,$idcD);	
				$tab = array(
                        "idD"=>$idD,
                        "date_emisD"=>$date_emisD,
                        "qteD"=>$qteD,
                        "remiseD"=>$remiseD,
                        "serieD"=>$serieD,
                        "taxeD"=>$taxeD,
                        "referenceD"=>$referenceD,
                        "idcD"=>$idcD,
				);				
				$u->insert($tab);
				header('Location:index.php?controller=devi&action=readAll');
			}	
		}
		break;


	case "update":
		if(isset($_REQUEST['idD'])){
			$idD = $_REQUEST['idD'];
			$up=ModelDevi::select($idD);
			if($up!=null){
				$pagetitle = "Modifier le devi";
				$view = "update";
				require ("{$ROOT}{$DS}view{$DS}view.php");			
			}
			
		}
		break;
		
		case "updated":
            if (isset($_REQUEST['idD']) && isset($_REQUEST['date_emisD']) && isset($_REQUEST['qteD'])&& isset($_REQUEST['remiseD']) && isset($_REQUEST['serieD'])
            && isset($_REQUEST['taxeD'])&& isset($_REQUEST['referenceD'])&& isset($_REQUEST['idcD'])) { 
			$x = $_REQUEST['idD'];
			$tab = array(
                "idD"=>$_REQUEST['idD'],
                "date_emisD"=>$_REQUEST['date_emisD'],
                "qteD"=>$_REQUEST['qteD'],
                "remiseD"=>$_REQUEST['remiseD'],
                "serieD"=>$_REQUEST['serieD'],
                "taxeD"=>$_REQUEST['taxeD'],
                "referenceD"=>$_REQUEST['referenceD'],
                "idcD"=>$_REQUEST['idcD'],
					);
				$o = ModelDevi::select($x);
				if($o!=null){
				$u=ModelDevi::update($tab,$x);		
					
				header('Location:index.php?controller=devi&action=readAll');
				}
			}	
			break;


		}
		
?>

