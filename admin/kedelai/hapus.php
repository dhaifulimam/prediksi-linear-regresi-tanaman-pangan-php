<?php

require '../../function/functions.php';

$id = $_GET["id"];

if (hapuskedelai($id) > 0) {
    echo "
            <script>
            alert('data berhasil dihapus');
            document.location.href = 'kedelai.php';
            </script>
        ";
} else {
    echo "
            <script>
            alert('data berhasil dihapus');
            document.location.href = 'kedelai.php';
            </script>
        ";
}
