<?php 
require 'fungsi.php';
if (isset($_GET['no'])) {

$b=$_GET["no"];
if (hapus($b) > 0) {
	echo "<script> 
alert('Data berhasil dilenyapkan beserta kenangan pahitnya!');
document.location.href='pasien/daftar.php';
	</script>";
		exit;
}

else{
	echo "<script> 
alert('data gagal dihapus dan kenangan pahit masih tersisa');
document.location.href='pasien/daftar.php';
	</script>";
		exit;

}
}
if (isset($_GET['no1'])) {

$c=$_GET["no1"];
if (hapus1($c) > 0) {
	echo "<script> 
alert('data berhasil dihapus hehehe');
document.location.href='ruangan/ruangan.php';
	</script>";
		exit;
}

else{
	echo "<script> 
alert(' aduh data gagal dihapus');
document.location.href='ruangan/ruangan.php';
	</script>";
		exit;

}
}
if (isset($_GET['no2'])) {

$d=$_GET["no2"];
if (hapus2($d) > 0) {
	echo "<script> 
alert('data berhasil dihapus nih');
document.location.href='gizi/gizi.php';
	</script>";
		exit;
}

else{
	echo "<script> 
alert('data gagal dihapus nih');
document.location.href='gizi/gizi.php';
	</script>";
		exit;

}
}
 ?>