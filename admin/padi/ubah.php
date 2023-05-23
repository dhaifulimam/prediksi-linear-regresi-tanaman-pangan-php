<?php

session_start();

if (!isset($_SESSION["login"])) {
    header("Location: ../../login/login.php");
    exit;
}

require '../../function/functions.php';


$id = $_GET["id"];

$update = query("SELECT * FROM padi WHERE id_padi = $id")[0];

if (isset($_POST["submit"])) {

    if (ubahpadi($_POST) > 0) {
        echo "
                <script>
                    alert('data berhasil diubah');
                    document.location.href = 'padi.php';
                </script>
            ";
    } else {
        echo "
                <script>
                    alert('data gagal diubah');
                    document.location.href = 'padi.php';
                </script>
            ";
    }
}

?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">

    <!-- My Font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Viga&display=swap" rel="stylesheet">

    <!-- My CSS -->
    <link rel="stylesheet" href="../css/ubah.css">
    <title>ubah page</title>
</head>

<body>
    <!-- Nav bar -->
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <img src="../../logodinaskabserang/Serang.png" alt="logo">
            <a class="navbar-brand" href="">Sistem Prediksi Produksi Tanaman Pangan</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ml-auto">
                    <a class="nav-item nav-link active" href="../admin-page.php">Home</a>
                    <a class="nav-item nav-link" href="../dataadmin">Admin</a>
                    <a class="nav-item btn btn-success tombol" href="../logout.php">logout</a>
                </div>
            </div>
        </div>
    </nav>
    <!-- Akhir nav bar -->

    <!-- form tambah -->
    <div class="container content">

        <h1 class="d-flex justify-content-center">Form Ubah Data</h1>
        <form action="" method="POST">
            <input type="hidden" name="id" value="<?= $update["id_padi"]; ?>">
            <div class="form-group">
                <label for="tahun">tahun produksi</label>
                <input type="number" name="tahun" class="form-control" id="tahun" autocomplete="off" value="<?= $update["tahun"]; ?>">
            </div>
            <div class="form-group">
                <label for="produksi">produksi tanaman jagung</label>
                <input type="number" name="produksi" class="form-control" id="produksi" autocomplete="off" value="<?= $update["produksi"]; ?>">
            </div>
            <div class="form-group">
                <label for="LuasPanen">Luas Panen</label>
                <input type="number" name="LuasPanen" class="form-control" id="LuasPanen" autocomplete="off" value="<?= $update["LuasPanen"]; ?>">
            </div>
            <div class="row d-flex justify-content-center">
                <button type="submit" name="submit" class="btn btn-success add">ubah data</button>
            </div>
        </form>
    </div>
    <!-- akhir form tambah -->


    <!-- Optional JavaScript -->
    <script src=""></script>

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="../../bootstrap/js/jquery-3.5.1.min.js"></script>
    <script src="../../bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../../bootstrap/js/bootstrap.min.js"></script>
</body>

</html>