<?php include('_functions.php'); ?>

<!DOCTYPE html>
<html>
	<head>
		<title>AVEL - Produisez de l'énergie propre et renouvelable avec AVEL !</title>
		<meta charset="utf-8">
		<!-- FAVICON -->
    	<link rel="icon" type="image/png" href="assets/img/logo.png" />
		<!-- BOOTSTRAP -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<!-- CSS -->
		<link rel="stylesheet" type="text/css" href="assets/css/style.css?v=<?php echo uniqid(); ?>">
		<link rel="stylesheet" type="text/css" href="assets/css/animations.css?v=<?php echo uniqid(); ?>">
		<!-- JS EOLIENNE -->
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/isomer/0.2.6/isomer.min.js"></script>
		<!-- jQuery -->
    	<script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
	</head>
	<body>

		<?php

			afficherEolienne(); 

			afficherFormulaire();

			afficherFond();

		?>

		<!-- JS EOLIENNE + ESTIMATION -->
		<script src="assets/js/script.js?v=<?php echo uniqid(); ?>"></script>

	</body>
</html>