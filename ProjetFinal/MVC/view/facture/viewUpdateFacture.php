<?php

session_start();

if((!isset($_SESSION['role'])) || (empty($_SESSION['role'])))
{
	header("location:index.php?controller=login");
}


$idf=$up->getIdf();
?>
    <!-- MAIN -->
    <main>
			<div class="head-title">
				<div class="left">
					<h1>Edit-facture</h1>
				</div>
			</div>

			<!--form-->
			<div class="container-fluid px-1 py-5 mx-auto">
				<div class="row d-flex justify-content-center">
					<div class="col-xl-7 col-lg-8 col-md-9 col-11 ">

						<div class="card">
							<form action="index.php?controller=facture&action=updated&idf=<?=$idf?>" method="POST" >
								<div class="form-group col-md-6">
									<label for="idant">identifiant de la facture</label>
									<input type="text" name="idf"  value= "<?=$idf?>" class="form-control" id="idant" placeholder="S'il vous plait entrer l'identifiant de facture" readonly>
								  </div>
								<div class="info2">
									<h3>Detail de paiement</h3>
								</div>
								<div class="form-group">
									<div class="form-group col-md-4">
										<label for="sel">Series</label>
										<select id="sel" name="serie" class="form-control">
										  <option selected>Alum</option>
										  <option>Alum2</option>
										</select>
									  </div>

									  <div class="form-group col-md-4">
										<label for="sel2">Status</label>
										<select id="sel2"  name="status" class="form-control">
										  <option selected>non paye</option>
										  <option>paye</option>
										  <option>pariciellement paye</option>
										</select>
									  </div>
								  
								  <div class="form-group col-md-6">
									<label for="prix">prix paié</label>
								  <input type="text" name="paied"  value= "<?=$up->getPaied()?>" class="form-control" id="inputAddress" placeholder="S'il vous plait entrer le prix paié">
								  </div>
								  <div class="form-group col-md-6">
									<label for="date">Date d'emission</label>
									<input type="text" name="date_emis" value= "<?=$up->getDate()?>" class="form-control" id="date" placeholder=" aaaa-mm-jj">
								  </div>
								</div>
								<div  class="form-group col-md-50">
                        <div class="table-data">
				            <div class="order">
								<table>
									<tr>
									  <td>Référence:</td>
									  <td>Taxe:</td>
									  <td>Remise:</td>
									   <td>id Client:</td>
									</tr>
									  <tr>
									  <td><input type="text" name="refrencF"  value="<?=$up->getRef()?>" class="form-control"></td>
									  <td><input type="text" name="taxe" value="<?=$up->getTaxe()?>" class="form-control" ></td>
									  <td><input type="text" name="Remise" value="<?=$up->getRemise()?>" class="form-control" ></td>
									  <td><input type="text" name="idcF"  value="<?=$up->getIdcF()?>" class="form-control" ></td>
									</tr>
								  </table>
                              </div>
			            </div>
								</div>
								<button type="submit" class="btn btn-success" value="Sauvegarder">Sauvegarder</button>
								<button type="button" class="btn btn-warning">Generer pdf</button>
								<button type="button" class="btn btn-info">Imprimer pdf</button>
								</form>
						</div>
					</div>
				</div>
			</div>
			<!--form-->
			
		</main>
		<!-- MAIN -->
