<div class="banner" id="home">
	<nav class="navbar navbar-default">
		<div class="navbar-header navbar-left">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<h1><a class="navbar-brand" href="index.php">FL Jeans<span>.Co</span></a></h1>
		</div>
		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
			<nav class="link-effect-2" id="link-effect-2">
				<ul class="nav navbar-nav">
					<?php
						include "core/koneksi.php";
						$sql_1 		= "SELECT * FROM db_nando.tbl_kategori";
						$query_1 	= mysql_query($sql_1) or die (mysql_error());

						while ($data_1 = mysql_fetch_array($query_1)) {
							$sql_2 		= "SELECT * FROM db_nando.tbl_artikel JOIN db_nando.tbl_kategori ON tbl_artikel.id_kategori = tbl_kategori.id_kategori WHERE tbl_artikel.id_kategori LIKE $data_1[id_kategori]";
							$query_2 	= mysql_query($sql_2) or die (mysql_error());
							$count_1	= mysql_num_rows($query_2);
							$data_2 = mysql_fetch_array($query_2);

							if ($count_1 <= 1) {
								echo "<li><a href='artikel.php?id=$data_2[id_artikel]'><span data-hover='$data_1[nama_kategori]'>$data_1[nama_kategori]</span></a></li>";
							} else {
								echo "<li><a href='sub.php?id=$data_1[id_kategori]'><span data-hover='$data_1[nama_kategori]'>$data_1[nama_kategori]</span></a></li>";
							}
						}
					?>
					<li><a href="brand.php" ><span data-hover="Rekomendasi Brand Lokal">Rekomendasi Brand Lokal</span></a></li>
					<!-- <li class="active"><a href="index.html" ><span data-hover="Home">Home</span></a></li> -->
				</ul>
			</nav>
		</div>
	</nav>
</div>