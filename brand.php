<?
	require_once "core/koneksi.php";
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
<title>Pengenalan Jeans | Brand Lokal</title>
<?php include "core/head.php" ?>
</head>	
<body>

<?php include "core/navbar.php"; ?>

<!--Gallery -->
<div class="gallery" id="gallery">
	<div class="container">
		<div class="w3-head-all">
			<h3 class="w3ls_head">Local Brand</h3>
		</div>
		<div class="agileinfo_work_grids">
			<?php
				$sql = "SELECT * FROM tbl_brand";
				$query 	= mysql_query($sql) or die (mysql_error());

				while ($data = mysql_fetch_array($query)) { ?>
					<div class="col-md-3 col-xs-6 w3_agile_work_grid gallery1">
						<div class="wthree_work_grid1">
							<a href="http://<?php echo $data['link_brand']; ?>" target="_blank">
								<div class="agile_work_grid w3_agileits_sub_work">
									<img src="assets/template/images/<?php echo $data['gambar_brand']; ?>" alt=" " class="img-responsive" />
								</div>
							</a>
						</div>
					</div>
			<?php
				}
			?>
			<div class="clearfix"> </div>
		</div>
			<!---728x90--->
	</div>
</div>	
<!-- //Gallery -->

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