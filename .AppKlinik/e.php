<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include 'koneksi.php';

$sql = "
SELECT Nama,
  CASE
    WHEN Umur < 18 THEN 'Anak-anak'
    WHEN Umur BETWEEN 18 AND 30 THEN 'Dewasa'
    ELSE 'Orang tua'
  END AS Kategori_Umur
FROM Pasien
";

$result = $koneksi->query($sql);

while ($row = $result->fetch_assoc()) {
    echo "Nama: " . $row['Nama'] . "<br>";
    echo "Kategori Umur: " . $row['Kategori_Umur'] . "<hr>";
}
?>