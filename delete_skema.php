<?php
include 'koneksi.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Hapus data dari database
    $query = "DELETE FROM skema WHERE Kd_skema = '$id'";
    mysqli_query($conn, $query);

    // Redirect ke halaman sertifikasi setelah hapus data
    header("Location: data_skema.php");
    exit();
}
?>
