<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Menu Laporan Klinik</title>
  <style>
    * {
      box-sizing: border-box;
    }

    body {
      margin: 0;
      padding: 0;
      font-family: 'Segoe UI', sans-serif;
      background: linear-gradient(to right, #eef2f3, #cfd9df);
    }

    .container {
      max-width: 700px;
      margin: 80px auto;
      background-color: white;
      border-radius: 15px;
      box-shadow: 0 8px 20px rgba(0,0,0,0.15);
      padding: 40px;
      text-align: center;
    }

    h1 {
      color: #2c3e50;
      margin-bottom: 30px;
    }

    .menu-button {
      display: block;
      width: 100%;
      margin: 10px 0;
      padding: 15px;
      background: #3498db;
      color: white;
      font-size: 16px;
      text-decoration: none;
      border-radius: 8px;
      transition: all 0.25s ease;
    }

    .menu-button:hover {
      background: #2c80b4;
      transform: scale(1.03);
    }

    footer {
      margin-top: 30px;
      font-size: 12px;
      color: #888;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>📋 Menu Laporan Klinik</h1>
    
    <a class="menu-button" href="pasien.php">🧍‍♂️ Data Pasien</a>
    <a class="menu-button" href="dokter.php">🩺 Data Dokter</a>
    <a class="menu-button" href="transaksi.php">🧾 Data Transaksi & Obat</a>

    <a class="menu-button" href="a.php">🧍‍♀️ Laporan A – Pasien Perempuan Usia 19–30 (Agustus 2015)</a>
    <a class="menu-button" href="b.php">🩺 Laporan B – Data Semua Dokter (Dengan/Tanpa Transaksi)</a>
    <a class="menu-button" href="c.php">💊 Laporan C – Jumlah & Biaya Obat (Agustus–Desember 2015)</a>
    <a class="menu-button" href="d.php">📈 Laporan D – 10 Obat Terbanyak Dipakai Tahun 2015</a>
    <a class="menu-button" href="e.php">👨‍👩‍👧‍👦 Laporan E – Kategori Umur Pasien</a>


    <footer>© <?= date("Y") ?> Halawa's 2025</footer>
  </div>
</body>
</html>