<?php

session_start();

if((!isset($_SESSION['role'])) || (empty($_SESSION['role'])))
{
	header("location:index.php?controller=login");
}else{




?>
<!-- MAIN -->
<main>
			<div class="head-title">
				<div class="left">
					<h1>Table de bord</h1>
				</div>
			</div>

            <form action="index.php?controller=client&action=readAll" method="POST">
                <div class="form-row">
                    <div class="col">
                        <input type="search" name="recherche[]" class="form-control" placeholder="numero de client" required>
                      </div>
                  <div class="col">
                    <input type="search" name="recherche[]" class="form-control" placeholder="nom de client" required>
                  </div>
                  <button type="submit"  value="rechercher" class="btn btn-primary">recherche</button>
                </div>
              </form>
              <hr>
			
			  <div class="left">
				<h3>Les clients recents:</h3>
			</div>
			<div class="flex-container">
				<div>
					<a href="index.php?controller=client&action=create" class="a1"><button type="submit" href="#" class="btn btn-primary"><i class='bx bx-plus'></i>Nouvelle Client</button></a>
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
								
                                    <th>idc</th>
									<th>nom</th>
									<th>email</th>
									<th>adresse_exp</th>
									<th>adresse_fac</th>
									<th>personne_contact</th>						
							</tr>
						</thead>
						<tbody> 
                        <?php
                         foreach ($tab_C as $u){
							 $PK=$u->getIdc();
                        ?>
                         <tr>
                      
                         <td><?=$PK?></td>
                         <td><?=$u->getNom()?></td>
                         <td><?=$u->getEmail()?></td>
                         <td><?=$u->getAdress_exp()?></td>
                         <td><?=$u->getAdress_fac()?></td>
						 <td><?=$u->getPersone()?></td>
						  <td>
						<a href="index.php?controller=client&action=update&idc=<?=$PK ?>" class="btn btn-warning" title="Edit" data-toggle="tooltip"><i class='bx bxs-edit'></i></a>
                        <a href="index.php?controller=client&action=delete&idc=<?=$PK ?>" class="delete_btn_ajax btn btn-danger"><i class='bx bx-trash' ></i></a>
					</td>
                        </tr>
                        <?php } ?>
						</tbody>
					</table>
					<nav>
                    
                </nav>
				</div>
			</div>
		</main>
		<!-- MAIN -->
		<?php }?>
		