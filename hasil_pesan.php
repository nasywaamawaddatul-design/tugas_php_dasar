<?php

// VALIDASI DAN PENANGKAPAN DATA METHOD POST
// Mengecek apakah data dikirim melalui method POST dari form_pesan.php

if (!isset($_POST['nama']) || !isset($_POST['kelas']) || !isset($_POST['pesan'])) {
    header("Location: form_pesan.php");
    exit;
}

// Menangkap data POST yang dikirim dan menyimpannya ke dalam variabel

$nama = $_POST['nama'];
$kelas = $_POST['kelas'];
$pesan = $_POST['pesan'];
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Hasil Pesan</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #dbe4ff;
            margin: 0;
            padding: 40px;
            display: flex;
            justify-content: center;
        }
        .card {
            background-color: #eef2ff;
            width: 480px;
            padding: 30px;
            border-radius: 16px;
            box-shadow: 0 8px 24px rgba(0,0,0,0.05);
        }
        h2 { margin-top: 0; margin-bottom: 10px; color: #2d3748; }
        p.greeting { color: #4a5568; font-size: 14px; margin-bottom: 20px; }
        .item {
            background-color: #e2e8f0;
            padding: 12px 16px;
            border-radius: 8px;
            margin-bottom: 12px;
            font-size: 14px;
            color: #2d3748;
        }
        .btn-kembali {
            display: inline-block;
            background-color: #2563eb;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 6px;
            font-size: 14px;
            margin-top: 15px;
        }
    </style>
</head>
<body>

<div class="card">
    <h2>Pesan Berhasil Dikirim</h2>
    <p class="greeting">Terima kasih, <?= htmlspecialchars($nama); ?>!</p>

    <div class="item"><strong>Nama:</strong> <?= htmlspecialchars($nama); ?></div>
    <div class="item"><strong>Kelas:</strong> <?= htmlspecialchars($kelas); ?></div>
    <div class="item"><strong>Pesan / Kesan:</strong> <?= htmlspecialchars($pesan); ?></div>

    <a href="index.php" class="btn-kembali">Kembali ke Data Mahasiswa</a>
</div>

</body>
</html>