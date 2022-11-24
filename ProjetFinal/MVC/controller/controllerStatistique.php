<?php
if(isset($_REQUEST['action']))	
$action = $_REQUEST['action'];
	else $action="readAll";	


	switch ($action){
		case "readAll":
			$pagetitle = "statistique";
			$view = "readAll";
			require ("{$ROOT}{$DS}view{$DS}view.php");
			break;
	}



?>