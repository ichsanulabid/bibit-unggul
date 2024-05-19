<!-- File ini digunakan untuk memproses permintaan penghapusan akun user (pembeli) oleh admin (diidentifikasi melalui 
$_SESSION['admin_id']) -->
<?php
require "../includes/conn.php";

session_start();

// Memeriksa parameter GET "id" telah diset dan merupakan nilai numerik untuk memastikan bahwa ID user yang diberikan adalah valid.
if (isset($_GET['id']) && is_numeric($_GET['id'])) {

    // Menyimpan ID user.
    $item_id = $_GET["id"];

    // Menyimpan ID admin yang sedang login.
    $admin_id = $_SESSION['admin_id'];

    // Menghapus data pembeli dari tabel "users" berdasarkan ID user yang diberikan.
    $query = "DELETE FROM users WHERE id='$item_id' ";
    
    $res = mysqli_query($conn, $query);
    header("location: ../users.php");
}
?>
