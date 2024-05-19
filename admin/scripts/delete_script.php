<!-- File ini digunakan untuk memproses permintaan penghapusan akun admin (penjual) oleh admin itu sendiri (diidentifikasi melalui 
$_SESSION['admin_id']) -->
<?php
require "../includes/conn.php";

session_start();

// Memeriksa parameter GET "id" telah diset dan merupakan nilai numerik untuk memastikan bahwa ID admin yang diberikan adalah valid.
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    
    // Menyimpan ID admin.
    $item_id = $_GET["id"];

    // Menyimpan ID admin yang sedang login.
    $admin_id = $_SESSION['admin_id'];

    // Menghapus data admin dari tabel "admin" berdasarkan ID admin yang diberikan.
    $query = "DELETE FROM admin WHERE id='$item_id' ";
    
    $res = mysqli_query($conn, $query);
    header("location: ../");
}
?>
