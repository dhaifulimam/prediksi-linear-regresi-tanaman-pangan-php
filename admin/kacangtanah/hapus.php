<?php

require '../../function/functions.php';

$id = $_GET["id"];

if (hapuskacangtanah($id) > 0) {
    echo "
            <script>
            alert('data berhasil dihapus');
            document.location.href = 'kacangtanah.php';
            </script>
        ";
} else {
    echo "
            <script>
            alert('data berhasil dihapus');
            document.location.href = 'kacangtanah.php';
            </script>
        ";
}
