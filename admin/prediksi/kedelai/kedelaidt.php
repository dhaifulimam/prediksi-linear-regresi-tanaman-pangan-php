<?php

session_start();

if (!isset($_SESSION["login"])) {
    header("Location: ../../login/login.php");
    exit;
}

require '../../../function/functions.php';

$data = query("SELECT * FROM kedelai ORDER BY tahun");

?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../../../bootstrap/css/bootstrap.min.css">

    <!-- My Font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Viga&display=swap" rel="stylesheet">

    <!-- My CSS -->
    <link rel="stylesheet" href="../css/Data.css">
    <title>Data kedelai</title>
</head>

<body>
    <!-- Nav bar -->
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <img src="../../../logodinaskabserang/Serang.png" alt="logo">
            <a class="navbar-brand" href="">Sistem Prediksi Produksi Tanaman Pangan</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ml-auto">
                    <a class="nav-item nav-link active" href="../../admin-page.php">Home</a>
                    <a class="nav-item nav-link" href="../../dataadmin.php">admin</a>
                    <a class="nav-item btn btn-success tombol" href="../../logout.php">logout</a>
                </div>
            </div>
        </div>
    </nav>
    <!-- Akhir nav bar -->

    <!-- content -->
    <div class="container">

        <h1 class="header">data produksi tanaman kedelai</h1>


        <div class="scroll">
            <table class="table table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Jenis Tanaman</th>
                        <th scope="col">Tahun</th>
                        <th scope="col">Jumlah Produksi (TON)</th>
                        <th scope="col">Luas Panen (Hektar)</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($data as $dt) : ?>
                        <tr>
                            <td>kedelai</td>
                            <td><?= $dt["tahun"]; ?></td>
                            <td><?= number_format($dt["produksi"]); ?></td>
                            <td><?= number_format($dt["LuasPanen"]); ?></td>
                        </tr>
                    <?php endforeach; ?>

                </tbody>
            </table>
        </div>

        <div class="btnhitung">
            <a class="nav-item btn btn-success addhitung" href="kedelai.php">hitung persamaan prediksi</a>
        </div>
    </div>
    <!-- akhir content -->

    <!-- footer -->

    <!-- akhir footer -->


    <!-- Optional JavaScript -->
    <script src=""></script>

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="../../../bootstrap/js/jquery-3.5.1.min.js"></script>
    <script src="../../../bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../../../bootstrap/js/bootstrap.min.js"></script>
</body>

</html>