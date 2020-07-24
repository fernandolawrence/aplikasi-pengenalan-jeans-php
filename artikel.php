<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="zxx">
<head>
	<?php
		require_once "core/koneksi.php";
		$id_art = $_GET["id"];

		$sql_title 		= "SELECT nama_artikel FROM tbl_artikel WHERE id_artikel = $id_art";
		$query_title 	= mysql_query($sql_title) or die (mysql_error());
		$data_title		= mysql_fetch_array($query_title);
	?>
<title>Pengenalan Jeans | <?php echo $data_title['nama_artikel']; ?></title>
<?php include "core/head.php" ?>
</head>	
<body>

<?php include "core/navbar.php"; ?>

<!-- /fashion events -->
<div class="w3-Events" id="events">
	<div class="w3-Events-grids">
		<?php
			$id_artikel = $_GET["id"];

			$sql = "SELECT * FROM tbl_artikel WHERE id_artikel = $id_artikel";
			$query 	= mysql_query($sql) or die (mysql_error());

			while ($data = mysql_fetch_array($query)) { ?>
				<div class="w3layouts-about" id="about">
					<div class="container">
						<div class="w3-about-grids">
							<div class="row margin-bottom">
								<?php

									$sql2 = "SELECT * FROM tbl_artikel WHERE id_kategori = $data[id_kategori] AND id_artikel != $id_artikel";
									$query2 = mysql_query($sql2) or die (mysql_error());
									$no = 1;

									while ($data2 = mysql_fetch_array($query2)) {
										if ($no == 1) {
											echo "<a href='artikel.php?id=$data2[id_artikel]' class='btn btn-left btn-artikel'>$data2[nama_artikel]</a>";
										} else if ($no == 2) {
											echo "<a href='artikel.php?id=$data2[id_artikel]' class='btn btn-right btn-artikel'>$data2[nama_artikel]</a>";
										} else {
											echo "<p>Menu terlalu banyak!</p>";
										}
										
										$no++;
									}

								?>
							</div>
							<div class="col-md-xs w3-about-right">
								<h1><?php echo $data['nama_artikel']; ?></h1>	
								<p><?php echo $data['deskripsi_artikel']; ?></p>
								<center>
									<img src="assets/template/images/<?php echo $data['gambar_artikel']; ?>" alt="" class="img-responsive clear-image"/>
								</center>
							</div>
							<div class="clearfix"> </div>
						</div>
					</div>
				</div>
			<?php
				}
			?>
		<div class="clearfix"></div>
	</div>
</div>
<!-- //fashion events -->

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