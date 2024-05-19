<!-- File ini digunakan untuk melakukan proses otentikasi admin pada website. -->
<?php
require "../includes/conn.php";

// Tujuan utama dari kode ini adalah untuk memvalidasi dan memeriksa apakah email dan password yang 
// diinputkan oleh admin valid dengan data yang ada di database. Jika valid, maka sesi admin akan dimulai 
// dan informasi admin akan disimpan dalam variabel $_SESSION. Jika tidak valid, maka admin akan diarahkan 
// kembali ke halaman login dengan pesan error.
session_start();

// Mengambil nilai email dan password yang dikirimkan.
$email = $_POST['email'];
$email = mysqli_real_escape_string($conn,$email);
$password = $_POST['password'];
$password = mysqli_real_escape_string($conn,$password);

// Melakukan enkripsi password.
$password = md5($password);

// Membuat query SQL untuk mengambil data admin dari tabel "admin" berdasarkan email dan password yang diberikan.
$query = "SELECT id,email,password from admin where email = '".$email."' and password = '".$password."'";

// Menjalankan query.
$result = mysqli_query($conn,$query);

// Menghitung jumlah baris yang dikembalikan oleh query.
$num = mysqli_num_rows($result);

if ($num==0) {
    $m = "Please enter correct E-mail id and Password";
    header('location: index.php?errorl='.$m);
} else {
    $row = mysqli_fetch_array($result);
    $_SESSION['admin_email'] = $row['email'];
    $_SESSION['admin_id'] = $row['id'];
    header('location: ../index.php');
}
