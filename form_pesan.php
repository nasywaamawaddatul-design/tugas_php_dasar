<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Form Pesan Mahasiswa</title>
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
        h2 { margin-top: 0; margin-bottom: 20px; color: #2d3748; }
        .form-group { margin-bottom: 15px; }
        label { display: block; margin-bottom: 6px; font-size: 14px; font-weight: 600; color: #4a5568; }

        /* Kotak input form berwarna abu-abu terang dengan sudut melengkung */
        
        input[type="text"], textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #cbd5e1;
            border-radius: 8px;
            box-sizing: border-box;
            background-color: #f8fafc;
            font-size: 14px;
        }
        textarea { height: 80px; resize: vertical; }
        .btn-container { margin-top: 20px; display: flex; gap: 10px; }
        .btn-kirim {
            background-color: #2563eb;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 6px;
            cursor: pointer;
            font-size: 14px;
        }
        .btn-kembali {
            background-color: #64748b;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 6px;
            font-size: 14px;
        }
    </style>
</head>
<body>

<div class="card">
    <h2>Form Pesan Mahasiswa</h2>
    <form action="hasil_pesan.php" method="post">
        <div class="form-group">
            <label>Nama</label>
            <input type="text" name="nama" required>
        </div>
        <div class="form-group">
            <label>Kelas</label>
            <input type="text" name="kelas" required>
        </div>
        <div class="form-group">
            <label>Pesan / Kesan</label>
            <textarea name="pesan" required></textarea>
        </div>
        <div class="btn-container">
            <button type="submit" class="btn-kirim">Kirim</button>
            <a href="index.php" class="btn-kembali">Kembali</a>
        </div>
    </form>
</div>

</body>
</html>