<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Sistema de Administracion y Control de Pagos de Pistas y Veredas">
	<meta name="author" content="Rk3d!">
	<link rel="icon" href="<?php echo base_url("assets/img/favicon.png"); ?>">
	<title><?php echo $titulo ?> | GETEK</title>
	<link rel="stylesheet" href="<?php echo base_url("assets/css/fontsacppv.css"); ?>">
	
	<!-- <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap/bootstrap.min.css"); ?>"> -->
	<link rel="stylesheet" href="<?php echo base_url("assets/fonts/batch-icons/css/batch-icons.css"); ?>">
	



	<link rel="stylesheet" href="<?php echo base_url("assets/plantilla/bootstrap/dist/css/bootstrap.min.css"); ?>">
  <!-- Font Awesome -->
  
  <link rel="stylesheet" href="<?php echo base_url("assets/plantilla/font-awesome/css/font-awesome.min.css"); ?>">

  <!-- Ionicons -->
  
  <link rel="stylesheet" href="<?php echo base_url("assets/plantilla/Ionicons/css/ionicons.min.css"); ?>">
  <!-- Theme style -->
  
  <link rel="stylesheet" href="<?php echo base_url("assets/plantilla/dist/css/AdminLTE.min.css"); ?>">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  
  <link rel="stylesheet" href="<?php echo base_url("assets/plantilla/dist/css/skins/_all-skins.min.css"); ?>">
  <!-- Morris chart -->
  
  <link rel="stylesheet" href="<?php echo base_url("assets/plantilla/morris.js/morris.css"); ?>">
  <!-- jvectormap -->
 
  <link rel="stylesheet" href="<?php echo base_url("assets/plantilla/jvectormap/jquery-jvectormap.css"); ?>">
  <!-- Date Picker -->
 
  <link rel="stylesheet" href="<?php echo base_url("assets/plantilla/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css"); ?>">
  <!-- Daterange picker -->
  
  <link rel="stylesheet" href="<?php echo base_url("assets/plantilla/bootstrap-daterangepicker/daterangepicker.css"); ?>">
  <!-- bootstrap wysihtml5 - text editor -->

  <link rel="stylesheet" href="<?php echo base_url("assets/plantilla//bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css"); ?>">







<!-- Google Font -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

   <link  rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

	<!-- <link rel="stylesheet" href="<?php echo base_url("assets/fonts/font-awesome/css/font-awesome.min.css"); ?>"> -->
	

	<link rel="stylesheet" href="<?php echo base_url("assets/css/stylerkedi.css"); ?>">
	
</head>

<body>
	<script type="text/javascript">
		baseurl = "<?php echo site_url(); ?>";
	</script>

	<script type="text/javascript" src="<?php echo base_url("assets/js/jquery/jquery-3.4.1.min.js"); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap/popper.min.js"); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap/bootstrap.min.js"); ?>"></script>

	<script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
	
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
	
	<script type="text/javascript" src="<?php echo base_url("assets/js/sacppv.js"); ?>"></script>




	<!-- jQuery 3 -->
<script src=""></script>
<script type="text/javascript" src="<?php echo base_url("assets/plantilla/jquery/dist/jquery.min.js"); ?>"></script>
<!-- jQuery UI 1.11.4 -->

<script type="text/javascript" src="<?php echo base_url("assets/plantilla/jquery-ui/jquery-ui.min.js"); ?>"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->

<script type="text/javascript" src="<?php echo base_url("assets/plantilla/bootstrap/dist/js/bootstrap.min.js"); ?>"></script>
<!-- Morris.js charts -->

<script type="text/javascript" src="<?php echo base_url("assets/plantilla/raphael/raphael.min.js"); ?>"></script>

<script type="text/javascript" src="<?php echo base_url("assets/plantilla/morris.js/morris.min.js"); ?>"></script>
<!-- Sparkline -->

<script type="text/javascript" src="<?php echo base_url("assets/plantilla/jquery-sparkline/dist/jquery.sparkline.min.js"); ?>"></script>
<!-- jvectormap -->

<script type="text/javascript" src="<?php echo base_url("assets/plantilla/jvectormap/jquery-jvectormap-1.2.2.min.js"); ?>"></script>

<script type="text/javascript" src="<?php echo base_url("assets/plantilla/jvectormap/jquery-jvectormap-world-mill-en.js"); ?>"></script>
<!-- jQuery Knob Chart -->

<script type="text/javascript" src="<?php echo base_url("assets/plantilla/jquery-knob/dist/jquery.knob.min.js"); ?>"></script>
<!-- daterangepicker -->

<script type="text/javascript" src="<?php echo base_url("assets/plantilla/moment/min/moment.min.js"); ?>"></script>

<script type="text/javascript" src="<?php echo base_url("assets/plantilla/bootstrap-daterangepicker/daterangepicker.js"); ?>"></script>
<!-- datepicker -->

<script type="text/javascript" src="<?php echo base_url("assets/plantilla/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"); ?>"></script>
<!-- Bootstrap WYSIHTML5 -->

<script type="text/javascript" src="<?php echo base_url("assets/plantilla/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"); ?>"></script>
<!-- Slimscroll -->

<script type="text/javascript" src="<?php echo base_url("assets/plantilla/jquery-slimscroll/jquery.slimscroll.min.js"); ?>"></script>
<!-- FastClick -->

<script type="text/javascript" src="<?php echo base_url("cfastclick/lib/fastclick.js"); ?>"></script>
<!-- AdminLTE App -->

<script type="text/javascript" src="<?php echo base_url("assets/plantilla/dist/js/adminlte.min.js"); ?>"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->

<script type="text/javascript" src="<?php echo base_url("assets/plantilla/dist/js/pages/dashboard.js"); ?>"></script>
<!-- AdminLTE for demo purposes -->

<script type="text/javascript" src="<?php echo base_url("assets/plantilla/dist/js/demo.js"); ?>"></script>
    

	
	<div class="container-fluid">
		<div class="row">
