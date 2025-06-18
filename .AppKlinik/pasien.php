<?php
include 'koneksi.php';
echo "<h2>Data Pasien</h2>";
$sql = "SELECT * FROM Pasien";
$result = $koneksi->query($sql);

echo "<table border='1' cellpadding='10'>";
echo "<tr><th>ID</th><th>Nama</th><th>Alamat</th><th>Jenis Kelamin</th><th>Umur</th></tr>";
while ($row = $result->fetch_assoc()) {
    echo "<tr>
        <td>{$row['ID_Pasien']}</td>
        <td>{$row['Nama']}</td>
        <td>{$row['Alamat']}</td>
        <td>{$row['Jenis_Kelamin']}</td>
        <td>{$row['Umur']}</td>
    </tr>";
}
echo "</table><br><a href='index.php'>⬅️ Kembali ke Menu</a>";
?>