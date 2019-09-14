<?php
include '_config.php';

$id = $_GET['id'];

$query = "DELETE FROM mahasiswa WHERE id = $id";
$result = mysqli_query($con, $query);

if ($result) { ?>
  <script>
    alert('Data berhasil dihapus!')
    location.href = 'page_mahasiswa.php'
  </script>
<?php
} else { ?>
  <script>
    alert('Data Gagal dihapus!')
    location.href = 'page_mahasiswa.php'
  </script>
<?php } ?>