<!-- File ini digunakan untuk melakukan proses pendaftaran (sign up) admin baru dalam website. -->
<?php
require "../includes/conn.php";

// Tujuan utama dari kode ini adalah untuk memproses data yang dikirimkan melalui metode POST saat seorang admin 
// baru mendaftar. Kode ini akan memeriksa apakah email yang diinputkan sudah ada dalam database. Jika email belum 
// terdaftar, maka admin baru akan ditambahkan ke dalam tabel "admin" dan sesi admin akan dimulai.
session_start();

// Mengambil nilai email, password, nama, dan nomor telepon yang dikirimkan.
$email = $_POST['email'];
$email = mysqli_real_escape_string($conn, $email);

$pass = $_POST['password'];
$pass = mysqli_real_escape_string($conn, $pass);
$pass = md5($pass);

$name = $_POST['name'];
$name = mysqli_real_escape_string($conn, $name);

$mobile = $_POST['mobile'];
$mobile = mysqli_real_escape_string($conn, $mobile);

// Membuat query SQL untuk memeriksa apakah email yang diinputkan sudah ada dalam tabel "admin". 
$query = "SELECT * from admin where email = '$email'";

// Menjalankan query.
$result = mysqli_query($conn, $query);

// Menghitung jumlah baris yang dikembalikan oleh query.
$num = mysqli_num_rows($result);

if ($num != 0) {
    $m = "Email Already Exists";
    header('location: index.php?error=' . $m);
} else {
    $quer = "INSERT INTO `admin`(`name`, `mobile`, `email`, `password`) VALUES ('$name','$mobile','$email','$pass')";
    mysqli_query($conn, $quer);
    echo "New record has id: " . mysqli_insert_id($conn);
    $user_id = mysqli_insert_id($conn);
    $_SESSION['admin_email'] = $email;
    $_SESSION['admin_id'] = $user_id;
    header('location: ../index.php');
}
?>