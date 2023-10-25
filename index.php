<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DATA NILAI MAHASISWA 2022</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/
css/font-awesome.min.css">
</head>

<body>
<div class="container">
        <center>
            <br>
            <h2>DATA NILAI MAHASISWA 2022</h2>
        </center>
        <br>
        <div class="float-left">
            <a href="tambah.php" target="_blank" class="btn btn-success" ><i class="fa fa-plus-square"></i> &nbsp INPUT NILAI MAHASISWA</a>
            <br>
            <br>
        </div>
        <div class="float-right">
            <a href="export_pdf.php" target="_blank" class="btn btn-success"><i class="fa fa-file-pdf-o"></i> &nbsp PDF</a>
            <br>
            <br>
        </div>
    <br />
    <br />
    <br />
    <table class="table table-bordered">
        <tr>
            <th>NO</th>
            <th>NIM</th>
            <th>NAMA</th>
            <th>TUGAS MANDIRI</th>
            <th>TUGAS TERSTRUKTUR</th>
            <th>UTS</th>
            <th>UAS</th>
            <th>NILAI AKHIR</th>
            <th>GRADE</th>
            <th>KETERANGAN</th>
        </tr>
        <?php
        include 'koneksi.php';
        $no = 1;
        $data = mysqli_query($koneksi, "select * from nilai");
        while ($d = mysqli_fetch_array($data)) {
        ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $d['nim_mahasiswa']; ?></td>
                <td><?php echo $d['nama_mahasiswa']; ?></td>
                <td><?php echo $d['tugas_mandiri']; ?></td>
                <td><?php echo $d['tugas_terstruktur']; ?></td>
                <td><?php echo $d['ujian_tengah_semester']; ?></td>
                <td><?php echo $d['ujian_akhir_semester']; ?></td>
                <td><?php echo $d['nilai_akhir']; ?></td>
                <td><?php echo $d['grade_nilai']; ?></td>
                <td><?php echo $d['keterangan_nilai']; ?></td> 
            </tr>
        <?php
        }
        ?>
    </table>
</body>

</html>