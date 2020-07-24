<?php
	require_once "core/koneksi.php";
	$id_kat = $_GET["id"];

	$sql_title 		= "SELECT nama_kategori FROM db_nando.tbl_kategori WHERE id_kategori = $id_kat";
	$query_title 	= mysql_query($sql_title) or die (mysql_error());
	$data_title		= mysql_fetch_array($query_title);
?>
<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="zxx">
<head>
<title>Pengenalan Jeans | <?php echo $data_title['nama_kategori']; ?></title>
<?php include "core/head.php" ?>
</head>	
<body>

<?php include "core/navbar.php"; ?>

<!-- /fashion events -->
<div class="w3-Events" id="events">
	<div class="w3-head-all">
		<h3 class="w3ls_head"><?php echo $data_title['nama_kategori']; ?></h3>
	</div>
	<div class="w3-Events-grids">
		<?php
			$sql = "SELECT * FROM tbl_artikel WHERE id_kategori = $id_kat";
			$query 	= mysql_query($sql) or die (mysql_error());
			$no_class = 5;
			$no = 1;

			while ($data = mysql_fetch_array($query)) { ?>
				<div class='col-md-4 w3-Events-bg<?php echo $no_class ?>  w3-Events-heading'>
				   <h3>0<?php echo $no ?></h3>
				    <p><?php echo $data['nama_artikel'] ?></p>
					<a id="link-page" href='artikel.php?id=<?php echo $data['id_artikel'] ?>' data-toggle='modal'><i class='fa fa-chevron-circle-right' aria-hidden='true'></i></a>
				</div>
			<?php
				$no_class++;
				$no++;
			}
		?>
		<div class="clearfix"></div>
	</div>
</div>
<!-- //fashion events -->

<?php include "core/footer.php";?>

<!-- js -->
<script type="text/javascript" src="assets/template/js/jquery-2.1.4.min.js"></script>
<!-- //js -->
<script src="assets/template/js/mainScript.js"></script>
<script src="assets/template/js/rgbSlide.min.js"></script>

<!-- script-for-swipebox -->
	<script src="assets/template/js/jquery.swipebox.min.js"></script> 
	<script type="text/javascript">
		jQuery(function($) {
			$(".swipebox").swipebox();
		});
	</script>
<!-- //script-for-swipebox -->

<!-- start-smooth-scrolling -->
<script src="assets/template/js/SmoothScroll.min.js"></script>
<!-- start-smooth-scrolling -->
<script type="text/javascript" src="assets/template/js/move-top.js"></script>
<script type="text/javascript" src="assets/template/js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smooth-scrolling -->
<!-- for bootstrap working -->
	<script src="assets/template/js/bootstrap.js"></script>
<!-- //for bootstrap working -->
<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
<!-- //here ends scrolling icon -->

	
</body>
</html>