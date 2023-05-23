<?php

require 'functions.php';

$id = $_GET["id"];

$update = query("SELECT * FROM koperasi WHERE id = $id")[0];

if (isset($_POST["submit"])) {

    if (ubah($_POST) > 0) {
        echo "
                <script>
                    alert('data berhasil diubah');
                    document.location.href = '../admin/daftarKoperasiadmin.php';
                </script>
            ";
    } else {
        echo "
                <script>
                    alert('data gagal diubah');
                    document.location.href = '../admin/daftarKoperasiadmin.php';
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
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">

    <!-- My Font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Viga&display=swap" rel="stylesheet">

    <!-- My CSS -->
    <link rel="stylesheet" href="css/styleUbah.css">
    <title>ubah page</title>
</head>

<body>
    <!-- Nav bar -->
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <img src="../logodinascilegon/logo.png" alt="logo">
            <a class="navbar-brand" href="../home/index.php">Dinas Koperasi Dan UMKM kota Cilegon</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ml-auto">
                    <a class="nav-item nav-link active" href="../admin/admin-page.php">Home<span class="sr-only">(current)</span></a>
                    <a class="nav-item nav-link" href="#">Tambah Admin</a>
                    <a class="nav-item btn btn-success tombol" href="#">logout</a>
                </div>
            </div>
        </div>
    </nav>
    <!-- Akhir nav bar -->

    <!-- form tambah -->
    <div class="container content">
        <form action="" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?= $update["id"]; ?>">
            <input type="hidden" name="gambarlama" value="<?= $update["gambar_koperasi"]; ?>">

            <div class="form-group">
                <label for="namakoperasi">nama koperasi</label>
                <input type="text" name="namakoperasi" class="form-control" id="namakoperasi" autocomplete="off" value="<?= $update["nama_koperasi"]; ?>">
            </div>
            <div class="form-group">
                <label for="alamat">alamat koperasi</label>
                <input type="text" name="alamat" class="form-control" id="alamat" autocomplete="off" value="<?= $update["alamat"]; ?>">
            </div>
            <div class="form-group">
                <label for="isi">isi content</label>
                <textarea class="form-control" name="isi" id="isi" rows="20"><?= $update["isi_koperasi"]; ?></textarea>
            </div>
            <div class="form-group">
                <label for="gambar" class="foto">foto koperasi :</label>
                <img src="../imgcontent/<?= $update["gambar_koperasi"]; ?>" alt="" class="photo">
                <input type="file" name="gambar" class="form-control-file" id="gambar">
            </div>
            <button type="submit" name="submit">ubah data</button>
        </form>
    </div>
    <!-- akhir form tambah -->


    <!-- Optional JavaScript -->
    <script src=""></script>

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="../bootstrap/js/jquery-3.5.1.min.js"></script>
    <script src="../bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../bootstrap/js/bootstrap.min.js"></script>
</body>

</html>