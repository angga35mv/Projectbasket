<?php
//cek button

	if($_POST["Submit"]){
	$nama = $_POST['nama'];
	$ukuran_baju = $_POST['ukuran_baju'];
	$ukuran_sepatu = $_POST['ukuran_sepatu'];
	$tinggi_badan = $_POST['tinggi_badan'];
	$jenis_kelamin = $_POST['jenis_kelamin'];
	$posisi = $_POST['posisi'];

	//validasi data kosong
	if (empty($_POST['nama'])||empty($_POST['ukuran_sepatu'])||empty($_POST['ukuran_baju'])||empty($_POST['tinggi_badan'])||empty($_POST['jenis_kelamin'])||empty($_POST['posisi'])){
		?>
		<script language="JavaScript">
		alert('Input Data Mahasiswa Berhasil');
		document.location='registrasi_latihan_khusus.php';
		</script>
	<?php
	}
	else {
	//Jika Gagal
	echo "Input Data Mahasiswa Gagal!, Silahkan diulangi!";
	}
//Tutup koneksi engine MySQL
	mysql_close($Open);
	}
}
?>
	