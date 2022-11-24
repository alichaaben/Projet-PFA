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

            <form action="index.php?controller=produit&action=readAll" method="POST">
                <div class="form-row">
                    <div class="col">
                        <input type="search" name="recherche[]" class="form-control" placeholder="reference" required>
                      </div>
                  <div class="col">
                    <input type="search" name="recherche[]" class="form-control" placeholder="description" required>
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
				<h3>Les Produits recents:</h3>
			</div>
			<div class="flex-container">
				<div>
					<a href="index.php?controller=produit&action=create" class="a1"><button type="submit" href="#" class="btn btn-primary"><i class='bx bx-plus'></i>Nouvelle Produit</button></a>
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
                                    <th>reference</th>
									<th>cout_unitaire</th>
									<th>description</th>
									<th>dateCreation</th>							
							</tr>
						</thead>
						<tbody> 
                        <?php
                         foreach ($tab_P as $u){
							 $PK=$u->getReference();
                        ?>
                         <tr>
                         
                         <td><?=$PK?></td>
                         <td><?=$u->getCout()?></td>
                         <td><?=$u->getDescri()?></td>
                         <td><?=$u->getDateC()?></td>
						  <td>
						<a href="index.php?controller=produit&action=update&reference=<?=$PK ?>" class="btn btn-warning" title="Edit" data-toggle="tooltip"><i class='bx bxs-edit'></i></a>
                        <a  href="index.php?controller=produit&action=delete&reference=<?=$PK ?>" class="delete_btn_ajax btn btn-danger"><i class='bx bx-trash' ></i></a>
					</td>
                        </tr>
                        <?php } ?>
						</tbody>
					</table>
				</div>
			</div>
		</main>
		<!-- MAIN -->

