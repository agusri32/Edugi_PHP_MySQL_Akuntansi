<?php
	//$file=$_GET['nama_file'];
	$file="Sun11Dec2011_tutup_buku_1323577182.sql";
	
    // header yang menunjukkan nama file yang akan didownload
    header("Content-Disposition: attachment; filename=".$file);

    // header yang menunjukkan ukuran file yang akan didownload
    header("Content-length: ".$file);

    // header yang menunjukkan jenis file yang akan didownload
    header("Content-type: ".$file);

   // proses membaca isi file yang akan didownload dari folder 'data'
   $fp  = fopen("./data/".$file, 'r');
   $content = fread($fp, filesize('./data/'.$file));
   fclose($fp);

   // menampilkan isi file yang akan didownload
   echo $content;

   exit;
?>