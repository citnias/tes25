<?php
include 'koneksi.php';
echo "<h2>Data Transaksi dan Obat</h2>";

$sql = "
SELECT t.ID_Transaksi, t.Tanggal_Transaksi, p.Nama AS Pasien, d.Nama_Dokter, dt.Keterangan, dt.Jumlah, dt.Subtotal
FROM Transaksi t
JOIN Pasien p ON t.ID_Pasien = p.ID_Pasien
JOIN Dokter d ON t.ID_Dokter = d.ID_Dokter
JOIN Detail_Transaksi dt ON t.ID_Transaksi = dt.ID_Transaksi
ORDER BY t.ID_Transaksi
";
$result = $koneksi->query($sql);

echo "<table border='1' cellpadding='10'>";
echo "<tr><th>ID Transaksi</th><th>Tanggal</th><th>Pasien</th><th>Dokter</th><th>Keterangan</th><th>Jumlah</th><th>Subtotal</th></tr>";
while ($row = $result->fetch_assoc()) {
    echo "<tr>
        <td>{$row['ID_Transaksi']}</td>
        <td>{$row['Tanggal_Transaksi']}</td>
        <td>{$row['Pasien']}</td>
        <td>{$row['Nama_Dokter']}</td>
        <td>{$row['Keterangan']}</td>
        <td>{$row['Jumlah']}</td>
        <td>Rp " . number_format($row['Subtotal']) . "</td>
    </tr>";
}
echo "</table><br><a href='index.php'>⬅️ Kembali ke Menu</a>";
?>