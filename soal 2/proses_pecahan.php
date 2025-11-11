<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Pecahan Uang</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        .hasil-box { border: 2px solid #333; padding: 20px; background-color: #f0f0f0; width: 450px; }
        table { width: 100%; border-collapse: collapse; margin-top: 15px; }
        th, td { border: 1px solid #ccc; padding: 8px; text-align: left; }
        th { background-color: #ddd; }
        .jumlah { text-align: right; font-weight: bold; }
    </style>
</head>
<body>

    <h1>Hasil Konversi Pecahan Uang</h1>
    
    <?php
        if (isset($_POST['submit'])) {
            // 1. Ambil data dari form dan pastikan nilainya adalah integer
            $total_uang = (int)$_POST['jumlah_uang'];
            $sisa_uang = $total_uang; // Variabel untuk menyimpan sisa yang akan dibagi

            // Tampilkan jumlah uang yang diinput
            $total_uang_format = number_format($total_uang, 0, ',', '.');
            echo "<p>Jumlah uang yang diambil: <strong>Rp. {$total_uang_format},-</strong></p>";
            echo "<hr>";

            // 2. Definisikan pecahan yang berlaku (diurutkan dari terbesar)
            $pecahan = [100000, 50000, 20000, 5000, 100, 50];
            $hasil_pecahan = [];

            // 3. Lakukan Perhitungan Pecahan
            foreach ($pecahan as $nilai) {
                // Hitung jumlah lembar/keping untuk pecahan saat ini
                $jumlah_lembar = floor($sisa_uang / $nilai);
                
                // Simpan hasilnya
                $hasil_pecahan[$nilai] = $jumlah_lembar;
                
                // Hitung sisa uang yang belum terbagi (menggunakan operator modulus %)
                $sisa_uang = $sisa_uang % $nilai; 
            }

            // 4. Tampilkan Hasil
            echo "<div class='hasil-box'>";
            echo "<h2>Rincian Pecahan</h2>";
            echo "<table>";
            echo "<tr><th>Pecahan</th><th>Jumlah Lembar/Keping</th></tr>";
            
            // Loop untuk menampilkan hasil
            foreach ($hasil_pecahan as $nilai => $jumlah) {
                // Hanya tampilkan pecahan yang jumlahnya > 0
                if ($jumlah > 0) {
                    $nilai_format = number_format($nilai, 0, ',', '.');
                    echo "<tr>";
                    echo "<td>Rp. {$nilai_format},-</td>";
                    echo "<td class='jumlah'>{$jumlah}</td>";
                    echo "</tr>";
                }
            }

            // Cek apakah ada sisa uang yang tidak bisa dipecah
            if ($sisa_uang > 0) {
                $sisa_format = number_format($sisa_uang, 0, ',', '.');
                echo "<tr><td colspan='2' style='color: red;'><strong>Sisa (Tidak Bisa Dipecah):</strong> Rp. {$sisa_format},-</td></tr>";
            }
            
            echo "</table>";
            echo "</div>";

        } else {
            // Jika script diakses langsung tanpa melalui form
            echo "<p>Tidak ada data yang diproses. Silakan isi <a href='pecahan.php'>form input</a> terlebih dahulu.</p>";
        }
    ?>
    <p><a href="pecahan.php"> &larr; Kembali ke Form Input</a></p>

</body>
</html>