<?php
include 'koneksi.php';
echo "<h2>Data Dokter</h2>";
$sql = "SELECT * FROM Dokter";
$result = $koneksi->query($sql);

echo "<table border='1' cellpadding='10'>";
echo "<tr><th>ID</th><th>Nama Dokter</th></tr>";
while ($row = $result->fetch_assoc()) {
    echo "<tr>
        <td>{$row['ID_Dokter']}</td>
        <td>{$row['Nama_Dokter']}</td>
    </tr>";
}
echo "</table><br><a href='index.php'>⬅️ Kembali ke Menu</a>";
?>