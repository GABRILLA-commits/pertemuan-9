<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator Pecahan Uang</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        .form-group { margin-bottom: 15px; }
        label { display: block; font-weight: bold; }
        input[type="text"] { width: 300px; padding: 8px; margin-top: 5px; box-sizing: border-box; }
    </style>
</head>
<body>

    <h1>Kalkulator Pecahan Uang Rupiah</h1>
    
    <form method="post" action="proses_pecahan.php">
        <div class="form-group">
            <label for="jumlah_uang">Jumlah Uang yang Ingin Diambil (Rp):</label>
            <input type="text" id="jumlah_uang" name="jumlah_uang" placeholder="Contoh: 1575250" required>
        </div>
        
        <input type="submit" name="submit" value="Tentukan Pecahan">
        <input type="reset" name="reset" value="Reset">
    </form>

    <br>
    <p>Catatan: Perhitungan ini menggunakan pecahan yang disebutkan dalam soal, yaitu: 
    Rp 100.000, Rp 50.000, Rp 20.000, Rp 5.000, Rp 100, dan Rp 50.</p>

</body>
</html>