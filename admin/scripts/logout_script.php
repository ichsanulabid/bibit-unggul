<!-- Kode yang diberikan merupakan kode PHP yang digunakan untuk melakukan logout atau mengakhiri sesi admin pada website.
Tujuan utama dari kode ini adalah untuk menghapus semua data sesi admin yang ada dan mengarahkan pengguna kembali ke halaman login. -->
<?php
session_start();
session_unset(); 
session_destroy(); 
header('location: ../login.php');
?>