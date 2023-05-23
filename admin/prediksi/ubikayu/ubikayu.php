<?php

session_start();

if (!isset($_SESSION["login"])) {
    header("Location: ../../login/login.php");
    exit;
}

if (!isset($_SESSION)) {
    session_start();
}

require '../../../function/functions.php';

$jml = "SELECT * FROM ubikayu";
$hasil = mysqli_query($conn, $jml);
$hasil = mysqli_num_rows($hasil);
$lim = $hasil - 1;

if ($hasil < '3') {
    echo "<script>
                    alert('data tidak mencukupi untuk diprediksi');
                    document.location.href = '../../admin-page.php';
                  </script>";
}

// var_dump($lim);


$data = query("SELECT * FROM ubikayu ORDER BY tahun ");
$dataY = query("SELECT produksi FROM ubikayu ORDER BY tahun");



$merged_array = [];
foreach ($data as $key => $row) {
    $merged_array[$key] = ['first' => $row];
}

foreach ($dataY as $key => $row) {
    $merged_array[$key]['second'] = $row;
}


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
    <link rel="stylesheet" href="../css/Prediksi-page.css">
    <title>Data ubi kayu</title>
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

        <h1 class="header">persamaan prediksi produksi tanaman ubi kayu</h1>

        <table class="table table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Tahun</th>
                    <th scope="col">Luas Panen (X)</th>
                    <th scope="col">Jumlah Produksi (Y)</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1;
                ?>
                <?php foreach ($merged_array as $key => $data) : ?>
                    <tr>
                        <td><?= $i; ?></td>
                        <td><?= $data['first']['tahun']; ?></td>
                        <td><?= number_format($data['first']['produksi']); ?></td>
                        <td><?php if (@$data['second']['produksi'] == null) {
                                echo $data['second']['produksi'] = null;
                            } else {
                                echo number_format($data['second']['produksi']);
                            } ?>
                        </td>
                        <?php $i++ ?>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <table class="table table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Tahun</th>
                    <th scope="col">Luas Panen (X)</th>
                    <th scope="col">Jumlah Produksi (Y)</th>
                    <th scope="col">XY</th>
                    <th scope="col">X2</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1;
                ?>
                <?php foreach ($merged_array as $key => $data) : ?>
                    <tr>
                        <td><?= $i; ?></td>
                        <td><?= $data['first']['tahun']; ?></td>
                        <td><?= number_format($data['first']['LuasPanen']); ?></td>
                        <td><?php if (@$data['second']['produksi'] == null) {
                                echo $data['second']['produksi'] = null;
                            } else {
                                echo number_format($data['second']['produksi']);
                            } ?>
                        </td>
                        <td><?= number_format($data['first']['LuasPanen'] * $data['second']['produksi']); ?></td>
                        <td><?= number_format($data['first']['LuasPanen'] * $data['first']['LuasPanen']); ?></td>
                        <?php $i++ ?>
                    </tr>
                    <!-- <?= var_dump($data); ?> -->
                <?php endforeach; ?>
                <tr>
                    <td colspan="2" style="text-align: center;">TOTAL</td>
                    <td><?php $totalX = 0;
                        foreach ($merged_array as $key => $data) {
                            $totalX += $data['first']['LuasPanen'];
                        }
                        echo number_format($totalX); ?></td>
                    <td><?php $totalY = 0;
                        foreach ($merged_array as $key => $data) {
                            $totalY += $data['second']['produksi'];
                        }
                        echo number_format($totalY); ?></td>
                    <td>
                        <?php $totalXY = 0;
                        foreach ($merged_array as $key => $data) {
                            $totalXY += $data['first']['LuasPanen'] * $data['second']['produksi'];
                        }
                        echo number_format($totalXY); ?>
                    </td>
                    <td>
                        <?php $totalX2 = 0;
                        foreach ($merged_array as $key => $data) {
                            $totalX2 += $data['first']['LuasPanen'] * $data['first']['LuasPanen'];
                        }
                        echo number_format($totalX2); ?>
                    </td>
                </tr>
            </tbody>
        </table>
        <?php
        $tx = (float) $totalX;
        $ty = (float) $totalY;
        $txy = $totalXY;
        $tx2 = $totalX2;
        $n = (float)$hasil;
        // var_dump($tx, $ty, $txy, $tx2, $n);
        ?>

        <div class="col-12 info-panel">
            <div class="row">
                <div class="col-lg persamaan">
                    <h2>Y = a + bX</h2>
                    <h4>Nilai a = <?php $atas = (($ty * $tx2) - ($tx * $txy));
                                    $bawah = (($n * $tx2) - ($tx * $tx));
                                    $a = $atas / $bawah;
                                    $aclear = $a;
                                    $a = number_format($a);
                                    echo $a; ?>
                    </h4>
                    <h4>Nilai b = <?php $atas = (($n * ($txy)) - ($tx * $ty));
                                    $bawah = (($n * ($tx2)) - ($tx * $tx));
                                    $b = $atas / $bawah;
                                    $b = sprintf('%.2f', $b);
                                    echo $b; ?>
                    </h4>
                    <div class="peradd">
                        <a class="nav-item btn btn-success add" href="prediksi.php?a=<?= $aclear; ?>&b=<?= $b; ?>">mulai prediksi</a>
                    </div>
                </div>

            </div>
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