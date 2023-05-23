<?php

require '../../function/functions.php';

$id = $_GET["id"];

if (hapuskacanghijau($id) > 0) {
    echo "
            <script>
            alert('data berhasil dihapus');
            document.location.href = 'kacanghijau.php';
            </script>
        ";
} else {
    echo "
            <script>
            alert('data berhasil dihapus');
            document.location.href = 'kacanghijau.php';
            </script>
        ";
}
