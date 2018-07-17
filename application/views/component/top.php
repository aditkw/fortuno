<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="desc">
		<meta name="keywords" content="keyword">
		<title>Fortuno</title>
		<!-- Bootstrap -->
		<link rel="stylesheet" href="<?php echo base_url();?>plugins/bootstrap_new/bootstrap.min.css">
		<!-- Fonts Awesome -->
		<!-- <link rel="stylesheet" href="<?php echo base_url();?>plugins/font-awesome_new/fontawesome-all.min.css"> -->
		<!-- Favicon -->
		<link rel="shortcut icon" href="<?php echo site_url('dist/img/assets/fav.png');?>" type="image/png">

		<!-- Style -->
		<link rel="stylesheet" href="<?php echo base_url();?>dist/css/fort.style.css">
		<?php if (isset($top)): ?>
			<?php
			switch ($top) {
				case 'services': ?>
				<link rel="stylesheet" href="<?php echo base_url();?>dist/css/fort.style_services.css">
				<?php break;
				case 'portfolio': ?>
				<link rel="stylesheet" href="<?php echo base_url();?>dist/css/fort.style_portfolio.css">
				<?php break;
				case 'search': ?>
				<link rel="stylesheet" href="<?php echo base_url();?>dist/css/fort.style_search.css">
				<?php break;
			}
			 ?>
		<?php else: ?>
			<link rel="stylesheet" href="<?php echo base_url();?>dist/css/fort.style_home.css">
		<?php endif; ?>

	</head>
<body>
