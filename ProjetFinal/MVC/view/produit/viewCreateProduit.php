<?php

session_start();

if((!isset($_SESSION['role'])) || (empty($_SESSION['role'])))
{
	header("location:index.php?controller=login");
}




?>
		<!-- MAIN -->
		<main>
			<div class="head-title">
				<div class="left">
					<h1>Ajouter Produit</h1>
				</div>
			</div>

			<!--form-->
			<div class="container-fluid px-1 py-5 mx-auto">
				<div class="row d-flex justify-content-center">
					<div class="col-xl-7 col-lg-8 col-md-9 col-11 ">

						<div class="card">
							<form action="index.php?controller=produit&action=created" method="POST" >
								  <div class="info2">
									<h3>nouvelle Produit</h3>
								</div>
								<div class="form-row">
								  <div class="form-group col-md-9">
									<label for="ref">Référence de Produit</label>
									<input type="text" name="reference" class="form-control" id="ref" placeholder="S'il vous plait entrer la Référence de votre Produit">
								  </div>
								  <div class="form-group col-md-12">
								  <label for="Textarea">Discription</label>
								  <textarea class="form-control"  name="description" id="Textarea" placeholder="S'il vous plait entrer la Discription" required></textarea>
								  </div>
								  <div class="form-group col-md-9">
									<label for="ref">Cout unitare</label>
									<input type="text" class="form-control" id="ref" name="cout_unitaire" placeholder="S'il vous plait entrer le cout unitaire">
								  </div>
								  <div class="form-group col-md-9">
									<label for="ref">date de Creation</label>
									<input type="text" class="form-control" id="ref" name="dateCreation" placeholder="aaaa/MM/JJ">
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
	