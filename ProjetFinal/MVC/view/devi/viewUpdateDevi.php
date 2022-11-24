<?php

session_start();

if((!isset($_SESSION['role'])) || (empty($_SESSION['role'])))
{
	header("location:index.php?controller=login");
}


$idD=$up->getIdD();

	
	
?> 
    <!-- MAIN -->
    <main>
			<div class="head-title">
				<div class="left">
					<h1>nouvelle Devi</h1>
				</div>
			</div>

			<!--form-->
			<div class="container-fluid px-1 py-5 mx-auto">
				<div class="row d-flex justify-content-center">
					<div class="col-xl-7 col-lg-8 col-md-9 col-11 ">

						<div class="card">
							<form action="index.php?controller=devi&action=updated&idf=<?=$idf?>" method="POST" >
								<div class="form-group col-md-6">
									<label for="idant">identifiant de la devi</label>
									<input type="text" name="idD" value="<?=$idD?>" class="form-control" id="idant" placeholder="S'il vous plait entrer l'identifiant de facture">
								  </div>
								<div class="info2">
								</div>
								<div class="form-group">
            						<div class="form-group col-md-6">
									<label for="prix">le remise</label>
								  <input type="text" name="remiseD" value="<?=$up->getRemiseD()?>" class="form-control" id="inputAddress" placeholder="S'il vous plait entrer le prix paié">
								  </div>
                                  <div class="form-group col-md-6">
									<label for="prix">le serie</label>
								  <input type="text" name="serieD" value="<?=$up->getSerieD()?>" class="form-control" id="inputAddress" placeholder="S'il vous plait entrer le prix paié">
								  </div>
								  <div class="form-group col-md-6">
									<label for="date">date_emis</label>
									<input type="text" name="date_emisD" value="<?=$up->getDate_emisD()?>" class="form-control" id="date" placeholder=" aaaa-mm-jj">
								  </div>
								</div>
								<div  class="form-group col-md-50">
                        <div class="table-data">
				            <div class="order">
								<table>
									<tr>
									  <td>reference:</td>
									  <td>Taxe:</td>
									  <td>quantité:</td>
									   <td>id Client:</td>
									</tr>
									  <tr>
									  <td><input type="text" name="referenceD" value="<?=$up->getReferenceD()?>" class="form-control" ></td>
									  <td><input type="text" name="taxeD" value="<?=$up->getTaxeD()?>"  class="form-control" ></td>
									  <td><input type="text" name="qteD" value="<?=$up->getQteD()?>"  class="form-control" ></td>
									  <td><input type="text" name="idcD" value="<?=$up->getIdcD()?>"  class="form-control" ></td>
									</tr>
								  </table>
                              </div>
			            </div>
								</div>
								<button type="submit" class=" btn btn-success" value="Sauvegarder">Sauvegarder</button>
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
	