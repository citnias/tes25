<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include 'koneksi.php';

$sql = "
SELECT d.Keterangan, SUM(d.Jumlah) AS Total_Digunakan
FROM Detail_Transaksi d
JOIN Transaksi t ON d.ID_Transaksi = t.ID_Transaksi
WHERE YEAR(t.Tanggal_Transaksi) = 2015
GROUP BY d.Keterangan
ORDER BY Total_Digunakan DESC
LIMIT 10
";

$result = $koneksi->query($sql);

while ($row = $result->fetch_assoc()) {
    echo "Obat: " . $row['Keterangan'] . "<br>";
    echo "Jumlah Digunakan: " . $row['Total_Digunakan'] . "<br><hr>";
}
?>