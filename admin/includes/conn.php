<!-- File ini merupakan kode PHP yang digunakan untuk menghubungkan website dengan database MySQL. 
Tujuan utama dari kode ini adalah untuk melakukan koneksi ke database "plantshop" yang berada pada server lokal 
(localhost) menggunakan pengguna (username) "root" dan tanpa menggunakan password. -->

<?php
$server = "localhost";
$username = "root";
$password = "";
$db = "plantshop";

$conn = mysqli_connect($server, $username, $password, $db);

if (mysqli_connect_error()) {
    die("Could not connect to database");
}
?>