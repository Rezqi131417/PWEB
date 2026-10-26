<html>
    <head>
        <title>Pendaftaran Pasien</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <h1>Pendaftaran Pasien</h1>
        <form action="" method="post">
            <label for="nama">Nama:</label>
            <input type="text" id="nama" name="nama1"><br><br>
            <label for="tempat_lahir">Tempat Lahir:</label>
            <input type="text" id="tempat_lahir" name="tempat_lahir"><br><br>
            <label for="tanggal_lahir">Tanggal Lahir:</label>
            <input type="date" id="tanggal_lahir" name="tanggal_lahir"><br><br>
            <label for="jenis_kelamin">Jenis Kelamin:</label>
            <input type="radio" id="laki-laki" name="jenis_kelamin" value="Laki-laki">
            <label for="laki-laki">Laki-laki</label>
            <input type="radio" id="perempuan" name="jenis_kelamin" value="Perempuan">
            <label for="perempuan">Perempuan</label><br><br>
            <label for="umur">Umur:</label>
            <input type="number" id="umur" name="umur"><br><br>
            <label for="alamat">Alamat:</label>
            <textarea id="alamat" name="alamat"></textarea><br><br>
            <label for="hp">Handphone:</label>
            <input type="text" id="hp" name="hp"><br><br>
            <label for="email">Pilihan Poli:</label>
            <select id="poli" name="poli">
                <option value="Poli Umum">Poli Umum</option>
                <option value="Poli Gigi">Poli Gigi</option>
                <option value="Poli Anak">Poli Anak</option>
                <option value="Poli Kandungan">Poli Kandungan</option>
            </select><br><br>
            <input type="submit" name="simpan" value="Daftar">
        </form>
    </body>
</html>

<?php
if (isset($_POST['simpan'])) {
    // ambil data dari form
    $nama = $_POST['nama1'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $jenis_kelamin = $_POST['jenis_kelamin'];       
    $umur = $_POST['umur'];
    $alamat = $_POST['alamat'];
    $hp= $_POST['hp'];
    $poli = $_POST['poli'];
    // proses simpan data ke database
    include "koneksi.php";
    $sql = "INSERT INTO pendaftaran (nama, tempat_lahir, tgl_lahir, jk, umur, alamat, hp, poli) VALUES ('$nama', '$tempat_lahir', '$tanggal_lahir', '$jenis_kelamin', $umur, '$alamat', '$hp', '$poli')";
    if ($conn->query($sql) === TRUE) {
       echo "<script>alert('Pendaftaran berhasil!'); window.location.href='pendaftaran.php';</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>