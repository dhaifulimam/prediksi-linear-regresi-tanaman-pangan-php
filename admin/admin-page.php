<?php

session_start();

if (!isset($_SESSION["login"])) {
  header("Location: ../login/login.php");
  exit;
}

$id = $_SESSION["login"];

require '../function/functions.php';

$dt = query("SELECT nama FROM admin where id = $id");

foreach ($dt as $nama) {
  $nm = $nama["nama"];
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
  <link rel="stylesheet" href="css/admin.css">
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
          <a class="nav-item nav-link active" href="dataadmin.php">Admin</a>
          <a class="nav-item btn btn-success tombol" href="logout.php">logout</a>
        </div>
      </div>
    </div>
  </nav>
  <!-- Akhir nav bar -->

  <!-- jumbotron -->
  <div class="jumbotron jumbotron-fluid">
    <div class="container">
      <h1 class="display-3">Selamat Datang</h1>
      <h1 class="display-4"><span><?= $nm; ?></span></h1>
    </div>
  </div>
  <!-- akhir jumbotron -->

  <div class="container">

    <!-- info panel -->
    <div class="row justify-content-center">

      <div class="col-12 info-panel">
        <div class="row">
          <div class="col-lg d-flex justify-content-center">
            <h2>menu admin</h2>
          </div>
        </div>

        <div class="row">
          <div class="col-lg">
            <a href="daftartanaman.php">
              <img src="icon/data.png" alt="data" style="width: 130px; height: 130px; margin-bottom: 20px; margin-top: -20px;">
              <h4>data tanaman pangan</h4>
            </a>
          </div>
          <div class="col-lg">
            <a href="prediksi/daftartanaman.php">
              <img src="icon/kalkulator.png" alt="predik" style="margin-bottom: 25px;">
              <h4>perhitungan prediksi</h4>
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