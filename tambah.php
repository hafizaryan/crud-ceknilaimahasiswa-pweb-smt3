<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DATA NILAI MAHASISWA 2022</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
<div class="container">
        <center>
            <br>
            <h2>DATA NILAI MAHASISWA 2022</h2>
        </center>
        <br>
    <a href="index.php" target="_blank" class="btn btn-success" ><i class="fa fa-reply"></i>&nbsp KEMBALI</a>
    <br />
    <br />
    <h3>INPUT NILAI MAHASISWA</h3>
    <form method="post" action="tambah_aksi.php">
        <table>
            <tr>
                <td>NIM</td>
                <td><input type="number" name="nim_mahasiswa"></td>
            </tr>
            <tr>
                <td>NAMA</td>
                <td><input type="text" name="nama_mahasiswa"></td>
            </tr>
            <tr>
                <td>TUGAS MANDIRI</td>
                <td><input type="number" name="tugas_mandiri"></td>
            </tr>
            <tr>
                <td>TUGAS TERSTRUKTUR</td>
                <td><input type="number" name="tugas_terstruktur"></td>
            </tr>
            <tr>
                <td>UTS</td>
                <td><input type="number" name="ujian_tengah_semester"></td>
            </tr>
            <tr>
                <td>UAS</td>
                <td><input type="number" name="ujian_akhir_semester"></td>
            </tr>
            <tr>
                <td>NILAI AKHIR</td>
                <td><input type="number" name="nilai_akhir"></td>
            </tr>
            <tr>
                <td>GRADE</td>
                <td><input type="text" name="grade_nilai"></td>
            </tr>
            <tr>
                <td>KETERANGAN</td>
                <td><input type="text" name="keterangan_nilai"></td>
            </tr>

            <tr>
                <td></td>
                <td><button class="btn btn-warning"><i class="fa fa-floppy-o" >&nbsp SIMPAN</i></td>
            </tr>
</body>

</html>