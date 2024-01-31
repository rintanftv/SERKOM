<?php
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari form pendaftaran
    $kd_skema = $_POST['kd_skema'];
    $nm_skema = $_POST['nm_skema'];
    $jenis = $_POST['jenis'];
    $jml_unit = $_POST['jml_unit'];
    
    // Simpan data ke database
    $query = "INSERT INTO skema (Kd_skema, Nm_skema, Jenis, Jml_unit) VALUES ('$kd_skema', '$nm_skema', '$jenis', '$jml_unit')";
    mysqli_query($conn, $query);
    
    // Redirect ke halaman utama setelah tambah data
    header("Location: data_skema.php");
    exit();
}
?>