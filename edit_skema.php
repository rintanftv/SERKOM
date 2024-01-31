<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="">
        <meta name="author" content="Tooplate">

        <title>DATA SKEMA</title>

        <!-- CSS FILES -->      
        <link rel="preconnect" href="https://fonts.googleapis.com">
        
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

        <link href="https://fonts.googleapis.com/css2?family=Unbounded:wght@300;400;700&display=swap" rel="stylesheet">

        <link href="css/bootstrap.min.css" rel="stylesheet">

        <link href="css/bootstrap-icons.css" rel="stylesheet">

        <link href="css/apexcharts.css" rel="stylesheet">

        <link href="css/tooplate-mini-finance.css" rel="stylesheet">
<!--

Tooplate 2135 Mini Finance

https://www.tooplate.com/view/2135-mini-finance

Bootstrap 5 Dashboard Admin Template

-->
</head>

<?php
include 'koneksi.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = mysqli_query($conn, "SELECT * FROM skema WHERE Kd_skema = '$id'");
    $data = mysqli_fetch_array($sql);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari formulir
    $nm_skema = $_POST['nm_skema'];
    $jenis = $_POST['jenis'];
    $jml_unit = $_POST['jml_unit'];

    // Update data di database
    $query = "UPDATE skema SET Nm_skema='$nm_skema', jenis='$jenis', Jml_unit='$jml_unit' WHERE Kd_skema='$id'";
    mysqli_query($conn, $query);

    // Redirect ke halaman utama setelah edit data
    header("Location: data_skema.php");
    exit();
}
?>

<body>
<div class="row">
                <nav id="sidebarMenu" class="col-md-3 col-lg-3 d-md-block sidebar collapse">
                    <div class="position-sticky py-4 px-3 sidebar-sticky">
                        <ul class="nav flex-column h-100">
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="index.php">
                                    <i class="bi-house-fill me-2"></i>
                                    HOME
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="daftar.php">
                                    <i class="bi-wallet me-2"></i>
                                    PERNDAFTARAN
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link active" href="data_skema.php">
                                    <i class="bi-wallet me-2"></i>
                                    SERTIFIKASI
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>

                <main class="main-wrapper col-md-9 ms-sm-auto py-4 col-lg-9 px-md-4 border-start">
                    <div class="title-group mb-3">
                        <h1 class="h2 mb-0">FORM EDIT DATA SKEMA SERTIFIKASI</h1>
                    </div>
                <form method="POST" action="edit_skema.php?id=<?php echo $id; ?>">
                    <div class="mb-3">
                        <label for="nm_skema" class="form-label">Kode Skema</label>
                        <input type="text" class="form-control" id="kd_skema" name="kd_skema" value="<?php echo $data['Kd_skema']; ?>" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="nm_skema" class="form-label">Nama Skema</label>
                        <input type="text" class="form-control" id="nm_skema" name="nm_skema" value="<?php echo $data['Nm_skema']; ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="jenis" class="form-label">Jenis</label>
                        <input type="text" class="form-control" id="jenis" name="jenis" value="<?php echo $data['Jenis']; ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="Jml_Unit" class="form-label">Jumlah Unit</label>
                        <input type="text" class="form-control" id="jml_unit" name="jml_unit" value="<?php echo $data['Jml_unit']; ?>" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
</body>
</html>
