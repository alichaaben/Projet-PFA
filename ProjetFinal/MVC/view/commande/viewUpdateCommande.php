<?php

session_start();

if((!isset($_SESSION['role'])) || (empty($_SESSION['role'])))
{
	header("location:index.php?controller=login");
}


$id_comm=$up->getId_comm();
?> 
    
    <!-- MAIN -->
    <main>
			<div class="head-title">
				<div class="left">
					<h1>Edit-commande</h1>
				</div>
			</div>

			<!--form-->
			<div class="container-fluid px-1 py-5 mx-auto">
				<div class="row d-flex justify-content-center">
					<div class="col-xl-7 col-lg-8 col-md-9 col-11 ">

						<div class="card">
							<form action="index.php?controller=commande&action=updated&idc=<?=$id_comm?>" method="POST" >
								<div class="form-group col-md-6">
									<label for="idant">identifiant de la commande</label>
									<input type="text" name="id_comm" value="<?=$id_comm ?>" class="form-control" id="idant" readonly>
                                    
                                    <div class="form-group col-md-6">
									<label for="date">Date de creation</label>
									<input type="text" name="date_creation" value="<?=$up->getDate()?>" class="form-control" id="date" placeholder=" aaaa-mm-jj">
								  </div>

                                  <div class="form-group col-md-6">
									<label for="date">id de client</label>
									<input type="text" name="idc" value="<?=$up->getIdc() ?>" class="form-control" id="date" placeholder="donner l'id de client">
								  </div>



								  <div class="table-data">
				            <div class="order">
								<table>
									<tr>
									  <td>quantite</td>
									  <td>Prix:</td>
									  <td>Reference:</td>
									</tr>
									  <tr>
									  <td><input type="text" name="quantite"  value="<?=$up->getQt() ?>" class="form-control" ></td>
									  <td><input type="text" name="prix"   value="<?=$up->getPrix() ?>" class="form-control" ></td>
									  <td><input type="text" name="reference"  value="<?=$up->getRef() ?>" class="form-control" ></td>
									</tr>
								  </table>

                                </div>
								</div>
								<button type="submit" class=" btn btn-success" value="Sauvegarder">Sauvegarder</button>
								<button type="button" class="btn btn-info">Imprimer pdf</button>
								</form>
						</div>
					</div>
				</div>
			</div>
			<!--form-->
			
		</main>
		<!-- MAIN -->
