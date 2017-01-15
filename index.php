<?php
	include_once $_SERVER['DOCUMENT_ROOT'].'/inc/global.php';
	define('PAGENAME', 'Accueil');

	switch ($user['risque']) {
		case 'medium':
			$class = "warning";
			break;
		case 'hight':
			$class = "danger";
			break;
		default:
			$class = "success";
			break;
	}

?>
<!DOCTYPE html>
<html>
<head>
	<?php include_once ROOT.'/inc/head.php'; ?>
	<link rel="stylesheet" type="text/css" href="/css/request.css">
	<link rel="stylesheet" type="text/css" href="/css/dashboard.css">
</head>
<body>
	<?php include_once ROOT.'/inc/header.php'; ?>
	<div class="content">

		<form action="/" method="get">
			<div class="MDgroup">
				<input type="text" name="n" data-type="n" required="true" value="<?php echo $_GET['n'] ?>">
				<span class="highlight"></span>
				<span class="bar"></span>
				<label>NUPERS</label>
			</div>

			<div class="col-lg-6" style="margin: 0 auto; float: none">
				<input type="submit" class="primary" value="Valider">
			</div>
		</form>
		<div style="height: 100px"></div>
		<?php if (isset($_GET['n'])){ ?>
			<div class="row">
				<div class="col-lg-12">
					<?php
						$len = count($user['notification']);
						$i = 0;
					?>
					<h3>Notifications</h3>
					<div class="col-lg-6">
						<ul class="list-group">
							<?php while ($i < $len):
									if ($i == intval($len/2)+1) echo '</ul></div><div class="col-lg-6"><ul class="list-group">';
							?>
								<li class="list-group-item"><?= $user['notification'][$i++] ?></li>
							<?php endwhile; ?>
						</ul>
					</div>
					<div class="col-lg-6">
						<input type="submit" class="primary" value="Ajouter">
					</div>
				</div>
				<div class="col-lg-6">
					<h3>Informations personnelles</h3>
					<ul class="list-group">
						<li class="list-group-item">Nom : <?= $user["firstname"] ?></li>
						<li class="list-group-item">Prenom : <?= $user["lastname"] ?></li>
						<li class="list-group-item">Adresse : <?= $user["address"] ?></li>
						<li class="list-group-item">Situation : <?= $user["sutuation"] ?></li>
						<li class="list-group-item">Date de naissance : <?= $user["date_birth"] ?> - <?= date('Y') - intval(explode("/", $user["date_birth"])[2]) ?> ans</li>
						<li class="list-group-item">Flag: <?= $user["flag"] ?></li>
					</ul>
				</div>
				<div class="col-lg-6">
					<h3>Derniers rendez-vous</h3>
					<ul class="list-group">
						<?php foreach ($user['rdv'] as $v) { ?>
						<li class="list-group-item">
							Le <?= $v['date'] ?><br>
							Conclusion: <?= $v['content'] ?>
						</li>
						<?php } ?>
					</ul>
				</div>
				<?php if (!empty($user["gest"])): ?>
					<div class="col-md-6">
						<h3>Gestionaire</h3>
						<ul class="list-group">
							<li class="list-group-item">Gestionnaire: <?= $user["gest"] ?></li>
							<li class="list-group-item"><input type="submit" class="primary" value="Contacter"></li>
						</ul>
					</div>
				<?php endif; ?>
				<div class="col-lg-12">
					<h3>Synthèse des actifs</h3>
					<table class="table table-striped" style="background-color: #fff;box-shadow: 0 2px 5px rgba(0, 0, 0, 0.26);">
				    <thead>
				      <tr>
				        <th>Prestation</th>
				        <th>Numero</th>
				        <th>Montant</th>
				      </tr>
				    </thead>
				    <tbody>
					<?php
						$somme = 0;
						foreach ($user['prestation'] as $v) {
							$somme += $v[2];
					?>
						<tr>
							<td><?= $v[0] ?></td>
							<td><?= $v[1] ?></td>
							<td><?= $v[2] ?> &euro;</td>
						</tr>
					<?php } ?>
						<tr>
							<td>Total</td>
							<td></td>
							<td><?= $somme ?> &euro;</td>
						</tr>
				    </tbody>
				  </table>
				</div>
				<div class="col-lg-12">
					<h3>Produits financier</h3>
					<div class="row">
						<div class="col-sm-6">
							<ul class="list-group">
								<li class="list-group-item list-group-item-<?= $class ?>">
									Profil risque: <?= $user["risque"] ?>
								</li>
							</ul>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<h3>Competences</h3>
							<ul class="list-group">
								<?php foreach ($user['competence'] as $v) { ?>
									<li class="list-group-item"><?= $v ?></li>
								<?php } ?>
							</ul>
						</div>
						<div class="col-md-6">
							<h3>Accessible</h3>
							<ul class="list-group">
								<?php foreach ($user['match'] as $v) { ?>
									<li class="list-group-item"><?= $v ?></li>
								<?php } ?>
							</ul>
						</div>
						<div class="col-md-6">
							<h3>Accessible</h3>
							<ul class="list-group">
								<?php foreach ($user['produif_fiscaux'] as $v) { ?>
									<li class="list-group-item"><?= $v ?></li>
								<?php } ?>
							</ul>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-6">
						<h3>Documents</h3>
					</div>
				</div>
				<div class="row">
					<form method="post">
						<div class="col-lg-6">
							<div class="MDgroup">
								<input type="text" name="s" data-type="s" value="">
								<span class="highlight"></span>
								<span class="bar"></span>
								<label>Recherche</label>
							</div>
						</div>

						<div class="col-lg-6">
							<input type="submit" class="primary" value="Rechercher">
						</div>
					</form>
				</div>
				<div class="row">
					<div class="col-lg-12">
						<?php foreach ($user['doc'] as $v) { ?>
							<div class="col-md-6">

								<ul class="list-group">
									<li class="list-group-item">
										<img src="<?= $v[0] ?>" style="width: 100%; max-width: 500px">
									</li>
									<li class="list-group-item">
										Expiration: <?= $v[1] ?>
									</li>
								</ul>
							</div>
						<?php } ?>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6" style="margin-top: 50px">
						<input type="submit" class="primary" value="Preparer le rendez-vous">
					</div>
					<div class="col-md-6" style="margin-top: 50px">
						<input type="submit" class="primary" value="Reporting client">
					</div>
				</div>
			</div>
		<?php } ?>
	</div>
	<?php include_once ROOT.'/inc/footer.php'; ?>
</body>
</html>