<!DOCTYPE html>
<html>
<head>
<title>Form Pendaftaran Mahasiswa</title>
<link rel="stylesheet" type="text/css" href="assets/css/styleformpendaftaran.css">
</head>
<body>
<h2><a href=Home class="button">Go Back to HOME PAGE</a></h2>
<img class="gambar2" src="assets/Gambar/Logo Sekolah/logo_stimik_kharisma.png" width=auto height=auto>
<h3 class="judulutama">Formulir Pendaftaran Mahasiswa(UKM Gambar)</h3>

<div>
  <form action="action_page.php">
    <label for="Nama Lengkap Mahasiswa">Nama Lengkap Mahasiswa :</label>
    <input type="text" id="fname" name="Nama Lengkap Mahasiswa">

    <label for="NIM">NIM :</label>
    <input type="text" id="lname" name="NIM">

    <label for="Jurusan">Jurusan :</label>
    <select id="Jurusan" name="Jurusan">
      <option value="SI">SI</option>
      <option value="TI">TI</option>
      <option value="D3">D3</option>
      <option value="SI-KA">SI-KA</option>
      <option value="SIM">SIM</option>
    </select>

    <label for="Angkatan">Angkatan :</label>
    <select id="Angkatan" name="Angkatan">
      <option value="2011">2011</option>
      <option value="2012">2012</option>
      <option value="2013">2013</option>
      <option value="2014-KA">2014</option>
      <option value="2015">2015</option>
      <option value="2015">2016</option>
    </select>

    <label for="Agama">Agama :</label>
    <select id="Agama" name="Agama">
      <option value="Islam">Islam</option>
      <option value="Budha">Budha</option>
      <option value="Kristen Katolik">Kristen Katolik</option>
      <option value="Kristen Pentakosta">Kristen Pentakosta</option>
      <option value="Hindu">Hindu</option>
      <option value="Kong Hu Cu">Kong Hu Cu</option>
    </select>
  
    <input type="submit" value="Submit">
  </form>
</div>

</body>
</html>
