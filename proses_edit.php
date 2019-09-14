<?php
include '_config.php';

$id = $_POST['id'];
$npm = $_POST['npm'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$nohp = $_POST['nohp'];
$email = $_POST['email'];

date_default_timezone_set('Asia/Jakarta');
$waktu = date('Y-m-d H:i:s');

$query = "UPDATE mahasiswa SET npm='$npm',nama='$nama',alamat='$alamat',nohp='$nohp',email='$email',waktu='$waktu' WHERE id = $id";
$result = mysqli_query($con, $query);

if ($result) { ?>
  <script>
    alert('Data berhasil diubah!')
    location.href = 'page_mahasiswa.php'
  </script>
<?php
} else { ?>
  <script>
    alert('Data Gagal diubah!')
    location.href = 'page_mahasiswa.php'
  </script>
<?php } ?>