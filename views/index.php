<!DOCTYPE html>
<html lang="es">
	<?php include("includes/head.php");?>
	<body class="gray-2-bg">
		<div class="grid">
			<div
				class="s12 m4 l3 box border-3 black-border teal-bg flex align-center justify-center"
			>
				<h4 class="white">Buscador</h4>
			</div>
			<div
				class="s12 m8 l9 box border-3 black-border gray-1-bg light-hover"
			>
				<?php include("includes/show_all.php")?>
			</div>
			<?php include("includes/custom_search.php") ?>
			<div class="s12 m8 l9">
				<div
					class="black-border border-3 gray-1-bg"
					style="height: 100%"
				>
					<?php include("includes/anounces.php") ?>
				</div>
			</div>
		</div>
		<script src="<?= $STATIC_ROOT?>/js/init.js"></script>
	</body>
</html>
