<?php 
$koneksi=new mysqli("localhost", "root", "", "");
$buat= "CREATE DATABASE pelayanangizi";
$q=$koneksi->query($buat);
if ($q) {
	echo "PENYIMPANAN/DATA BASE Berhasil dibentuk";
}

else{
	echo "PENYIMPANAN/DATA BASE Gagal dibentukt";
}


 ?>