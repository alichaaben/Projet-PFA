<?php

session_start();

if((!isset($_SESSION['role'])) || (empty($_SESSION['role'])))
{
	header("location:index.php?controller=login");
}else if(($_SESSION['role']=='Employe')|| ($_SESSION['role']=='admin')){




?>
		<!-- MAIN -->
		<main>
			<div class="head-title">
				<div class="left">
					<h1>Table de bord</h1>
				</div>
			</div>

			<ul class="box-info">
				<li>
                    <i class='bx bxs-receipt'></i>
					<span class="text">
						<h3><?=$nbFacture?></h3>
						<p>Factures</p>
					</span>
				</li>
				<li>
					<i class='bx bxs-group' ></i>
					<span class="text">
						<h3><?=$nbClient;?></h3>
						<p>Clients</p>
					</span>
				</li>
				<li>
					<i class="bx bxs-credit-card">
					</i><span class="text">
						<h3><?=$Devi->devi?> DNT</h3><p>Devis</p></span></li>
				
				<li>
					<i class='bx bx-paste'></i>
					<span class="text">
						<h3><?=$nbCommande;?></h3>
						<p>Commande</p>
					</span>
				</li>
			</ul>
            <hr>
            <form action="index.php?controller=home&action=affichAll" method="POST">
                <div class="form-row">
                    <div class="col">
                        <input type="search" name="recherche2[]" class="form-control" placeholder="numero de commande" required>
                      </div>
                  <div class="col">
                    <input type="search" name="recherche2[]" class="form-control" placeholder="id de client" required>
                  </div>
                  <label id="e1">depuit</label> 
                  <div class="col">
                    <input type="search" name="recherche2[]"  class="form-control" placeholder="aaaa-mm-jj" id="e1" required>
                  </div>
                  <button type="submit"  value="rechercher2" class="btn btn-primary">recherche</button>
                </div>
              </form>

			<div class="table-data">
				
			<div class="order">
					<div class="head">
						<h3>Recent commande:</h3>
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
                        </tr>
                        <?php } ?>
						</tbody>
					</table>
				</div>




				<div class="todo">
					
					<div id="chartBoxII">
								<canvas id="myChartII" width="50" height="50"></canvas>
							</div>
								<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
							<script>
								const ctxII = document.getElementById('myChartII').getContext('2d');
							const myChartII = new Chart(ctxII, {
							type: 'doughnut',
							data:{
							labels: [
								'client',
								'facture',
								'commande'
							],
							datasets: [{
								label: 'My First Dataset',
								data: [<?=$nbClient;?>,<?=$nbFacture?>,<?=$nbCommande;?>],
								backgroundColor: [
								'rgb(255, 99, 132)',
								'rgb(54, 162, 235)',
								'rgb(255, 205, 86)'
								],
								hoverOffset: 4
							}]
							}
							});
							</script>
					<br>
					<div class="head">
											<h3>Détails de la facturation:</h3>
										</div>
										<ul class="todo-list">
											<li class="completed">
												<p>facture payées (<?php echo $nbP;?>) </p>
												<i class='bx bxs-message-check'></i>
											</li>
											<li class="semi-completed">
												<p>facture partiellement payées (<?=$parcPaye?>) </p>
												<i class='bx bx-dollar' ></i>
											</li>
											<li class="not-completed">
												<p>facture non payées (<?=$Npaye?>)</p>
												<i class='bx bxs-comment-x'></i>
											</li>
										</ul>
					
														</div>
													</div>
										<hr>


			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3>Recent Facture:</h3>
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
							</tr>
						</thead>
						<tbody>
                        
                         <?php
                         foreach ($tab_h as $u){
                        ?>
                         <tr>
                         
                         <td><?=$u->getIdf()?></td>
                         <td><?=$u->getRef()?></td>
                         <td><?=$u->getIdcF()?></td>
                         <td><?=$u->getDate()?></td>
                         <td><?=$u->getSerie()?></td>
						 <td><?=$u->getRemise()?></td>
                         <td><?=$u->getTaxe()?></td>
                         <td><?=$u->getStatus()?></td>
                         <td><?=$u->getPaied()?></td>
                        </tr> 
                        <?php }?>
						</tbody>
					</table>
				</div>
			</div>
		</main>
		<!-- MAIN -->
	
	<!-- CONTENT -->
	<?php }?>