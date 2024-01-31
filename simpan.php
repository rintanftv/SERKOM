<?php
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari form pendaftaran
    $kd_skema = $_POST['kd_skema'];
    $nm_peserta = $_POST['nm_peserta'];
    $jekel = $_POST['jekel'];
    $alamat = $_POST['alamat'];
    $no_hp = $_POST['no_hp'];

    // Simpan data ke database
    $query = "INSERT INTO peserta (Id_peserta, Kd_skema, Nm_peserta, Jekel, Alamat, No_hp) VALUES ('', '$kd_skema', '$nm_peserta', '$jekel', '$alamat', '$no_hp')";
    mysqli_query($conn, $query);
    
    // Redirect ke halaman utama setelah tambah data
    header("Location: index.php");
    exit();
}
?>