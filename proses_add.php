<?php
include '_config.php';

$npm = $_POST['npm'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$nohp = $_POST['nohp'];
$email = $_POST['email'];

$query = "INSERT INTO mahasiswa(npm, nama, alamat, nohp, email)VALUES('$npm','$nama','$alamat','$nohp','$email')";
$result = mysqli_query($con, $query);

if ($result) { ?>
  <script>
    alert('Data berhasil ditambahkan!')
    location.href = 'page_mahasiswa.php'
  </script>
<?php
} else { ?>
  <script>
    alert('Data Gagal ditambahkan!')
    location.href = 'page_mahasiswa.php'
  </script>
<?php } ?>