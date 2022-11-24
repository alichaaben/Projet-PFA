<?php session_start();?>
	<!-- SIDEBAR -->
	<section id="sidebar">
		<a href="#" class="brand">
			<i class='bx bxl-magento'></i>
			<span class="text">AdElo</span>
		</a>
		<ul class="side-menu top">
			<li class="active">
				<a href="index.php?controller=home">
					<i class='bx bxs-dashboard' ></i>
					<span class="text">Accueil</span>
				</a>
			</li>
			<li>
				<a href="index.php?controller=client">
                    <i class='bx bxs-user'></i>
					<span class="text">Clients</span>
				</a>
			</li>
			<li>
				<a href="index.php?controller=commande">
                    <i class='bx bx-paste'></i>
					<span class="text">Commandes</span>
				</a>
			</li>
			
<?php
if($_SESSION['role']=='admin'){
			echo'<li><a href="index.php?controller=statistique&action=readAll"><i class="bx bx-line-chart"></i><span class="text">Statistiques</span></a></li>';
}?>

			<li>
				<a href="index.php?controller=produit">
					<i class='bx bxl-product-hunt' ></i>
					<span class="text">produits</span>
				</a>
			</li>
            <li>
				<a href="index.php?controller=facture">
					<i class='bx bxs-receipt'></i>
					<span class="text">Factures</span>
				</a>
			</li>


			        <?php
						if($_SESSION['role']=='admin'){
									echo'<li><a href="index.php?controller=devi"><i class="bx bx-credit-card" ></i><span class="text">Devis</span></a></li>';
						}?>
			
		</ul>
		<ul class="side-menu">

		<?php 
				if($_SESSION['role']=='Employe'){
					echo'<li><a href="index.php?controller=utilisateur&action=change"><i class="bx bx-cog"></i><span class="text">parametre</span></a></li>';
					}
				?>
	
				<?php 
				if($_SESSION['role']=='admin'){
					echo'<li><a href="index.php?controller=utilisateur"><i class="bx bxs-lock-alt"></i><span class="text">Administration</span></a></li>';
					}
				?>
				
			


			
			<li>
				<a href="index.php?controller=connexion&action=deconnecter" class="logout">
					<i class='bx bxs-log-out-circle' ></i>
					<span class="text">Logout</span>
				</a>
			</li>
		</ul>
	</section>
	<!-- SIDEBAR -->


	<!-- CONTENT -->
	<section id="content">
		<!-- NAVBAR -->
		<nav>
			<i class='bx bx-menu' ></i>
			<a href="index.php?controller=home" class="nav-link"> <i class='bx bx-home'></i>Accueil</a>
			<form action="">
				<div class="form-input">
					<input type="search" placeholder="Search...">
					<button type="submit" class="search-btn" value="search"  onClick="search(id)"><i class='bx bx-search' ></i></button>
				</div>
			</form>
			<div class="profile-details">
				<img src="./assets/imges/user.png" alt="">
				<span class="admin_name"><?php echo $_SESSION['nom']." :<b> ".$_SESSION['role']."</b>";?></span>
			  </div>
			
		</nav>
		<!-- NAVBAR -->
    