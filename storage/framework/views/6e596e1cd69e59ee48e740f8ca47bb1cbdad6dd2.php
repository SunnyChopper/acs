<?php 
	if (!isset($_SESSION)) {
		session_start();
	}
	
	if (isset($_SESSION['access'])) {
		if ($_SESSION['access'] != true) {
			echo "Access Denied";
			die();
		}
	} else {
		if (isset($_GET['p'])){
			$pass = $_GET['p'];
			if ($pass != "acs") {
				echo "Access Denied";
				die();
			} else {
				$_SESSION['access'] = true;
				session_commit();
			}
		} else {
			echo "Access Denied";
			die();
		}
	}
?>
<!DOCTYPE html>
<html lang="<?php echo e(app()->getLocale()); ?>">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="img/fav.png">
		<!-- Author Meta -->
		<meta name="author" content="colorlib">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>AllCarShippers - Vehicle Transporation Made Easy</title>

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
		<!--
		CSS
		============================================= -->
		<link rel="stylesheet" href="<?php echo e(URL::asset('css/linearicons.css')); ?>">
		<link rel="stylesheet" href="<?php echo e(URL::asset('css/font-awesome.min.css')); ?>">
		<link rel="stylesheet" href="<?php echo e(URL::asset('css/bootstrap.css')); ?>">
		<link rel="stylesheet" href="<?php echo e(URL::asset('css/magnific-popup.css')); ?>">
		<link rel="stylesheet" href="<?php echo e(URL::asset('css/jquery-ui.css')); ?>">				
		<link rel="stylesheet" href="<?php echo e(URL::asset('css/nice-select.css')); ?>">							
		<link rel="stylesheet" href="<?php echo e(URL::asset('css/animate.min.css')); ?>">
		<link rel="stylesheet" href="<?php echo e(URL::asset('css/owl.carousel.css')); ?>">				
		<link rel="stylesheet" href="<?php echo e(URL::asset('css/main.css')); ?>">
		<link rel="stylesheet" href="<?php echo e(URL::asset('css/app.css')); ?>">
	</head>
	<body>
		<?php echo $__env->make('layouts.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
		<?php echo $__env->yieldContent('content'); ?>
		<?php echo $__env->make('layouts.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
		<?php echo $__env->make('layouts.js', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	</body>
</html>