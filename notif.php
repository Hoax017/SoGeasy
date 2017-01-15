<?php
	include_once $_SERVER['DOCUMENT_ROOT'].'/inc/global.php';
	define('PAGENAME', 'Notification');
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
		<div class="col-lg-6" style="margin: 0 auto; float: none; padding-top: 30px;">
			<input type="submit" class="primary" value="Ajouter une notification">
		</div>
		<div class="row">
			<div class="col-lg-12">
				<h3>Mes notifications</h3>
				<div class="col-lg-12">
					<ul class="list-group">
						<?php foreach ($notif as $v) { ?>
							<ul class="list-group">
								<li class="list-group-item"><?= $v["content"] ?></li>
								<li class="list-group-item"><?= $v["date"] ?></li>
								<?php if (!empty($v["nupers"])): ?>
								<li class="list-group-item">NUPERS: <?= $v["nupers"] ?></li>
							<?php endif; ?>
							</ul>
						<?php } ?>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<?php include_once ROOT.'/inc/footer.php'; ?>
</body>
</html>