<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>

</head>
<body>
<div class="col-md-12 col-xs-12 header">
	<nav class="navbar navbar-default">
	  <div class="container-fluid">
		<h3>SISTEM INFORMASI GEOGRAFI PERSEBARAN PENGUNGSIAN DI GUNUNG MERAPI</h3>
		  <ul class="nav navbar-nav navbar-right">
	        <li>
	        	<button type="button" class="btn btn-default btn-sm" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-envelope">  </span> Team Penyusun</button>
	        </li>
	      </ul>
	  </div>
	</nav>
</div>
<div class="col-md-9 col-xs-12 konten">
	<?php
		if(isset($_GET['simpan']))
			echo "<script>alert('Lokasi Telah Ditambahkan')</script>";
		include "posisi.php";
	?>
</div>
<div class="col-md-3 col-xs-12 legenda">
	<div class="panel panel-info">
		<div class="panel-heading">
			<b>Legenda</b>
		</div>
		<div class="panel-body">
			<table class="table">
			  <tr>
			    <th colspan="2" class="active">Zona Berbahaya</th>
			  </tr>
			  <tr>
			  	<td>
					<canvas id="leg_batas1" width="20" height="10" style="border:1px   solid #d3d3d3 ">
					<script>
					var c = document.getElementById("leg_batas1");
					var ctx = c.getContext("2d");
					ctx.fillStyle = "#D4654D";
					ctx.fillRect(0, 0, 20,10);
					</script>
				</td> 
				<td> Aliran Lava pijar</td>
			  </tr>
	  		  <tr>
	  		  	<td>
					<canvas id="leg_batas2" width="20" height="10" style="border:1px   solid #d3d3d3 ">
					<script>
					var c = document.getElementById("leg_batas2");
					var ctx = c.getContext("2d");
					ctx.fillStyle = "#DDB95E";
					ctx.fillRect(0, 0, 20,10);
					</script>
				</td> 
			    <td> Semburan Awan Panas</td>
			  </tr>
			  <tr>
			    <th colspan="2" class="active"> Daya Tampung Pengungsian</th>
			  </tr>
			  <tr>
			    <td><img src="gede.png"></td><td> > 400 Orang </td>
			  </tr>
			  <tr>
			    <td><img src="sedeng.png"></td><td> 200-400 Orang </td>
			  </tr>
			  <tr>
			    <td><img src="cilik.png"></td><td> < 200 Orang </td>
			  </tr>
			</table>
			<hr>
			<button type="button" class="btn btn-default btn-sm" data-toggle="modal" data-target="#myModal1"><span class="glyphicon glyphicon-plus-sign">  </span> Tambah Lokasi Pengungsian</button>
			<div class="container">
				<!-- Modal -->
				<div id="myModal" class="modal fade" role="dialog">
					<div class="modal-dialog">
						<!-- konten modal-->
						<div class="modal-content">
							<!-- heading modal -->
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal">&times;</button>
								<h4 class="modal-title">Team Penyusun</h4>
							</div>
							<!-- body modal -->
							<div class="modal-body">
								<table>
									<tr><td>Dedi Irawan</td><td>(145610053)</td></tr>
									<tr><td>Khozin</td><td>(145610077)</td></tr>
									<tr><td>Beny Fajar</td><td>(145610073)</td></tr>
									<tr><td>Rizki Kurniawati</td><td>(145610051)</td></tr>
									<tr><td>Yosefa Fidelia</td><td>(145610063)</td></tr>

								</table>
							</div>
							<!-- footer modal -->
							<div class="modal-footer">
								<button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
							</div>
						</div>
					</div>
				</div>
			   </div>

			   <div class="container">
				<!-- Modal -->
				<div id="myModal1" class="modal fade" role="dialog">
					<div class="modal-dialog">
						<!-- konten modal-->
						<div class="modal-content">
							<!-- heading modal -->
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal">&times;</button>
								<h4 class="modal-title">Tambah Lokasi Pengungsian</h4>
							</div>
							<!-- body modal -->
							<div class="modal-body">
								<?php
								include 'form.html';
								?>
							</div>
							<!-- footer modal -->
						</div>
					</div>
				</div>
			   </div>

		</div>			
	</div>
</div>
</body>
</html>