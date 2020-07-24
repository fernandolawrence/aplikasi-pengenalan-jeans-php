<? require_once "core/koneksi.php" ?>
<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="zxx">
<head>
<title>Pengenalan Jeans | HOME</title>
<?php include "core/head.php" ?>
</head>	
<body>

<?php include "core/navbar.php"; ?>

<!-- /fashion events -->
<div class="w3-Events" id="events">
	<div class="w3-head-all">
		<h3 class="w3ls_head">PENGENALAN JEANS</h3>
	</div>
	<div class="w3-Events-grids">
		<?php
			include "core/koneksi.php";
			$sql_3 		= "SELECT * FROM tbl_kategori;";
			$query_3 	= mysql_query($sql_3) or die (mysql_error());
			$no = 1;

			while ($data_3 = mysql_fetch_array($query_3)) {
				$sql_4 		= "SELECT * FROM tbl_artikel JOIN tbl_kategori ON tbl_artikel.id_kategori = tbl_kategori.id_kategori WHERE tbl_artikel.id_kategori LIKE $data_3[id_kategori]";
				$query_4 	= mysql_query($sql_4) or die (mysql_error());
				$count_2	= mysql_num_rows($query_4);
				$data_4 	= mysql_fetch_array($query_4);

				if ($count_2 <= 1) { ?>
					<div class='col-md-3 col-xs-6 w3-Events-bg<?php echo $no ?>  w3-Events-heading'>
						<h3>0<?php echo $no ?></h3>
						<p><?php echo $data_3['nama_kategori']; ?></p>
					</div>
				<?php $no++; } else { ?>
					<div class='col-md-3 col-xs-6 w3-Events-bg<?php echo $no ?>  w3-Events-heading'>
						<h3>0<?php echo $no ?></h3>
						<p><?php echo $data_3['nama_kategori']; ?></p>
					</div>
				<?php $no++; }
			}
		?>
		<div class="col-md-3 col-xs-6 w3-Events-bg9 w3-Events-heading">
		   <h3>04</h3>
		    <p>BRAND LOKAL</p>
		</div>
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