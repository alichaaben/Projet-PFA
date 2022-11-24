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
					<h1>Table de bord</h1>
				</div>
			</div>

            <form action="index.php?controller=facture&action=readAll" method="POST">
                <div class="form-row">
                    <div class="col">
                        <input type="search" name="recherche[]" class="form-control" placeholder="numero de facture" required>
                      </div>
                  <div class="col">
                    <input type="search" name="recherche[]" class="form-control" placeholder="reference de facture" required>
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
				<h3>Les factures recents:</h3>
			</div>
			<div class="flex-container">
				<div>
					<a href="index.php?controller=facture&action=create" class="a1"><button type="submit" href="#" class="btn btn-primary"><i class='bx bx-plus'></i>Nouvelle Facture</button></a>
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
									
                                    <th>idf</th>
									<th>referencF</th>
									<th>idcF</th>
									<th>date_emis</th>
									<th>serie</th>
									<th>remise</th>
									<th>taxe</th>
									<th>status</th>
									<th>paied</th>
									<th>Action</th>							
							</tr>
						</thead>
						<tbody> 
                        <?php
                         foreach ($tab_f as $u){
							 $PK=$u->getIdf();
                        ?>
                         <tr>
                         
                         <td><?=$PK?></td>
                         <td><?=$u->getRef()?></td>
                         <td><?=$u->getIdcF()?></td>
                         <td><?=$u->getDate()?></td>
                         <td><?=$u->getSerie()?></td>
						 <td><?=$u->getRemise()?></td>
                         <td><?=$u->getTaxe()?></td>
                         <td><?=$u->getStatus()?></td>
                         <td><?=$u->getPaied()?></td>
						  <td>
						<a href="index.php?controller=facture&action=update&idf=<?=$PK ?>" class="btn btn-warning" title="Edit" data-toggle="tooltip"><i class='bx bxs-edit'></i></a>
                        <a  href="index.php?controller=facture&action=delete&idf=<?=$PK ?>" class="delete_btn_ajax btn btn-danger"><i class='bx bx-trash' ></i></a>
					</td>
                        </tr>
                        <?php } ?>
						</tbody>
					</table>
				</div>
			</div>
		</main>
		<!-- MAIN -->

