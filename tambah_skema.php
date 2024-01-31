<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM TAMBAH SKEMA SERTIFIKASI</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<?php
include "koneksi.php";

// -----------Membuat Nomor Urut Otomatis untuk Kode Skema-------------
$sql = "SELECT RIGHT(Kd_skema, 3) AS tiga_huruf_terakhir FROM skema ORDER BY Kd_skema Desc";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Ambil nilai terbesar dari hasil query
    $row = $result->fetch_assoc();
    $nilai_terbesar = $row['tiga_huruf_terakhir'];
}

$kode = "SKM-";
$nomor_urut = $nilai_terbesar + 1;

// Menggunakan sprintf untuk memformat nomor urut menjadi 3 angka dengan leading zero
$nomor_urut_format = $kode . sprintf("%03d", $nomor_urut);

?>

<body>
    <div class="container">
        <h2>Tambah Data Skema Sertifikasi</h2>
        <form method="POST" action="simpan_skema.php">
            <div class="mb-3">
                <label for="nm_skema" class="form-label">Kode Skema</label>
                <input type="text" class="form-control" id="kd_skema" name="kd_skema" value="<?php echo "$nomor_urut_format"; ?>" readonly>
            </div>
            <div class="mb-3">
                <label for="nm_skema" class="form-label">Nama Skema</label>
                <input type="text" class="form-control" id="nm_skema" name="nm_skema" required>
            </div>
            <div class="mb-3">
                <label for="jenis" class="form-label">Jenis</label>
                <input type="text" class="form-control" id="jenis" name="jenis" required>
            </div>
            <div class="mb-3">
                <label for="Jml_Unit" class="form-label">Jumlah Unit</label>
                <input type="text" class="form-control" id="jml_unit" name="jml_unit" required>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
