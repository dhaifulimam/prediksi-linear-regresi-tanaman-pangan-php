<?php

require '../../function/functions.php';

$id = $_GET["id"];

if (hapuspadi($id) > 0) {
    echo "
            <script>
            alert('data berhasil dihapus');
            document.location.href = 'padi.php';
            </script>
        ";
} else {
    echo "
            <script>
            alert('data berhasil dihapus');
            document.location.href = 'padi.php';
            </script>
        ";
}
