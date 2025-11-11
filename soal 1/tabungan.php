<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator Saldo Akhir Tabungan</title>
    <style>
        /* Gaya sederhana agar tampilan lebih rapi di browser */
        body { font-family: Arial, sans-serif; margin: 20px; }
        table { border-collapse: collapse; width: 400px; }
        td, th { padding: 8px; text-align: left; }
        input[type="text"] { width: 100%; padding: 5px; box-sizing: border-box; }
        .button-group { margin-top: 15px; }
    </style>
</head>
<body>

    <h1>Hitung Saldo Akhir Tabungan</h1>
    
    <form method="post" action="proses_tabungan.php">
        <table>
            <tr>
                <td><label for="saldo_awal">Saldo Awal (Rp)</label></td>
                <td>:</td>
                <td><input type="text" id="saldo_awal" name="saldo_awal" required></td>
            </tr>
            <tr>
                <td><label for="bunga">Bunga Per Bulan (%)</label></td>
                <td>:</td>
                <td><input type="text" id="bunga" name="bunga" required></td>
            </tr>
            <tr>
                <td><label for="lama_bulan">Lama Menabung (Bulan)</label></td>
                <td>:</td>
                <td><input type="text" id="lama_bulan" name="lama_bulan" required></td>
            </tr>
        </table>
        
        <div class="button-group">
            <input type="submit" name="submit" value="Hitung Saldo Akhir">
            <input type="reset" name="reset" value="Reset Data">
        </div>
    </form>

</body>
</html>