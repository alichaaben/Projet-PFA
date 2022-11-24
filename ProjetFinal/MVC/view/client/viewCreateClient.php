<?php

session_start();

if((!isset($_SESSION['role'])) || (empty($_SESSION['role'])))
{
	header("location:index.php?controller=login");
}else{



?>
	
	<!-- MAIN -->
    <main>
			<div class="head-title">
				<div class="left">
					<h1>Ajouter Un Client:</h1>
				</div>
			</div>

			<!--form-->
			<div class="container-fluid px-1 py-5 mx-auto">
				<div class="row d-flex justify-content-center">
					<div class="col-xl-7 col-lg-8 col-md-9 col-11 ">

						<div class="card">
							<form action="index.php?controller=client&action=created" method="POST" >
								  <div class="info2">
									<h3>nouvelle client</h3>
								</div>
								<div class="form-row">
								  <div class="form-group col-md-6">
									<label for="Nom">Nom du client</label>
									<input type="text" name="nomC" class="form-control" id="Nom" placeholder="S'il vous plait entrer de client">
								  </div>
								  <div class="form-group col-md-6">
									<label for="idc">identifiant legale du client</label>
									<input type="text"  name="idc" class="form-control" id="idc" placeholder="S'il vous plait entrer l'identifiant">
								  </div>
								  <div class="form-group col-md-6">
									<label for="per">Personne de contact</label>
									<input type="text" name="pers_C" class="form-control" id="per" placeholder="S'il vous plait entrer le nom de personne de contact">
								  </div>
								  <div class="form-group col-md-6">
									<label for="email">Email du client</label>
									<input type="email" name="email" class="form-control" id="email" placeholder="S'il vous plait entrer email de client">
								  </div>
								  <div class="form-group col-md-6">
								  <label for="Textarea">Adress de facturation</label>
								  <textarea class="form-control" name="adr_fac" id="Textarea" placeholder="S'il vous plait entrer l'adress de facture" required></textarea>
								  </div>
								  <div class="form-group col-md-6">
								  <label for="Textarea2">Adress d'expedition</label>
								  <textarea class="form-control" name="adr_exp" id="Textarea2" placeholder="S'il vous plait entrer l'adress d'expedition" required></textarea>
								  </div>
								</div>
								<button type="submit" class=" btn btn-success" value="Sauvegarder">Sauvegarder</button>
								</form>
						</div>
					</div>
				</div>
			</div>
			<!--form-->
			
		</main>
		<!-- MAIN -->
<?php }?>