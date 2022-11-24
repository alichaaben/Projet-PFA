<?php

$ROOT = __DIR__;

$DS = DIRECTORY_SEPARATOR;

$controleur_default = "login" ;

if(!isset($_REQUEST['controller']))
				//$controller récupère $controller_default;
				$controller=$controleur_default;
			else 
				// recupère l'action passée dans l'URL
				$controller = $_REQUEST['controller'];
					
switch ($controller) {

			case "login" :
				require ("{$ROOT}{$DS}controller{$DS}controllerLogin.php");
				break;

				case "connexion" :
					require ("{$ROOT}{$DS}controller{$DS}controllerConnexion.php");
					break;

				case "home" :
					require ("{$ROOT}{$DS}controller{$DS}controllerHome.php");
					
					break;

			case "commande" :
				require ("{$ROOT}{$DS}controller{$DS}controllerCommande.php");
				break;
			
			case "produit" :
				require ("{$ROOT}{$DS}controller{$DS}controllerProduit.php");
				break;
			case "client" :
				session_start();
				require ("{$ROOT}{$DS}controller{$DS}controllerClient.php");
				break;

			case "facture" :
				require ("{$ROOT}{$DS}controller{$DS}controllerFacture.php");
				break;
				
			case "utilisateur" :
				require ("{$ROOT}{$DS}controller{$DS}controllerUtilisateur.php");
				break;

			case "devi" :
				require ("{$ROOT}{$DS}controller{$DS}controllerDevi.php");
				break;

			case "statistique" :
				require ("{$ROOT}{$DS}controller{$DS}controllerStatistique.php");
				break;
	
				
			case "default" :
				require ("{$ROOT}{$DS}controller{$DS}controllerHome.php");
				break;


}
?>