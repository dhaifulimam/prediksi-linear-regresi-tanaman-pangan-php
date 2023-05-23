<?php

require '../../function/functions.php';

$id = $_GET["id"];

if (hapusubijalar($id) > 0) {
    echo "
            <script>
            alert('data berhasil dihapus');
            document.location.href = 'ubijalar.php';
            </script>
        ";
} else {
    echo "
            <script>
            alert('data berhasil dihapus');
            document.location.href = 'ubijalar.php';
            </script>
        ";
}
