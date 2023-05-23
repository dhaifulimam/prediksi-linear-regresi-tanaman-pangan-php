<?php

require '../../function/functions.php';

$id = $_GET["id"];

if (hapusjagung($id) > 0) {
    echo "
            <script>
            alert('data berhasil dihapus');
            document.location.href = 'jagung.php';
            </script>
        ";
} else {
    echo "
            <script>
            alert('data berhasil dihapus');
            document.location.href = 'jagung.php';
            </script>
        ";
}
