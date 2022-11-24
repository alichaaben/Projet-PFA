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
					<h1>liste des Devis</h1>
				</div>
			</div>

            <form action="index.php?controller=devi&action=readAll" method="POST">
                <div class="form-row">
                    <div class="col">
                        <input type="search" name="recherche[]" class="form-control" placeholder="numero de la devi" required>
                      </div>
                  <div class="col">
                    <input type="search" name="recherche[]" class="form-control" placeholder="id du client" required>
                  </div>
                  <label id="e1">depuit</label> 
                  <div class="col">
                    <input type="search" name="recherche[]"  class="form-control" placeholder="aaaa-mm-jj" id="e1" required>
                  </div>
                  <button type="submit"  value="rechercher" class="btn btn-primary">recherche</button>
                </div>
              </form>
              <hr>
			
			  <div class="left">
				<h3>Les Devis recents:</h3>
			</div>
			<div class="flex-container">
				<div>
					<a href="index.php?controller=devi&action=create" class="a1"><button type="submit" href="#" class="btn btn-primary"><i class='bx bx-plus'></i>Nouvelle Devi</button></a>
                </div>
			  </div>
			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3>Recent Orders :</h3>
					</div>
					<table>
						<thead>
							<tr>
									
                  <th>idD</th>
                  <th>date_emisD</th>
                  <th>qteD</th>
                  <th>remiseD</th>
                  <th>serieD</th>
                  <th>taxeD</th>
                  <th>referenceD</th>
                  <th>idcD</th>
									<th>Action</th>							
							</tr>
						</thead>
						<tbody> 
              
                        <?php
                         foreach ($tab_D as $u){
							 $PK=$u->getIdD();
                        ?>
                         <tr>
                         
                         <td><?=$PK?></td>
                         <td><?=$u->getDate_emisD()?></td>
                         <td><?=$u->getQteD()?></td>
                         <td><?=$u->getRemiseD()?></td>
                         <td><?=$u->getSerieD()?></td>
						             <td><?=$u->getTaxeD()?></td>
                         <td><?=$u->getReferenceD()?></td>
                         <td><?=$u->getIdcD()?></td>
						  <td>
						<a href="index.php?controller=devi&action=update&idD=<?=$PK ?>" class="btn btn-warning" title="Edit" data-toggle="tooltip"><i class='bx bxs-edit'></i></a>
                        <a  href="index.php?controller=devi&action=delete&idD=<?=$PK ?>" class="delete_btn_ajax btn btn-danger"><i class='bx bx-trash' ></i></a>
					</td>
                        </tr>
                        <?php } ?>
						</tbody>
					</table>
				</div>
			</div>
		</main>
		<!-- MAIN -->

 