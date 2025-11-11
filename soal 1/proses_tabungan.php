<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Perhitungan Saldo Tabungan</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        .hasil { border: 1px solid #ccc; padding: 15px; background-color: #f9f9f9; width: 400px; }
        h2 { color: #007bff; }
    </style>
</head>
<body>

    <h1>Hasil Perhitungan Saldo Tabungan</h1>
    
    <?php
        // Cek apakah tombol submit sudah diklik (data dikirim)
        if (isset($_POST['submit'])) {
            // 1. Ambil data dari form menggunakan metode POST
            // Kita gunakan (float) untuk memastikan nilainya adalah angka desimal
            $saldo_awal = (float)$_POST['saldo_awal'];
            $bunga_persen = (float)$_POST['bunga'];
            $lama_bulan = (int)$_POST['lama_bulan'];

            // 2. Lakukan perhitungan

            // Konversi persentase bunga ke bentuk desimal per bulan
            // Contoh: 0.25% menjadi 0.0025
            $bunga_desimal = $bunga_persen / 100;

            // Hitung total bunga yang diperoleh (Bunga Sederhana)
            // Rumus: Total Bunga = Saldo Awal * Bunga Desimal * Lama Bulan
            $total_bunga = $saldo_awal * $bunga_desimal * $lama_bulan;

            // Hitung Saldo Akhir
            $saldo_akhir = $saldo_awal + $total_bunga;

            // Format angka untuk tampilan (membuat output lebih mudah dibaca)
            $saldo_awal_format = number_format($saldo_awal, 0, ',', '.');
            $total_bunga_format = number_format($total_bunga, 2, ',', '.'); 
            $saldo_akhir_format = number_format($saldo_akhir, 0, ',', '.'); 

            // 3. Tampilkan Hasil
            echo "<div class='hasil'>";
            echo "<h2>Ringkasan Perhitungan</h2>";
            echo "<p><strong>Saldo Awal:</strong> Rp. {$saldo_awal_format}</p>";
            echo "<p><strong>Bunga Per Bulan:</strong> {$bunga_persen}%</p>";
            echo "<p><strong>Lama Menabung:</strong> {$lama_bulan} bulan</p>";
            echo "<hr>";
            echo "<p><strong>Total Bunga yang Diperoleh:</strong> Rp. {$total_bunga_format}</p>";
            echo "<p style='font-size: 1.2em; color: green;'><strong>SALDO AKHIR:</strong> Rp. {$saldo_akhir_format}</p>";
            echo "</div>";
 
        } else {
            // Jika script diakses langsung tanpa melalui form
            echo "<p>Tidak ada data yang diproses. Silakan isi <a href='tabungan.php'>form input</a> terlebih dahulu.</p>";
        }
    ?>

</body>
</html>