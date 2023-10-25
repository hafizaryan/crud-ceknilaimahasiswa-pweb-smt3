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
<?php
    if (isset($_POST['Submit'])) {
        $tugas_mandiri = $_POST['tugas_mandiri'];
        $tugas_terstruktur = $_POST['tugas_terstruktur'];
        $ujian_tengah_semester = $_POST['ujian_tengah_semester'];
        $ujian_akhir_semester = $_POST['ujian_akhir_semester'];

        //rumus perhitungan nilai
        $tugas_mandiri = $tugas_mandiri * 0.15;
        $tugas_terstruktur = $tugas_terstruktur * 0.15;
        $ujian_tengah_semester = $ujian_tengah_semester * 0.35;
        $ujian_akhir_semester = $ujian_akhir_semester * 0.35;

        $hasil = ($tugas_mandiri + $tugas_terstruktur + $ujian_tengah_semester + $ujian_akhir_semester);
        
        if ($hasil >= 85) {
            $grade = "A";
            $keterangan ="Amat Baik";
        } elseif ($hasil >= 80 && $hasil <85) {
            $grade = "A-";
            $keterangan ="Amat Baik";
        } elseif ($hasil >= 75 && $hasil <80) {
            $grade = "B+";
            $keterangan ="Baik";
        } elseif ($hasil >= 70 && $hasil <75) {
            $grade = "B";
            $keterangan ="Baik";
        } elseif ($hasil >= 65 && $hasil <70) {
            $grade = "B-";
            $keterangan ="Baik";
        } elseif ($hasil >= 60 && $hasil <65) {
            $grade = "C+";
            $keterangan ="Cukup";
        } elseif ($hasil >= 55 && $hasil <60) {
            $grade = "C";
            $keterangan ="Cukup";
        } elseif ($hasil >= 50 && $hasil <55) {
            $grade = "D";
            $keterangan ="Kurang";
        } else {
            $grade = "E";
            $keterangan ="Gagal";
        }
    }
    ?>
    <br />
    <div class="container">
    <a href="index.php" target="_blank" class="btn btn-success" ><i class="fa fa-reply"></i>&nbsp KEMBALI</a>
    <br />
    <br />
    <h3>TAMBAH DATA MAHASISWA</h3>
    <form method="post">
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
                <td><input type="number" name="tugas_mandiri" ></td>
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
                <td><input type="number" name="nilai_akhir" disabled value="<?php print($hasil); ?>"></td>
            </tr>
            
            <tr>
                <td>GRADE</td>
                <td><input type="text" name="grade_nilai" disabled value="<?php print($grade); ?>"></td>
            </tr>
            <tr>
                <td>KETERANGAN</td>
                <td><input type="text" name="keterangan_nilai"disabled value="<?php print($keterangan); ?>" ></td>
            </tr>
            <tr>
                <td></td>
                <br>
                <td><button type="submit" value="HITUNG" name="Submit"class="btn btn-warning"><i class="fa fa-pencil"></i>&nbsp HITUNG</button>
                    <button type="submit" class="btn btn-danger"><i class="fa fa-eraser"></i>RESET</button></td>
                

            </tr>
        </table>
    </form>
    </div>
</body>

</html>