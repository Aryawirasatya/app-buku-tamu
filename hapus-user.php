<?php
// panggil file function.php
require_once 'function.php';

// jika ada id
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    if (hapus_user($id) > 0) {
        // jika data berhasil di hapus maka akan muncul alert
        echo "<script>alert('Data Berhasil di hapus!')</script>";
        // redirect ke halaman users.php
        echo "<script>window.location.href='user.php'</script>";
    } else {
        // jika gagal di hapus
        echo "<script>alert('Data Gagal di hapus!')</script>";
        echo "<script>window.location.href='user.php'</script>";
    }
}
?>
