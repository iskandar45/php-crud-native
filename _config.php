<?php
$con = mysqli_connect('localhost', 'root', '', 'mahasiswa');
if (!$con) {
  echo 'Gagal terhubung ke database';
  die;
}
