<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3meta tags must come first the the head; any other head content must come after these tags -->
	<title> <?= $this->siteTitle(); ?> </title>
	<link rel="stylesheet" href="<?=PROOT?>css/bootstrap.min.css" media="screen" charset="utf-8">
	<link rel="stylesheet" href="<?=PROOT?>css/custom.css" media="screen" charset="utf-8">
	<link rel="stylesheet" href="<?=PROOT?>css/font-awesome.min.css">
	<style type="text/css">*{padding: 0px;margin:0px;}</style>

	<?= $this->content('head');?>

	<script src="<?=PROOT?>js/jquery.js"></script>
	<script src="<?=PROOT?>js/jquery-2.2.4.min.js"></script>
<script src="<?=PROOT?>js/bootstrap.min.js"></script>

</head>
<body>
<?php include_once('main_menu.php'); ?>
	<div class="container-fluid" style="min-height: cal(100% - 125px);">
		<?= $this->content('body');?>
	</div>

</body>
</html>