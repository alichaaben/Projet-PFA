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
					<h1>parametre:</h1>
				</div>
			</div>
			<hr>
			  <div class="left">
				<h3>Les Utilisateurs:</h3>
                <br>
			</div>
			<div class="flex-container">
				<div>
					<a href="index.php?controller=utilisateur&action=create" class="a1"><button type="submit" href="#" class="btn btn-primary"><i class='bx bx-plus'></i>Nouvelle Employe</button></a>
                </div>
			  </div>
			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3>tous les utilisateurs:</h3>
					</div>
					<table>
						<thead>
							<tr>
									
                                    <th>User Name</th>
									<th>role</th>
									<th>password</th>
									<th>numero tel</th>
									<th>nom</th>
									<th>email</th>
                                    <th>date de creation</th>
									<th>Action</th>							
							</tr>
						</thead>
						<tbody> 
                        <?php
                         foreach ($tab_U as $u){
							 $PK=$u->getUser();
                        ?>
                         <tr>
                         
                         <td><?=$PK?></td>
                         <td><?=$u->getRole() ?></td>
                         <td><?=MD5($u->getPass())?></td>
                         <td><?=$u->getNumtel()?></td>
						 <td><?=$u->getNom()?></td>
						 <td><?=$u->getEmail()?></td>
                         <td><?=$u->getDate()?></td>
						  <td>
						<a href="index.php?controller=utilisateur&action=update&username=<?=$PK?>" class="btn btn-warning" title="Edit" data-toggle="tooltip"><i class='bx bxs-edit'></i></a>
                        <a  href="index.php?controller=utilisateur&action=delete&username=<?=$PK?>" class="delete_btn_ajax btn btn-danger"><i class='bx bx-trash' ></i></a>
					</td>
                        </tr>
                        <?php } ?>
						</tbody>
					</table>
				</div>
			</div>
		</main>
		<!-- MAIN -->

