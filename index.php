<?php

// 1. PENYIAPAN DATA DATA MAHASISWA
// Menggunakan Array Multidimensi yang di dalamnya berisi Associative Array

$mahasiswa = [
    [
        "nim" => "25001",
        "nama" => "Andi Pratama",
        "jurusan" => "Pendidikan Sistem dan Teknologi Informasi",
        "email" => "andi@upi.edu",
        "nilai" => 88
    ],
    [
        "nim" => "25002",
        "nama" => "Budi Santoso",
        "jurusan" => "Sistem Telekomunikasi",
        "email" => "budi@upi.edu",
        "nilai" => 76
    ],
    [
        "nim" => "25003",
        "nama" => "Citra Lestari",
        "jurusan" => "Mekatronika dan Kecerdasan Buatan",
        "email" => "citra@upi.edu",
        "nilai" => 67
    ],
    [
        "nim" => "25004",
        "nama" => "Dina Maharani",
        "jurusan" => "Pendidikan Sistem dan Teknologi Informasi",
        "email" => "dina@upi.edu",
        "nilai" => 92
    ],
    [
        "nim" => "25005",
        "nama" => "Eko Saputra",
        "jurusan" => "Sistem Telekomunikasi",
        "email" => "eko@upi.edu",
        "nilai" => 58
    ]
];

// 2. FUNGSI LOGIKA PERCABANGAN (IF - ELSEIF - ELSE)
// Fungsi untuk menghitung Grade berdasarkan Nilai

function hitungGrade($nilai) {
    if ($nilai >= 80) return "A";
    elseif ($nilai >= 70) return "B";
    elseif ($nilai >= 60) return "C";
    else return "D";
}

// Fungsi untuk menentukan Status Kelulusan

function hitungStatus($nilai) {
    if ($nilai >= 70) return "Lulus";
    else return "Tidak Lulus";
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Daftar Mahasiswa</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #dbe4ff;
            margin: 0;
            padding: 40px;
            display: flex;
            justify-content: center;
        }
        .container {
            background-color: #eef2ff;
            width: 85%;
            padding: 30px;
            border-radius: 16px;
            box-shadow: 0 8px 24px rgba(0,0,0,0.05);
        }
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }
        h2 { margin: 0; color: #2d3748; }
        p.subtitle { margin: 5px 0 0 0; color: #718096; font-size: 14px; }
        .btn-pesan {
            background-color: #2563eb;
            color: white;
            padding: 10px 18px;
            text-decoration: none;
            border-radius: 8px;
            font-size: 14px;
            font-weight: 500;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 15px;
        }
        th, td {
            padding: 14px;
            text-align: left;
            font-size: 14px;
        }
        th { color: #4a5568; font-weight: 600; }
        td { color: #2d3748; border-top: 1px solid #e2e8f0; }
        .status-lulus { color: #2563eb; font-weight: 500; }
        .status-tidak { color: #e11d48; font-weight: 500; }
        .btn-detail {
            background-color: #2563eb;
            color: white;
            padding: 8px 14px;
            text-decoration: none;
            border-radius: 6px;
            font-size: 13px;
            display: inline-block;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="header">
        <div>
            <h2>Daftar Mahasiswa</h2>
            <p class="subtitle">Mini Website PHP Dasar</p>
        </div>
        <a href="form_pesan.php" class="btn-pesan">Isi Form Pesan</a>
    </div>

    <table>
        <thead>
            <tr>
                <th>No.</th>
                <th>NIM</th>
                <th>Nama</th>
                <th>Jurusan</th>
                <th>Nilai</th>
                <th>Grade</th>
                <th>Status</th>
                <th>Detail</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            $no = 1;
            foreach ($mahasiswa as $mhs) : 
                $grade = hitungGrade($mhs['nilai']);
                $status = hitungStatus($mhs['nilai']);
            ?>
            <tr>
                <td><?= $no++; ?></td>
                <td><?= htmlspecialchars($mhs['nim']); ?></td>
                <td><?= htmlspecialchars($mhs['nama']); ?></td>
                <td><?= htmlspecialchars($mhs['jurusan']); ?></td>
                <td><?= htmlspecialchars($mhs['nilai']); ?></td>
                <td><?= $grade; ?></td>
                <td class="<?= ($status == 'Lulus') ? 'status-lulus' : 'status-tidak'; ?>">
                    <?= $status; ?>
                </td>
                <td>
                    <a class="btn-detail" href="detail.php?nim=<?= urlencode($mhs['nim']); ?>&nama=<?= urlencode($mhs['nama']); ?>&jurusan=<?= urlencode($mhs['jurusan']); ?>&email=<?= urlencode($mhs['email']); ?>&nilai=<?= urlencode($mhs['nilai']); ?>&grade=<?= urlencode($grade); ?>&status=<?= urlencode($status); ?>">
                        Lihat Detail
                    </a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

</body>
</html>