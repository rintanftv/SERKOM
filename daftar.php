<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="">
        <meta name="author" content="Tooplate">

        <title>PENDAFTARAN</title>

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
$sql = mysqli_query($conn, "SELECT * FROM skema");
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
                                <a class="nav-link active" href="daftar.php">
                                    <i class="bi-wallet me-2"></i>
                                    PERNDAFTARAN
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="data_skema.php">
                                    <i class="bi-wallet me-2"></i>
                                    SERTIFIKASI
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>

                <main class="main-wrapper col-md-9 ms-sm-auto py-4 col-lg-9 px-md-4 border-start">
                    <div class="title-group mb-3">
                        <h1 class="h2 mb-0">FORM TAMBAH DATA PESERTA</h1>
                    </div>
                </br></br>
                    <form method="POST" action="simpan.php">
                        <div class="mb-3">
                            <label for="kd_skema">Kode Skema : </label>
                            <select id="kd_skema" name="kd_skema">
                                <?php 
                                    while($data=mysqli_fetch_array($sql)){
                                ?>
                                <option value="<?php echo $data['Kd_skema']; ?>"><?php echo $data['Kd_skema']; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="Kd_skema" class="form-label">Nama Peserta</label>
                            <input type="text" class="form-control" id="nm_peserta" name="nm_peserta" required>
                        </div>
                        <div class="mb-3">
                            <label for="Jekel">Jenis Kelamin : </label>
                            <select id="jekel" name="jekel">
                                <option value="Laki-laki">Laki-laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="alamat" class="form-label">Alamat</label>
                            <input type="text" class="form-control" id="alamat" name="alamat" required>
                        </div>
                        <div class="mb-3">
                            <label for="No_hp" class="form-label">No Handphone</label>
                            <input type="text" class="form-control" id="no_hp" name="no_hp" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
</body>
</html>
