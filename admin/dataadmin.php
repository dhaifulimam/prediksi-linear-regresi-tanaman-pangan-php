<?php

session_start();

if (!isset($_SESSION["login"])) {
    header("Location: ../login/login.php");
    exit;
}

$id = $_SESSION["login"];

require '../function/functions.php';

if ($id == 1) {
    $data = query("SELECT * FROM admin");
} else {
    $data = query("SELECT * FROM admin WHERE id = $id");
}


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
    <link rel="stylesheet" href="css/data.css">
    <title>Data admin</title>
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
                    <a class="nav-item nav-link" href="dataadmin.php">admin</a>
                    <a class="nav-item btn btn-success tombol" href="logout.php">logout</a>
                </div>
            </div>
        </div>
    </nav>
    <!-- Akhir nav bar -->

    <!-- content -->
    <div class="container">

        <h1 class="header">data admin</h1>

        <?php if ($id == 1) { ?>
            <a class="nav-item btn btn-success add" href="tambahadmin.php">tambah admin</a>
        <?php } ?>
        <table class="table table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">nama</th>
                    <th scope="col">username</th>
                    <th scope="col">password</th>
                    <th scope="col">aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data as $dt) : ?>
                    <tr>
                        <td><?= $dt["nama"]; ?></td>
                        <td><?= $dt["username"]; ?></td>
                        <td><?= $dt["password"]; ?></td>
                        <td><a class="btn btn-warning admin" href="ubahadmin.php?id=<?= $dt["id"]; ?>">ubah</a>
                            <a class="btn btn-danger admin" href="hapusadmin.php?id=<?= $dt["id"]; ?>">hapus</a>
                        </td>
                    </tr>
                <?php endforeach; ?>

            </tbody>
        </table>

    </div>
    <!-- akhir content -->

    <!-- footer -->

    <!-- akhir footer -->


    <!-- Optional JavaScript -->
    <script src=""></script>

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="../bootstrap/js/jquery-3.5.1.min.js"></script>
    <script src="../bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../bootstrap/js/bootstrap.min.js"></script>
</body>

</html>