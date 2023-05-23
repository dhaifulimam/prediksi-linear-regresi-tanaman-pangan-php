<?php

session_start();

if (!isset($_SESSION["login"])) {
    header("Location: ../login/login.php");
    exit;
}

$nama = $_SESSION["login"];

require '../function/functions.php';



?>


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">

    <!-- My Font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Viga&display=swap" rel="stylesheet">

    <!-- My CSS -->
    <link rel="stylesheet" href="css/Daftartanaman.css">
    <title>admin page</title>
</head>

<body>
    <!-- Nav bar -->
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <img src="../logodinaskabserang/Serang.png" alt="logo">
            <a class="navbar-brand" href="">Sistem Prediksi Produksi Tanaman Pangan</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ml-auto">
                    <a class="nav-item nav-link active" href="admin-page.php">Home</a>
                    <a class="nav-item nav-link" href="dataadmin.php">Admin</a>
                    <a class="nav-item btn btn-success tombol" href="logout.php">logout</a>
                </div>
            </div>
        </div>
    </nav>
    <!-- Akhir nav bar -->

    <!-- jumbotron -->
    <div class="jumbotron jumbotron-fluid">
    </div>
    <!-- akhir jumbotron -->

    <div class="container">

        <!-- info panel -->
        <div class="row justify-content-center">

            <div class="col-12 info-panel">
                <div class="row">
                    <div class="col-lg d-flex justify-content-center">
                        <h2>daftar tanaman pangan</h2>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg">
                        <a href="padi/padi.php">
                            <img src="icon/padi.png" alt="">
                            <h4>padi</h4>
                        </a>
                    </div>
                    <div class="col-lg">
                        <a href="jagung/jagung.php">
                            <img src="icon/jagung.png" alt="">
                            <h4>jagung</h4>
                        </a>
                    </div>
                    <div class="col-lg">
                        <a href="kedelai/kedelai.php">
                            <img src="icon/kedelai.png" alt="">
                            <h4>kedelai</h4>
                        </a>
                    </div>
                    <div class="col-lg">
                        <a href="kacangtanah/kacangtanah.php">
                            <img src="icon/kacangtanah.png" alt="">
                            <h4>kacang tanah</h4>
                        </a>
                    </div>
                    <div class="col-lg">
                        <a href="kacanghijau/kacanghijau.php">
                            <img src="icon/kacanghijau.png" alt="">
                            <h4>kacang hijau</h4>
                        </a>
                    </div>
                    <div class="col-lg">
                        <a href="ubikayu/ubikayu.php">
                            <img src="icon/ubikayu.png" alt="">
                            <h4>ubi kayu</h4>
                        </a>
                    </div>
                    <div class="col-lg">
                        <a href="ubijalar/ubijalar.php">
                            <img src="icon/ubijalar.png" alt="">
                            <h4>ubi jalar</h4>
                        </a>
                    </div>
                </div>
            </div>

        </div>
        <!-- Akhir Info Panel -->


        <!-- Optional JavaScript -->
        <script src=""></script>

        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="../bootstrap/js/jquery-3.5.1.min.js"></script>
        <script src="../bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="../bootstrap/js/bootstrap.min.js"></script>
</body>

</html>