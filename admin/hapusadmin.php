<?php

require '../function/functions.php';

$id = $_GET["id"];

if (hapusadmin($id) > 0) {
  echo "
            <script>
            alert('admin berhasil dihapus');
            document.location.href = 'dataadmin.php';
            </script>
        ";
} else {
  echo "
            <script>
            alert('admin gagal dihapus');
            document.location.href = 'dataadmin.php';
            </script>
        ";
}
