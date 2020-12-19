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
		<div >Update Laporan/Komentar </div>
		<hr>
		<br>
		<?php 
        if(validation_errors()): echo validation_errors();
        endif; ?>
        <?php echo form_open_multipart('home/updatedata/'.$tampilan["id"]); ?>

		  	<textarea class="isi" name ="judul" required minlength="20"><?php echo $tampilan["judul"]; ?></textarea>
		  	<div class="control">
		  	<br>
		 </div>
			<select name="aspek" class="aspek">
				<option value="" selected disabled hidden><?php echo $tampilan["aspek"]; ?></option>
				<option value="Dosen">Dosen</option>
				<option value="Staff">Staff</option>
				<option value="Mahasiswa">Mahasiswa</option>
				<option value="Infrastruktur">Infrastruktur</option>
				<option value="Pengajaran">Pengajaran</option>
			</select>
			<br>
			<br>
			<label class="file">
			<input type="file" name ="file" accept=".xlsx,.xls,.doc, .docx,.ppt, .pptx,.pdf" />
			</label>
   			<br />
   		
   		<br>
   		<p align="right">
   			<input type="submit" name="Update Laporan" value="Update Laporan" class="submit">
   		</p>
   	<?php echo form_close(); ?>
		<hr>
		</div>
		<br>
	</div>
</fieldset>

</body>
</html>
