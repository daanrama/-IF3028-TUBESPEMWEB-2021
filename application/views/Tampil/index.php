<!DOCTYPE html>
<html>
<head>
	<title>LAPOR! - Layanan Aspirasi dan Pengaduan Online Rakyat</title>
</head>
<!-- untuk icon -->
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet"> 
<!-- untuk tampilan -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>css/style.css">
<body>

	<fieldset>
		<br>
		<br>
		<div class="judul">
		SIMPLE LAPOR!
	</div>
		<div class="container">
		<div >Detail Laporan/Komentar </div>
		<hr>
		<br>
		<p> <?php echo $tampilan["judul"]; ?> </p>
		<p>Lampiran	: <a href="<?php echo base_url() ?>/uploads/<?php echo $tampilan["file"]; ?>"><?php echo $tampilan["file"]; ?></a></p>
		<br>
		<br>
		<br>
  		<span class="span1"><a href="<?php echo base_url() ?>home/hapus/<?php echo $tampilan["id"]?>" onclick="return confirm('apakah ingin dihapus?');">Hapus Laporan/Komentar <i class="fa fa-times" aria-hidden="true"></i></a>
  			<a href="<?php echo base_url() ?>home/update/<?php echo $tampilan["id"]?>" >Ubah Laporan/Komentar</a>
  		</span>
  		<span class="span2">Waktu : <?php echo $tampilan["tanggal"]; ?>		Aspek: <?php echo $tampilan["aspek"]; ?></span>
		</p>
		<br>
		<hr>
		</div>
		<br>
	</div>
</fieldset>

</body>
</html>
