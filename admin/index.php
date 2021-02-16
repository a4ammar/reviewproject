<?php
include 'includes/config.php';
include 'code/adminFunctions.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta name="description" content="Neon Admin Panel" />
	<meta name="author" content="" />

	<link rel="icon" href="assets/images/favicon.ico">

	<title>Admin | Dashboard</title>

	<link rel="stylesheet" href="<?php echo $base_url; ?>assets/js/jquery-ui/css/no-theme/jquery-ui-1.10.3.custom.min.css">
	<link rel="stylesheet" href="<?php echo $base_url; ?>assets/css/font-icons/entypo/css/entypo.css">
	<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Noto+Sans:400,700,400italic">
	<link rel="stylesheet" href="<?php echo $base_url; ?>assets/css/bootstrap.css">
	<link rel="stylesheet" href="<?php echo $base_url; ?>assets/css/neon-core.css">
	<link rel="stylesheet" href="<?php echo $base_url; ?>assets/css/neon-theme.css">
	<link rel="stylesheet" href="<?php echo $base_url; ?>assets/css/neon-forms.css">
	<link rel="stylesheet" href="<?php echo $base_url; ?>assets/css/custom.css">

	<script src="<?php echo $base_url; ?>assets/js/jquery-1.11.3.min.js"></script>
	<!-- <script src="<?php echo $base_url; ?>assets/js/js/ckeditor.js"></script> -->
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

	<script type="text/javascript">
		jQuery( document ).ready( function( $ ) {
			var $table4 = jQuery( "#table-4" );
			
			$table4.DataTable( {
				dom: 'Bfrtip',
				buttons: [
					'copyHtml5',
					'excelHtml5',
					'csvHtml5',
					'pdfHtml5'
				]
			} );
		} );		
		</script>
</head>
<body class="page-body  page-fade" data-url="http://neon.dev">

<div class="page-container"><!-- add class "sidebar-collapsed" to close sidebar by default, "chat-visible" to make chat appear always -->
	
	<div class="sidebar-menu">

		<div class="sidebar-menu-inner">
			
			<header class="logo-env">

				<!-- logo -->
				<div class="logo">
					<a href="index.html">
						<img src="assets/images/logo@2x.png" width="120" alt="" />
					</a>
				</div>

				<!-- logo collapse icon -->
				<div class="sidebar-collapse">
					<a href="#" class="sidebar-collapse-icon"><!-- add class "with-animation" if you want sidebar to have animation during expanding/collapsing transition -->
						<i class="entypo-menu"></i>
					</a>
				</div>

								
				<!-- open/close menu icon (do not remove if you want to enable menu on mobile devices) -->
				<div class="sidebar-mobile-menu visible-xs">
					<a href="#" class="with-animation"><!-- add class "with-animation" to support animation -->
						<i class="entypo-menu"></i>
					</a>
				</div>

			</header>
			
<?php include_once('includes/header.php'); ?>

<?php @include_once($includefile); ?>
<?php include_once('includes/footer.php'); ?>
<script type="text/javascript">
	var base_url = "<?=$base_url?>";
</script>
	<script src="<?=$base_url?>assets/js/custom.js"></script>

	<!-- Imported styles on this page -->
	<link rel="stylesheet" href="<?=$base_url?>assets/js/datatables/datatables.css">
	<link rel="stylesheet" href="<?=$base_url?>assets/js/select2/select2-bootstrap.css">
	<link rel="stylesheet" href="<?=$base_url?>assets/js/select2/select2.css">
	<script src="<?=$base_url?>assets/js/datatables/datatables.js"></script>
	<script src="<?=$base_url?>assets/js/select2/select2.min.js"></script>
	<!-- Imported styles on this page -->
	<link rel="stylesheet" href="<?=$base_url?>assets/js/jvectormap/jquery-jvectormap-1.2.2.css">
	<link rel="stylesheet" href="<?=$base_url?>assets/js/rickshaw/rickshaw.min.css">

	<!-- Bottom scripts (common) -->
	<script src="<?=$base_url?>assets/js/gsap/TweenMax.min.js"></script>
	<script src="<?=$base_url?>assets/js/jquery-ui/js/jquery-ui-1.10.3.minimal.min.js"></script>
	<script src="<?=$base_url?>assets/js/bootstrap.js"></script>
	<script src="<?=$base_url?>assets/js/joinable.js"></script>
	<script src="<?=$base_url?>assets/js/resizeable.js"></script>
	<script src="<?=$base_url?>assets/js/neon-api.js"></script>
	<script src="<?=$base_url?>assets/js/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>


	<!-- Imported scripts on this page -->
	<script src="<?=$base_url?>assets/js/jvectormap/jquery-jvectormap-europe-merc-en.js"></script>
	<script src="<?=$base_url?>assets/js/jquery.sparkline.min.js"></script>
	<script src="<?=$base_url?>assets/js/rickshaw/vendor/d3.v3.js"></script>
	<script src="<?=$base_url?>assets/js/rickshaw/rickshaw.min.js"></script>
	<script src="<?=$base_url?>assets/js/raphael-min.js"></script>
	<script src="<?=$base_url?>assets/js/morris.min.js"></script>
	<script src="<?=$base_url?>assets/js/toastr.js"></script>
	<script src="<?=$base_url?>assets/js/neon-chat.js"></script>


	<!-- JavaScripts initializations and stuff -->
	<script src="assets/js/neon-custom.js"></script>


	<!-- Demo Settings -->
	<script src="assets/js/neon-demo.js"></script>




</body>
</html>