<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include 'koneksi.php';

$sql = "
SELECT d.ID_Dokter, d.Nama_Dokter, COUNT(t.ID_Transaksi) AS Jumlah_Transaksi
FROM Dokter d
LEFT JOIN Transaksi t ON d.ID_Dokter = t.ID_Dokter
  AND YEAR(t.Tanggal_Transaksi) = 2015
GROUP BY d.ID_Dokter, d.Nama_Dokter
";

$result = $koneksi->query($sql);

while ($row = $result->fetch_assoc()) {
    echo "Dokter: " . $row['Nama_Dokter'] . "<br>";
    echo "Transaksi Tahun 2015: " . $row['Jumlah_Transaksi'] . "<hr>";
}
?>