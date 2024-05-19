<!-- File ini digunakan untuk mengubah status pesanan (order) menjadi "Delivered" (telah sampai) dalam database pada website. -->
<?php
require "../includes/conn.php";

session_start();

// Tujuan utama dari kode ini adalah untuk memproses permintaan perubahan status pesanan berdasarkan ID pesanan yang 
// diberikan. Kode ini akan memeriksa apakah ID pesanan yang diterima valid dan apakah admin telah melakukan login 
// sebelum mengubah status pesanan. Jika kedua kondisi terpenuhi, status pesanan akan diubah menjadi "Delivered" dalam 
// tabel "ORDERS" dalam database.
if (isset($_GET['id']) && is_numeric($_GET['id']) && isset($_SESSION['admin_id'])) {
    
    // Menyimpan ID order.
    $item_id = $_GET["id"];

    // Menyimpan ID admin yang sedanga login.
    $admin_id = $_SESSION['admin_id'];

    // Membuat query SQL untuk mengubah status pesanan menjadi "Delivered" berdasarkan ID order yang diberikan.
    $query = "UPDATE ORDERS SET status='Delivered' where id='$item_id'";

    $res = mysqli_query($conn, $query);
    header("location: ../order.php");
}
?>
