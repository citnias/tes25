<?php
$koneksi = new mysqli("localhost", "root", "", "db_klinik");
if ($koneksi->connect_error) {
  die("Koneksi gagal: " . $koneksi->connect_error);
}
?>