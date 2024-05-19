<!-- File ini digunakan untuk menghapus pesanan (order) dari database pada website. -->
<?php
require "../includes/conn.php";

session_start();

// Tujuan utama dari kode ini adalah untuk memproses permintaan penghapusan pesanan berdasarkan 
// ID pesanan yang diberikan. Kode ini akan memeriksa apakah ID pesanan yang diterima valid dan 
// apakah admin telah melakukan login sebelum menghapus pesanan. Jika kedua kondisi terpenuhi, 
// pesanan akan dihapus dari tabel "ORDERS" dalam database.
if (isset($_GET['id']) && is_numeric($_GET['id']) && isset($_SESSION['admin_id'])) {
    
    // Menyimpan ID order.
    $item_id = $_GET["id"];

    // Menyimpan ID admin yang sedang login.
    $admin_id = $_SESSION['admin_id'];
    
    // Membuat query SQL untuk menghapus pesanan dari tabel "ORDERS" berdasarkan ID order yang diberikan.
    $query = "DELETE FROM ORDERS where id='$item_id'";

    $res = mysqli_query($conn, $query);
    header("location: ../order.php");
}
?>
