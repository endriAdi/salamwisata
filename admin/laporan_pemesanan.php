
<!DOCTYPE html>
<html>
<head>
	<title>Laporan Pemesanan</title>
</head>
<body>
	<h2>Laporan Pemesanan</h2>
	<form method="post">
		<div class="row">
			<div class="col-md-3">
				<div class="form-group">
					<label>Tanggal Mulai</label>
					<input type="date" name="tglm" class="form-control" value="<?php echo $tgl_mulai ?>">
				</div>
			</div>
			<div class="col-md-3">
				<div class="form-group">
					<label>Tanggal Selesai</label>
					<input type="date" name="tgls" class="form-control" value="<?php echo $tgl_selesai ?>">
				</div>
			</div>
			<div class="col-md-2">
				<label>&nbsp;</label><br>
				<button class="btn btn-primary" name="cari">Cari</button>
			</div>
		</div>
	</form>

</body>
</html>