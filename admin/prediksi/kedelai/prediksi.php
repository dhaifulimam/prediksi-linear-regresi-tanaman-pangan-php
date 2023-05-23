<?php

session_start();

if (!isset($_SESSION["login"])) {
    header("Location: ../../login/login.php");
    exit;
}

require '../../../function/functions.php';

$data = query("SELECT * FROM kedelai ORDER BY tahun");



$a = $_GET["a"];
$b = $_GET["b"];


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
    <link rel="stylesheet" href="../css/prediksi.css">
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

        <div class="btnbtn">

            <a class="nav-item btn btn-primary add" href="" onclick="window.print()">cetak data</a>

            <a class="nav-item btn btn-warning add kembali" href="kedelai.php">kembali</a>

        </div>

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

        <div class="content">
            <div class="persamaan">
                <h2>Y = a + bX</h2>
                <h4>Nilai a = <?php
                                echo number_format($a);
                                ?>
                </h4>
                <h4>Nilai b = <?php
                                echo $b; ?>
                </h4>
            </div>
        </div>

        <div class="hasilpre">
            <h2>input nilai prediktor</h2>
            <form action="" method="POST">
                <div class="form-group row">
                    <label for="predik" class="col-sm-4 col-form-label">nilai X / Luas Panen =</label>
                    <div class="col-sm-7">
                        <input type="text" name="predik" class="form-control" id="predik" autocomplete="off">
                    </div>
                </div>
                <div class="row d-flex justify-content-center">
                    <button type="submit" name="hitung" class="btn btn-success add">hitung</button>
                </div>
            </form>

            <?php
            $nilaix = @$_POST["predik"];
            $nX = str_replace(",", "", $nilaix);
            // var_dump($nX);
            $a = round($a, 0);
            // echo $a;
            $hasilprediksi = $a + ($b * $nX);
            if (@$_POST["predik"] == null) {
                $hasilprediksi = 0;
            }
            // var_dump((int)$hasilprediksi);
            ?>

            <?php @$tahun = query("SELECT * FROM kedelai ORDER BY tahun DESC limit 1");
            foreach ($tahun as $th) {
                $thn = $th["tahun"];
                // echo $thn;
            }
            @$tahunnext = $thn + 1;

            ?>
            <h4 class="printnx">nilai X = <?= @$_POST["predik"]; ?></h4>

            <?php if (isset($_POST["predik"])) { ?>
                <h4>berdasarkan jumlah luas panen (<?= @$_POST["predik"]; ?> Hektar) hasil prediksi untuk tahun <?= $tahunnext; ?> adalah = <span class="hsl"><?= number_format(abs($hasilprediksi)); ?> TON</span>
                <?php } ?>
                </h4>
        </div>
    </div>
    <!-- akhir content -->

    <!-- footer -->

    <!-- akhir footer -->


    <!-- Optional JavaScript -->
    <script>
        if (window.history.replaceState) {
            window.history.replaceState(null, null, window.location.href);
        }
    </script>

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="../../../bootstrap/js/jquery-3.5.1.min.js"></script>
    <script src="../../../bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../../../bootstrap/js/bootstrap.min.js"></script>
</body>

</html>