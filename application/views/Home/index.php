<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
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
<div class="container">
  <fieldset>
    <center>
    <h1>SIMPLE LAPOR!</h1>
    <form class="form-signin" action="<?= base_url('home/judul') ?>" method="get">
        <input class="cari" type="text" name ="judul" placeholder="Cari Laporan..." required>
        <button class="button"><i class="fa fa-search"></i> Cari </button>  
    </form>
    <br>
    <a href="<?php echo base_url() ?>home/tambah">Buat Laporan/Komentar <i class="fa fa-plus-square"></i></a>
  </center>

   <div id="konten">
        <ul>
            <?php foreach ($laporan as $value){ ?>
                    <?php if(strlen($value["judul"]) > 300){ ?>
                        <p>
                          <?php echo substr($value["judul"], 0, 300); ?>....<br>
                          <?php } else{ ?> 
                          <?php echo $value["judul"]; ?><br>
                          <?php } ?>
                          Lampiran : <?php echo $value["file"]; ?><br>
                          Waktu : <?php echo $value["tanggal"]; ?><br>
                        <a href="<?php echo base_url() ?>home/tampil/<?php echo $value["id"] ?>">Selengkapnya>>></a>
                    <div style="clear: both"></div>
                <br>
                <hr>
            <?php } ?> 
        </ul>
    </div>
  </fieldset>
</div>
</body>
</html>
