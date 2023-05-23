<?php

require '../../function/functions.php';

$id = $_GET["id"];

if (hapusubikayu($id) > 0) {
    echo "
            <script>
            alert('data berhasil dihapus');
            document.location.href = 'ubikayu.php';
            </script>
        ";
} else {
    echo "
            <script>
            alert('data berhasil dihapus');
            document.location.href = 'ubikayu.php';
            </script>
        ";
}
