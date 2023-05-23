<?php

require '../function/functions.php';

$id = $_GET["id"];

$datakop = query("SELECT * FROM koperasi WHERE id = $id")[0];

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
  <link rel="stylesheet" href="css/styleArticle.css">
  <title>article page</title>
</head>

<body>
  <div class="bgcontent">
    <!-- Nav bar -->
    <nav class="navbar navbar-expand-lg navbar-light">
      <div class="container">
        <img src="../logodinascilegon/logo.png" alt="logo">
        <a class="navbar-brand" href="#">Dinas Koperasi Dan UMKM kota Cilegon</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav ml-auto">
            <a class="nav-item nav-link active" href="../home/index.php">Home <span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link" href="../daftarkop/daftarKoperasi.php">Daftar Koperasi</a>
            <a class="nav-item btn btn-success tombol" href="#">join us</a>
          </div>
        </div>
      </div>
    </nav>
    <!-- Akhir nav bar -->

    <!-- content -->
    <div class="container content">

      <img src="../imgcontent/<?= $datakop["gambar_koperasi"]; ?>" alt="hero" class="img-fluid hero">

      <h1><?= $datakop["nama_koperasi"]; ?></h1>
      <h3 class="alamat"><span>alamat</span>: <?= $datakop["alamat"]; ?></h3>

      <p><?= $datakop["isi_koperasi"]; ?></p>
    </div>


    <!-- akhir content -->

    <!-- footer -->
    <div class="row footer">
      <div class="col text-center">
        <p>2021 all rights reserved by Muhammad Dhaiful Imam</p>
      </div>
    </div>
    <!-- akhir footer -->
  </div>


  <!-- Optional JavaScript -->
  <script src=""></script>

  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="../bootstrap/js/jquery-3.5.1.min.js"></script>
  <script src="../bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../bootstrap/js/bootstrap.min.js"></script>
</body>

</html>