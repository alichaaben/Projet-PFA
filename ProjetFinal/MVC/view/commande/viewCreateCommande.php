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
					<h1>nouvelle commande</h1>
				</div>
			</div>

			<!--form-->
			<div class="container-fluid px-1 py-5 mx-auto">
				<div class="row d-flex justify-content-center">
					<div class="col-xl-7 col-lg-8 col-md-9 col-11 ">

						<div class="card">
							<form action="index.php?controller=commande&action=created" method="POST" >
								<div class="form-group col-md-10">
									<label for="idant">identifiant de la commande</label>
									<input type="text" name="id_comm" class="form-control" id="idant"  placeholder="	AUTO_INCREMENT   " readonly>
                                    </div>
                                    <div class="form-group col-md-10">
									<label for="date">Date de creation</label>
									<input type="text" name="date_creation" class="form-control" id="date" placeholder=" aaaa-mm-jj">
								  </div>

                                  <div class="form-group col-md-10">
									<label for="date">id de client</label>
									<input type="text" name="idc" class="form-control" id="date" placeholder="donner l'id de client">
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
									  <td><input type="text" name="quantite" class="form-control" ></td>
									  <td><input type="text" name="prix"class="form-control" ></td>
									  <td><input type="text" name="reference" class="form-control" ></td>
									</tr>
								  </table>
                              </div>
			            </div>
								

								  <button type="submit" class=" btn btn-success" value="Sauvegarder">Sauvegarder</button>
								<button type="button" class="btn btn-info">Imprimer pdf</button>
                                
								</div>
						
								</form>
						</div>
					</div>
				</div>
			</div>
			<!--form-->
			
		</main>
		<!-- MAIN -->
		