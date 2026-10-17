<?php

// VALIDASI DAN PENANGKAPAN DATA METHOD GET
// Mengecek ketersediaan seluruh parameter GET menggunakan fungsi isset()

if (
    !isset($_GET['nim']) || 
    !isset($_GET['nama']) || 
    !isset($_GET['jurusan']) || 
    !isset($_GET['email']) || 
    !isset($_GET['nilai']) || 
    !isset($_GET['grade']) || 
    !isset($_GET['status'])
) {

    // Jika ada parameter yang kurang/tidak lengkap, alihkan pengguna kembali ke index.php

    header("Location: index.php");
    exit;
}

// Menangkap data dari URL yang dikirim via method GET dan menampungnya ke dalam variabel

$nim = $_GET['nim'];
$nama = $_GET['nama'];
$jurusan = $_GET['jurusan'];
$email = $_GET['email'];
$nilai = $_GET['nilai'];
$grade = $_GET['grade'];
$status = $_GET['status'];
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Detail Mahasiswa</title>
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
            width: 500px;
            padding: 30px;
            border-radius: 16px;
            box-shadow: 0 8px 24px rgba(0,0,0,0.05);
        }
        h2 { margin-top: 0; margin-bottom: 25px; color: #2d3748; }
        /* Style untuk tiap kotak item detail */
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
    <h2>Detail Mahasiswa</h2>
    
    <div class="item"><strong>NIM:</strong> <?= htmlspecialchars($nim); ?></div>
    <div class="item"><strong>Nama:</strong> <?= htmlspecialchars($nama); ?></div>
    <div class="item"><strong>Jurusan:</strong> <?= htmlspecialchars($jurusan); ?></div>
    <div class="item"><strong>Email:</strong> <?= htmlspecialchars($email); ?></div>
    <div class="item"><strong>Nilai:</strong> <?= htmlspecialchars($nilai); ?></div>
    <div class="item"><strong>Grade:</strong> <?= htmlspecialchars($grade); ?></div>
    <div class="item"><strong>Status:</strong> <?= htmlspecialchars($status); ?></div>

    <a href="index.php" class="btn-kembali">Kembali</a>
</div>

</body>
</html>