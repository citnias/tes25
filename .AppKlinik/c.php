<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include 'koneksi.php';

$sql = "
SELECT d.Keterangan, SUM(d.Jumlah) AS Total_Obat, SUM(d.Subtotal) AS Total_Uang
FROM Detail_Transaksi d
JOIN Transaksi t ON d.ID_Transaksi = t.ID_Transaksi
WHERE MONTH(t.Tanggal_Transaksi) BETWEEN 8 AND 12
  AND YEAR(t.Tanggal_Transaksi) = 2015
GROUP BY d.Keterangan
";

$result = $koneksi->query($sql);

while ($row = $result->fetch_assoc()) {
    echo "Obat/Layanan: " . $row['Keterangan'] . "<br>";
    echo "Jumlah: " . $row['Total_Obat'] . "<br>";
    echo "Total Uang: Rp " . number_format($row['Total_Uang']) . "<hr>";
}
?>