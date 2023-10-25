<?php
// memanggil library FPDF
require('fpdf184/fpdf.php');
include 'koneksi.php';
// intance object dan memberikan pengaturan halaman PDF
$pdf = new FPDF('L', 'mm', 'A4');
$pdf->AddPage();
$pdf->SetFont('Times', 'B', 15);
$pdf->Cell(255, 10, 'DATA NILAI MAHASISWA 2022', 0, 0, 'C');
$pdf->Cell(10, 15, '', 0, 1);
$pdf->SetFont('Times', 'B', 14);
$pdf->Cell(10, 7, 'NO', 1, 0, 'C');
$pdf->Cell(30, 7, 'NIM', 1, 0, 'C');
$pdf->Cell(60, 7, 'NAMA', 1, 0, 'C');
$pdf->Cell(20, 7, 'TM', 1, 0, 'C');
$pdf->Cell(20, 7, 'TT', 1, 0, 'C');
$pdf->Cell(20, 7, 'UTS', 1, 0, 'C');
$pdf->Cell(20, 7, 'UAS', 1, 0, 'C');
$pdf->Cell(20, 7, 'NA', 1, 0, 'C');
$pdf->Cell(35, 7, 'GRADE', 1, 0, 'C');
$pdf->Cell(40, 7, 'KETERANGAN', 1, 0, 'C');
$pdf->Cell(10, 7, '', 0, 1);
$pdf->SetFont('Times', '', 13);
$no = 1;
$data = mysqli_query($koneksi, "SELECT * FROM nilai");
while ($d = mysqli_fetch_array($data)) {
    $pdf->Cell(10, 6, $no++, 1, 0, 'C');
    $pdf->Cell(30, 6, $d['nim_mahasiswa'], 1, 0);
    $pdf->Cell(60, 6, $d['nama_mahasiswa'], 1, 0);
    $pdf->Cell(20, 6, $d['tugas_mandiri'], 1, 0);
    $pdf->Cell(20, 6, $d['tugas_terstruktur'], 1, 0);
    $pdf->Cell(20, 6, $d['ujian_tengah_semester'], 1, 0);
    $pdf->Cell(20, 6, $d['ujian_akhir_semester'], 1, 0);
    $pdf->Cell(20, 6, $d['nilai_akhir'], 1, 0);
    $pdf->Cell(35, 6, $d['grade_nilai'], 1, 0);
    $pdf->Cell(40, 6, $d['keterangan_nilai'], 1, 1);
}
$pdf->Output();
?>