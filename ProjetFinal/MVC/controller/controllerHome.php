<?php
require_once ("{$ROOT}{$DS}model{$DS}ModelFacture.php"); 
require_once ("{$ROOT}{$DS}model{$DS}ModelCommande.php"); 
require_once ("{$ROOT}{$DS}model{$DS}ModelClient.php"); 
if(isset($_REQUEST['action']))	
$action = $_REQUEST['action'];
	else $action="affichAll";	
	
switch ($action){
    case "affichAll":
	 if (isset($_REQUEST['recherche2'])){
			$TAB=$_REQUEST['recherche2'];
					$id_comm=$TAB[0];
					$idc=$TAB[1];
					$date=$TAB[2];
				$pagetitle = "Accueil";
				$view = "affichAll";
		$nbCommande=ModelCommande::getAllNb();
		$nbClient=ModelClient::getAllNb();
		$nbFacture=ModelFacture::getAllNb();
        $nbP=ModelFacture::getAllNbPaye();
		$Devi=ModelFacture::getAllDevi();
		$Npaye=ModelFacture::getAllNbNonPaye();
		$parcPaye=ModelFacture::getAllNbParPaye();

		//les deux tableaux:
		$tab_Co = ModelCommande::RecheCommande($id_comm,$idc,$date);
		$tab_h = ModelFacture::getAll();
	require ("{$ROOT}{$DS}view{$DS}view.php");
	break;
		}else{
			$pagetitle = "Accueil";
        $view = "affichAll";
		$nbCommande=ModelCommande::getAllNb();
		$nbClient=ModelClient::getAllNb();
        $nbFacture=ModelFacture::getAllNb();
        $nbP=ModelFacture::getAllNbPaye();
		$Devi=ModelFacture::getAllDevi();
		$Npaye=ModelFacture::getAllNbNonPaye();
		$parcPaye=ModelFacture::getAllNbParPaye();

	    // les deux tableaux:
       	$tab_h = ModelFacture::getAll();
		$tab_Co = ModelCommande::getAll();
        require ("{$ROOT}{$DS}view{$DS}view.php");//"redirige" vers la vue
        break;
		}

        
    }
  
?>
