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

            <form action="index.php?controller=commande&action=readAll" method="POST">
                <div class="form-row">
                    <div class="col">
                        <input type="search" name="recherche[]" class="form-control" placeholder="numero de commande" required>
                      </div>
                  <div class="col">
                    <input type="search" name="recherche[]" class="form-control" placeholder="id de client" required>
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
				<h3>Les commande recents:</h3>
			</div>
			<div class="flex-container">
				<div>
					<a href="index.php?controller=commande&action=create" class="a1"><button type="submit" href="#" class="btn btn-primary"><i class='bx bx-plus'></i>Nouvelle commande</button></a>
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
									
                                    <th>id de commande</th>
									<th>date de creation</th>
									<th>id de client</th>
									<th>quantite</th>
									<th>prix</th>
									<th>reference</th>
									<th>Action</th>							
							</tr>
						</thead>
						<tbody> 
                        <?php
                         foreach ($tab_Co as $u){
							 $PK=$u->getId_comm();
                        ?>
                         <tr>
                         
                         <td><?=$PK?></td>
                         <td><?=$u->getDate()?></td>
                         <td><?=$u->getIdc()?></td>
                         <td><?=$u->getQt()?></td>
						 <td><?=$u->getPrix()?></td>
						 <td><?=$u->getRef()?></td>
						  <td>
						<a href="index.php?controller=commande&action=update&id=<?=$PK?>" class="btn btn-warning" title="Edit" data-toggle="tooltip"><i class='bx bxs-edit'></i></a>
                        <a  href="index.php?controller=commande&action=delete&id=<?=$PK?>" class="delete_btn_ajax btn btn-danger"><i class='bx bx-trash' ></i></a>
					</td>
                        </tr>
                        <?php } ?>
						</tbody>
					</table>
				</div>
			</div>
		</main>
		<!-- MAIN -->

		