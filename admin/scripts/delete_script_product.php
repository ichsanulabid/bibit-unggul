<!-- File ini digunakan untuk memproses permintaan penghapusan product oleh admin (diidentifikasi melalui $_SESSION['admin_id']) -->
<?php
require "../includes/conn.php";

session_start();

// Memeriksa parameter GET "id" telah diset dan merupakan nilai numerik untuk memastikan bahwa ID product yang diberikan adalah valid.
if (isset($_GET['id']) && is_numeric($_GET['id'])) {

    // Menyimpan ID product.
    $item_id = $_GET["id"];

    // Menyimpan ID admin yang sedang login.
    $admin_id = $_SESSION['admin_id'];

    // Menghapus data product dari tabel "products" berdasarkan ID product yang diberikan. 
    $query = "DELETE FROM products WHERE id='$item_id' ";
    
    $res = mysqli_query($conn, $query);
    header("location: ../products.php");
}
?>
