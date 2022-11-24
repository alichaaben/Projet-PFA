<?php

session_start();

if((!isset($_SESSION['role'])) || (empty($_SESSION['role'])))
{
	header("location:index.php?controller=login");
}else{

$idc=$up->getIdc();

?>




<!-- MAIN -->
<main>
			<div class="head-title">
				<div class="left">
					<h1>Editer un client:</h1>
				</div>
			</div>

			<!--form-->
			<div class="container-fluid px-1 py-5 mx-auto">
				<div class="row d-flex justify-content-center">
					<div class="col-xl-7 col-lg-8 col-md-9 col-11 ">

						<div class="card">
							<form action="index.php?controller=client&action=updated&idc=<?=$idc?>" method="POST" >
								  <div class="info2">
									<h3>edit client</h3>
								</div>
								<div class="form-row">
								  <div class="form-group col-md-6">
									<label for="Nom">Nom du client</label>
									<input type="text" class="form-control" name="nom" value="<?=$up->getNom()?>" id="nom" placeholder="S'il vous plait entrer de client">
								  </div>
								  <div class="form-group col-md-6">
									<label for="idc">identifiant legale du client</label>
									<input type="text"  name="idc" value="<?=$idc?>" class="form-control" id="idc" placeholder="S'il vous plait entrer l'identifiant" readonly>
								  </div>
								  <div class="form-group col-md-6">
									<label for="per">Personne de contact</label>
									<input type="text"  name="persone" value="<?=$up->getPersone()?>" class="form-control" id="per" placeholder="S'il vous plait entrer le nom de personne de contact">
								  </div>
								  <div class="form-group col-md-6">
									<label for="persone">Email du client</label>
									<input type="email" name="email" value="<?=$up->getEmail()?>" class="form-control" id="persone" placeholder="S'il vous plait entrer email de client">
								  </div>
								  <div class="form-group col-md-6">
								  <label for="adr1">Adress de facturation</label>
								  <input type="text"  class="form-control" name="adr_fac" value="<?=$up->getAdress_fac()?>" id="adr1" placeholder="S'il vous plait entrer l'adress de facture" >
								  </div>


								  <div class="form-group col-md-6">
								  <label for="adr2">Adress d'expedition</label>
								  <input type="text" class="form-control" name="adr_exp" value="<?=$up->getAdress_exp()?>" id="adr2" placeholder="S'il vous plait entrer l'adress d'expedition" >
								  </div>

								</div>
								<button type="submit" class="btn btn-success">Sauvegarder</button>
								</form>
						</div>
					</div>
				</div>
			</div>
			<!--form-->
			
		</main>
		<!-- MAIN -->
		<?php }?>