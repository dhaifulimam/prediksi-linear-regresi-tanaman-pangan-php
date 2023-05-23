<?php
$conn = mysqli_connect("localhost", "root", "", "prediksi2.0");


function query($query)
{
    global $conn;

    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function tambahpadi($data)
{
    global $conn;

    $tahun = htmlspecialchars($data["tahun"]);
    $produksi = htmlspecialchars($data["produksi"]);
    $Lp = htmlspecialchars($data["LuasPanen"]);

    $result = mysqli_query($conn, "SELECT tahun FROM padi WHERE tahun = '$tahun'");


    if (mysqli_fetch_assoc($result)) {
        echo "<script>
                    alert('tahun telah ada');
                  </script>";
        return false;
    }

    // var_dump($tahun, $produksi, $Lp);
    // die;

    $query = "INSERT INTO padi
                    VALUES
                 ('', '$tahun', '$produksi', '$Lp')";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function hapuspadi($id)
{
    global $conn;

    mysqli_query($conn, "DELETE FROM padi WHERE id_padi = $id");

    return mysqli_affected_rows($conn);
}


function ubahpadi($data)
{
    global $conn;

    $id = $data["id"];
    $tahun = htmlspecialchars($data["tahun"]);
    $produksi = htmlspecialchars($data["produksi"]);
    $Lp = htmlspecialchars($data["LuasPanen"]);


    $query = "UPDATE padi SET
                    tahun = '$tahun',
                    produksi = '$produksi',
                    LuasPanen = '$Lp' 
                    WHERE id_padi = $id";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function tambahjagung($data)
{
    global $conn;

    $tahun = htmlspecialchars($data["tahun"]);
    $produksi = htmlspecialchars($data["produksi"]);
    $Lp = htmlspecialchars($data["LuasPanen"]);


    $result = mysqli_query($conn, "SELECT tahun FROM jagung WHERE tahun = '$tahun'");


    if (mysqli_fetch_assoc($result)) {
        echo "<script>
                    alert('tahun telah ada');
                  </script>";
        return false;
    }

    $query = "INSERT INTO jagung
                    VALUES
                 ('', '$tahun', '$produksi', '$Lp')";

    // var_dump($tahun, $produksi, $Lp);
    // die;

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function hapusjagung($id)
{
    global $conn;

    mysqli_query($conn, "DELETE FROM jagung WHERE id_jagung = $id");

    return mysqli_affected_rows($conn);
}

function ubahjagung($data)
{
    global $conn;

    $id = $data["id"];
    $tahun = htmlspecialchars($data["tahun"]);
    $produksi = htmlspecialchars($data["produksi"]);
    $Lp = htmlspecialchars($data["LuasPanen"]);


    $query = "UPDATE jagung SET
                    tahun = '$tahun',
                    produksi = '$produksi',
                    LuasPanen = '$Lp'  
                    WHERE id_jagung = $id";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function tambahkedelai($data)
{
    global $conn;

    $tahun = htmlspecialchars($data["tahun"]);
    $produksi = htmlspecialchars($data["produksi"]);
    $Lp = htmlspecialchars($data["LuasPanen"]);

    $result = mysqli_query($conn, "SELECT tahun FROM kedelai WHERE tahun = '$tahun'");


    if (mysqli_fetch_assoc($result)) {
        echo "<script>
                    alert('tahun telah ada');
                  </script>";
        return false;
    }

    $query = "INSERT INTO kedelai
                    VALUES
                 ('', '$tahun', '$produksi', '$Lp')";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function hapuskedelai($id)
{
    global $conn;

    mysqli_query($conn, "DELETE FROM kedelai WHERE id_kedelai = $id");

    return mysqli_affected_rows($conn);
}

function ubahkedelai($data)
{
    global $conn;

    $id = $data["id"];
    $tahun = htmlspecialchars($data["tahun"]);
    $produksi = htmlspecialchars($data["produksi"]);
    $Lp = htmlspecialchars($data["LuasPanen"]);


    $query = "UPDATE kedelai SET
                    tahun = '$tahun',
                    produksi = '$produksi',
                    LuasPanen = '$Lp'  
                    WHERE id_kedelai = $id";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function tambahkacangtanah($data)
{
    global $conn;

    $tahun = htmlspecialchars($data["tahun"]);
    $produksi = htmlspecialchars($data["produksi"]);
    $Lp = htmlspecialchars($data["LuasPanen"]);

    $result = mysqli_query($conn, "SELECT tahun FROM kacang_tanah WHERE tahun = '$tahun'");


    if (mysqli_fetch_assoc($result)) {
        echo "<script>
                    alert('tahun telah ada');
                  </script>";
        return false;
    }

    $query = "INSERT INTO kacang_tanah
                    VALUES
                 ('', '$tahun', '$produksi', '$Lp')";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function hapuskacangtanah($id)
{
    global $conn;

    mysqli_query($conn, "DELETE FROM kacang_tanah WHERE id_kacangT = $id");

    return mysqli_affected_rows($conn);
}

function ubahkacangtanah($data)
{
    global $conn;

    $id = $data["id"];
    $tahun = htmlspecialchars($data["tahun"]);
    $produksi = htmlspecialchars($data["produksi"]);
    $Lp = htmlspecialchars($data["LuasPanen"]);


    $query = "UPDATE kacang_tanah SET
                    tahun = '$tahun',
                    produksi = '$produksi',
                    LuasPanen = '$Lp'  
                    WHERE id_kacangT = $id";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function tambahkacanghijau($data)
{
    global $conn;

    $tahun = htmlspecialchars($data["tahun"]);
    $produksi = htmlspecialchars($data["produksi"]);
    $Lp = htmlspecialchars($data["LuasPanen"]);

    $result = mysqli_query($conn, "SELECT tahun FROM kacang_hijau WHERE tahun = '$tahun'");


    if (mysqli_fetch_assoc($result)) {
        echo "<script>
                    alert('tahun telah ada');
                  </script>";
        return false;
    }

    $query = "INSERT INTO kacang_hijau
                    VALUES
                 ('', '$tahun', '$produksi', '$Lp')";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function hapuskacanghijau($id)
{
    global $conn;

    mysqli_query($conn, "DELETE FROM kacang_hijau WHERE id_kacangH = $id");

    return mysqli_affected_rows($conn);
}

function ubahkacanghijau($data)
{
    global $conn;

    $id = $data["id"];
    $tahun = htmlspecialchars($data["tahun"]);
    $produksi = htmlspecialchars($data["produksi"]);
    $Lp = htmlspecialchars($data["LuasPanen"]);


    $query = "UPDATE kacang_hijau SET
                    tahun = '$tahun',
                    produksi = '$produksi',
                    LuasPanen = '$Lp'  
                    WHERE id_kacangH = $id";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function tambahubikayu($data)
{
    global $conn;

    $tahun = htmlspecialchars($data["tahun"]);
    $produksi = htmlspecialchars($data["produksi"]);
    $Lp = htmlspecialchars($data["LuasPanen"]);

    $result = mysqli_query($conn, "SELECT tahun FROM ubikayu WHERE tahun = '$tahun'");


    if (mysqli_fetch_assoc($result)) {
        echo "<script>
                    alert('tahun telah ada');
                  </script>";
        return false;
    }

    $query = "INSERT INTO ubikayu
                    VALUES
                 ('', '$tahun', '$produksi', '$Lp')";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function hapusubikayu($id)
{
    global $conn;

    mysqli_query($conn, "DELETE FROM ubikayu WHERE id_ubikayu = $id");

    return mysqli_affected_rows($conn);
}

function ubahubikayu($data)
{
    global $conn;

    $id = $data["id"];
    $tahun = htmlspecialchars($data["tahun"]);
    $produksi = htmlspecialchars($data["produksi"]);
    $Lp = htmlspecialchars($data["LuasPanen"]);


    $query = "UPDATE ubikayu SET
                    tahun = '$tahun',
                    produksi = '$produksi',
                    LuasPanen = '$Lp'  
                    WHERE id_ubikayu = $id";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function tambahubijalar($data)
{
    global $conn;

    $tahun = htmlspecialchars($data["tahun"]);
    $produksi = htmlspecialchars($data["produksi"]);
    $Lp = htmlspecialchars($data["LuasPanen"]);

    $result = mysqli_query($conn, "SELECT tahun FROM ubijalar WHERE tahun = '$tahun'");


    if (mysqli_fetch_assoc($result)) {
        echo "<script>
                    alert('tahun telah ada');
                  </script>";
        return false;
    }

    $query = "INSERT INTO ubijalar
                    VALUES
                 ('', '$tahun', '$produksi', '$Lp')";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function hapusubijalar($id)
{
    global $conn;

    mysqli_query($conn, "DELETE FROM ubijalar WHERE id_ubijalar = $id");

    return mysqli_affected_rows($conn);
}

function ubahubijalar($data)
{
    global $conn;

    $id = $data["id"];
    $tahun = htmlspecialchars($data["tahun"]);
    $produksi = htmlspecialchars($data["produksi"]);
    $Lp = htmlspecialchars($data["LuasPanen"]);


    $query = "UPDATE ubijalar SET
                    tahun = '$tahun',
                    produksi = '$produksi',
                    LuasPanen = '$Lp'  
                    WHERE id_ubijalar = $id";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function daftar($data)
{

    global $conn;

    // $username = strtolower(stripslashes($data["username"]));
    $nama = $data["nama"];
    $username = $data["username"];
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $password2 = mysqli_real_escape_string($conn, $data["password2"]);


    $result = mysqli_query($conn, "SELECT username FROM admin WHERE username = '$username' ");

    if (mysqli_fetch_assoc($result)) {
        echo "<script>
                    alert('username telah terdaftar');
                  </script>";
        return false;
    }

    if ($password !== $password2) {
        echo "<script>
                    alert('password tidak sesuai');
                  </script>";
        return false;
    }

    $password = password_hash($password, PASSWORD_DEFAULT);
    // $password = md5($password);

    mysqli_query($conn, "INSERT INTO admin VALUES('','$nama', '$username', '$password')");

    return mysqli_affected_rows($conn);
}

function hapusadmin($id)
{
    global $conn;
    if ($id == 1) {
        echo "<script>
                    alert('super admin tidak dapat dihapus');
                  </script>";
        return false;
    }
    mysqli_query($conn, "DELETE FROM admin WHERE id = $id");

    return mysqli_affected_rows($conn);
}

function ubahadmin($data)
{
    global $conn;

    $id = $data["id"];
    $nama = $data["nama"];
    $username = $data["username"];
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $password2 = mysqli_real_escape_string($conn, $data["password2"]);

    if ($password !== $password2) {
        echo "<script>
                    alert('password tidak sesuai');
                  </script>";
        return false;
    }

    $password = password_hash($password, PASSWORD_DEFAULT);

    $query = "UPDATE admin SET
                    nama = '$nama',
                    username = '$username',
                    password = '$password' 
                    WHERE id = $id";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}
