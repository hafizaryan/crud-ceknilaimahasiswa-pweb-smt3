<?php 
// koneksi database
include 'koneksi.php';
// menyimpan sementara data yang di kirim dari form ke variabel
$nim_mahasiswa = $_POST['nim_mahasiswa'];
$nama_mahasiswa = $_POST['nama_mahasiswa'];
$tugas_mandiri = $_POST['tugas_mandiri'];
$tugas_terstruktur = $_POST['tugas_terstruktur'];
$ujian_tengah_semester = $_POST['ujian_tengah_semester'];
$ujian_akhir_semester = $_POST['ujian_akhir_semester'];
$nilai_akhir = $_POST['nilai_akhir'];
$grade_nilai = $_POST['grade_nilai'];
$keterangan_nilai = $_POST['keterangan_nilai'];
// menginput data ke database
mysqli_query($koneksi,"insert into nilai values('','$nim_mahasiswa','$nama_mahasiswa','$tugas_mandiri','$tugas_terstruktur','$ujian_tengah_semester','$ujian_akhir_semester','$nilai_akhir','$grade_nilai','$keterangan_nilai')");
// mengalihkan halaman kembali ke index.php
header("location:index.php");
?>