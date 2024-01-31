<?php
include 'koneksi.php';
$no = 1;
$nomor = 1;
?>

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
                        <h1 class="h2 mb-0">DATA SKEMA SERTIFIKASI</h1>
                    </div>

        <br/><br/>
        <a href="tambah_skema.php"><button type="button" class="btn btn-primary">TAMBAH SKEMA SERTIFIKASI</button></a>
        <br/><br/>
        <form action="data_skema.php" method="get">
            <label>Cari :</label>
            <input type="text" name="cari">
            <input type="submit" value="Cari">
        </form>
        <br/><br/>

        <?php 
        if(isset($_GET['cari'])){
            $cari = $_GET['cari'];
            echo "<b>Hasil pencarian : ".$cari."</b>";

           
            $sql = mysqli_query($conn, "SELECT * FROM skema WHERE Nm_skema LIKE '%" . $cari . "%'");
        } else {
            
            $sql = mysqli_query($conn, "SELECT * FROM skema");
        }
        ?>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Kode Skema</th>
                    <th scope="col">Nama Skema</th>
                    <th scope="col">Jenis</th>
                    <th scope="col">Jumlah Unit</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                while($data=mysqli_fetch_array($sql)){
                ?>
                <tr>
                    <th scope="row"><?php echo $no; ?></th>
                    <td><?php echo $data['Kd_skema']; ?></td>
                    <td><?php echo $data['Nm_skema']; ?></td>
                    <td><?php echo $data['Jenis']; ?></td>
                    <td><?php echo $data['Jml_unit']; ?></td>
                    <td>
                        <a href="edit_skema.php?id=<?php echo $data['Kd_skema']; ?>"><button type="button" class="btn btn-warning">Edit</button></a>
                        <a href="delete_skema.php?id=<?php echo $data['Kd_skema']; ?>"><button type="button" class="btn btn-danger">Hapus</button></a>
                    </td>
                </tr>
                <?php 
                    $no++;
                }
                ?> 
            </tbody>
        </table>
    </div>
</body>
</html>

