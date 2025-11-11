 <!DOCTYPE html>
<html>
<head>
    <title>Data Pendaftar</title>
</head>
<body>
    <h1>Data Pendaftar</h1>
    <hr>
    <?php
        $nama = $_POST['nama'];
        $tempat_lahir = $_POST['tempat_lahir'];
        $tgl = $_POST['tgl'];
        $bln = $_POST['bln'];
        $thn = $_POST['thn'];
        $alamat = $_POST['alamat'];
        $jk = $_POST['jk'];
        $sekolah = $_POST['asal_sekolah'];
        $uan = $_POST['nilai_uan'];

        $tanggal_lahir_lengkap = $tgl . "-" . $bln . "-" . $thn;

        echo "Terimakasih <b>" . $nama . "</b> sudah mengisi form pendaftaran.";

echo "<h3>Data Anda:</h3>";
echo "<table>";
echo "<tr><td>Nama Lengkap</td><td>:</td><td>" . $nama . "</td></tr>";
echo "<tr><td>Tempat Lahir</td><td>:</td><td>" . $tempat_lahir . "</td></tr>";
echo "<tr><td>Tanggal Lahir</td><td>:</td><td>" . $tanggal_lahir_lengkap . "</td></tr>";
echo "<tr><td>Alamat Rumah</td><td>:</td><td>" . $alamat . "</td></tr>";
echo "<tr><td>Jenis Kelamin</td><td>:</td><td>" . $jk . "</td></tr>";
echo "<tr><td>Asal Sekolah</td><td>:</td><td>" . $sekolah . "</td></tr>";
echo "<tr><td>Nilai UAN</td><td>:</td><td>" . $uan . "</td></tr>";
echo "</table>";

echo "<br><a href=\"form-pendaftaran.php\">Kembali ke Form</a>";

?>
</body>
</html>