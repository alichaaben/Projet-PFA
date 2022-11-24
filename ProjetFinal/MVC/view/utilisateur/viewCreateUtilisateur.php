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
					<h1>parametre:</h1>
				</div>
			</div>

			<!--form-->
			<div class="container-fluid px-1 py-5 mx-auto">
				<div class="row d-flex justify-content-center">
					<div class="col-xl-7 col-lg-8 col-md-9 col-11 ">

						<div class="card">
							<form action="index.php?controller=utilisateur&action=created" method="POST">
								  <div class="info2">
									<h3>nouvelle Utilisateur</h3>
								</div>
								<div class="form-row">
								  <div class="form-group col-md-6">
									<label for="uti">username</label>
									<input type="text" name="username" class="form-control" id="uti" placeholder="S'il vous plait entrer le nom d'Utilisateur">
								  </div>
								  <div class="form-group col-md-6">
									<label for="mail">Email</label>
									<input type="text" name="email" class="form-control" id="mail" placeholder="S'il vous plait entrer l'email de l'Utilisateur">
								  </div>
								  <div class="form-group col-md-6">
									<label for="tel">Téléphone</label>
									<input type="text" name="numtel" class="form-control" id="tele" placeholder="S'il vous plait entrer la Téléphone de l'Utilisateur">
								  </div>
								  <div class="form-group col-md-6">
									<label for="usr">Nom d'Utilisateur</label>
									<input type="text" name="nom" class="form-control" id="usr" placeholder="S'il vous plait entrer le username">
								  </div>
								  <div class="form-group col-md-6">
									<label for="mdp">password</label>
									<input type="text" name="password"  class="form-control" id="mdp" placeholder="S'il vous plait entrer le password">
								  </div>
								  <div class="form-group col-md-6">
									<label for="mdp">Confirmation password</label>
									<input type="text"  name="#" class="form-control" id="mdp" placeholder="S'il vous plait confirmer le password">
								  </div>
								</div>
								<div class="form-group col-md-4">
									<label for="sel2">Role</label>
									<select id="sel2" name="role" class="form-control">
									  <option selected>admin</option>
									  <option>Employe</option>
									</select>
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
		