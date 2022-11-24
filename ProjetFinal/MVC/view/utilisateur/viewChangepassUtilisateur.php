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
					<h1>changer le Mot de passe:</h1>
				</div>
			</div>

			<!--form-->
			<div class="container-fluid px-1 py-5 mx-auto">
				<div class="row d-flex justify-content-center">
					<div class="col-xl-7 col-lg-8 col-md-9 col-11 ">

						<div class="card">
                        <form action="index.php?controller=utilisateur&action=changed" method="POST">
						<?php
									if(isset($_SESSION['erreur-LP'])){?>
											<script>
												Swal.fire({
									icon: 'error',
									title: 'Oops...',
									text: ' <?php echo "  ".$_SESSION['erreur-LP']; ?>',
									footer: '<a href="">Veuillez revérifier les donneés!!</a>'
									})
											</script>
									<?php
										unset($_SESSION['erreur-LP']);
									}?>
								  <div class="info2">
									<h3>A propot de vous</h3>
								</div>
								<p><b><u>changer votre password:</u></b></p>
								<div class="form-row">
								  <div class="form-group col-md-10">
									<label for="usr">username</label>
									<input type="text" name="username" class="form-control" id="usr" placeholder="S'il vous plait entrer le username">
								  </div>
								  <div class="form-group col-md-10">
									<label for="A-mdp">Ancien password</label>
									<input type="text"  name="password" class="form-control" id="A-mdp" placeholder="S'il vous plait entrer le password">
								  </div>
								  <div class="form-group col-md-10">
									   <label for="mdp">nouveau password</label>
									   <div class="eye">
										<input type="password"  name="NewPass" class="form-control" id="mdp" placeholder="S'il vous plait entrer le password">
									</div>
								  </div>
								  <div class="form-group col-md-10">
									<label for="C-mdp">Confirmation password</label>
									<div class="eye">
									<input type="password"  name="NewPass2" class="form-control" id="C-mdp" placeholder="S'il vous plait confirmer le password" >
								</div>
								  </div>
								</div>
								<br>
								<button type="submit" class="btn btn-success">Sauvegarder</button>
								</form>
						</div>
					</div>
				</div>
			</div>
			<!--form-->
			
		</main>
		<!-- MAIN -->
