<!DOCTYPE html>
<html>
<head>
    <title>Form Pendaftaran Mahasiswa Baru</title>
</head>
<body>
    <h1>Form Pendaftaran Online Universitas X</h1>

    <form method="post" action="proses-pendaftaran.php">
        <table>
            <tr>
                <td>Nama Lengkap</td>
                <td>:</td>
                <td><input type="text" name="nama" size="30"></td>
            </tr>
            <tr>
                <td>Tempat Lahir</td>
                <td>:</td>
                <td><input type="text" name="tempat_lahir" size="30"></td>
            </tr>
            <tr>
                <td>Tanggal Lahir</td>
                <td>:</td>
                <td>
                    <select name="tgl">
                        <option value="">Tgl</option>
                        <?php
                            for ($i = 1; $i <= 31; $i++) {
                                echo "<option value='$i'>$i</option>";
                            }
                        ?>
                        </select>

                    <select name="bln">
                        <option value="">Bln</option>
                        <?php
                            for ($i = 1; $i <= 12; $i++) {
                                echo "<option value='$i'>$i</option>";
                            }
                        ?>
                    </select>

                    <select name="thn">
                        <option value="">Thn</option>
                        <?php
                            for ($i = 2005; $i >= 1980; $i--) {
                                echo "<option value='$i'>$i</option>";
                            }
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Alamat Rumah</td>
                <td>:</td>
                <td><textarea name="alamat" rows="5" cols="30"></textarea></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>:</td>
                <td>
                    <input type="radio" name="jk" value="Pria"> Pria
                    <input type="radio" name="jk" value="Wanita"> Wanita
                </td>
            </tr>
            <tr>
                <td>Asal Sekolah</td>
                <td>:</td>
                <td><input type="text" name="asal_sekolah" size="30"></td>
            </tr>
            <td>Nilai UAN</td>
                <td>:</td>
                <td><input type="text" name="nilai_uan" size="10"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td>
                    <input type="submit" name="submit" value="Submit">
                    <input type="reset" name="reset" value="Reset">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>